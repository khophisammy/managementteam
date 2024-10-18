<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "ocanseysamuelkofi@gmail.com";  // Replace with your email address
    $subject = "New Contact Us Message";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "ocanseysamuelkofi@gmail.com";  // Replace with a suitable from address

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Sorry, your message could not be sent.";
    }
}
?>
