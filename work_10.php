<?php
function removeDuplicates($arr) {
    return array_unique($arr);
}
print($array_unique);

$arr = [1, 2, 2, 3, 4, 4, 5];
print_r(removeDuplicates($arr)); // Вывод: Array ( [0] => 1 [1] => 2 [3] => 3 [4] => 4 [5] => 5 )
