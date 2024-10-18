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
    echo "Hello, " . $name;
  }
}
?>

</body>
</html>
