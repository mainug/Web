# 1. 동적 웹페이지와 정적 웹페이지의 차이를 설명하시오

웹페이지의 내용이 업데이트되는 방식에 차이가 있다

정적 웹페이지는 서버에서 클라이언트에게 전달괴면 그 내용이 변하지 않는다
사용자가 해당 웹페이지를 요청할 때마다 항상 동일한 내용을 표시한다

동적 웹페이지는 서버에서 요청을 받은 후에 서버에서 동적으로 페이지의 내용을 생성하여 클라이언트에게 전달한다


# 2. PHP에 설치된 모듈(20개)은 어떤 것이 있는지 조사하시오

1) mysqli
2) PDO
3) gd
4) curl
5) json
6) xml
7) SPL
8) zip
9) mbstring
10) ftp
11) bcmath
12) bz2
13) Core
14) ctype
15) dom
16) hash
17) session
18) xsl
19) standard
20) tokenizer


# 3. PHP에서 사용되는 스크립트 엔진에 대해 기술하시오

### 1) Zend Engine
PHP의 공식 스크립트 엔진, C로 작성되었다
PHP 4 이후로 사용되어 왔으며, PHP 5 부터는 Zend Engine 2로 업그레이드 되었다

### 2) PHP-FPM (FastCGI Process Manager)
FastCGI 프로토콜을 사용하여 PHP를 처리하는 스크립트 엔진이다
별도의 프로세스 매니저로 동작하여 PHP 코드를 처리하고, 웹 서버와 통신하여 동적 웹페이지를 생성한다

### 3) HHVM (HipHop Virtual Machine)
Facebook에서 개발한 PHP 스크립트 엔진으로, JIT(Just-In-Time) 컴파일러를 사용하여 더 높은 실행 성능을 제공한다
PHP 5 및 PHP 7의 대부분의 기능을 지원하며, 페이스북과 같은 대규모 웹 애플리케이션에서 사용된다

### 4) PHPNG (PHP Next-Generation)
PHP 7 이후의 버전에서 사용되는 스크립트 엔진이다
이전 버전에 비해 더 빠른 실행 속도와 낮은 메모리 사용량을 제공하여 성능을 향상시켰다


# 4. 웹 브라우저에서 http://www.abc.com/abc.php 페이지를 접속했을 때, 서버는 어떠한 일을 수행하는가?

### 1) HTTP 요청 수신
서버는 웹 브라우저로부터 HTTP 요청을 수신한다
이 요청은 웹 브라우저가 서버에게 특정 페이지(abc.php)를 요청하는 것을 의미한다

### 2) 요청 처리
서버는 받은 HTTP 요청을 처리한다
이 과정에서 서버는 요청된 페이지(abc.php)를 찾아 해당 파일을 실행하기 위해 필요한 작업을 수행한다

### 3) 서버 사이드 스크립트 실행
abc.php 파일은 서버 사이드 스크립트로 작성된 파일일 수 있다
서버는 해당 파일을 서버 사이드 스크립트 엔진을 통해 해석하고 실행한다
이를 통해 서버는 동적으로 웹페이지를 생성하거나 데이터베이스와 상호작용할 수 있다

### 4) 응답 생성
서버는 실행된 서버 사이드 스크립트를 통해 동적으로 생성된 웹페이지나 데이터를 기반으로 HTTP 응답을 생성한다

### 5) HTTP 응답 전송
서버는 생성된 HTTP 응답을 웹 브라우저에 전송한다
이 응답은 웹 브라우저에게 요청된 페이지의 내용을 포함하며, 웹 브라우저는 해당 내용을 해석하여 사용자에게 웹페이지를 표시한다


# 5. call by value와 call by reference의 차이점에 대해 기술하시오

### 1) call by value (값에 의한 호출)
- 함수에 인자로 전달되는 값의 복사본이 생성되어 전달된다
- 함수 내에서 전달받은 값의 변경이 함수 외부에 영향을 주지 않는다
- 함수 내부에서 인자의 값을 변경해도 함수 외부의 변수에는 영향을 주지 않는다
- 일반적으로 기본 데이터 타입(정수, 실수, 불리언 등)의 인자 전달에 사용된다

### 2) call by reference (참조에 의한 호출)
- 함수에 인자로 전달되는 변수의 메모리 주소(참조)가 전달된다
- 함수 내에서 전달받은 변수의 값 변경이 함수 외부의 변수에도 영향을 준다
- 함수 내부에서 인자의 값을 변경하면 함수 외부의 변수도 변경된다
- 일반적으로 배열, 객체와 같은 복합 데이터 타입의 인자 전달에 사용된다


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