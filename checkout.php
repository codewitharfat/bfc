<?php
$pageTitle      = "Checkout — B.F.C. Hillowton Estates Jamaica";
$activePage     = "home";
$extraCss       = ["checkout-style.css"];
$headerScrolled = true;
$bookHref       = "index.php";
include __DIR__ . '/includes/header.php';
?>

  <!-- ===== HERO ===== -->
  <section class="co-hero">
    <h1 class="co-hero-title">
      Secure Your Stay in <span class="text-teal">Montego Bay</span>
    </h1>
    <p class="co-hero-desc">
      Finalize your booking securely and get ready for an unforgettable stay in Montego Bay. Need<br />
      assistance? Contact us anytime—we're here to help!
    </p>
  </section>

  <!-- ===== MAIN CONTENT ===== -->
  <section class="co-main">
    <div class="co-container">

      <!-- ===== LEFT CARD — Order Summary ===== -->
      <div class="co-card co-card-left">

        <!-- Order number -->
        <p class="co-order-num" id="coOrderNum">Order #<span id="coOrderId">—</span></p>

        <!-- Villa row -->
        <div class="co-villa-row">
          <img
            src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=200&q=80"
            alt="Entire villa"
            class="co-villa-img"
          />
          <div class="co-villa-info">
            <p class="co-villa-name">Entire villa</p>
            <p class="co-villa-detail">
              <span class="co-detail-lbl">From:</span>
              <span id="coFromDate">—</span>
            </p>
            <p class="co-villa-detail">
              <span class="co-detail-lbl">To:</span>
              <span id="coToDate">—</span>
            </p>
            <p class="co-villa-detail">
              <span class="co-detail-lbl">Guests:</span>
            </p>
            <p class="co-guests-line" id="coGuestsLine">—</p>
          </div>
          <p class="co-villa-price" id="coVillaPrice">$0.00</p>
        </div>

        <!-- Special requests (shown if filled) -->
        <div class="co-special-block" id="coSpecialBlock" style="display:none">
          <p class="co-special-label">Special Requests:</p>
          <p class="co-special-text" id="coSpecialText"></p>
        </div>

        <div class="co-divider"></div>

        <!-- Price breakdown -->
        <div class="co-price-breakdown">
          <div class="co-price-row">
            <span class="co-price-lbl">Subtotal:</span>
            <span class="co-price-val" id="coSubtotal">$00.00</span>
          </div>
          <div class="co-price-row">
            <span class="co-price-lbl">Cleaning Fee:</span>
            <span class="co-price-val" id="coCleaningFee">$00.00</span>
          </div>
          <div class="co-price-row">
            <span class="co-price-lbl">Total:</span>
            <span class="co-price-val" id="coTotal">$00.00</span>
          </div>
          <div class="co-price-row">
            <span class="co-price-lbl">Amount Paid:</span>
            <span class="co-price-val co-price-paid" id="coAmtPaid">$0.00</span>
          </div>
          <div class="co-price-row co-price-row--due">
            <span class="co-price-lbl co-price-lbl--due">Amount Due:</span>
            <span class="co-price-val co-price-val--due" id="coAmtDue">$000.00</span>
          </div>
        </div>
      </div>

      <!-- ===== RIGHT CARD — Contact + Payment ===== -->
      <div class="co-card co-card-right">

        <!-- Contact Information -->
        <h3 class="co-card-title">Contact information</h3>

        <form class="co-form" id="coForm" novalidate>

          <!-- First name -->
          <div class="co-field-group">
            <input type="text" id="coFirstName" class="co-field-input"
                   placeholder="First name" required />
            <span class="co-field-err" id="errFirstName">Required</span>
          </div>

          <!-- Last name -->
          <div class="co-field-group">
            <input type="text" id="coLastName" class="co-field-input"
                   placeholder="Last name" required />
            <span class="co-field-err" id="errLastName">Required</span>
          </div>

          <!-- Email -->
          <div class="co-field-group">
            <input type="email" id="coEmail" class="co-field-input"
                   placeholder="Email" required />
            <span class="co-field-err" id="errEmail">Enter a valid email</span>
          </div>

          <!-- Re-type email -->
          <div class="co-field-group">
            <input type="email" id="coEmailRetype" class="co-field-input"
                   placeholder="Re-type Email" required />
            <span class="co-field-err" id="errEmailRetype">Emails do not match</span>
          </div>

          <!-- Contact phone -->
          <div class="co-field-group">
            <input type="tel" id="coPhone" class="co-field-input"
                   placeholder="Contact Phone" required />
            <span class="co-field-err" id="errPhone">Enter a valid phone number</span>
          </div>

          <!-- Amount to pay -->
          <div class="co-amount-row">
            <span class="co-amount-lbl">Amount to Pay now:</span>
            <span class="co-amount-teal">•</span>
            <span class="co-amount-val text-teal" id="coAmountToPay">$00.00</span>
          </div>

          <div class="co-divider"></div>

          <!-- Payment Method -->
          <h3 class="co-card-title co-payment-title">Payment Method</h3>

          <div class="co-payment-tab">
            <span class="co-tab-active">CREDIT CARD</span>
          </div>

          <div class="co-divider"></div>

          <!-- Terms -->
          <label class="co-terms-row" id="coTermsLabel">
            <input type="checkbox" id="coTerms" />
            <span class="co-terms-box"></span>
            <span class="co-terms-txt">I read and agree to the terms &amp; conditions</span>
          </label>
          <p class="co-terms-note">
            You have to edit "Terms &amp; Conditions" page to replace this start content with your own.
          </p>
          <span class="co-field-err" id="errTerms">You must agree to the terms &amp; conditions.</span>

          <!-- BOOK NOW button -->
          <button type="submit" class="co-book-btn" id="coBookBtn">
            BOOK NOW
          </button>

        </form>
      </div>

    </div>
  </section>

  <!-- ===== CONFIRMATION OVERLAY (hidden) ===== -->
  <div class="co-confirm-overlay" id="coConfirmOverlay" style="display:none">
    <div class="co-confirm-card">
      <div class="co-confirm-icon"><i class="fa-solid fa-circle-check"></i></div>
      <h2 class="co-confirm-title">Booking Confirmed!</h2>
      <p class="co-confirm-text">
        Thank you for booking with B.F.C. Hillowton Estates.<br />
        A confirmation email will be sent to your inbox shortly.
      </p>
      <p class="co-confirm-ref">Booking Ref: <strong id="coConfirmRef">—</strong></p>
      <a href="index.php" class="co-confirm-home">Back to Home</a>
    </div>
  </div>

  <!-- ===== MAP ===== -->
  <section class="map-section">
    <div class="map-inner">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30473.75847498742!2d-77.93744!3d18.47398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eda103ebad2041b%3A0xb9a7b94a26af6a4d!2sMontego%20Bay%2C%20Jamaica!5e0!3m2!1sen!2sus!4v1680000000000"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
        title="Hillowton Estates — Montego Bay Jamaica">
      </iframe>
    </div>
  </section>

<?php
$extraScripts = ["assets/js/checkout-script.js"];
include __DIR__ . '/includes/footer.php';
