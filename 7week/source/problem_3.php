<?php
$filename = 'exam.txt';

$file = fopen($filename, 'r');

if ($file) {
    $lineCount = 0;
    $wordCount = 0;
    $charCount = 0;

    while (($line = fgets($file)) !== false) {
        $lineCount++;
        $wordCount += str_word_count($line);
        $charCount += strlen($line);
    }

    echo "파일: $filename\n";
    echo "줄 수: $lineCount\n";
    echo "단어 수: $wordCount\n";
    echo "글자 수: $charCount\n";

    fclose($file);
} else {
    echo "파일을 열 수 없습니다."
}
?>