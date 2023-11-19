<?php
function revsort(&$array) {
    sort($array);
    $array = array_reverse($array);
}

$number = [5, 2, 8, 1, 9];

revsort($number);

print_r($number);
?>