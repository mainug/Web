<?php
function calculateFactorial($n) {
    $f = 1;
    $i = 1;

    while ($i <= $n) {
        $f *= $i;
        $i++;
    }

    return $f;
}

$n = 5;
$result = calculateFactorial($n);
echo "{$result}";
?>