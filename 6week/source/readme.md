http://mainug.dothome.co.kr/phptest/

# problem_1 code

```php
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
```


# problem_2 code

```php
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
```


# problem_3 code

```php
$value = 12;
$result = ($value % 2 == 1) ? "odd" : "even";
echo $result;
```
