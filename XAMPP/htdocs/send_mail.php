<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['userField'];
  $email = $_POST['mailField'];
  $message = $_POST['keyField'];
  
  $from = "glodekppl@gmail.com"; // Replace with your email address
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  
  if (mail($email, $subject, $body)) {
    echo "Email sent successfully!";
  } else {
    echo "Sorry, an error occurred while sending your email.";
  }
}
?>
