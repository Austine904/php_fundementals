<?php
include('mysqli.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <h2>Welcome to Chiethbook</h2>
        username: <br>
        <input type="text" name="username"><br>
        <input type="password" name="password"> <br>
        <input type="submit" name="submit" value = "submit">




    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if(empty($username)){
        echo "enter username";
    }elseif(empty($password)){

        echo "please enter password..";

    } else{

        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (user, passwords)
                VALUES ('$username', '$hash')";

                mysqli_query($conn, $sql);
                echo "youre registered..";

    }




}



mysqli_close($conn);
?>