<?php

// Create an array called $foods with four elements
$foods = array("apple", "orange", "banana", "coconut");

// Display the first element of the array, followed by a line break
echo $foods[0] . "<br>"; // Output: apple
// Display the second element of the array, followed by a line break
echo $foods[1] . "<br>"; // Output: orange
// Display the third element of the array, followed by a line break
echo $foods[2] . "<br>"; // Output: banana
// Display the fourth element of the array, followed by a line break
echo $foods[3] . "<br>"; // Output: coconut

// Replace the first element of the array with "pineapple"
$foods[0] = "pineapple";

// Add two elements, "pineapple" and "kiwi", to the end of the array
array_push($foods, "pineapple", "kiwi");

// Remove the last element of the array ("kiwi")
array_pop($foods);

// Remove the first element of the array ("pineapple")
array_shift($foods);

// Reverse the order of the elements in the array and assign it to $reverse_foods
$reverse_foods = array_reverse($foods);

// Loop through each element in $reverse_foods and display it, followed by a line break
foreach($reverse_foods as $reverse_food) {
    echo $reverse_food . "<br>";
    // Outputs the reversed order of the $foods array after modifications
}

// Display the total number of elements in the $foods array, followed by a line break
echo count($foods) . "<br>"; // Output: number of elements in $foods

// Loop through each element in the $foods array and display it, followed by a line break
foreach($foods as $food) {
    echo $food . "<br>";
    // Outputs the current state of the $foods array after all modifications
}

?>
