<?php
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

$celsius = 25;
echo celsiusToFahrenheit($celsius); 
