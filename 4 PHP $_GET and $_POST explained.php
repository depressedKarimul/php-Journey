<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
  <label>Username</label><br>
  <input type="text" name="username" ><br>

  <label>password</label><br>
  <input type="password" name="password"> <br>
  <input type="submit" value="Log in"><br>
  </form>
</html>

<?php
// echo $_GET["username"];
// echo $_GET["password"];

echo $_POST["username"] . "<br>";
echo $_POST["password"] . "<br>";
?>