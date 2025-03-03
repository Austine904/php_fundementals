<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitizeandvalidate.php" method="post">
    username:<br>
    <input type="text" name="username"><br><br>

    Age:<br>
    <input type="text" name="age"><br><br>

    email:<br>
    <input type="text" name="email"><br><br>
    <input type="submit" name="login" value="login">


    </form>
</body>
</html>
<?php
if(isset($_POST['login']));
/*$username = filter_input(INPUT_POST, "username",
                            FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_POST, "age", 
                            FILTER_SANITIZE_NUMBER_INT);

$email = filter_input(INPUT_POST, "email", 
                            FILTER_SANITIZE_EMAIL);
*/

//$username = filter_input(INPUT_POST, "username",FILTER_VALIDATE_INT);
                            
$age = filter_input(INPUT_POST, "age", 
                            FILTER_SANITIZE_NUMBER_INT);

                    if(empty($age)){
                        echo "that number isnt valid";
                    } else{

                        echo "youre $age years old..<br><br>"; 
                    }

$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
                        
                    if(empty($email)){
                        echo "that email isnt valid";
                    } else{

                        echo "your email is $email..";
                    }
                            





?>