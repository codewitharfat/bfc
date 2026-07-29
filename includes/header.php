<?php
/* ================================================================
   includes/header.php
   Shared <head> + site navigation for every page.

   Each page must set these variables BEFORE including this file:

   $pageTitle      (string)  required — <title> text
   $activePage     (string)  required — one of: home | about | villa | contact | checkout
   $extraCss       (array)   optional — extra stylesheet filenames from assets/css/
   $headerScrolled (bool)    optional — adds the "scrolled" class to <header> (checkout uses this)
   $showLogin      (bool)    optional — show the "Login" link in the nav (about page uses this)
   $bookHref       (string)  optional — href for the BOOK NOW nav button (defaults to "#")
   ================================================================ */

$activePage     = $activePage ?? '';
$extraCss       = $extraCss ?? [];
$headerScrolled = $headerScrolled ?? false;
$showLogin      = $showLogin ?? false;
$bookHref       = $bookHref ?? '#';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400;1,600&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <?php foreach ($extraCss as $cssFile): ?>
  <link rel="stylesheet" href="assets/css/<?php echo htmlspecialchars($cssFile); ?>" />
  <?php endforeach; ?>
</head>
<body>

  <!-- ===================== HEADER / NAVBAR ===================== -->
  <header class="site-header<?php echo $headerScrolled ? ' scrolled' : ''; ?>" id="siteHeader">
    <nav class="navbar navbar-expand-lg">
      <div class="container nav-container">

        <a class="navbar-brand" href="index.php">
          <div class="logo-wrap">
            <img class="site-logo" src="assets/img/logo.png" alt="B.F.C. Hillowton Estates" />
          </div>
        </a>

        <button class="navbar-toggler custom-toggler" type="button"
          data-bs-toggle="collapse" data-bs-target="#mainNav"
          aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav mx-auto nav-menu">
            <li class="nav-item">
              <a class="nav-link<?php echo $activePage === 'home' ? ' active' : ''; ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?php echo $activePage === 'about' ? ' active' : ''; ?>" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?php echo $activePage === 'villa' ? ' active' : ''; ?>" href="villa.php">Villa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link<?php echo $activePage === 'contact' ? ' active' : ''; ?>" href="contact.php">Contact</a>
            </li>
          </ul>
          <div class="nav-action">
            <?php if ($showLogin): ?>
            <a href="#" class="nav-login-link">Login</a>
            <?php endif; ?>
            <a href="<?php echo htmlspecialchars($bookHref); ?>" class="btn-book-nav">BOOK NOW</a>
          </div>
        </div>

      </div>
    </nav>
  </header>
