<?php 
function isPrime($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

$num = 29;
echo isPrime($num) ? 'Prime' : 'Not Prime'; 
