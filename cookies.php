<?php
setcookie("fav_food", "pizza", time() -0, "/");
setcookie("fav_drink", "chai", time() +(86400 * 4) , "/");
setcookie("fav_dessert", "omena", time() +(86400 * 2), "/");

/*foreach($_COOKIE as $key => $value){

    echo "{$key} = {$value} <br>";
}*/

if(isset($_COOKIE["fav_food"])){
    echo "Buy some {$_COOKIE["fav_food"]} !!";

} else{

    echo "unadai food gani?..";
}

?>