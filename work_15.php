<?php
function findSecondMax($arr) {
    if (count($arr) < 2) return null;
    rsort($arr);
    return $arr[1];
}

$arr = [10, 20, 30, 40, 50];
echo findSecondMax($arr); 
