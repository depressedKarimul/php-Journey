<?php
include("database.php");

$username = "Shuvo";
$password = "shuvo1711";
$hash = password_hash($password, PASSWORD_DEFAULT);

// $sql = "INSERT INTO users (user,password)

// VALUES('Spongebob','Pineaple1')";

$sql = "INSERT INTO users (user,password)
VALUES('$username','$hash')";




try {
    mysqli_query($conn, $sql);
    echo "User is now registered";
} catch (mysqli_sql_exception) {
    echo "Could not register user";
}




mysqli_close($conn);