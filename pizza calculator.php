<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pizza Calcualtor</title>

  <style>
    body{
      text-align: center;
      background-color: greenyellow;
    }
    form{
      margin-top: 205px;
    }
    label{
      margin-bottom: 5px;
      font-size: xx-large;
      font-family: 'Times New Roman', Times, serif;
      color: red;
    }
    input{
      height: 30px;
      width:200px;
      margin-top: 5px;
    }

    #btn-submit{
      background-color: red;
      height: 50px;
      width:150px;
      font-size: xx-large;
      border-radius: 30px;
      margin-top: 10px;

    }
  </style>

</head>
<body>
  <form action="index.php" method="post">
<label>Pizza/s Quantity</label> <br>
<input type="text" name="quantity"> <br>
<input id="btn-submit" type="submit" value="total"> <br>

  </form>
  <br>
  <br>
  <br>
</body>
</html>

<?php
$item = "pizza";
$price = 5.99;
$quantity = $_POST["quantity"];

$total = null;

$total = $quantity*$price;

echo "You have ordered {$quantity} x {$item}/s";
echo "Your total is : \${$total}";

?>