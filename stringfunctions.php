<?php
$username = array("Bastoto", "From", "Ochi");
$phone = "123-456-789";


//$username = strtolower($username);
//$username = str_pad($username, 20, "2");
//$phone = str_replace("-", "", $phone);
//$username = strrev($username);
//$username = str_shuffle($username);
//$equals = strcmp($username, "BASTOTO OCHI");
//$count = strlen($phone);
//$index = strpos($username, " ");
//$firstname = substr($username,0, 3);
//$fullname = explode(" ", $username);
$username= implode("~", $username);

echo $username;

?>