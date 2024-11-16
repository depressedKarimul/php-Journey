<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Username</label>
        <br>
        <input type="text" name="username"> 
        <br>
        <label for="">age</label>
        <br>
        <input type="text" name="age" >
        <br>
        <label for="">email</label>
        <br>
        <input type="text" name="email" id="">
        <br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
// Check if the form was submitted by checking if the "login" button was clicked
if (isset($_POST["login"])) {
    // The next three lines (commented) show how you could sanitize the input to make it safe:
    
    // Sanitize the "username" input to remove special characters
    // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

    // Sanitize the "age" input to ensure it's a valid number
    // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

    // Sanitize the "email" input to remove invalid characters from an email
    // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    // If the sanitized inputs were uncommented and used:
    // echo "Hello {$username}"; // Greet the user with their username
    // echo "You are {$age} years old"; // Display the user's age
    // echo "Your email: {$email}"; // Show the user's email address

    // Validate the "age" input to ensure it's a valid integer
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    // Validate the "email" input to ensure it's a proper email format
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    // Check if the "age" input is empty or invalid
    if (empty($age)) {
        // Print an error message if the age is invalid
        echo "That number wasn't valid";
    } else {
        // Print the valid age
        echo "You are $age years old";
    }
}

// Check if the "email" input is empty or invalid (outside the form submission check)
if (empty($email)) {
    // Print an error message if the email is invalid
    echo "Your email wasn't valid";
} else {
    // Print a success message if the email is valid
    echo "Your email is valid";
}
?>
