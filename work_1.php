<?php
function findMax($array) { 
    if (empty($array)) {
        return 0;
    }
    return max($array);
}

$arr = [10, 20, 5, 30, 15];
echo findMax($arr); 


