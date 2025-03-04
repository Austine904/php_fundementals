<?php
include("mysqli.php");
$username = "blastoto";
$password = "zigzag22";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, passwords)
        VALUES ('$username', '$hash')";


    try{

        mysqli_query($conn, $sql);
        echo "user now registered";
    }
    catch(mysqli_sql_exception){

        echo"couldnt register user";
    }


        



mysqli_close($conn);

?>