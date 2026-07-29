<?php
$pageTitle  = "Villa — B.F.C. Hillowton Estates Jamaica";
$activePage = "villa";
$extraCss   = ["book-modal.css"];
include __DIR__ . '/includes/header.php';
?>

  <!-- ======================== VILLA HERO — TEXT ======================== -->
  <section class="villa-hero-section">
    <div class="villa-hero-inner">
      <h1 class="villa-hero-title">Our <span class="text-teal">Villa</span></h1>
      <p class="villa-hero-desc">
        Welcome to your private escape in Montego Bay! Our villa offers spacious living areas, elegant
        bedrooms, and top-tier amenities for the ultimate getaway. Explore the property below and
        imagine your stay with us!
      </p>
    </div>
  </section>

  <!-- ======================== AERIAL DRONE FULL-WIDTH IMAGE ======================== -->
  <section class="villa-fullimg-section">
    <img
      src="assets/img/villa-hero.png"
      alt="Aerial view — Hillowton Estates"
      class="villa-fullimg"
    />
  </section>

  <!-- ======================== ROOM SLIDERS ======================== -->
  <section class="villa-rooms-section">
    <div class="villa-rooms-wrap">

      <!-- Living Room -->
      <div class="room-block">
        <h3 class="room-title">Living Room</h3>
        <div class="room-slider" id="slider-living">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/living-1.png" alt="Living Room 1" /></div>
            <div class="room-slide active"><img src="assets/img/living-2.png" alt="Living Room 2" /></div>
            <div class="room-slide"><img src="assets/img/living-3.png" alt="Living Room 3" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Chef's Kitchen -->
      <div class="room-block">
        <h3 class="room-title">Chef's Kitchen</h3>
        <div class="room-slider" id="slider-kitchen">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/kitchen-1.png" alt="Kitchen 1" /></div>
            <div class="room-slide active"><img src="assets/img/kitchen-2.png" alt="Kitchen 2" /></div>
            <div class="room-slide"><img src="assets/img/kitchen-1.png" alt="Kitchen 3" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Dining Area -->
      <div class="room-block">
        <h3 class="room-title">Dining Area</h3>
        <div class="room-slider" id="slider-dining">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/dinning-1.png" alt="Kitchen 1" /></div>
            <div class="room-slide active"><img src="assets/img/dinning-2.png" alt="Kitchen 2" /></div>
            <div class="room-slide"><img src="assets/img/dinning-3.png" alt="Kitchen 3" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Bedroom 1 -->
      <div class="room-block">
        <h3 class="room-title">Bedroom 1</h3>
        <div class="room-slider" id="slider-bed1">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/bedroom-1.png" alt="Bedroom 1 - A" /></div>
            <div class="room-slide active"><img src="assets/img/bedroom-2.png" alt="Bedroom 1 - B" /></div>
            <div class="room-slide"><img src="assets/img/bedroom-1.png" alt="Bedroom 1 - C" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Bedroom 2 -->
      <div class="room-block">
        <h3 class="room-title">Bedroom 2</h3>
        <div class="room-slider" id="slider-bed2">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/bedroom-2-1.png" alt="Bedroom 2 - A" /></div>
            <div class="room-slide active"><img src="assets/img/bedroom-2-2.png" alt="Bedroom 2 - B" /></div>
            <div class="room-slide"><img src="assets/img/bedroom-2-1.png" alt="Bedroom 2 - C" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Bedroom 3 -->
      <div class="room-block">
        <h3 class="room-title">Bedroom 3</h3>
        <div class="room-slider" id="slider-bed3">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/bedroom-3-1.png" alt="Bedroom 3 - A" /></div>
            <div class="room-slide active"><img src="assets/img/bedroom-3-2.png" alt="Bedroom 3 - B" /></div>
            <div class="room-slide"><img src="assets/img/bedroom-3-1.png" alt="Bedroom 3 - C" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Bedroom 4 -->
      <div class="room-block">
        <h3 class="room-title">Bedroom 4</h3>
        <div class="room-slider" id="slider-bed4">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/bedroom-4-1.png" alt="Bedroom 4 - A" /></div>
            <div class="room-slide active"><img src="assets/img/bedroom-4-2.png" alt="Bedroom 4 - B" /></div>
            <div class="room-slide"><img src="assets/img/bedroom-4-1.png" alt="Bedroom 4 - C" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Bedroom 5 -->
      <div class="room-block">
        <h3 class="room-title">Bedroom 5</h3>
        <div class="room-slider" id="slider-bed5">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/bedroom-5-1.png" alt="Bedroom 5 - A" /></div>
            <div class="room-slide active"><img src="assets/img/bedroom-5-2.png" alt="Bedroom 5 - B" /></div>
            <div class="room-slide"><img src="assets/img/bedroom-5-1.png" alt="Bedroom 5 - C" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Bedroom 6 -->
      <div class="room-block">
        <h3 class="room-title">Bedroom 6</h3>
        <div class="room-slider" id="slider-bed6">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/bedroom-6-1.png" alt="Bedroom 6 - A" /></div>
            <div class="room-slide active"><img src="assets/img/bedroom-6-2.png" alt="Bedroom 6 - B" /></div>
            <div class="room-slide"><img src="assets/img/bedroom-6-1.png" alt="Bedroom 6 - C" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Bedroom 7 -->
      <div class="room-block">
        <h3 class="room-title">Bedroom 7</h3>
        <div class="room-slider" id="slider-bed7">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/bedroom-6-1.png" alt="Bedroom 6 - A" /></div>
            <div class="room-slide active"><img src="assets/img/bedroom-6-2.png" alt="Bedroom 6 - B" /></div>
            <div class="room-slide"><img src="assets/img/bedroom-6-1.png" alt="Bedroom 6 - C" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Veranda -->
      <div class="room-block">
        <h3 class="room-title">Veranda</h3>
        <div class="room-slider" id="slider-veranda">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/veranda.png" alt="Veranda 1" /></div>
            <div class="room-slide active"><img src="assets/img/veranda.png" alt="Veranda 2" /></div>
            <div class="room-slide"><img src="assets/img/veranda.png" alt="Veranda 3" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Pool House Bathroom -->
      <div class="room-block">
        <h3 class="room-title">Pool House bathroom</h3>
        <div class="room-slider" id="slider-poolbath">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/pool-1.png" alt="Pool House Bath 1" /></div>
            <div class="room-slide active"><img src="assets/img/pool-3.png" alt="Pool House Bath 2" /></div>
            <div class="room-slide"><img src="assets/img/pool-2.png" alt="Pool House Bath 3" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Full bathroom 1 -->
      <div class="room-block">
        <h3 class="room-title">Full bathroom 1</h3>
        <div class="room-slider" id="slider-bath1">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/bathroom1.png" alt="Bathroom 1 - A" /></div>
            <div class="room-slide active"><img src="assets/img/bathroom2.png" alt="Bathroom 1 - B" /></div>
            <div class="room-slide"><img src="assets/img/bathroom1.png" alt="Bathroom 1 - C" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Full bathroom 2 -->
      <div class="room-block">
        <h3 class="room-title">Full bathroom 2</h3>
        <div class="room-slider" id="slider-bath2">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/bathroom2-1.png" alt="Bathroom 2 - A" /></div>
            <div class="room-slide active"><img src="assets/img/bathroom2-2.png" alt="Bathroom 2 - B" /></div>
            <div class="room-slide"><img src="assets/img/bathroom2-1.png" alt="Bathroom 2 - C" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Full bathroom 3 -->
      <div class="room-block">
        <h3 class="room-title">Full bathroom 3</h3>
        <div class="room-slider" id="slider-bath3">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/bathroom3-1.png" alt="Bathroom 3 - A" /></div>
            <div class="room-slide active"><img src="assets/img/bathroom3-2.png" alt="Bathroom 3 - B" /></div>
            <div class="room-slide"><img src="assets/img/bathroom3-1.png" alt="Bathroom 3 - C" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Full bathroom 4 -->
      <div class="room-block">
        <h3 class="room-title">Full bathroom 4</h3>
        <div class="room-slider" id="slider-bath4">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/bathroom4-1.png" alt="Bathroom 4 - A" /></div>
            <div class="room-slide active"><img src="assets/img/bathroom4-2.png" alt="Bathroom 4 - B" /></div>
            <div class="room-slide"><img src="assets/img/bathroom4-3.png" alt="Bathroom 4 - C" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Full bathroom 5 -->
      <div class="room-block">
        <h3 class="room-title">Full bathroom 5</h3>
        <div class="room-slider" id="slider-bath5">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/bathroom5-1.png" alt="Bathroom 5 - A" /></div>
            <div class="room-slide active"><img src="assets/img/bathroom5-1.png" alt="Bathroom 5 - B" /></div>
            <div class="room-slide"><img src="assets/img/bathroom4-3.png" alt="Bathroom 5 - C" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Full bathroom 6 -->
      <div class="room-block">
        <h3 class="room-title">Full bathroom 6</h3>
        <div class="room-slider" id="slider-bath6">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/bathroom6.png" alt="Bathroom 6 - A" /></div>
            <div class="room-slide active"><img src="assets/img/bathroom6.png" alt="Bathroom 6 - B" /></div>
            <div class="room-slide"><img src="assets/img/bathroom6.png" alt="Bathroom 6 - C" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Exterior -->
      <div class="room-block">
        <h3 class="room-title">Exterior</h3>
        <div class="room-slider" id="slider-exterior">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/exterior1.png" alt="Exterior 1" /></div>
            <div class="room-slide active"><img src="assets/img/exterior2.png" alt="Exterior 2" /></div>
            <div class="room-slide"><img src="assets/img/exterior3.png" alt="Exterior 3" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Infinity Pool -->
      <div class="room-block">
        <h3 class="room-title">Infinity Pool</h3>
        <div class="room-slider" id="slider-pool">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/infinity1.png" alt="Pool 1" /></div>
            <div class="room-slide active"><img src="assets/img/infinity2.png" alt="Pool 2" /></div>
            <div class="room-slide"><img src="assets/img/infinity3.png" alt="Pool 3" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Pool 2 -->
      <div class="room-block">
        <h3 class="room-title">Pool 2</h3>
        <div class="room-slider" id="slider-pool2">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/pool2-1.png" alt="Pool 2 - A" /></div>
            <div class="room-slide active"><img src="assets/img/pool2-1-1.png" alt="Pool 2 - B" /></div>
            <div class="room-slide"><img src="assets/img/pool2-1.png" alt="Pool 2 - C" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Additional Photos -->
      <div class="room-block">
        <h3 class="room-title">Additional Photos</h3>
        <div class="room-slider" id="slider-additional">
          <div class="room-track">
            <div class="room-slide"><img src="assets/img/additional1.png" alt="Additional 1" /></div>
            <div class="room-slide active"><img src="assets/img/additional2.png" alt="Additional 2" /></div>
            <div class="room-slide"><img src="assets/img/additional3.png" alt="Additional 3" /></div>
          </div>
        </div>
        <div class="room-nav">
          <button class="room-nav-btn room-prev" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
          <button class="room-nav-btn room-next" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
      </div>

    </div><!-- /villa-rooms-wrap -->
  </section>

  <!-- ======================== CTA BANNER ======================== -->
  <section class="villa-cta-section">
    <img src="assets/img/villa-cta.png" alt="Villa View" class="villa-cta-bg" />
    <div class="villa-cta-overlay"></div>
    <div class="villa-cta-inner">
      <h2 class="villa-cta-text">Ready to experience the villa<br>for yourself? Secure your stay<br>today!</h2>
      <a href="#" class="villa-cta-btn">BOOK NOW</a>
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
$extraScripts = ["assets/js/script.js", "assets/js/book-modal.js"];
$inlineScript = <<<'JS'
    /* ================================================================
   B.F.C. HILLOWTON ESTATES — villa-script.js
   Room slider functionality
   ================================================================ */

