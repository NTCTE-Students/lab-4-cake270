<?php 
function sortArray($arr) {
    sort($arr);
    return $arr;
}

$arr = [5, 3, 8, 1, 4];
print_r(sortArray($arr)); 
