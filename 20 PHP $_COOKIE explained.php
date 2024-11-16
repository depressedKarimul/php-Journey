<?php

// Setting a cookie named "fav_food" with the value "pizza". 
// The cookie will expire in 2 days (86400 seconds/day * 2). 
// The "/" path means the cookie is accessible throughout the entire website.
setcookie("fav_food", "pizza", time() + (86400 * 2), "/");

// Setting a cookie named "fav_drink" with the value "coffee". 
// The cookie will expire in 3 days and is accessible site-wide.
setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");

// Setting a cookie named "fav_dessert" with the value "ice cream". 
// The cookie will also expire in 3 days and is accessible throughout the website.
setcookie("fav_dessert", "ice cream", time() + (86400 * 3), "/");

// The following block of code (currently commented out) is used to display all cookies stored in the $_COOKIE superglobal.
// Uncomment this block if you want to see all the cookies and their values.
/*
foreach($_COOKIE as $key => $value){
    echo "{$key}={$value} <br>";
}
*/

// Checking if the "fav_food" cookie exists using the isset() function.
if (isset($_COOKIE["fav_food"])) {
    // If the "fav_food" cookie exists, display a message with its value.
    echo "BUY SOME {$_COOKIE["fav_food"]} !!!!!";
} else {
    // If the "fav_food" cookie does not exist, display a default message.
    echo "I don't know your favorite food";
}

?>
