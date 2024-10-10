<!DOCTYPE html>
<html lang="en">
<head>
  <!-- The head section with meta info about the document -->
  <meta charset="UTF-8"> <!-- Character encoding for the document -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Makes the page responsive on all devices -->
  <title>Document</title>
</head>
<body>
  <!-- This form sends the radius value entered by the user to the 'index.php' file using POST method -->
  <form action="index.php" method="post">

    <!-- Label and input field for entering the radius -->
    <label>Radius:</label>
    <br>
    <input type="text" name="radius">
    <br>
    <br>
    
    <!-- Submit button for calculating results -->
    <input type="submit" value="Calculate">
  </form>

  <br>
  <br>
</body>
</html>

<?php
// PHP script starts here
// Retrieving the radius entered by the user from the form
$radius = $_POST["radius"];

// Initializing variables to store the results
$circumference = null;
$area = null;
$volume = null;

// Calculating the circumference of a circle (2 * π * radius)
$circumference = 2 * pi() * $radius;

// Calculating the area of a circle (π * radius^2)
$area = pi() * pow($radius, 2);

// Calculating the volume of a sphere (4/3 * π * radius^3)
$volume = 4/3 * pi() * pow($radius, 3);

// Rounding the results to 2 decimal places for a cleaner output
$circumference = round($circumference, 2);
$area = round($area, 2);
$volume = round($volume, 2);

// Displaying the calculated values in the browser
echo "Circumference = {$circumference}cm <br>";
echo "Area = {$area}cm<sup>2</sup> <br>";
echo "Volume = {$volume}cm<sup>3</sup> <br>";
?>
