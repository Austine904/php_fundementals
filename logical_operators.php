<?php
/* $temp =25;

if ($temp >=0 && $temp <=30){
    echo "weather is good..";
}
else{
    echo "the weather is bad..";
}
*/

$temp =15;
$cloudy = true;

if ($temp <0 || $temp >30){
    echo "weather is bad..";
}
else{
    echo "the weather is good..<br>"; 
}

if ($cloudy){
    echo "it's cloudy..";
} else{
    echo "it's sunny..";
}

 ?>