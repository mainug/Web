http://mainug.dothome.co.kr/

# problem_1 code

```php
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
```


# problem_2 code

```php
function revsort(&$array) {
    sort($array);
    $array = array_reverse($array);
}

$number = [5, 2, 8, 1, 9];

revsort($number);

print_r($number);
```


# problem_3 code

```php
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
    echo "파일을 열 수 없습니다.";
}
```


# problem_4 code

```php
$data = array(
    'Kim' => 'Seoul',
    'Lee' => 'Pusan, Daegu',
    'Choi' => 'Inchon',
    'Park' => 'Suwon, Daejon',
    'Jung' => 'Kwangju, Chunchon, Wonju'
);

unset($data['Choi']);

foreach ($data as $name => $cities) {
    echo $name . ': ' . $cities . "";
}
```


# problem_5 code

```php
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
    echo "파일을 열 수 없습니다.";
}
```
