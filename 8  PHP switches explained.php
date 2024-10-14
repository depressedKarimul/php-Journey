<?php
// Define a variable $grade and assign the value "F" to it
$grade = "F";

// Use a switch statement to check the value of $grade and output a message based on the value
switch ($grade) {
  // If $grade is "A", output "You did great"
  case "A":
    echo "You did great";
    break; // break ends this case so it doesn't continue to the next ones

  // If $grade is "B", output "You did Good"
  case "B":
    echo "You did Good";
    break;

  // If $grade is "C", output "You did OK"
  case "C":
    echo "You did OK";
    break;

  // If $grade is "F", output "You did poorly"
  case "F":
    echo "You did poorly";
    break;

  // This case for "F" is repeated unnecessarily, but it outputs "You failed"
  case "F":
    echo "You failed";
    break;

  // If $grade is none of the above, output that the grade is not valid
  default:
    echo "{$grade} is not valid";
}

// Output today's day, date, year, and month using the date() function
echo date("d"); // Output the current day of the month (e.g., 14)
echo "<br>";    // Line break in HTML

echo date("l"); // Output the full name of the day of the week (e.g., Monday)
echo "<br>";    // Line break

echo date("Y"); // Output the full year in 4 digits (e.g., 2024)
echo "<br>";    // Line break

echo date("F"); // Output the full name of the month (e.g., October)
echo "<br>";    // Line break

// Output the full date in the format "Day, Month Date, Year" (e.g., Monday, October 14, 2024)
echo date("l, F d, Y");
echo "<br>";    // Line break

// Explanation of the format:
//   l (lowercase L): Full name of the day of the week (e.g., "Monday").
//   F: Full name of the month (e.g., "October").
//   d: Day of the month, with leading zeros if needed (e.g., "14").
//   Y: Full year in 4 digits (e.g., "2024").




// Output the current time in the format "Hour:Minute:Second AM/PM" (e.g., 03:45:30 PM)
echo date("h:i:s A");
echo "<br>";    // Line break

// Explanation of the format:
//   h: 12-hour format of an hour (01 to 12).
//   i: Minutes with leading zeros (00 to 59).
//   s: Seconds with leading zeros (00 to 59).
//   A: Uppercase AM or PM based on the time.




// Define a new variable $date and assign the current day of the week to it
$date = date("l");
echo $date; // Output the current day of the week (e.g., "Monday")

// Change the value of $date to "Wednesday"
$date = "Wednessday"; // Note: There's a typo in "Wednessday" (should be "Wednesday")

// Use another switch statement to output a message based on the value of $date
switch($date){
  // If $date is "Monday", output "I hate Mondays"
  case "Monday":
    echo "I hate Mondays";
    break;

  // If $date is "Tuesday", output "It is Taco Tuesday"
  case "Tuesday":
    echo "It is Taco Tuesday";
    break;

  // If $date is "Wednesday", output "The work week is half over!"
  case "Wednesday":
    echo "The work week is half over!";
    break;

  // If $date is "Thursday", output "It's almost the weekend"
  case "Thursday":
    echo "It's almost the weekend";
    break;

  // If $date is "Friday", output "The weekend is here"
  case "Friday":
    echo "The weekend is here";
    break;

  // If $date is "Saturday", output "Time to party!"
  case "Saturday":
    echo "Time to party!";
    break;

  // If $date is "Sunday", output "Time to relax"
  case "Sunday":
    echo "Time to relax";
    break;

  // If $date is none of the above, output that the value is not a valid day
  default:
    echo "{$date} is not a day";
}
?>
