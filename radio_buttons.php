<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="radio_buttons.php" method="post">
        <input type="radio" name="payment" value="visa">Visa</input><br>
        <input type="radio" name="payment" value="mpesa">Mpesa</input><br>
        <input type="radio" name="payment" value="paypal">Paypal</input><br>
        <input type="radio" name="payment" value="cash">Cash</input><br>
        <input type="submit" name="confirm" value="confirm"><br>

    </form>
</body>

</html>
<?php
if (isset($_POST["confirm"])) {
    if (isset($_POST["payment"])) {

        $payment = $_POST["payment"];
        switch ($payment) {
            case "visa":
                echo "youve selected visa";
                break;
            case "mpesa":
                echo "youve selected mpesa";
                break;
            case "paypal":
                echo "youve selected paypal";
                break;
            case "cash":
                echo "youve selected cash";
                break;
            default:
                echo "please make a selecton..";

        }
        
    }else{
            echo "please make a selecton..";
        }
}

?>