<?php

// Define a function named 'hello' that prints "Hello PHP" with a line break.
function hello() {
    echo "Hello PHP" . "<br>";
}

// Call the 'hello' function to execute its code.
hello();

// Define a function named 'happy_birthday' that takes one argument ($first_name)
// and prints a birthday greeting using that name.
function happy_birthday($first_name) {
    echo "Happy birthday Dare {$first_name}" . "<br>";
}

// Call the 'happy_birthday' function with "shuvo" as the argument.
happy_birthday("shuvo");

// Define a function named 'is_even' that takes a number as input and checks if it is odd or even.
function is_even($number) {
    // Calculate the remainder when the number is divided by 2.
    $result = $number % 2;

    // If the remainder is 1, return "Odd".
    if ($result == 1) {
        return "Odd";
    } 
    // If the remainder is 0, return "Even".
    else if ($result == 0) {
        return "Even";
    }
}

// Call the 'is_even' function with 11 as the input and print the result with a line break.
echo is_even(11) . "<br>";

// Call the 'is_even' function with 166 as the input and print the result with a line break.
echo is_even(166) . "<br>";

// Define a function named 'hypotenuse' that calculates the hypotenuse of a right triangle
// given the lengths of the two perpendicular sides ($a and $b).
function hypotenuse($a, $b) {
    // Use the Pythagorean theorem: c = sqrt(a^2 + b^2).
    $c = sqrt(($a ** 2 + $b ** 2));
    // Return the calculated hypotenuse.
    return $c;
}

// Call the 'hypotenuse' function with 5 and 5 as the inputs and print the result with a line break.
echo hypotenuse(5, 5) . "<br>";

?>
