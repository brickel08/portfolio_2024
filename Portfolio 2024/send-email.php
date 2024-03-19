<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up email parameters
    $to = "your_email@example.com"; // Change this to your email address
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>