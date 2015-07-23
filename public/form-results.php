<?php
require 'functions.php';
$name = inputHas('name') ? escape(inputGet('name'))  : '';
$number = inputHas('number') ? escape(inputGet('number'))  : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>POST Example</title>
</head>
<body>
    <h2>Name</h2>
    <p><?php echo $name; ?></p>
    <h2>Number</h2>
    <p><?php echo $number; ?></p>
    <a href="form-example.php">Back</a>
</body>
</html>