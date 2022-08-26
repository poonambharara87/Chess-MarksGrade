<?php
$units = 300;// $first = 3.4;
// $second = 4;
// $third = 5.20;
// $fourth = 6.50;

if($units <= 50){
    $total = $units * 3.4;
    echo $total;
}

elseif($units > 50 && $units <= 100){
     50 * 3.4 + ($rest = $units - 50);
    $total = ($rest*4) + (50 * 3.4); 
    echo $total;
}
elseif($units > 100 && $units <= 200){

    50 * 3.4 + 50 * 4 + ($rest = $units - 100);
    $total = (50 * 3.4) + (50 * 4) + $rest * 5.20;
    echo $total;
}
elseif($units > 200 && $units <= 250){
    50 * 3.4 + 50 * 4 + 100 * 5.20 + ($rest = $units - 150);
    $total = (50 * 3.4) + (50 * 4) + (100 * 5.20) + ($rest * 6.50);
    echo $total;
}elseif($units > 250){
    50 * 3.4 + 50 * 4 + 100 * 5.20 + ($rest = $units - 150);
    $total = (50 * 3.4) + (50 * 4) + (100 * 5.20) + ($rest * 6.50);
    echo $total;
}
?>