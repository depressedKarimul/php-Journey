

<?php
// <!-- ARITHMETIC OPERATORS
// + - * / ** % -->
$x = 20; // Assigns the value 20 to the variable $x
$y = 2;  // Assigns the value 2 to the variable $y
$z = null; // $z is initialized as null (empty value)

$z = $x + $y; // Adds $x and $y, stores the result in $z
echo "{$x}+{$y}=$z <br>"; // Prints "20+2=22" on the webpage

$z = $x - $y; // Subtracts $y from $x, stores the result in $z
echo "{$x}-{$y}=$z <br>"; // Prints "20-2=18" on the webpage

$z = $x * $y; // Multiplies $x and $y, stores the result in $z
echo "{$x}*{$y}=$z <br>"; // Prints "20*2=40" on the webpage

$z = $x / $y; // Divides $x by $y, stores the result in $z
echo "{$x}/{$y}=$z <br>"; // Prints "20/2=10" on the webpage

$z = $x ** $y; // Raises $x to the power of $y, stores the result in $z
echo "{$x} to the power {$y}=$z <br>"; // Prints "20 to the power 2=400" on the webpage

// Increment/Decrement Operators

$counter = 0; // Initializes $counter with value 0
$counter++; // Increments $counter by 1 (now $counter = 1)
echo $counter; // Prints 1 on the webpage
echo"<br>"; 

$counter--; // Decrements $counter by 1 (now $counter = 0)
echo $counter; // Prints 0 on the webpage
echo"<br>";

$counter = 1; // Sets $counter to 1
--$counter; // Decrements $counter by 1 before using it (now $counter = 0)
echo $counter; // Prints 0 on the webpage
echo"<br>";

++$counter; // Increments $counter by 1 before using it (now $counter = 1)
echo $counter; // Prints 1 on the webpage
echo"<br>";

// Operator Precedence
// ()
// ** (Exponentiation)
// * / % (Multiplication, Division, Modulus)
// +- (Addition, Subtraction)

$total = 1 + 2 - 3 * 4 / 15625; // Calculates based on operator precedence
echo $total; // Prints 2.99923 on the webpage
?>
