<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $quantity = htmlspecialchars($_POST["quantity"]);

    $to = "ocanseysamuelkofi@gmail.com";  // Replace with your email address
    $subject = "New Booking";
    $message = "Name: $name\nQuantity: $quantity";
    $headers = "From: no-reply@example.com";  // Replace with a suitable from address

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for booking your slot!";
    } else {
        echo "Sorry, there was an error processing your request.";
    }
}
?>
