<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_arrays.php" method="post">
        <label for="">enter country:</label><br>
        <input type="text" name="country">
        <input type="submit" value="submit"> <br><br>
    </form>
</body>
</html>


<?php

$capitals = array("USA"=> "washington DC", "Kenya"=>"Nairobi", "Tanzania" => "Dar es Salaam");

//$capitals["USA"] = "Texas";
//$capitals["china"] = "Beijing";
//array_shift($capitals);
//$keys = array_keys($capitals);
//$values = array_values($capitals);
//$capitals = array_flip($capitals);


foreach($capitals as $key =>$value){
}

$capital = $capitals[$_POST["country"]];
    echo "the capital is {$capital}";
?> 