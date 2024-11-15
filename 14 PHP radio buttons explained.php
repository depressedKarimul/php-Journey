
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
    <input type="radio" value="Visa" name="credit_card"> Visa <br>
    <input type="radio" value="Mastercard"  name="credit_card">Mastercard <br>
    <input type="radio" value="American Express"  name="credit_card">American Express <br>
    <input type="submit" name="confrim"" value="confrim">
</form>
    
</body>
</html>

<?php
if(isset($_POST["confrim"])){
    $credit_card =null;
    if(isset($_POST["credit_card"])){
        $credit_card = $_POST["credit_card"];
        // echo $credit_card;
    }
    if($credit_card == "Visa"){
        echo "You selected Visa";
    }else   if($credit_card == "Mastercard"){
        echo "You selected Mastercard";
    }else  if($credit_card == "American Express"){
        echo "You selected American Express";
    }
    else{
       echo "Please make a selection";
    }
}



?>