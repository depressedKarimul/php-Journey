<?php

// Create an associative array where the keys are countries and the values are their capitals.
$capitals = array(
    "USA" => "Washington D.C",  // USA's capital is Washington D.C
    "Japan" => "Kyoto",         // Japan's "capital" here is listed as Kyoto (but this is not correct).
    "South Korea" => "Seoul",   // South Korea's capital is Seoul.
    "India" => "New Delhi"      // India's capital is New Delhi.
);

// Uncomment this line to display the capital of Japan.
// echo $capitals["Japan"];

// Uncomment this line to change the capital of the USA in the array to "Las Vegas".
// $capitals["USA"] = "Las Vegas";

// Uncomment this line to add a new country and its capital to the array.
// $capitals["Bangladesh"] = "Dhaka";

// Uncomment this line to remove the last element of the array.
// array_pop($capitals);

// Uncomment this line to remove the first element of the array.
// array_shift($capitals);

// Get all the keys (countries) in the array.
// Uncomment the lines below to display the keys (country names) one by one.
// $keys = array_keys($capitals);
// foreach ($keys as $key) {
//     echo "{$key} <br>"; // Print each country name followed by a line break.
// }

// Get all the values (capitals) in the array.
// Uncomment the lines below to display the values (capital names) one by one.
// $values = array_values($capitals);
// foreach ($values as $value) {
//     echo "{$value} <br>"; // Print each capital followed by a line break.
// }

// Uncomment this line to flip the keys and values of the array.
// Now the capitals will become the keys, and the countries will become the values.
// $capitals = array_flip($capitals);

// Uncomment this line to reverse the order of the array (preserves keys).
// $capitals = array_reverse($capitals);

// Uncomment the lines below to print the entire array in "key = value" format.
// foreach ($capitals as $key => $value) {
//     echo "{$key} = {$value} <br>"; // Print each key-value pair with "=" in between.
// }

// Print the total number of elements in the array.
echo count($capitals); // Count the number of countries in the $capitals array.

?>
