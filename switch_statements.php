<?php
    /* $grade = "omena";

    switch($grade){
        case "A";
            echo "You did great..";
            break;
        case "B";
            echo "You did good";
            break;
        case "C";
            echo "You did okay..";
            break;
        case "D";
            echo "You did great..";
            break;
        case "F";
            echo "You did poorly..";
            break;
        default:
            echo "{$grade} is not a valid grade";
    }
*/


$date = date("l");
    switch($date){

    case "Monday":
            echo "Moody Monday..";
            break;
    case "Tuesday":
            echo "Titty Tuesday..";
            break;
    case "Wednesday":
            echo "women Wednesday..";
            break;
    case"Thursday":
            echo "Throwback Thursday..";
            break;
     case"Friday";
            echo "Members day..";
            break;
    case"Saturday";
            echo "Super Sato..";
            break;
    case"Sunday";
            echo "Relax Sunday..";
            break;
        default:
            echo "{$date} is not a valid day";
    }
    
?>