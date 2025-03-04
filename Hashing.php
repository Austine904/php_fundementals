<?php

$password = "bstt123";

$hash = password_hash($password, PASSWORD_DEFAULT);

if(password_verify("bstt123", $hash)){

    echo "youre logged in";
} else{

    echo "incorrect password";
}

?>