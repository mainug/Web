<?php
$filename = 'client.txt';

$file = fopen($filename, 'r');

if ($file) {
    while (($line = fgets($file)) != false) {
        $data = explode("\t", $line);
        $name = $data[0];
        $age = intval($data[1]);

        if ($age >= 30) {
            echo $name . "";
        }
    }

    fclose($file);
} else {
    echo "파일을 열 수 없습니다."
}
?>