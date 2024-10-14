<?php
// This is a loop that starts from 1 and goes up to 10, increasing by 1 each time
for($i = 1; $i <= 10; $i++){
    // Output the value of $i followed by a line break in HTML ("<br>")
    echo $i . "<br>";
}

echo "<br>"; // Add a line break between loops for better readability

// This loop starts from 1 and goes up to 10, but it increases by 2 each time
for($i = 1; $i <= 10; $i += 2){
    // Output the value of $i followed by a line break
    echo $i . "<br>";
}

echo "<br>"; // Another line break for spacing

// This loop starts from 10 and goes down to 1, decreasing by 2 each time
for($i = 10; $i > 0; $i -= 2){
    // Output the value of $i followed by a line break
    echo $i . "<br>";
}

echo "<br>"; // Final line break
?>
