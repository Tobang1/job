<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'Admin001.COm');
define('DB_NAME', 'mydb');

// Google API configuration
define('GOOGLE_CLIENT_ID', '254849608327-03qvfnkm60pj8g2grpvgqq7eoqr3hr9h.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/drive');
define('REDIRECT_URI', 'http://darecruit.tk/google_drive_sync.php'); //drives-sync_redirect.php file 

// Start session
if(!session_id()) session_start();

// Google OAuth URL
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' .urlencode(GOOGLE_OAUTH_SCOPE). '&redirect_uri=' .REDIRECT_URI. '&response_type=code&client_id=' .GOOGLE_CLIENT_ID. '&access_type=online';

?>