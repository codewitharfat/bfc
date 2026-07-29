<?php
/* ================================================================
   includes/footer.php
   Shared site footer + closing scripts for every page.

   Each page may set these variables BEFORE including this file:

   $extraScripts  (array)  optional — extra script src paths (assets/js/...)
                            in the order they should be loaded
   $inlineScript  (string) optional — raw JS to print in a final
                            inline <script> block (e.g. video-modal
                            handlers, the room-slider script)
   ================================================================ */

$extraScripts = $extraScripts ?? [];
$inlineScript = $inlineScript ?? '';
?>
  <!-- ===================== FOOTER ===================== -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-row">

        <div class="footer-col footer-brand-col">
          <div class="footer-logo-wrap">
            <img class="site-logo" src="assets/img/logo.png" alt="B.F.C. Hillowton Estates" />
          </div>
          <p class="footer-tagline">Luxury, privacy, and unparalleled comfort—<br>your dream stay in Montego Bay awaits.</p>
        </div>

        <div class="footer-col">
          <h4 class="footer-col-title">Links</h4>
          <ul class="footer-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="villa.php">Villa</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4 class="footer-col-title">Help</h4>
          <ul class="footer-links">
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">FAQs</a></li>
          </ul>
        </div>

        <div class="footer-col footer-social-col">
          <h4 class="footer-col-title">Follow Us</h4>
          <p class="footer-social-text">The latest news, articles,<br>sent to your inbox weekly.</p>
          <div class="footer-social-icons">
            <a href="#" class="footer-social-btn" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="footer-social-btn" aria-label="Twitter/X"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#" class="footer-social-btn" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#" class="footer-social-btn" aria-label="Pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
          </div>
        </div>

      </div>
      <div class="footer-divider"></div>
      <div class="footer-bottom">
        <p>Copyright 2025 B.F.C. Hillowton Estates Jamaica | All Rights Reserved</p>
      </div>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
  <?php foreach ($extraScripts as $src): ?>
  <script src="<?php echo htmlspecialchars($src); ?>"></script>
  <?php endforeach; ?>
  <?php if (trim($inlineScript) !== ''): ?>
  <script>
<?php echo $inlineScript; ?>
  </script>
  <?php endif; ?>
</body>
</html>
