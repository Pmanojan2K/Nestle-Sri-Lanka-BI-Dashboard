<?php
// Get the email and content from the AJAX request
$email = $_POST['email'];
$content = $_POST['content'];

// Set the sender email address
$senderEmail = "abc1234@gmail.com";

// Set the email subject
$subject = "Verification Code";

// Send the email
mail($email, $subject, $content, "From: $senderEmail");
