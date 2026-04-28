<?php
session_start();

// Destroy session
$_SESSION = [];
session_destroy();

// 🔥 Prevent browser caching
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// Redirect to login page
header("Location: loginpage.php");
exit();