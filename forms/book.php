<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $quantity = htmlspecialchars($_POST["quantity"]);

    $to = "your-email@example.com";  // Replace with your email address
    $subject = "New Booking";
    $message = "Name: $name\nQuantity: $quantity";
    $headers = "From: no-reply@example.com";  // Replace with a suitable from address

    if (mail($to, $subject, $message, $headers)) {
        header("Location: thankyou.html");
        exit();
    } else {
        echo "Sorry, there was an error processing your request.";
    }
}
?>
