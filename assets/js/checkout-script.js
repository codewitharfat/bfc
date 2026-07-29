/* ================================================================
   B.F.C. HILLOWTON ESTATES — checkout-script.js
   Reads all booking data passed from book-modal via URL params
   Populates order summary + handles contact form + confirmation
   ================================================================ */

document.addEventListener('DOMContentLoaded', function () {

  /* ================================================================
     1. READ URL PARAMS
     ================================================================ */
  var p          = new URLSearchParams(window.location.search);
  var checkin    = p.get('checkin')    || '';   /* DD/MM/YYYY */
  var checkout   = p.get('checkout')  || '';   /* DD/MM/YYYY */
  var checkinRaw = p.get('checkin_raw')  || ''; /* YYYY-MM-DD */
  var checkoutRaw= p.get('checkout_raw') || ''; /* YYYY-MM-DD */
  var nights     = parseInt(p.get('nights'))  || 1;
  var adults     = p.get('adults')    || '1';
  var children   = p.get('children')  || '0';
  var occupancy  = p.get('occupancy') || '';
  var special    = p.get('special')   || '';

  /* ================================================================
     2. PRICE CALCULATION
     ================================================================ */
  var RATE       = 750;   /* per night */
  var CLEAN_FEE  = 200;
  var subtotal   = RATE * nights;
  var total      = subtotal + CLEAN_FEE;

  /* Format helpers */
  function fmt(n) {
    return '$' + n.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
  }

  /* Parse YYYY-MM-DD → readable "January 30, 2025" */
  var MONTHS_LONG = ['January','February','March','April','May','June',
                     'July','August','September','October','November','December'];

  function fmtLong(raw) {
    if (!raw) return '—';
    var parts = raw.split('-');
    if (parts.length !== 3) return raw;
    var d = parseInt(parts[2]);
    var m = parseInt(parts[1]) - 1;
    var y = parts[0];
    return MONTHS_LONG[m] + ' ' + d + ', ' + y;
  }

  /* ================================================================
     3. POPULATE LEFT CARD — ORDER SUMMARY
     ================================================================ */

  /* Generate order number */
  var today = new Date();
  var orderId = today.getFullYear().toString().slice(2) +
                String(today.getMonth()+1).padStart(2,'0') +
                String(today.getDate()).padStart(2,'0') +
                '-' +
                Math.floor(100000000 + Math.random() * 900000000);
  setText('coOrderId', orderId);

  /* Dates */
  setText('coFromDate', fmtLong(checkinRaw));
  setText('coToDate',   fmtLong(checkoutRaw));

  /* Guests line */
  var totalGuests = (parseInt(adults)||0) + (parseInt(children)||0);
  var guestParts  = [];
  if (adults   && parseInt(adults)   > 0) guestParts.push(adults   + ' adult'   + (parseInt(adults)>1?'s':''));
  if (children && parseInt(children) > 0) guestParts.push(children + ' child'   + (parseInt(children)>1?'ren':''));
  if (occupancy) guestParts.push('max ' + occupancy + ' guests');
  setText('coGuestsLine', guestParts.length ? guestParts.join(', ') + '  ' + fmt(subtotal/nights||RATE) : '—');

  /* Villa price = subtotal */
  setText('coVillaPrice', fmt(subtotal));

  /* Breakdown */
  setText('coSubtotal',   fmt(subtotal));
  setText('coCleaningFee', fmt(CLEAN_FEE));
  setText('coTotal',      fmt(total));
  setText('coAmtPaid',    '$0.00');
  setText('coAmtDue',     fmt(total));

  /* Amount to pay (right card) */
  setText('coAmountToPay', fmt(total));

  /* Special requests */
  if (special && special.trim()) {
    setText('coSpecialText', special.trim());
    var sb = document.getElementById('coSpecialBlock');
    if (sb) sb.style.display = 'block';
  }

  /* ================================================================
     4. CONTACT FORM VALIDATION + BOOKING SUBMIT
     ================================================================ */
  var form     = document.getElementById('coForm');
  var bookBtn  = document.getElementById('coBookBtn');
  var overlay  = document.getElementById('coConfirmOverlay');
  var confirmRef = document.getElementById('coConfirmRef');

  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var ok = true;

      ok = check('coFirstName',  'errFirstName',  function(v){ return v.trim().length > 0; }) && ok;
      ok = check('coLastName',   'errLastName',   function(v){ return v.trim().length > 0; }) && ok;
      ok = check('coEmail',      'errEmail',      function(v){ return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim()); }) && ok;

      /* Re-type email must match */
      var emailVal = val('coEmail');
      ok = check('coEmailRetype','errEmailRetype',function(v){ return v.trim() === emailVal.trim() && v.trim() !== ''; }) && ok;

      ok = check('coPhone',      'errPhone',      function(v){ return /^[\d\s\+\-\(\)]{6,}$/.test(v.trim()); }) && ok;

      /* Terms */
      var termsEl  = document.getElementById('coTerms');
      var termsErr = document.getElementById('errTerms');
      if (!termsEl || !termsEl.checked) {
        if (termsErr) termsErr.classList.add('show');
        ok = false;
      } else {
        if (termsErr) termsErr.classList.remove('show');
      }

      if (!ok) return;

      /* Loading */
      bookBtn.disabled    = true;
      var originalBtnText = bookBtn.textContent;
      bookBtn.textContent = 'Processing…';

      /* Build payload for the real backend handler */
      var payload = new URLSearchParams();
      payload.set('checkin',     checkinRaw);
      payload.set('checkout',    checkoutRaw);
      payload.set('nights',      nights);
      payload.set('adults',      adults);
      payload.set('children',    children);
      payload.set('occupancy',   occupancy);
      payload.set('special',     special);
      payload.set('guest_name',  (val('coFirstName') + ' ' + val('coLastName')).trim());
      payload.set('guest_email', val('coEmail').trim());
      payload.set('guest_phone', val('coPhone').trim());

      fetch('handlers/checkout-handler.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: payload.toString()
      })
        .then(function (res) { return res.json(); })
        .then(function (data) {
          if (data.success) {
            if (confirmRef) confirmRef.textContent = data.reference;
            if (overlay)    overlay.style.display = 'flex';
          } else {
            bookBtn.disabled    = false;
            bookBtn.textContent = originalBtnText;
            alert((data.errors && data.errors.join('\n')) || 'Could not complete booking. Please try again.');
          }
        })
        .catch(function () {
          bookBtn.disabled    = false;
          bookBtn.textContent = originalBtnText;
          alert('Could not reach the server. Please check your connection and try again.');
        });
    });
  }

  /* Live error clear */
  document.querySelectorAll('.co-field-input').forEach(function (el) {
    el.addEventListener('input', function () {
      el.classList.remove('co-err-state');
    });
  });

  /* ================================================================
     5. HELPERS
     ================================================================ */
  function setText(id, txt) {
    var el = document.getElementById(id);
    if (el) el.textContent = txt;
  }

  function val(id) {
    var el = document.getElementById(id);
    return el ? el.value : '';
  }

  function check(inputId, errId, validator) {
    var el  = document.getElementById(inputId);
    var err = document.getElementById(errId);
    if (!el) return true;
    var passed = validator(el.value);
    el.classList.toggle('co-err-state', !passed);
    if (err) err.classList.toggle('show', !passed);
    return passed;
  }

  /* ================================================================
     6. NAVBAR SCROLL
     ================================================================ */
  var header = document.getElementById('siteHeader');
  if (header) {
    window.addEventListener('scroll', function () {
      header.classList.toggle('scrolled', window.scrollY > 10);
    }, { passive: true });
  }

});
