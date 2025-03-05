<?php 
function factorial($n): int {
    $result = 1;
    for ($i = $n; $i != 0; $i--) {
    $result *= $i;
}
return $result;
}

$result = factorial(5);
echo("факториал 5:{$result}");
?>