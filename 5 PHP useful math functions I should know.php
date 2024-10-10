<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, 
  <title>Document</title>
</head>
<body>
  <!-- This is the start of the form that will send data to index.php using POST method -->
  <form action="index.php"  method="post">
    <!-- Label for input field X -->
    <label>X:</label>
    <!-- Input field for X (text input) -->
    <input type="text" name="x">
    <br>
    <!-- Label for input field Y -->
    <label>Y:</label>
    <!-- Input field for Y (text input) -->
    <input type="text" name="y">
    <br>
    <!-- Label for input field Z -->
    <label>Z:</label>
    <!-- Input field for Z (text input) -->
    <input type="text" name="z">
    <br>
    <!-- Submit button to send form data -->
    <input type="submit" value="Total">
  </form>
</body>
</html>

<?php
// PHP script starts here

// These lines capture the data entered in the form fields (x, y, and z) after submission
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];

// Variable to store the total (initially null)
$total = null;

// The following lines are commented out for now, but they show different ways to calculate or manipulate the input values:

// $total = abs($x);        // Calculates the absolute value of $x
// $total = round($x);      // Rounds $x to the nearest whole number
// $total = floor($x);      // Rounds $x down to the nearest whole number
// $total = ceil($x);       // Rounds $x up to the nearest whole number
// $total = pow($x, $y);    // Calculates $x raised to the power of $y
// $total = sqrt($x);       // Calculates the square root of $x
// $total = max($x, $y, $z); // Finds the largest value among $x, $y, and $z
// $total = min($x, $y, $z); // Finds the smallest value among $x, $y, and $z
// $total = pi();           // Assigns the value of Pi (3.14159...) to $total

// Generates a random number between 90 and 100 and stores it in $total
$total = rand(90, 100);

// Prints the value of $total to the browser
echo $total;
?>
