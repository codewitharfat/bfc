# B.F.C. Hillowton Estates — Admin Panel + Backend Setup

## What's in this package

```
config.php                        ← DB credentials (EDIT THIS FIRST)
database/schema.sql                ← run once in phpMyAdmin/mysql to create tables
includes/db.php                    ← shared PDO connection
handlers/contact-handler.php        ← saves contact.php form → inquiries table
handlers/checkout-handler.php       ← saves checkout booking → bookings table
contact.php                        ← YOUR file, already updated (loads contact-form.js)
assets/js/contact-form.js           ← NEW — validates + submits contact form via fetch()
assets/js/checkout-script.js        ← YOUR file, already updated (real booking submit)
admin/                              ← the admin panel itself
  setup.php                         ← ONE-TIME — creates your admin login, then DELETE it
  login.php / logout.php
  dashboard.php
  bookings.php                     ← confirm / cancel bookings
  inquiries.php                    ← mark new / read / replied
  pricing.php                      ← edit price/night, cleaning fee, block dates
  includes/ , assets/               ← auth guard, layout, admin.css/js
```

## Install steps (in order)

1. **Create the database.** In phpMyAdmin (or `mysql` CLI), run `database/schema.sql`.
   It creates the `bfc_hillowton` database and all 5 tables, with a starting
   price of $750/night + $200 cleaning fee.

2. **Edit `config.php`.** Fill in your real `DB_HOST`, `DB_NAME`, `DB_USER`, `DB_PASS`
   from your hosting control panel, and set `SITE_URL` to your real domain.
   Upload it to your **site root** (same folder as `index.php`).

3. **Upload these to site root**, preserving folder structure:
   - `includes/db.php` (goes alongside your existing `includes/header.php`)
   - `handlers/` (whole new folder)
   - `admin/` (whole new folder)
   - Replace your existing `contact.php` with the one in this package.
   - Replace your existing `assets/js/checkout-script.js` with the one in this package.
   - Add the new `assets/js/contact-form.js` file to your existing `assets/js/` folder.

4. **Create your admin login.**
   Visit `https://yourdomain.com/admin/setup.php`, pick a username + password
   (8+ chars), submit. **Then delete `admin/setup.php` from the server** —
   leaving it live would let anyone (re)create the admin account.

5. **Log in** at `https://yourdomain.com/admin/login.php`.

## What changed in your existing files (why)

- **`contact.php`**: only one line changed — added `assets/js/contact-form.js`
  to the `$extraScripts` array. Nothing else touched. Your contact form
  previously had **zero JS handling it at all** (no validation, no submit
  logic) — `contact-form.js` adds both: client-side validation matching your
  existing `err-*` span pattern, then a `fetch()` POST to
  `handlers/contact-handler.php` which saves it to the `inquiries` table.
  On success it hides the form and shows your existing `#ctSuccessMsg` block.

- **`assets/js/checkout-script.js`**: only the submit handler changed. It used
  to `setTimeout()` and fake a random reference client-side. Now it sends the
  real booking data (dates, guests, guest info from the form fields) to
  `handlers/checkout-handler.php` via `fetch()`, which validates availability
  against confirmed bookings + manual blocks, pulls live pricing from the
  `pricing` table, generates a real unique reference, saves it, and returns
  JSON. The confirmation overlay now shows the real reference. Everything
  else (order summary population, price display, field validation) is
  untouched.

## Notes

- **Availability checking** is real: `checkout-handler.php` rejects a booking
  if the dates overlap a `confirmed` booking or a manual block from
  `blocked_dates`. It does NOT yet grey out unavailable dates in the
  check-in/check-out calendar UI on the booking modal — that would need a
  small addition to `book-modal.js` to fetch blocked dates and disable them.
  Say the word if you want that added next.
- **Emails** (booking confirmation, inquiry notification) are not wired up —
  there's a commented `mail()` line in each handler where you'd add that,
  or swap in PHPMailer if you want proper HTML emails / SMTP.
- **Pending vs confirmed bookings**: every new booking saves as `pending`.
  Nothing is auto-confirmed — you confirm it manually in
  `admin/bookings.php`, which is what actually blocks those dates for future
  guests. If you'd rather have bookings auto-confirm on submission, that's a
  one-line change in `checkout-handler.php` (`'pending'` → `'confirmed'`) —
  just ask.
