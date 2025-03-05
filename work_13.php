<?php
function average($arr) {
    if (empty($arr)) return 0;
    return array_sum($arr) / count($arr);
}

$arr = [10, 20, 30];
echo average($arr); 
