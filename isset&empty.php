<form action="isset&empty.php" method="post">
<label>username:</label> <br>
<input type="text" name="username"><br>
<label>Password</label> <br>
<input type="password" name="password"> <br>
<input type="submit" name = "login" value = "Log in"> <br>


</form>

<?php

$username = "bastoto";

/*if (empty($username)){
    echo "this variable is empty";
}else{
    echo "this variable is not empty..";
}
   */

foreach($_POST as $key => $value){
        echo"{$key} = {$value} <br>";
}
       
    if (isset($_POST["login"])){

        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "username is missing..";

        }elseif(empty($password)){
            echo "password is missing...";
        
        }else{
            echo "hello {$username}";
        }
    }

?>