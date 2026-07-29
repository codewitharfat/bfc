/* ================================================================
   B.F.C. HILLOWTON ESTATES — script.js
   ================================================================ */

document.addEventListener('DOMContentLoaded', function () {

  /* ================================================================
     1. NAVBAR — Scroll effect
     ================================================================ */
  var header = document.getElementById('siteHeader');
  function onScroll() {
    header.classList.toggle('scrolled', window.scrollY > 20);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* ================================================================
     2. BOOKING BAR — Interactive Calendar & Guests
     ================================================================ */

  var checkinDate  = null;
  var checkoutDate = null;
  var rooms  = 1;
  var adults = 1;
  var children = 0;

  var checkinField   = document.getElementById('checkinField');
  var checkoutField  = document.getElementById('checkoutField');
  var guestsField    = document.getElementById('guestsField');
  var checkinCal     = document.getElementById('checkinCal');
  var checkoutCal    = document.getElementById('checkoutCal');
  var guestsDrop     = document.getElementById('guestsDropdown');
  var checkinDisp    = document.getElementById('checkinDisplay');
  var checkoutDisp   = document.getElementById('checkoutDisplay');
  var guestsDisp     = document.getElementById('guestsDisplay');
  var bookingMsg     = document.getElementById('bookingMsg');
  var checkAvailBtn  = document.getElementById('checkAvailBtn');

  // Calendar state
  var calState = {
    checkin:  { month: new Date().getMonth(), year: new Date().getFullYear() },
    checkout: { month: new Date().getMonth(), year: new Date().getFullYear() }
  };

  var MONTHS = ['January','February','March','April','May','June',
                'July','August','September','October','November','December'];
  var today = new Date();
  today.setHours(0,0,0,0);

  function formatDate(d) {
    if (!d) return 'Select date';
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    return d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
  }

  function isSameDay(a, b) {
    return a && b && a.getFullYear()===b.getFullYear() &&
           a.getMonth()===b.getMonth() && a.getDate()===b.getDate();
  }
  function isInRange(d, start, end) {
    return d > start && d < end;
  }

  /* ---- BUILD CALENDAR ---- */
  function buildCalendar(type) {
    var state  = calState[type];
    var labelEl = document.getElementById(type + 'MonthLabel');
    var daysEl  = document.getElementById(type + 'Days');

    labelEl.textContent = MONTHS[state.month] + ' ' + state.year;
    daysEl.innerHTML = '';

    var firstDay = new Date(state.year, state.month, 1).getDay();
    var daysInMonth = new Date(state.year, state.month + 1, 0).getDate();

    // Empty cells
    for (var e = 0; e < firstDay; e++) {
      var emp = document.createElement('button');
      emp.className = 'cal-day cal-day--empty';
      emp.disabled = true;
      daysEl.appendChild(emp);
    }

    for (var d = 1; d <= daysInMonth; d++) {
      var date = new Date(state.year, state.month, d);
      var btn  = document.createElement('button');
      btn.className = 'cal-day';
      btn.textContent = d;

      // Past dates disabled
      if (date < today) {
        btn.classList.add('cal-day--disabled');
        btn.disabled = true;
      } else {
        // Today highlight
        if (isSameDay(date, today)) btn.classList.add('cal-day--today');

        // Selected
        if (type === 'checkin'  && isSameDay(date, checkinDate))  btn.classList.add('cal-day--selected');
        if (type === 'checkout' && isSameDay(date, checkoutDate)) btn.classList.add('cal-day--selected');

        // Range highlight
        if (checkinDate && checkoutDate && isInRange(date, checkinDate, checkoutDate)) {
          btn.classList.add('cal-day--in-range');
          if (isSameDay(date, new Date(checkinDate.getTime() + 86400000)))
            btn.classList.add('cal-day--range-start');
          if (isSameDay(date, new Date(checkoutDate.getTime() - 86400000)))
            btn.classList.add('cal-day--range-end');
        }

        btn.addEventListener('click', (function(dt, tp) {
          return function(e) {
            e.stopPropagation();
            onDayClick(dt, tp);
          };
        })(date, type));
      }

      daysEl.appendChild(btn);
    }
  }

  function onDayClick(date, type) {
    if (type === 'checkin') {
      checkinDate = date;
      checkinDisp.textContent = formatDate(date);
      checkinDisp.classList.add('bf-value--set');
      // If checkout is before or same as new checkin, clear it
      if (checkoutDate && checkoutDate <= checkinDate) {
        checkoutDate = null;
        checkoutDisp.textContent = 'Select date';
        checkoutDisp.classList.remove('bf-value--set');
        buildCalendar('checkout');
      }
      closeAll();
      // Auto-open checkout
      setTimeout(function() { openDropdown('checkout'); }, 180);
    } else {
      if (checkinDate && date <= checkinDate) {
        showMsg('Check-out must be after check-in date.', 'error');
        return;
      }
      checkoutDate = date;
      checkoutDisp.textContent = formatDate(date);
      checkoutDisp.classList.add('bf-value--set');
      clearMsg();
      closeAll();
    }
    buildCalendar('checkin');
    buildCalendar('checkout');
  }

  /* ---- OPEN / CLOSE ---- */
  function openDropdown(type) {
    closeAll();
    if (type === 'checkin') {
      buildCalendar('checkin');
      checkinCal.classList.add('show');
      checkinField.classList.add('bb-open');
    } else if (type === 'checkout') {
      buildCalendar('checkout');
      checkoutCal.classList.add('show');
      checkoutField.classList.add('bb-open');
    } else if (type === 'guests') {
      guestsDrop.classList.add('show');
      guestsField.classList.add('bb-open');
    }
  }

  function closeAll() {
    checkinCal.classList.remove('show');
    checkoutCal.classList.remove('show');
    guestsDrop.classList.remove('show');
    checkinField.classList.remove('bb-open');
    checkoutField.classList.remove('bb-open');
    guestsField.classList.remove('bb-open');
  }

  /* ---- TOGGLE CLICKS ---- */
  checkinField.addEventListener('click', function(e) {
    e.stopPropagation();
    checkinCal.classList.contains('show') ? closeAll() : openDropdown('checkin');
  });
  checkoutField.addEventListener('click', function(e) {
    e.stopPropagation();
    checkoutCal.classList.contains('show') ? closeAll() : openDropdown('checkout');
  });
  guestsField.addEventListener('click', function(e) {
    e.stopPropagation();
    guestsDrop.classList.contains('show') ? closeAll() : openDropdown('guests');
  });

  // Stop propagation on dropdowns
  [checkinCal, checkoutCal, guestsDrop].forEach(function(el) {
    el.addEventListener('click', function(e) { e.stopPropagation(); });
  });

  // Close on outside click
  document.addEventListener('click', closeAll);

  /* ---- CALENDAR NAV ---- */
  document.getElementById('checkinPrev').addEventListener('click', function(e) {
    e.stopPropagation();
    if (calState.checkin.month === 0) { calState.checkin.month = 11; calState.checkin.year--; }
    else calState.checkin.month--;
    buildCalendar('checkin');
  });
  document.getElementById('checkinNext').addEventListener('click', function(e) {
    e.stopPropagation();
    if (calState.checkin.month === 11) { calState.checkin.month = 0; calState.checkin.year++; }
    else calState.checkin.month++;
    buildCalendar('checkin');
  });
  document.getElementById('checkoutPrev').addEventListener('click', function(e) {
    e.stopPropagation();
    if (calState.checkout.month === 0) { calState.checkout.month = 11; calState.checkout.year--; }
    else calState.checkout.month--;
    buildCalendar('checkout');
  });
  document.getElementById('checkoutNext').addEventListener('click', function(e) {
    e.stopPropagation();
    if (calState.checkout.month === 11) { calState.checkout.month = 0; calState.checkout.year++; }
    else calState.checkout.month++;
    buildCalendar('checkout');
  });

  /* ---- GUESTS COUNTER ---- */
  function updateGuestsDisplay() {
    var total = adults + children;
    guestsDisp.textContent = rooms + ' room' + (rooms > 1 ? 's' : '') + ', ' + total + ' guest' + (total > 1 ? 's' : '');
  }

  function makeCounter(minusId, plusId, getVal, setVal, min, max) {
    document.getElementById(minusId).addEventListener('click', function(e) {
      e.stopPropagation();
      if (getVal() > min) { setVal(getVal() - 1); updateCounterUI(minusId, plusId, getVal(), min, max); updateGuestsDisplay(); }
    });
    document.getElementById(plusId).addEventListener('click', function(e) {
      e.stopPropagation();
      if (getVal() < max) { setVal(getVal() + 1); updateCounterUI(minusId, plusId, getVal(), min, max); updateGuestsDisplay(); }
    });
  }

  function updateCounterUI(minusId, plusId, val, min, max) {
    document.getElementById(minusId).disabled = (val <= min);
    document.getElementById(plusId).disabled  = (val >= max);
    // Update display value (sibling span)
    var minusBtn = document.getElementById(minusId);
    var counterWrap = minusBtn.parentElement;
    counterWrap.querySelector('.counter-val').textContent = val;
  }

  makeCounter('roomMinus',  'roomPlus',  function(){ return rooms; },    function(v){ rooms = v; },    1, 20);
  makeCounter('adultMinus', 'adultPlus', function(){ return adults; },   function(v){ adults = v; },   1, 30);
  makeCounter('childMinus', 'childPlus', function(){ return children; }, function(v){ children = v; }, 0, 20);

  document.getElementById('guestsDone').addEventListener('click', function(e) {
    e.stopPropagation();
    updateGuestsDisplay();
    closeAll();
  });

  /* ---- VALIDATION & CHECK AVAILABILITY ---- */
  function showMsg(txt, type) {
    bookingMsg.textContent = txt;
    bookingMsg.className = 'booking-msg msg-' + type;
  }
  function clearMsg() {
    bookingMsg.textContent = '';
    bookingMsg.className = 'booking-msg';
  }

  checkAvailBtn.addEventListener('click', function() {
    if (!checkinDate) {
      openDropdown('checkin');
      showMsg('Please select a check-in date.', 'error');
      return;
    }
    if (!checkoutDate) {
      openDropdown('checkout');
      showMsg('Please select a check-out date.', 'error');
      return;
    }
    var nights = Math.round((checkoutDate - checkinDate) / 86400000);
    showMsg('✓ Searching availability for ' + nights + ' night' + (nights > 1 ? 's' : '') +
            ', ' + rooms + ' room' + (rooms > 1 ? 's' : '') +
            ', ' + (adults + children) + ' guest' + ((adults + children) > 1 ? 's' : '') + '...', 'success');
  });

  // Init calendars
  buildCalendar('checkin');
  buildCalendar('checkout');

  /* ================================================================
     3. STAY SECTION — Image Card Slider
     ================================================================ */
  var stayTrack   = document.getElementById('stayTrack');
  var stayNextBtn = document.getElementById('stayNextBtn');
  var stayDots    = document.querySelectorAll('.stay-dot');
  var stayCards   = stayTrack ? stayTrack.querySelectorAll('.stay-card') : [];
  var stayIndex   = 1;
  var stayTotal   = stayCards.length;

  function updateStaySlider() {
    stayCards.forEach(function(c) { c.classList.remove('active-card'); });
    stayCards[stayIndex].classList.add('active-card');
    var offset = 0;
    for (var i = 0; i < stayIndex; i++) {
      offset += stayCards[i].offsetWidth + 14;
    }
    if (stayIndex > 0) offset -= 80;
    stayTrack.style.transform = 'translateX(-' + offset + 'px)';
    stayDots.forEach(function(d, i) { d.classList.toggle('active', i === stayIndex); });
  }

  if (stayNextBtn) {
    stayNextBtn.addEventListener('click', function() {
      stayIndex = (stayIndex + 1) % stayTotal;
      updateStaySlider();
    });
  }
  stayDots.forEach(function(dot, i) {
    dot.addEventListener('click', function() { stayIndex = i; updateStaySlider(); });
  });
  stayCards.forEach(function(card, i) {
    card.addEventListener('click', function() { stayIndex = i; updateStaySlider(); });
  });
  updateStaySlider();

  /* ================================================================
     4. FAQ — Accordion
     ================================================================ */
  var faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(function(item) {
    var btn    = item.querySelector('.faq-btn');
    var body   = item.querySelector('.faq-body');
    var iconEl = item.querySelector('.faq-icon');

    btn.addEventListener('click', function() {
      var isOpen = item.classList.contains('faq-open');
      faqItems.forEach(function(el) {
        el.classList.remove('faq-open');
        el.querySelector('.faq-body').style.display = 'none';
        el.querySelector('.faq-btn').setAttribute('aria-expanded', 'false');
        var ic = el.querySelector('.faq-icon');
        ic.classList.remove('faq-icon--open');
        ic.innerHTML = '<i class="fa-solid fa-chevron-right"></i>';
      });
      if (!isOpen) {
        item.classList.add('faq-open');
        body.style.display = 'block';
        btn.setAttribute('aria-expanded', 'true');
        iconEl.classList.add('faq-icon--open');
        iconEl.innerHTML = '<i class="fa-solid fa-chevron-down"></i>';
      }
    });
  });

  /* ================================================================
     5. TESTIMONIALS — Slider
     ================================================================ */
  var testiTrack  = document.getElementById('testiTrack');
  var testiPrevBtn = document.getElementById('testiPrev');
  var testiNextBtn = document.getElementById('testiNext');
  var testiCards  = testiTrack ? testiTrack.querySelectorAll('.testi-card') : [];
  var testiIndex  = 0;

  function getTestiVisible() { return window.innerWidth <= 768 ? 1 : 2; }
  function getTestiMax() { return Math.max(0, testiCards.length - getTestiVisible()); }

  function updateTestiSlider() {
    var cardW = testiCards[0] ? testiCards[0].offsetWidth + 24 : 0;
    testiTrack.style.transform = 'translateX(-' + (testiIndex * cardW) + 'px)';
  }

  if (testiNextBtn) testiNextBtn.addEventListener('click', function() {
    testiIndex = testiIndex < getTestiMax() ? testiIndex + 1 : 0;
    updateTestiSlider();
  });
  if (testiPrevBtn) testiPrevBtn.addEventListener('click', function() {
    testiIndex = testiIndex > 0 ? testiIndex - 1 : getTestiMax();
    updateTestiSlider();
  });
  window.addEventListener('resize', function() { testiIndex = 0; updateTestiSlider(); }, { passive: true });
  updateTestiSlider();

  /* ================================================================
     6. PLAY BUTTON
     ================================================================ */
  var playBtn = document.getElementById('playBtn');
  if (playBtn) {
    playBtn.addEventListener('click', function() {
      playBtn.style.transform = 'scale(0.92)';
      setTimeout(function() { playBtn.style.transform = 'scale(1)'; }, 150);
    });
  }

});