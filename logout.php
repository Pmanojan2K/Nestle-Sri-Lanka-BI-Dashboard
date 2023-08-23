<?php
session_start(); // Start the session (if not already started)
session_destroy(); // Destroy the session

// Redirect to the index page or any other appropriate page after logout
header("Location: index.php");
exit;
