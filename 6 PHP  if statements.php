<?php

// Check the user's age to determine if they can enter the site
$age = 111;

// If the age is 100 or more, display a message that the user is too old
if($age >= 100){
  echo "You are too old to enter this site";
}
// If the age is between 18 and 99, allow the user to enter
else if($age >= 18){
  echo "You may enter this site";
}
// If the age is less than or equal to 0, display an invalid age message
else if($age <= 0){
  echo "That wasn't a valid age";
}
// If the user is younger than 18, deny access
else{
  echo "You must be 18+ to enter";
}

// Check if the user is an adult (using a separate variable)
$adult = false;

// If the user is an adult (true), allow them to enter
if($adult){
  echo "You may enter this site";
}
// If not an adult, display a message that they must be an adult to enter
else{
  echo "You must be an adult to enter";
}

// Calculate weekly pay based on hours worked
$hours = 50; // Total hours worked
$rate = 15;  // Hourly rate
$weekly_pay = null; // Variable to store weekly pay

// If no hours worked or negative, pay is 0
if($hours <= 0){
  $weekly_pay = 0;
}
// If hours are 40 or less, calculate pay at the regular rate
else if($hours <= 40){
  $weekly_pay = $hours * $rate;
}
// If hours exceed 40, calculate overtime pay (1.5 times the regular rate)
else{
  $weekly_pay = ($rate * 40) + ($hours - 40) * ($rate * 1.5);
}

// Output the calculated weekly pay
echo "You made \${$weekly_pay} this week";

?>
