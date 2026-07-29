<?php
$pageTitle  = "Contact — B.F.C. Hillowton Estates Jamaica";
$activePage = "contact";
$extraCss   = ["book-modal.css"];
include __DIR__ . '/includes/header.php';
?>

  <!-- ======================== CONTACT HERO — TEXT ======================== -->
  <section class="ct-hero-section">
    <div class="ct-hero-inner">
      <h1 class="ct-hero-title">
        Let's Plan <span class="text-teal">Your Perfect Stay</span>
      </h1>
      <p class="ct-hero-desc">
        Nestled in the serene hills of Montego Bay, Jamaica, our exclusive mansion offers the perfect
        blend of luxury, comfort, and breathtaking views.
      </p>
    </div>
  </section>

  <!-- ======================== FULL-WIDTH BANNER IMAGE ======================== -->
  <section class="ct-banner-section">
    <img
      src="assets/img/contact-banner.png"
      alt="Hillowton Estates Pool View"
      class="ct-banner-img"
    />
  </section>

  <!-- ======================== GET IN TOUCH ======================== -->
  <section class="ct-touch-section">
    <div class="ct-touch-inner">

      <!-- Left: text info -->
      <div class="ct-touch-left">
        <h2 class="ct-touch-title">Get in Touch to<br>Book Your Stay</h2>
        <p class="ct-touch-desc">
          Have questions about availability, amenities, or special
          requests? We're here to help make your Montego Bay
          getaway unforgettable. Fill out the form below, and we'll
          get back to you as soon as possible.
        </p>
        <div class="ct-touch-info">
          <span class="ct-info-label">Email</span>
          <a href="mailto:booking@hillowtonestates.com" class="ct-info-value">
            booking@hillowtonestates.com
          </a>
        </div>
      </div>

      <!-- Right: villa image -->
      <div class="ct-touch-right">
        <img
          src="assets/img/contact-img.png"
          alt="Villa Exterior"
          class="ct-touch-img"
        />
      </div>

    </div>
  </section>

  <!-- ======================== CONTACT FORM ======================== -->
  <section class="ct-form-section">
    <div class="ct-form-inner">

      <h2 class="ct-form-title">
        Plan Your Stay in Montego Bay<br>– Contact Us Today!
      </h2>

      <form class="ct-form" id="contactForm" novalidate>

        <!-- Row 1: Full name + Email -->
        <div class="ct-form-row">
          <div class="ct-field-group">
            <label class="ct-label" for="fullName">Full name <span class="ct-required">*</span></label>
            <input
              type="text"
              id="fullName"
              name="fullName"
              class="ct-input"
              placeholder="Name"
              required
            />
            <span class="ct-error-msg" id="err-fullName">Please enter your full name.</span>
          </div>
          <div class="ct-field-group">
            <label class="ct-label" for="emailAddr">Email address <span class="ct-required">*</span></label>
            <input
              type="email"
              id="emailAddr"
              name="emailAddr"
              class="ct-input"
              placeholder="Email"
              required
            />
            <span class="ct-error-msg" id="err-emailAddr">Please enter a valid email address.</span>
          </div>
        </div>

        <!-- Row 2: Phone -->
        <div class="ct-field-group ct-field-full">
          <label class="ct-label" for="phoneNum">Phone number <span class="ct-required">*</span></label>
          <input
            type="tel"
            id="phoneNum"
            name="phoneNum"
            class="ct-input"
            placeholder="Phone"
            required
          />
          <span class="ct-error-msg" id="err-phoneNum">Please enter your phone number.</span>
        </div>

        <!-- Row 3: Estimated Date of Arrival -->
        <div class="ct-field-group ct-field-full">
          <label class="ct-label" for="arrivalDate">Estimated Date of Arrival <span class="ct-required">*</span></label>
          <div class="ct-date-wrap">
            <input
              type="date"
              id="arrivalDate"
              name="arrivalDate"
              class="ct-input ct-input-date"
              placeholder="Date"
              required
            />
            <i class="fa-regular fa-calendar-days ct-date-icon"></i>
          </div>
          <span class="ct-error-msg" id="err-arrivalDate">Please select your arrival date.</span>
        </div>

        <!-- Row 4: Preferred contact method -->
        <div class="ct-field-group ct-field-full">
          <label class="ct-label">How do you prefer to be contact? <span class="ct-required">*</span></label>
          <div class="ct-radio-group">
            <label class="ct-radio-label">
              <input type="radio" name="contactPref" value="email" checked />
              <span class="ct-radio-custom"></span>
              <span class="ct-radio-text">Email</span>
            </label>
            <label class="ct-radio-label">
              <input type="radio" name="contactPref" value="phone" />
              <span class="ct-radio-custom"></span>
              <span class="ct-radio-text">Phone</span>
            </label>
          </div>
        </div>

        <!-- Row 5: Message -->
        <div class="ct-field-group ct-field-full">
          <label class="ct-label" for="message">Message <span class="ct-required">*</span></label>
          <textarea
            id="message"
            name="message"
            class="ct-input ct-textarea"
            placeholder="Message"
            rows="7"
            required
          ></textarea>
          <span class="ct-error-msg" id="err-message">Please enter your message.</span>
        </div>

        <!-- Privacy checkbox -->
        <div class="ct-checkbox-row">
          <label class="ct-checkbox-label" id="privacyLabel">
            <input type="checkbox" id="privacyCheck" name="privacyCheck" />
            <span class="ct-checkbox-custom"></span>
            <span class="ct-checkbox-text">
              I agree that my personal information will be processing in accordance with our
              <a href="#" class="ct-privacy-link">Privacy Policy.</a>
            </span>
          </label>
          <span class="ct-error-msg" id="err-privacy">You must agree to the privacy policy.</span>
        </div>

        <!-- Submit -->
        <div class="ct-submit-row">
          <button type="submit" class="ct-submit-btn" id="submitBtn">Submit Inquiry</button>
        </div>

        <!-- Success message -->
        <div class="ct-success-msg" id="ctSuccessMsg">
          <i class="fa-solid fa-circle-check"></i>
          Thank you! We'll get back to you shortly.
        </div>

      </form>
    </div>
  </section>

  <!-- ======================== MAP (same as index) ======================== -->
  <section class="map-section">
    <div class="map-inner">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30473.75847498742!2d-77.93744!3d18.47398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eda103ebad2041b%3A0xb9a7b94a26af6a4d!2sMontego%20Bay%2C%20Jamaica!5e0!3m2!1sen!2sus!4v1680000000000"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
        title="Hillowton Estates Location">
      </iframe>
    </div>
  </section>

<?php
$extraScripts = ["assets/js/script.js", "assets/js/book-modal.js", "assets/js/contact-form.js"];
include __DIR__ . '/includes/footer.php';
