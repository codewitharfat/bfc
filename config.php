<?php
/**
 * B.F.C. Hillowton Estates — site config
 * Place this file at your SITE ROOT (same level as index.php).
 * Fill in your real hosting DB credentials below.
 */

// ---- Database credentials (get these from your hosting cPanel / phpMyAdmin) ----
define('DB_HOST', 'localhost');
define('DB_NAME', 'bfc_hillowton');
define('DB_USER', 'root');      // ← tumne shayad 'your_db_username' hi chhod diya hoga
define('DB_PASS', '');           // ← XAMPP mein root ka password khali hota hai by default

// ---- Site-wide settings ----
define('SITE_URL', 'https://yourdomain.com'); // no trailing slash

// Start session everywhere config.php is loaded (admin panel + handlers need it)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
