<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StopWatch</title>
</head>
<body>
    <form action="index.php" method="post">
<input type="submit" name="stop" value="Stop">

    </form>
</body>
</html>

<?php
$seconds = 0;

$running = true;

while($running){
    if(isset($_POST["stop"])){
        $running=false;
    }
    $seconds++;

    echo $seconds."<br>";
}
?>