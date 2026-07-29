<?php
$pageTitle  = "About — B.F.C. Hillowton Estates Jamaica";
$activePage = "about";
$extraCss   = ["book-modal.css"];
$showLogin  = true;
include __DIR__ . '/includes/header.php';
?>

  <!-- ===================== ABOUT HERO — TEXT ONLY ===================== -->
  <section class="about-hero-section">
    <div class="about-hero-inner">
      <h1 class="about-hero-title">
        Discover Your <span class="text-teal">Private Paradise in Montego Bay</span>
      </h1>
      <p class="about-hero-desc">
        Nestled in the serene hills of Montego Bay, Jamaica, our exclusive villa is designed for those who crave luxury,
        comfort, and breathtaking views. Whether you're seeking a tranquil retreat, a romantic getaway, or an
        unforgettable group experience, our villa offers the perfect balance of relaxation and indulgence.
      </p>
    </div>
  </section>

  <!-- ===================== FULL-WIDTH VILLA IMAGE ===================== -->
  <section class="about-fullimg-section">
    <img
      src="https://images.unsplash.com/photo-1613490493576-7fde63acd811?w=1600&q=80"
      alt="Villa Exterior — Hillowton Estates"
      class="about-fullimg"
    />
  </section>

  <!-- ===================== ELEVATED STAY SECTION ===================== -->
  <section class="about-elevated-section">
    <div class="about-elevated-inner">

      <!-- LEFT: text -->
      <div class="about-elev-left">
        <h2 class="about-elev-title">
          An Elevated Stay <span class="text-teal">Like No<br>Other</span>
        </h2>
        <p class="about-elev-desc">
          Our villa is more than just a place to stay—it's an experience. Imagine
          waking up to panoramic ocean views, unwinding in an infinity pool
          overlooking the Caribbean, or enjoying a private chef-curated meal in an
          open-air lounge. Every corner of our villa is crafted to enhance your
          comfort and elevate your stay.
        </p>
      </div>

      <!-- RIGHT: overlapping two images -->
      <div class="about-elev-right">
        <div class="about-elev-imgs">
          <img
            src="assets/img/about-2.png"
            alt="Palm trees over pool"
            class="about-elev-img about-elev-img--front"
          />
          <img
            src="assets/img/about-1.png"
            alt="Ocean view pool"
            class="about-elev-img about-elev-img--back"
          />
        </div>
      </div>

    </div>
  </section>

  <!-- ===================== VIDEO SECTION (same as index) ===================== -->
  <section class="video-section">
    <img src="assets/img/video-image.png" alt="Villa exterior" class="video-bg-img" />
    <div class="video-overlay"></div>
    <button class="play-btn" id="playBtn" aria-label="Play video">
      <i class="fa-solid fa-play"></i>
    </button>
  </section>

  <!-- Video Modal -->
  <div class="video-modal" id="videoModal">
    <div class="video-content">
      <span class="close-btn" id="closeBtn">&times;</span>
      <iframe
        id="youtubeFrame"
        width="100%" height="100%"
        src=""
        title="YouTube video"
        frameborder="0"
        allow="autoplay; encrypted-media"
        allowfullscreen>
      </iframe>
    </div>
  </div>

  <!-- ===================== AMENITIES (same as index) ===================== -->
  <section class="amenities-section">
    <div class="container">
      <div class="amenities-header">
        <div class="amenities-header-left">
          <h2 class="amenities-title">Unparalleled <span class="text-teal">Comfort &amp;<br>Luxury Awaits</span></h2>
        </div>
        <div class="amenities-header-right">
          <p class="amenities-desc">We've thoughtfully designed our villa with premium amenities to provide a seamless, stress-free, and indulgent experience.</p>
          <a href="#" class="amenities-view-more">View More</a>
        </div>
      </div>

      <div class="amenities-grid">
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/workspace 1.png" alt="Private Workspace" /></div>
          <span class="amenity-name">Private Workspace</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/parking-area (1) 1.png" alt="Parking Area" /></div>
          <span class="amenity-name">Parking Area</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/cappuccino 1.png" alt="Kitchen" /></div>
          <span class="amenity-name">Kitchen</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/wifi (2) 1.png" alt="Free Wifi" /></div>
          <span class="amenity-name">Free Wifi</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/Group.png" alt="AC" /></div>
          <span class="amenity-name">AC</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/flash (1) 1.png" alt="Greatest Views" /></div>
          <span class="amenity-name">Greatest Views<br>in Jamaica</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/swimmer 1.png" alt="Swimming Pool" /></div>
          <span class="amenity-name">Swimming Pool</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/dumbell 1.png" alt="Exercise Space" /></div>
          <span class="amenity-name">Exercise Space</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/Group 35557.png" alt="TV" /></div>
          <span class="amenity-name">TV</span>
        </div>
        <div class="amenity-card">
          <div class="amenity-icon"><img src="assets/icons/Dalmatian.png" alt="Pet Allowed" /></div>
          <span class="amenity-name">Pet Allowed</span>
        </div>
      </div>

      <div class="amenities-cta">
        <a href="#" class="btn-book-pill">BOOK NOW</a>
      </div>
    </div>
  </section>

  <!-- ===================== MAP (same as index) ===================== -->
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
    /* Video Modal */
    const playBtn   = document.getElementById('playBtn');
    const modal     = document.getElementById('videoModal');
    const closeBtn  = document.getElementById('closeBtn');
    const frame     = document.getElementById('youtubeFrame');
    const videoURL  = 'https://www.youtube.com/embed/dQw4w9WgXcQ';

    playBtn.addEventListener('click', () => {
      modal.style.display = 'flex';
      frame.src = videoURL + '?autoplay=1';
    });
    closeBtn.addEventListener('click', () => {
      modal.style.display = 'none';
      frame.src = '';
    });
    modal.addEventListener('click', (e) => {
      if (e.target === modal) { modal.style.display = 'none'; frame.src = ''; }
    });
JS;
include __DIR__ . '/includes/footer.php';
