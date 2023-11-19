<?php
$rows = 5;

for ($i = 0; $i <= $rows; $i++) {
    for ($j = 65; $j < 65 + $i; $j++) {
        echo chr($j) . " ";
    }
    echo "\n";
}

for ($i = $rows - 1; $i >= 1; $i--) {
    for ($j = 65; $j < 65 + $i; $j++) {
        echo chr($j) . " ";
    }
    echo "\n";
}
?>