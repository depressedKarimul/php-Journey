<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Down</title>

    <link rel="shortcut icon" href="https://cdn-icons-png.freepik.com/512/2/2306.png" type="image/x-icon">
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a number to count down from</label>
        <br>
        <input type="text" name="counter" >
        <br>
        <input type="submit" value="start">
    </form>
</body>
</html>

<?php
$counter = $_POST["counter"];

for($i = $counter; $i>0; $i--){
    echo $i."<br>";
}

?>