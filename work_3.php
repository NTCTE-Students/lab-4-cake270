<?php
function countWords($str) {
    return count(explode(' ', $str));
}

$str1 = "Hello world, this is a test.";
echo countWords($str1);

