<?php

$marks = 60;
function result( $marks = 33){


    switch($marks){
        case ($marks >= 60 && $marks <= 100):
            echo "First Division";
            break;
        case $marks >= 45 && $marks <= 59:
            echo "Second Division";
            break;
        case ($marks >= 33 && $marks <= 44):
            echo "Third Division";
            break;
        case ($marks < 33):
            echo "failed";
            break;
        default:
            echo "enter no.";
    }
}

$c = result(32);

echo $c;

?>