<?php
function sumDigits($num) {
    $sum = 0;
    $num = abs($num); 
    while ($num > 0) {
        $sum += $num % 10;
        $num = (int)($num / 10);
    }
    return $sum;
}

$num = -12345;
echo sumDigits($num); 
