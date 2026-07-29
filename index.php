<?php
$pageTitle  = "B.F.C. Hillowton Estates Jamaica";
$activePage = "home";
$extraCss   = ["book-modal.css"];
include __DIR__ . '/includes/header.php';
?>

  <!-- ===================== HERO ===================== -->
  <section class="hero-section">
    <div class="hero-bg-wrap">
      <img src="assets/img/hero-banner.png" alt="Hillowton Estates" class="hero-bg-img" />
      <div class="hero-bg-overlay"></div>
    </div>
    <div class="hero-inner">
      <div class="hero-text">
        <h1 class="hero-title">Welcome To The<br><span class="hero-teal">Hillowton Estates</span></h1>
        <p class="hero-desc">Nestled in the serene hills of Montego Bay, our exclusive villa offers<br>breathtaking ocean views, modern elegance, and world-class comfort.</p>
      </div>
      <!-- Booking Bar (Interactive) -->
      <div class="booking-bar" id="bookingBar">

        <!-- Check-in -->
        <div class="booking-field booking-field--clickable" id="checkinField">
          <i class="fa-regular fa-calendar-days booking-ic"></i>
          <div class="booking-field-text">
            <span class="bf-label">Check-in</span>
            <span class="bf-value" id="checkinDisplay">Select date</span>
          </div>
          <!-- Calendar Dropdown -->
          <div class="cal-dropdown" id="checkinCal">
            <div class="cal-header">
              <button class="cal-nav-btn" id="checkinPrev"><i class="fa-solid fa-chevron-left"></i></button>
              <span class="cal-month-label" id="checkinMonthLabel"></span>
              <button class="cal-nav-btn" id="checkinNext"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div class="cal-weekdays">
              <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
            </div>
            <div class="cal-days" id="checkinDays"></div>
          </div>
        </div>

        <div class="booking-sep"></div>

        <!-- Check-out -->
        <div class="booking-field booking-field--clickable" id="checkoutField">
          <i class="fa-regular fa-calendar-days booking-ic"></i>
          <div class="booking-field-text">
            <span class="bf-label">Check-out</span>
            <span class="bf-value" id="checkoutDisplay">Select date</span>
          </div>
          <!-- Calendar Dropdown -->
          <div class="cal-dropdown" id="checkoutCal">
            <div class="cal-header">
              <button class="cal-nav-btn" id="checkoutPrev"><i class="fa-solid fa-chevron-left"></i></button>
              <span class="cal-month-label" id="checkoutMonthLabel"></span>
              <button class="cal-nav-btn" id="checkoutNext"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div class="cal-weekdays">
              <span>Su</span><span>Mo</span><span>Tu</span><span>We</span><span>Th</span><span>Fr</span><span>Sa</span>
            </div>
            <div class="cal-days" id="checkoutDays"></div>
          </div>
        </div>

        <div class="booking-sep"></div>

        <!-- Guests -->
        <div class="booking-field booking-field--clickable" id="guestsField">
          <i class="fa-regular fa-user booking-ic"></i>
          <div class="booking-field-text">
            <span class="bf-label">Guests</span>
            <span class="bf-value" id="guestsDisplay">1 room, 1 guest</span>
          </div>
          <!-- Guests Dropdown -->
          <div class="guests-dropdown" id="guestsDropdown">
            <div class="guests-row">
              <div class="guests-info">
                <span class="guests-type">Rooms</span>
                <span class="guests-hint">Select number of rooms</span>
              </div>
              <div class="guests-counter">
                <button class="counter-btn" id="roomMinus" aria-label="Decrease rooms"><i class="fa-solid fa-minus"></i></button>
                <span class="counter-val" id="roomCount">1</span>
                <button class="counter-btn" id="roomPlus" aria-label="Increase rooms"><i class="fa-solid fa-plus"></i></button>
              </div>
            </div>
            <div class="guests-divider"></div>
            <div class="guests-row">
              <div class="guests-info">
                <span class="guests-type">Adults</span>
                <span class="guests-hint">Ages 18+</span>
              </div>
              <div class="guests-counter">
                <button class="counter-btn" id="adultMinus" aria-label="Decrease adults"><i class="fa-solid fa-minus"></i></button>
                <span class="counter-val" id="adultCount">1</span>
                <button class="counter-btn" id="adultPlus" aria-label="Increase adults"><i class="fa-solid fa-plus"></i></button>
              </div>
            </div>
            <div class="guests-divider"></div>
            <div class="guests-row">
              <div class="guests-info">
                <span class="guests-type">Children</span>
                <span class="guests-hint">Ages 2–17</span>
              </div>
              <div class="guests-counter">
                <button class="counter-btn" id="childMinus" aria-label="Decrease children"><i class="fa-solid fa-minus"></i></button>
                <span class="counter-val" id="childCount">0</span>
                <button class="counter-btn" id="childPlus" aria-label="Increase children"><i class="fa-solid fa-plus"></i></button>
              </div>
            </div>
            <button class="guests-done-btn" id="guestsDone">Done</button>
          </div>
        </div>

        <button class="btn-check-avail" id="checkAvailBtn">Check Availability</button>
      </div>

      <!-- Booking Validation Message -->
      <div class="booking-msg" id="bookingMsg"></div>
    </div>
  </section>


 <!-- ============================================================
    STAY / IMAGE SLIDER
    ============================================================ -->
    <section class="stay-section">
        <div class="container stay-container">

            <!-- LEFT: SLIDER -->
            <div class="stay-left">
                <div class="stay-slider-area">

                    <div class="stay-slider-wrap">
                        <div class="stay-slider-track" id="stayTrack">

                            <!-- Card 1: Bedroom -->
                            <div class="stay-card" data-index="0">
                                <img src="assets/img/image-1.png" alt="Bedroom" />
                                <div class="stay-card-label">Bedroom</div>
                            </div>

                            <!-- Card 2: Exterior (active by default) -->
                            <div class="stay-card active-card" data-index="1">
                                <img src="assets/img/image-2.png" alt="Exterior" />
                                <div class="stay-card-label">Exterior</div>
                            </div>

                            <!-- Card 3: Pool -->
                            <div class="stay-card" data-index="2">
                                <img src="assets/img/image-1.png" alt="Pool" />
                                <div class="stay-card-label">Pool</div>
                            </div>

                            <!-- Card 4: Living Room -->
                            <div class="stay-card" data-index="3">
                                <img src="assets/img/image-2.png" alt="Living Room" />
                                <div class="stay-card-label">Living Room</div>
                            </div>

                        </div>
                    </div>

                    <!-- Next Button -->
                    <button class="stay-slider-btn" id="stayNextBtn" aria-label="Next slide">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>

                </div>

                <!-- Dots -->
                <!-- <div class="stay-dots" id="stayDots">
                    <span class="stay-dot" data-index="0"></span>
                    <span class="stay-dot active" data-index="1"></span>
                    <span class="stay-dot" data-index="2"></span>
                    <span class="stay-dot" data-index="3"></span>
                </div> -->
            </div>

            <!-- RIGHT: CONTENT -->
            <div class="stay-right">
                <h2 class="stay-heading">
                    Everything You Need for an<br />
                    <span class="text-teal">Unforgettable Stay</span>
                </h2>
                <p class="stay-desc">
                    Our mansion is more than a vacation home; it's an experience.
                    Designed with your comfort and privacy in mind, the property offers
                    a seamless blend of island charm and modern elegance. Whether you're
                    here for a group trip, family gathering, or a romantic getaway,
                    our villa caters to every need.
                </p>
                <a href="#" class="btn-view-all">VIEW ALL</a>
            </div>

        </div>
    </section>

  <!-- ===================== AMENITIES ===================== -->
  <section class="amenities-section">
    <div class="container">
      <div class="amenities-header">
        <div class="amenities-header-left">
          <h2 class="amenities-title">Unparalleled Comfort &amp;<br><span class="text-teal">Luxury Awaits</span></h2>
        </div>
        <div class="amenities-header-right">
          <p class="amenities-desc">We believe luxury is in the details. Our villa is thoughtfully designed to offer modern amenities, ensuring your stay is seamless and stress-free.</p>
          <a href="#" class="amenities-view-more">View More</a>
        </div>
      </div>

      <div class="amenities-grid">
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/workspace 1.png" alt=""></div>
          <span class="amenity-name">Private Workspace</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/parking-area (1) 1.png" alt=""></div>
          <span class="amenity-name">Parking Area</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/cappuccino 1.png" alt=""></div>
          <span class="amenity-name">Kitchen</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/wifi (2) 1.png" alt=""></div>
          <span class="amenity-name">Free Wifi</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/Group.png" alt=""></div>
          <span class="amenity-name">AC</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/flash (1) 1.png" alt=""></div>
          <span class="amenity-name">Greatest Views<br>in Jamaica</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/swimmer 1.png" alt=""></div>
          <span class="amenity-name">Swimming Pool</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/dumbell 1.png" alt=""></div>
          <span class="amenity-name">Exercise Space</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/Group 35557.png" alt=""></div>
          <span class="amenity-name">TV</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/Dalmatian.png" alt=""></div>
          <span class="amenity-name">Pet Allowed</span>
        </div>
      </div>

      <div class="amenities-cta">
        <a href="#" class="btn-book-pill">BOOK NOW</a>
      </div>
    </div>
  </section>

