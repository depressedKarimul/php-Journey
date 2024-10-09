<?php
// Define a string variable 'name' and add an HTML line break after it
$name = "Bro Code <br>";
// Output the value of the 'name' variable
echo $name;

// Assign some values to different variables
$food = "Pizza"; // A string representing food
$email = "fake123@gmail.com"; // A string representing an email address

$age = 21; // An integer representing someone's age
$users = 2; // An integer representing the number of users online
$quantity = 3; // An integer representing the number of items to buy

$gpa = 2.5; // A float representing a GPA (Grade Point Average)
$price = 4.99; // A float representing the price of an item (e.g., pizza)
$tax_rate = 5.1; // A float representing the sales tax rate (in percentage)

$employed = true; // A boolean indicating if someone is employed
$online = false; // A boolean indicating if someone is online
$for_sale = true; // A boolean indicating if something is for sale

// Initialize a variable 'total' with null, no value assigned yet
$total = null;

// Echo a greeting, using the 'name' variable
echo "Hello {$name} "; 
// Echo a message saying what food the person likes
echo "You Like {$food} <br>"; 
// Echo the email
echo "Your email is {$email} <br>";

// Echo the person's age
echo "You are {$age} years old <br>";
// Echo the number of users online
echo "There are {$users} users online <br>";
// Echo how many items the person wants to buy
echo "You would like to buy {$quantity} items <br>";

// Echo the GPA of the person
echo "Your gpa is {$gpa} <br>";
// Echo the price of the pizza
echo "Your pizza is \${$price} <br>"; 
// Echo the sales tax rate
echo "The sales tax rate is: {$tax_rate} <br>";

// Echo the number of food items ordered
echo "You have ordered {$quantity} x {$food}s <br>";
// Calculate the total cost by multiplying the quantity with the price
$total = $quantity * $price; 
// Echo the total cost
echo "Your total is: \${$total}"; 

?>
