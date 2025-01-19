<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["comment"];
    
    $to = "sammuriithimurage@gmail.com";  // Replace with your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
