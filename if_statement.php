<?php
/*$age = 100;
if ($age = 18){
    echo "you may visit our site";
    }
    elseif ($age <= 0){
    echo "that is not a valid age";
    }
    elseif ($age>=100){
        echo "youre too old man!";
    }
    else{
    echo "you must be 18+ to enter";
}
    

$adult = true;

    if($adult ==false){
        echo "you may enter this site";
    }
    else{
        echo "you must be an adult to enter";
    }
        */



    $hours = 100;
    $rate = 5;
    $weekly_pay = null;

    if ($hours <=0){
        $weekly_pay = 0;
    }

    elseif($hours<=40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }
    echo "you made \${$weekly_pay} this week";


?>