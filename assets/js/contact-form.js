/* ================================================================
   B.F.C. HILLOWTON ESTATES — contact-form.js
   Validates the contact.php inquiry form and submits it via fetch()
   to handlers/contact-handler.php (saves to MySQL). No page reload.
   ================================================================ */

document.addEventListener('DOMContentLoaded', function () {

  var form = document.getElementById('contactForm');
  if (!form) return;

  var submitBtn  = document.getElementById('submitBtn');
  var successMsg = document.getElementById('ctSuccessMsg');

  function showErr(inputId, errId) {
    var el  = document.getElementById(inputId);
    var err = document.getElementById(errId);
    if (el) el.classList.add('ct-err-state');
    if (err) err.classList.add('show');
  }
  function clearErr(inputId, errId) {
    var el  = document.getElementById(inputId);
    var err = document.getElementById(errId);
    if (el) el.classList.remove('ct-err-state');
    if (err) err.classList.remove('show');
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    var valid = true;

    var fullName = document.getElementById('fullName').value.trim();
    if (!fullName) { showErr('fullName', 'err-fullName'); valid = false; }
    else clearErr('fullName', 'err-fullName');

    var email = document.getElementById('emailAddr').value.trim();
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { showErr('emailAddr', 'err-emailAddr'); valid = false; }
    else clearErr('emailAddr', 'err-emailAddr');

    var phone = document.getElementById('phoneNum').value.trim();
    if (!/^[\d\s+\-()]{6,}$/.test(phone)) { showErr('phoneNum', 'err-phoneNum'); valid = false; }
    else clearErr('phoneNum', 'err-phoneNum');

    var arrival = document.getElementById('arrivalDate').value;
    if (!arrival) { showErr('arrivalDate', 'err-arrivalDate'); valid = false; }
    else clearErr('arrivalDate', 'err-arrivalDate');

    var message = document.getElementById('message').value.trim();
    if (!message) { showErr('message', 'err-message'); valid = false; }
    else clearErr('message', 'err-message');

    var privacyCheck = document.getElementById('privacyCheck');
    var errPrivacy = document.getElementById('err-privacy');
    if (!privacyCheck.checked) {
      if (errPrivacy) errPrivacy.classList.add('show');
      valid = false;
    } else if (errPrivacy) {
      errPrivacy.classList.remove('show');
    }

    if (!valid) return;

    var contactPref = form.querySelector('input[name="contactPref"]:checked');

    var payload = new URLSearchParams();
    payload.set('name', fullName);
    payload.set('email', email);
    payload.set('phone', phone);
    payload.set('arrival_date', arrival);
    payload.set('preferred_contact', contactPref ? contactPref.value : 'email');
    payload.set('message', message);

    submitBtn.disabled = true;
    var originalText = submitBtn.textContent;
    submitBtn.textContent = 'Sending…';

    fetch('handlers/contact-handler.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: payload.toString()
    })
      .then(function (res) { return res.json().catch(function () { return { success: true }; }); })
      .then(function (data) {
        if (data.success !== false) {
          form.reset();
          form.style.display = 'none';
          if (successMsg) successMsg.style.display = 'flex';
        } else {
          submitBtn.disabled = false;
          submitBtn.textContent = originalText;
          alert((data.errors && data.errors.join('\n')) || 'Something went wrong. Please try again.');
        }
      })
      .catch(function () {
        submitBtn.disabled = false;
        submitBtn.textContent = originalText;
        alert('Could not send your message. Please check your connection and try again.');
      });
  });

  /* Clear error state as user types */
  ['fullName', 'emailAddr', 'phoneNum', 'arrivalDate', 'message'].forEach(function (id) {
    var el = document.getElementById(id);
    if (el) el.addEventListener('input', function () { el.classList.remove('ct-err-state'); });
  });
});
