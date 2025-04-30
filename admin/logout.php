<?php
session_start(); // Start the session

// Destroy the session and clear session data
session_unset();
session_destroy();

// Redirect to login page
header('Location: ../homepage.php');
exit;
