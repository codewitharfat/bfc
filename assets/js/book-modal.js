/* ================================================================
   B.F.C. HILLOWTON ESTATES — book-modal.js
   "Book Your Villa" modal — opens on every BOOK NOW button click
   On valid CONTINUE → redirects to checkout.html with all data
   ================================================================ */

(function () {
  'use strict';

  /* ----------------------------------------------------------------
     1. INJECT MODAL HTML
  ---------------------------------------------------------------- */
  function injectModal() {
    var html = '\
    <div class="bv-overlay" id="bvOverlay"></div>\
    <div class="bv-modal" id="bvModal" role="dialog" aria-modal="true" aria-labelledby="bvTitle">\
      <button class="bv-close" id="bvClose" aria-label="Close modal">&#215;</button>\
      <h2 class="bv-title" id="bvTitle">Book <span>Your Villa</span></h2>\
      <form class="bv-form" id="bvForm" novalidate>\
        <div>\
          <label class="bv-label" for="bvCheckin">Check-in</label>\
          <div class="bv-date-wrap">\
            <input type="date" id="bvCheckin" name="bvCheckin" class="bv-input bv-input-date" required />\
            <i class="fa-regular fa-calendar bv-date-icon"></i>\
          </div>\
          <span class="bv-err" id="bvErrCheckin">Please select a check-in date.</span>\
        </div>\
        <div>\
          <label class="bv-label" for="bvCheckout">Check-out</label>\
          <div class="bv-date-wrap">\
            <input type="date" id="bvCheckout" name="bvCheckout" class="bv-input bv-input-date" required />\
            <i class="fa-regular fa-calendar bv-date-icon"></i>\
          </div>\
          <span class="bv-err" id="bvErrCheckout">Check-out must be after check-in.</span>\
        </div>\
        <div class="bv-row-2">\
          <div>\
            <label class="bv-label" for="bvAdults">Adults</label>\
            <div class="bv-select-wrap">\
              <select id="bvAdults" class="bv-select" required>\
                <option value="">—</option>\
                <option value="1">1</option>\
                <option value="2" selected>2</option>\
                <option value="3">3</option>\
                <option value="4">4</option>\
                <option value="5">5</option>\
                <option value="6">6</option>\
                <option value="7">7</option>\
                <option value="8">8</option>\
                <option value="9">9</option>\
                <option value="10">10</option>\
              </select>\
              <i class="fa-solid fa-chevron-down bv-select-arrow"></i>\
            </div>\
            <span class="bv-err" id="bvErrAdults">Please select number of adults.</span>\
          </div>\
          <div>\
            <label class="bv-label" for="bvChildren">Children</label>\
            <div class="bv-select-wrap">\
              <select id="bvChildren" class="bv-select">\
                <option value="0" selected>0</option>\
                <option value="1">1</option>\
                <option value="2">2</option>\
                <option value="3">3</option>\
                <option value="4">4</option>\
                <option value="5">5</option>\
                <option value="6">6</option>\
              </select>\
              <i class="fa-solid fa-chevron-down bv-select-arrow"></i>\
            </div>\
          </div>\
        </div>\
        <div>\
          <label class="bv-label" for="bvOccupancy">Max Occupancy</label>\
          <div class="bv-select-wrap">\
            <select id="bvOccupancy" class="bv-select" required>\
              <option value="" selected disabled>Guest</option>\
              <option value="2">2 Guests</option>\
              <option value="4">4 Guests</option>\
              <option value="6">6 Guests</option>\
              <option value="8">8 Guests</option>\
              <option value="10">10 Guests</option>\
              <option value="12">12 Guests</option>\
              <option value="14">14 Guests</option>\
              <option value="16">16 Guests (Max)</option>\
            </select>\
            <i class="fa-solid fa-chevron-down bv-select-arrow"></i>\
          </div>\
          <span class="bv-err" id="bvErrOccupancy">Please select max occupancy.</span>\
        </div>\
        <div>\
          <label class="bv-label" for="bvSpecial">Any special requests?</label>\
          <textarea id="bvSpecial" class="bv-textarea" placeholder="Type Here"></textarea>\
        </div>\
        <div class="bv-submit-wrap">\
          <button type="submit" class="bv-submit-btn" id="bvSubmitBtn">CONTINUE</button>\
        </div>\
      </form>\
      <p class="bv-disclaimer">\
        Rates may vary based on seasonality and availability. No hidden fees\
        \u2014your total price will be displayed before booking.\
      </p>\
    </div>';

    var div = document.createElement('div');
    div.innerHTML = html;
    while (div.firstChild) {
      document.body.appendChild(div.firstChild);
    }
  }

  /* ----------------------------------------------------------------
     2. OPEN / CLOSE
  ---------------------------------------------------------------- */
  function openModal() {
    document.getElementById('bvOverlay').classList.add('bv-open');
    document.getElementById('bvModal').classList.add('bv-open');
    document.body.classList.add('bv-no-scroll');
  }

  function closeModal() {
    document.getElementById('bvOverlay').classList.remove('bv-open');
    document.getElementById('bvModal').classList.remove('bv-open');
    document.body.classList.remove('bv-no-scroll');
  }

  /* ----------------------------------------------------------------
     3. BIND ALL BOOK NOW TRIGGERS (delegation)
  ---------------------------------------------------------------- */
  function bindTriggers() {
    document.addEventListener('click', function (e) {
      var el = e.target;
      for (var i = 0; i < 5; i++) {
        if (!el) break;
        if (
          (el.classList && (
            el.classList.contains('btn-book-nav') ||
            el.classList.contains('btn-book-pill') ||
            el.classList.contains('villa-cta-btn') ||
            el.classList.contains('btn-view-all')
          )) ||
          el.id === 'checkAvailBtn' ||
          (el.hasAttribute && el.hasAttribute('data-book-modal'))
        ) {
          e.preventDefault();
          e.stopPropagation();
          openModal();
          return;
        }
        el = el.parentElement;
      }
    });
  }

  /* ----------------------------------------------------------------
     4. SET MIN DATES
  ---------------------------------------------------------------- */
  function setMinDates() {
    var now     = new Date();
    var yyyy    = now.getFullYear();
    var mm      = String(now.getMonth() + 1).padStart(2, '0');
    var dd      = String(now.getDate()).padStart(2, '0');
    var todayStr = yyyy + '-' + mm + '-' + dd;

    var ci = document.getElementById('bvCheckin');
    var co = document.getElementById('bvCheckout');
    if (ci) ci.min = todayStr;
    if (co) co.min = todayStr;

    if (ci) {
      ci.addEventListener('change', function () {
        if (!ci.value) return;
        var d = new Date(ci.value);
        d.setDate(d.getDate() + 1);
        var ny = d.getFullYear();
        var nm = String(d.getMonth() + 1).padStart(2, '0');
        var nd = String(d.getDate()).padStart(2, '0');
        co.min = ny + '-' + nm + '-' + nd;
        if (co.value && co.value <= ci.value) co.value = '';
        clearErr(ci, 'bvErrCheckin');
      });
    }
    if (co) {
      co.addEventListener('change', function () { clearErr(co, 'bvErrCheckout'); });
    }
  }

  /* ----------------------------------------------------------------
     5. VALIDATION HELPERS
  ---------------------------------------------------------------- */
  function showErr(el, id) {
    if (el) el.classList.add('bv-error');
    var e = document.getElementById(id);
    if (e) e.classList.add('show');
  }

  function clearErr(el, id) {
    if (el) el.classList.remove('bv-error');
    var e = document.getElementById(id);
    if (e) e.classList.remove('show');
  }

  /* ----------------------------------------------------------------
     6. FORMAT DATE  YYYY-MM-DD → DD/MM/YYYY (display)
  ---------------------------------------------------------------- */
  function fmtDate(v) {
    if (!v) return '';
    var p = v.split('-');
    return p[2] + '/' + p[1] + '/' + p[0];
  }

  /* ----------------------------------------------------------------
     7. FORM SUBMIT → validate → redirect to checkout.html
  ---------------------------------------------------------------- */
  function bindForm() {
    var form    = document.getElementById('bvForm');
    var btn     = document.getElementById('bvSubmitBtn');
    if (!form)  return;

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      var ci    = document.getElementById('bvCheckin');
      var co    = document.getElementById('bvCheckout');
      var adul  = document.getElementById('bvAdults');
      var child = document.getElementById('bvChildren');
      var occ   = document.getElementById('bvOccupancy');
      var spec  = document.getElementById('bvSpecial');

      var valid = true;

      /* Check-in */
      if (!ci || !ci.value) {
        showErr(ci, 'bvErrCheckin'); valid = false;
      } else { clearErr(ci, 'bvErrCheckin'); }

      /* Check-out */
      if (!co || !co.value || co.value <= ci.value) {
        showErr(co, 'bvErrCheckout'); valid = false;
      } else { clearErr(co, 'bvErrCheckout'); }

      /* Adults */
      if (!adul || !adul.value) {
        showErr(adul, 'bvErrAdults'); valid = false;
      } else { clearErr(adul, 'bvErrAdults'); }

      /* Occupancy */
      if (!occ || !occ.value) {
        showErr(occ, 'bvErrOccupancy'); valid = false;
      } else { clearErr(occ, 'bvErrOccupancy'); }

      if (!valid) return;

      /* Loading */
      btn.disabled    = true;
      btn.textContent = 'Please wait…';

      /* Calculate nights */
      var d1     = new Date(ci.value);
      var d2     = new Date(co.value);
      var nights = Math.round((d2 - d1) / 86400000);

      /* Build query string with ALL booking data */
      var params = new URLSearchParams();
      params.set('checkin',      fmtDate(ci.value));       /* DD/MM/YYYY */
      params.set('checkout',     fmtDate(co.value));       /* DD/MM/YYYY */
      params.set('checkin_raw',  ci.value);                /* YYYY-MM-DD */
      params.set('checkout_raw', co.value);                /* YYYY-MM-DD */
      params.set('nights',       String(nights));
      params.set('adults',       adul.value);
      params.set('children',     child ? child.value : '0');
      params.set('occupancy',    occ.value);
      params.set('special',      spec ? spec.value.trim() : '');

      /* Redirect after short delay */
      setTimeout(function () {
        window.location.href = 'checkout.php?' + params.toString();
      }, 600);
    });
  }

  /* ----------------------------------------------------------------
     8. CLOSE EVENTS
  ---------------------------------------------------------------- */
  function bindClose() {
    document.addEventListener('click', function (e) {
      if (e.target.id === 'bvClose' || e.target.id === 'bvOverlay') {
        closeModal();
      }
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') closeModal();
    });
  }

  /* ----------------------------------------------------------------
     9. INIT
  ---------------------------------------------------------------- */
  document.addEventListener('DOMContentLoaded', function () {
    injectModal();
    setTimeout(function () {
      setMinDates();
      bindForm();
    }, 60);
    bindTriggers();
    bindClose();
  });

})();