document.addEventListener('DOMContentLoaded', function () {

  /* ----------------------------------------------------------------
     initRoomSlider(block)
     Each .room-block contains:
       .room-track    — flex row of .room-slide elements
       .room-prev     — prev button
       .room-next     — next button
     Layout: 3 slides visible (left partial | center active | right partial)
     Clicking prev/next cycles the active index and re-positions track.
  ---------------------------------------------------------------- */
  function initRoomSlider(block) {
    var track   = block.querySelector('.room-track');
    var slides  = Array.from(block.querySelectorAll('.room-slide'));
    var prevBtn = block.querySelector('.room-prev');
    var nextBtn = block.querySelector('.room-next');

    if (!track || slides.length === 0) return;

    var total      = slides.length;
    var activeIdx  = slides.findIndex(function (s) { return s.classList.contains('active'); });
    if (activeIdx < 0) activeIdx = 1;

    function getSlideWidth(slide) {
      return slide.offsetWidth;
    }

    function render() {
      /* Update active class */
      slides.forEach(function (s, i) {
        s.classList.toggle('active', i === activeIdx);
      });

      /*
        Center the active slide inside the visible slider area.
        We compute offset so the active slide sits in the middle.

        Track offset = sum of widths of slides before active + half of 
        active slide width - half of container width.
      */
      var containerW = track.parentElement.offsetWidth;
      var gapPx = 14; /* matches CSS gap */

      var offsetLeft = 0;
      for (var i = 0; i < activeIdx; i++) {
        offsetLeft += slides[i].offsetWidth + gapPx;
      }
      /* Center: subtract (containerW/2 - activeWidth/2) */
      var activeW = slides[activeIdx].offsetWidth;
      var translateX = offsetLeft - (containerW / 2 - activeW / 2);

      track.style.transform = 'translateX(-' + Math.max(0, translateX) + 'px)';
    }

    function goNext() {
      activeIdx = (activeIdx + 1) % total;
      render();
    }

    function goPrev() {
      activeIdx = (activeIdx - 1 + total) % total;
      render();
    }

    if (nextBtn) nextBtn.addEventListener('click', goNext);
    if (prevBtn) prevBtn.addEventListener('click', goPrev);

    /* Click on any slide to make it active */
    slides.forEach(function (slide, i) {
      slide.addEventListener('click', function () {
        activeIdx = i;
        render();
      });
    });

    /* Initial render after layout */
    /* Use requestAnimationFrame to wait for dimensions */
    requestAnimationFrame(function () {
      requestAnimationFrame(render);
    });

    /* Re-render on resize */
    window.addEventListener('resize', function () {
      requestAnimationFrame(render);
    }, { passive: true });
  }

  /* Init all room blocks */
  var blocks = document.querySelectorAll('.room-block');
  blocks.forEach(initRoomSlider);

  /* ----------------------------------------------------------------
     Navbar scroll (shared with script.js — safe to re-run)
  ---------------------------------------------------------------- */
  var header = document.getElementById('siteHeader');
  if (header) {
    function onScroll() {
      header.classList.toggle('scrolled', window.scrollY > 20);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

});
JS;
include __DIR__ . '/includes/footer.php';
