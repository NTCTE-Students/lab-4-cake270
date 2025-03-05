<?php
function formatDate($date) {
    return date('d/m/Y', strtotime($date));
}

$date = "2023-10-01";
echo formatDate($date); 
