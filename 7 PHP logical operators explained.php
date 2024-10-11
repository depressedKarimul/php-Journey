<?php
// Check the temperature to determine if the weather is good or bad
$temp = 100;

// If the temperature is less than 0 or greater than 30, the weather is good
if($temp < 0 || $temp > 30){
  echo "The Weather is good. <br>";
}
// Otherwise, the weather is bad
else {
  echo "The weather is bad. <br>";
}

// Check if it is cloudy or sunny
$cloudy = true;

// If it is NOT cloudy, print that it's cloudy
if(!$cloudy){
  echo "It's cloudy";
}
// If it is cloudy (true), print that it's sunny
else{
  echo "It's sunny";
}

// Check if the person is eligible to vote (must be 18 or older and a citizen)
$age = 25; // Age of the person
$citizen = true; // Citizenship status

// If the person is 18 or older and is a citizen, they can vote
if($age >= 18 && $citizen){
  echo "You can vote";
}
// Otherwise, they cannot vote
else{
  echo "You cannot vote";
}

// Determine the ticket price based on whether the person is a child or senior
$child = false;  // Is the person a child?
$senior = false; // Is the person a senior?
$ticket = null;  // Variable to store the ticket price

// If the person is either a child or senior, ticket price is $10
if($child || $senior){
  $ticket = 10;
}
// Otherwise, the ticket price is $15
else{
  $ticket = 15;
}

// Output the ticket price
echo "The ticket price is \${$ticket}";

?>
