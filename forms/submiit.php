<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    
    $to = "ocanseysamuelkofi@gmail.com";  // Replace with your email address
    $subject = "New Name Submission";
    $message = "A new name has been submitted: " . $name;
    $headers = "From: no-reply@example.com";  // Replace with a suitable from address

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
