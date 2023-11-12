<?php
function printNumber($a) {
    if ($a % 2 == 1) {
        $nextNumber = $a + 1;
        echo "{$nextNumber}";
    } else {
        echo "{$a}";
    }
}

$a = 7;
printNumber($a);
?>