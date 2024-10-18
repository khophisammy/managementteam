<!DOCTYPE html>
<html>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Collect value of input field
  $name = htmlspecialchars($_POST['name']); 
  if (empty($name)) {
    echo "Name is empty";
  } else {
    // Email details
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Name Submission";
    $message = "Name: " . $name;
    $headers = "From: webmaster@example.com"; // Replace with your sender email address

    // Send email
    if (mail($to, $subject, $message, $headers)) {
      echo "Email successfully sent to $to...";
    } else {
      echo "Email sending failed...";
    }
  }
}
?>

</body>
</html>