<!-- ================= VIDEO SECTION ================= -->
<section class="video-section">
  <img src="assets/img/video-image.png" class="video-bg-img" />
  <div class="video-overlay"></div>

  <button class="play-btn" id="playBtn" aria-label="Play video">
    <i class="fa-solid fa-play"></i>
  </button>
</section>

<!-- ================= VIDEO MODAL ================= -->
<div class="video-modal" id="videoModal">
  <div class="video-content">
    <span class="close-btn" id="closeBtn">&times;</span>

    <iframe
      id="youtubeFrame"
      width="100%"
      height="100%"
      src=""
      title="YouTube video"
      frameborder="0"
      allow="autoplay; encrypted-media"
      allowfullscreen>
    </iframe>
  </div>
</div>

  <!-- ===================== FAQ ===================== -->
  <section class="faq-section">
    <div class="container">
      <h2 class="faq-title">Frequently Asked <span class="text-teal">Question</span></h2>

      <div class="faq-list">

        <div class="faq-item faq-open">
          <button class="faq-btn" aria-expanded="true">
            <span class="faq-q-text">About check-in ?</span>
            <span class="faq-icon faq-icon--open"><i class="fa-solid fa-chevron-down"></i></span>
          </button>
          <div class="faq-body">
            <p>Check-in is from 3:00 PM, and check-out is by 11:00 AM, just like most hotels. If you need early check-in or late check-out, let us know in advance, and we'll do our best to accommodate your request (subject to availability).</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-btn" aria-expanded="false">
            <span class="faq-q-text">Are additional services available?</span>
            <span class="faq-icon"><i class="fa-solid fa-chevron-right"></i></span>
          </button>
          <div class="faq-body" style="display:none">
            <p>Yes, we offer a wide range of additional services including airport transfers, private chef, massage and spa services, concierge assistance, and event planning. Contact us in advance to arrange your needs.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-btn" aria-expanded="false">
            <span class="faq-q-text">Can I bring pets?</span>
            <span class="faq-icon"><i class="fa-solid fa-chevron-right"></i></span>
          </button>
          <div class="faq-body" style="display:none">
            <p>Yes, we are a pet-friendly property! We welcome well-behaved pets. A small pet deposit may apply. Please inform us about your pet when making your reservation so we can prepare the villa accordingly.</p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-btn" aria-expanded="false">
            <span class="faq-q-text">Do you offer private chef services?</span>
            <span class="faq-icon"><i class="fa-solid fa-chevron-right"></i></span>
          </button>
          <div class="faq-body" style="display:none">
            <p>Absolutely! We can arrange a private chef to cook customized meals for you and your guests. Please share your dietary preferences at least 48 hours in advance so the chef can prepare accordingly.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ===================== TESTIMONIALS ===================== -->
  <section class="testi-section">
    <div class="container">
      <div class="testi-header">
        <div class="testi-header-left">
          <h2 class="testi-title">What Guests Are <span class="text-teal">Saying</span></h2>
          <p class="testi-subtitle">Don't just take our word for it, see what our guests loved about their stay!</p>
        </div>
        <div class="testi-header-right">
          <button class="testi-nav-btn" id="testiPrev" aria-label="Previous">
            <i class="fa-solid fa-chevron-left"></i>
          </button>
          <button class="testi-nav-btn testi-nav-btn--active" id="testiNext" aria-label="Next">
            <i class="fa-solid fa-chevron-right"></i>
          </button>
        </div>
      </div>

      <div class="testi-slider-wrap">
        <div class="testi-track" id="testiTrack">

          <div class="testi-card">
            <div class="testi-quote-icon">
              <i class="fa-solid fa-quote-left"></i><i class="fa-solid fa-quote-left"></i>
            </div>
            <p class="testi-text">"This villa is unreal! The views are straight out of a postcard, and the pool was our favorite spot to relax."</p>
            <div class="testi-author-row">
              <div class="testi-author-info">
                <span class="testi-name">Samantha &amp; James</span>
                <span class="testi-loc">New York</span>
              </div>
              <div class="testi-avatar-wrap">
                <img src="https://images.unsplash.com/photo-1516914589923-f105f1535f88?w=200&q=80" alt="Samantha & James" class="testi-avatar" />
              </div>
            </div>
          </div>

          <div class="testi-card">
            <div class="testi-quote-icon">
              <i class="fa-solid fa-quote-left"></i><i class="fa-solid fa-quote-left"></i>
            </div>
            <p class="testi-text">"Hands down the best stay we've ever had. The villa is stunning, super spacious, and has everything you need."</p>
            <div class="testi-author-row">
              <div class="testi-author-info">
                <span class="testi-name">Daniel R.</span>
                <span class="testi-loc">Toronto</span>
              </div>
              <div class="testi-avatar-wrap">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&q=80" alt="Daniel R." class="testi-avatar" />
              </div>
            </div>
          </div>

          <div class="testi-card">
            <div class="testi-quote-icon">
              <i class="fa-solid fa-quote-left"></i><i class="fa-solid fa-quote-left"></i>
            </div>
            <p class="testi-text">"Absolutely breathtaking! Every detail was perfect — the ocean views, private pool, and the incredible host service."</p>
            <div class="testi-author-row">
              <div class="testi-author-info">
                <span class="testi-name">Maria &amp; Carlos</span>
                <span class="testi-loc">Miami</span>
              </div>
              <div class="testi-avatar-wrap">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&q=80" alt="Maria & Carlos" class="testi-avatar" />
              </div>
            </div>
          </div>

          <div class="testi-card">
            <div class="testi-quote-icon">
              <i class="fa-solid fa-quote-left"></i><i class="fa-solid fa-quote-left"></i>
            </div>
            <p class="testi-text">"We celebrated our anniversary here and it was absolutely magical. The sunsets from the pool deck are unmatched!"</p>
            <div class="testi-author-row">
              <div class="testi-author-info">
                <span class="testi-name">Emma &amp; Liam</span>
                <span class="testi-loc">London</span>
              </div>
              <div class="testi-avatar-wrap">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=200&q=80" alt="Emma & Liam" class="testi-avatar" />
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ===================== MAP ===================== -->
  <section class="map-section">
    <div class="map-inner">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30473.75847498742!2d-77.93744!3d18.47398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eda103ebad2041b%3A0xb9a7b94a26af6a4d!2sMontego%20Bay%2C%20Jamaica!5e0!3m2!1sen!2sus!4v1680000000000"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
        title="Hillowton Estates Location - Montego Bay Jamaica">
      </iframe>
    </div>
  </section>

<?php
$extraScripts = ["assets/js/script.js", "assets/js/book-modal.js"];
$inlineScript = <<<'JS'
const playBtn = document.getElementById("playBtn");
const modal = document.getElementById("videoModal");
const closeBtn = document.getElementById("closeBtn");
const frame = document.getElementById("youtubeFrame");

// 👉 YouTube video link (change this)
const videoURL = "https://www.youtube.com/embed/dQw4w9WgXcQ";

playBtn.addEventListener("click", () => {
  modal.style.display = "flex";
  frame.src = videoURL + "?autoplay=1";
});

closeBtn.addEventListener("click", () => {
  modal.style.display = "none";
  frame.src = "";
});

// click outside close
modal.addEventListener("click", (e) => {
  if (e.target === modal) {
    modal.style.display = "none";
    frame.src = "";
  }
});
JS;
include __DIR__ . '/includes/footer.php';
