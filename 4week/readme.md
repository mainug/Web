# 4week

# p303

## open_challenge_06.html

![Alt text](images/image.png)

### 정수 7을 입력했을 경우

![Alt text](images/image-1.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>별 문자 출력하기</title>
    <script>
        function printStar() {
            return document.write('*');
        }
    </script>
</head>
<body>
    <h3>별 문자 출력하기</h3>
    <hr>
    <script>
        let star = prompt('정수를 입력하세요');
        let num = parseInt(star);
        if (isNaN(num) == true || star % 2 != 0 && star % 2 != 1) {
            document.write('입력 오류입니다.');
            exit;
        }

        for (let i = 1; i <= num; i++) {
            for (let j = 1; j <= i; j++) {
                printStar();
                if (j == i) {
                    document.write('<br>');
                }
            }
        }
    </script>
</body>
</html>
```

# p307

## prac6_01(1).html

![Alt text](images/image-2.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>자바스크립트 코드 위치</title>
</head>
<body>
    <h3>마우스를 올려 보세요</h3>
    <hr>
    <div onmouseover="this.style.background='yellow'"
    onmouseout="this.style.background='white'">
    여기에 마우스를 올리면 배경색이 노란색으로 변합니다.
    </div>
    <script>
        document.write('테스트');
    </script>
</body>
</html>
```

## prac6_01(2).html

![Alt text](images/image-3.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>자바스크립트 코드 위치</title>
</head>
<body>
    <h3>마우스를 올려 보세요</h3>
    <hr>
    <div onmouseover="this.style.background='yellow'"
        onmouseout="this.style.background='white'">
    여기에 마우스를 올리면 배경색이 노란색으로 변합니다.
    </div>
    <script src="6-1.js"></script>
</body>
</html>
```

## 6-1.js

### code

```js
document.write('테스트');
```

## prac6_02.html

![Alt text](images/image-4.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>document.write()</title>
</head>
<body>
    <script>
        document.write
        ('<h3>Welcome Home</h3>');
        document.write
        ('<hr>');
        document.write
        ('저희 홈 페이지 오신 것을 환영합니다.');
    </script>
</body>
</html>
```

## prac6_03(1).html

![Alt text](images/image-5.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>document.write()</title>
    <script>
        function printStar() {
            return document.write('*');
        }
    </script>   
</head>
<body>
    <script>
        let num = 5;

        for (let i = 1; i <= num; i++) {
            for (let j = 1; j <= i; j++) {
                printStar();
                if (j == i) {
                    document.write('<br>');
                }
            }
        }
    </script>
</body>
</html>
```

## prac6_03(2).html

![Alt text](images/image-6.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>document.write()</title>
</head>
<body>
    <script>
        document.write
        ('<h3>document.write()로 표만들기</h3>');
        document.write('<hr>');
        document.write('<table border="1">');
            document.write('<tr>');
                document.write('<th>n</th>');
                document.write('<td>0</td>');
                document.write('<td>1</td>');
                document.write('<td>2</td>');
                document.write('<td>3</td>');
                document.write('<td>4</td>');
                document.write('<td>5</td>');
                document.write('<td>6</td>');
                document.write('<td>7</td>');
                document.write('<td>8</td>');
                document.write('<td>9</td>');
            document.write('</tr>');
            document.write('<tr>');
                document.write('<th>n²</th>');
                document.write('<td>0</td>');
                document.write('<td>1</td>');
                document.write('<td>4</td>');
                document.write('<td>9</td>');
                document.write('<td>16</td>');
                document.write('<td>25</td>');
                document.write('<td>36</td>');
                document.write('<td>49</td>');
                document.write('<td>64</td>');
                document.write('<td>81</td>');
            document.write('</tr>');
    </script>
</body>
</html>
```

## prac6_04.html

![Alt text](images/image-7.png)

### '금'을 입력했을 경우

![Alt text](images/image-8.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>월화수목금토일</title>
</head>
<body>
    <h3>월화수목금토일</h3>
    <hr>
    <script>
        let day = prompt('월화수목금토일 중에서 입력하세요');

        if(day == '월' || day == '화' || day == '수' || day == '목') {
            document.write(day + '는 출근');
        }

        if(day == '금' || day == '토' || day == '일') {
            document.write(day + '는 휴일');
        }
    </script>
</body>
</html>
```

## prac6_05.html

![Alt text](images/image-9.png)

### 'you'를 입력했을 경우

![Alt text](images/image-10.png)

### 'you' 이외의 문자열을 입력했을 경우

![Alt text](images/image-11.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>암호를 입력하라!</title>
</head>
<body>
    <h3>암호를 입력하라!</h3>
    <hr>
    <script>
        let password = prompt('암호를 대라');

        if (password == 'you') {
            document.write('통과!');
        }
    </script>
</body>
</html>
```

# p309

## prac6_06(1).html

![Alt text](images/image-12.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>1</title>
</head>
<body>
    <script>
        function big(n, m) {
            var b;

            if(n <= m) {
                b = m;
            }
            if(n >= m) {
                b = n;
            }
            
            return b;
        }
    </script>
    <script>
        var b = big("625", "555");
        document.write("큰수=" + b);
    </script>
</body>
</html>
```

## prac6_06(2).html

![Alt text](images/image-13.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>2</title>
</head>
<body>
    <script>
        function pr(c, n) {
           for(let i = 0; i < n; i++) {
                document.write(c);
           }
        }
    </script>
    <script>
        pr("%", 5);
    </script>
</body>
</html>
```

## prac6_07.html

![Alt text](images/image-14.png)

### 5675를 입력했을 경우

![Alt text](images/image-15.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>큰 자리수와 낮은자리수 같은지 비교</title>
</head>
<body>
    <h3>큰 자리수와 낮은자리수 같은지 비교</h3>
    <hr>
    <script>
        let n = prompt('숫자 입력');
        let num = parseInt(n);

        if(num > 0) {
            let least = num % 10;
            let most = 0;
            
            while(num != 0) {
                most = n % 10;
                num = Math.floor(n / 10);
            }

            if(most == least) {
                document.write(n + ": 같음");
            } else {
                document.write(n + ": 다름");
            }
        }
    </script>
</body>
</html>
```

# p310

## prac6_08.html

![Alt text](images/image-16.png)

### '2+12*8-20/7' 입력했을 경우

![Alt text](images/image-17.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>eval()로 수식 계산</title>
</head>
<body>
    <h3>eval()로 수식 계산</h3>
    <hr>
    <script>
        let n = prompt('수식 입력');

        let m =eval(n);

        document.write(n + " = " + m);
    </script>
</body>
</html>
```

# p340

## open_challenge_07.html

![Alt text](images/image-18.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>배열로 리스트 만들기</title>
</head>
<body>
    <h3>라면을 만드는데 필요한 재료</h3>
    <hr>
    <script>
        var itemlist = ["라면", "계란", "물", "파"];
        document.write("<ul>");
            document.write("<li>");
                document.write(itemlist[0]);
            document.write("</li>");
            document.write("<li>");
                document.write(itemlist[1]);
            document.write("</li>");
            document.write("<li>");
                document.write(itemlist[2]);
            document.write("</li>");
            document.write("<li>");
                document.write(itemlist[3]);
            document.write("</li>");
        document.write("</ul>");
    </script>
</body>
</html>
```

# p343

## prac7_01.html

![Alt text](images/image-19.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>난수</title>
    <script>
        function rand(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    </script>
</head>
<body>
    <h3>난수 10 개 생성</h3>
    <hr>
    <script>
        var n=[];
        for(var i=0; i<10; i++) {
            n[i] = rand(1, 100);
        }
        for(var i=0; i<10; i++) {
            document.write(n[i] + "&nbsp");
        }
        document.write("<hr>");
        var big = n[0];
        for(var i=0; i<10; i++) {
            if(big < n[i]) {
                big = n[i];
            }
        }
        document.write("제일 큰 수는 " + big);
        document.write("<hr>");
        n.sort((a, b) => a - b);
        for(var i=0; i<10; i++) {
            document.write(n[i] + "&nbsp");
        }
    </script>
</body>
</html>
```

# p344

## prac7_02.html

![Alt text](images/image-20.png)

### 25, 6, 9, 88, 54 입력했을 경우

![Alt text](images/image-21.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>정수 5개 입력받아 역순으로 출력</title>
</head>
<body>
    <h3>정수 5개 입력받아 역순으로 출력</h3>
    <hr>
    <script>
        let n=[];
        for(let i=0; i<5; i++){
            let m = prompt('정수 입력');
            n[i] = m;
        }
        document.write("입력된 수의 배열<br>");
        for(let i=0; i<5; i++){
            document.write(n[i] + "&nbsp");
        }
        document.write("<hr>");
        n.reverse();
        document.write("역순으로 재정렬된 배열<br>");
        for(let i=0; i<5; i++){
            document.write(n[i] + "&nbsp");
        }
    </script>
</body>
</html>
```

## prac7_03.html

### 오전일 경우

![Alt text](images/image-23.png)

### 오후일 경우

![Alt text](images/image-22.png)

### code

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>방문 시간에 따라 변하는 배경색</title>
</head>
<body>
<h3>오전이면 lightskyblue, 오후이면 orange 배경</h3>
<hr>
<script>
	let current = new Date(); // 현재 시간 값을 가진 Date 객체 생성
	if(current.getHours() < 12)
		document.body.style.backgroundColor = "lightskyblue";
	else
		document.body.style.backgroundColor = "orange";

	document.write("현재 시간 : ");
	document.write(current.getHours(), "시,");
	document.write(current.getMinutes(), "분,");
	document.write(current.getSeconds(), "초<br>");
</script>
</body>
</html>
```

## prac7_04.html

### 일요일일 경우

![Alt text](images/image-25.png)

### 다른 요일일 경우

![Alt text](images/image-24.png)

### code

```html
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>방문 요일에 따라 변하는 배경색</title>
</head>
<body>
<h3>일요일은 pink, 다른 요일은 gold 배경</h3>
<hr>
<script>
	let current = new Date(); // 현재 시간 값을 가진 Date 객체 생성
    let c = "";
	if(current.getDay() == 0)
		document.body.style.backgroundColor = "pink";
	else
		document.body.style.backgroundColor = "gold";

    if(current.getDay() == 0)
        c = "일"
    if(current.getDay() == 1)
        c = "월"
    if(current.getDay() == 2)
        c = "화"
    if(current.getDay() == 3)
        c = "수"
    if(current.getDay() == 4)
        c = "목"
    if(current.getDay() == 5)
        c = "금"
    if(current.getDay() == 6)
        c = "토"

	document.write("오늘 : ");
	document.write(current.getDate(), "일,");
	document.write(c, "요일");
</script>
</body>
</html>
```

# p345

## prac7_05.html

![Alt text](images/image-26.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>문자열 배열 다루기</title>
    <script>
        function long() {

        }
    </script>
</head>
<body>
    <h3>문자열 배열 다루기</h3>
    <hr>
    <script>
        var names = new Array("wonsun", "jaemoonlee", "kitae", "gracehwang");
        document.write("이름 : ");
        for(var i=0; i<names.length; i++) {
            document.writeln(names[i]);
        }
        document.write("<br>");

        document.write("가장 긴 이름 : ");
        var long=names[0].length;
        var string = "";
        for(var i=0; i<names.length; i++) {
            if(long < names[i].length) {
                long = names[i].length;
                string = names[i];
            }
        }
        document.write(string);
        document.write("<br>");

        document.write("가장 먼저 나오는 이름 : ");
        names.sort();
        document.write(names[0]);
        document.write("<br>");
        
        document.write("증가순 이름 : ");
        for(var i=0; i<names.length; i++) {
            document.writeln(names[i]);
        }
    </script>
</body>
</html>
```

## prac7_06.html

![Alt text](images/image-28.png)

### 'query=java&id=5&who=kitae&target=_blank' 입력했을 경우

![Alt text](images/image-27.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>문자열 분할</title>
</head>
<body>
    <h3>문자열 분할</h3>
    <hr>
    <script>
        var s=prompt('문자열 입력');
        var a=s.split("&");
        for(var i=0; i<a.length; i++) {
            document.write(a[i]);
            document.write("<br>");
        }
    </script>
</body>
</html>
```

# p346

## prac7_07.html

![Alt text](images/image-29.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>17개의 CSS2 색이름과 색</title>
    <style>
        div {
            display : inline-block;
            width : 60px;
            padding : 10px;
        }
    </style>
</head>
<body>
    <h3>17개의 CSS2 색이름과 색</h3>
    <hr>
    <script>
        var colorNames = ["maroon", "red", "orange", "yellow", "olive", "purple", "fucsia", "white", "lime", "green", "navy", "blue", "aqua", "teal", "black", "silver", "gray"];
        document.write("<div style='background-color: maroon'>");
            document.write(colorNames[0]);
        document.write("</div>")
        document.write("<div style='background-color: red'>");
            document.write(colorNames[1]);
        document.write("</div>")
        document.write("<div style='background-color: orange'>");
            document.write(colorNames[2]);
        document.write("</div>")
        document.write("<div style='background-color: yellow'>");
            document.write(colorNames[3]);
        document.write("</div>")
        document.write("<div style='background-color: olive'>");
            document.write(colorNames[4]);
        document.write("</div>")
        document.write("<div style='background-color: purple'>");
            document.write(colorNames[5]);
        document.write("</div>")
        document.write("<div style='background-color: fuchsia'>");
            document.write(colorNames[6]);
        document.write("</div>")
        document.write("<div style='background-color: white'>");
            document.write(colorNames[7]);
        document.write("</div>")
        document.write("<div style='background-color: lime'>");
            document.write(colorNames[8]);
        document.write("</div>")
        document.write("<div style='background-color: green'>");
            document.write(colorNames[9]);
        document.write("</div>")
        document.write("<div style='background-color: navy'>");
            document.write(colorNames[10]);
        document.write("</div>")
        document.write("<div style='background-color: blue'>");
            document.write(colorNames[11]);
        document.write("</div>")
        document.write("<div style='background-color: aqua'>");
            document.write(colorNames[12]);
        document.write("</div>")
        document.write("<div style='background-color: teal'>");
            document.write(colorNames[13]);
        document.write("</div>")
        document.write("<div style='background-color: black'>");
            document.write(colorNames[14]);
        document.write("</div>")
        document.write("<div style='background-color: silver'>");
            document.write(colorNames[15]);
        document.write("</div>")
        document.write("<div style='background-color: gray'>");
            document.write(colorNames[16]);
        document.write("</div>")
    </script>
</body>
</html>
```

## prac7_08.html

![Alt text](images/image-30.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Math.random()으로 랜덤한 색 만들기</title>
    <style>
        div {
            display: inline-block;
            width: 150px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h3>16개의 랜덤한 색 만들기</h3>
    <hr>
    <script>
        var colorNames = [];
        for(var i=0; i<16; i++) {
            var r = Math.floor(Math.random()*256);
            var g = Math.floor(Math.random()*256);
            var b = Math.floor(Math.random()*256);
            colorNames[i] = ["rgb(" + r + "," + g + "," + b + ")"];
        }

        for(var i=0; i<16; i++) {
            document.write("<div style='background-color:"+colorNames[i]+"'>"+colorNames[i]+"</div>");
        }
    </script>
</body>
</html>
```

# p347

## prac7_09(1).html

![Alt text](images/image-31.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>book 객체 만들기</title>
</head>
<body>
    <h3>book 객체 만들기</h3>
    <hr>
    <script>
        var book = new Object();
        book.title = "HTML5";
        book.author = "황기태";
        book.price = 20000;
        document.write("book : ");
        document.write(book.title + ", ");
        document.write(book.author + ", ");
        document.write(book.price + "<br>");
    </script>
</body>
</html>
```

## prac7_09(2).html

![Alt text](images/image-32.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>book 객체 만들기</title>
</head>
<body>
    <h3>book 객체 만들기</h3>
    <hr>
    <script>
        var book = {title : "HTML5", author : "황기태", price : 20000};
        document.write("book : ");
        document.write(book.title + ", ");
        document.write(book.author + ", ");
        document.write(book.price + "<br>");
    </script>
</body>
</html>
```

## prac7_09(3).html

![Alt text](images/image-33.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>book 객체 만들기</title>
    <script>
        function Book() {
            this.title = "HTML5";
            this.author = "황기태";
            this.price = 20000;
        }
    </script>
</head>
<body>
    <h3>book 객체 만들기</h3>
    <hr>
    <script>
        var book = new Book();
        document.write("book : ");
        document.write(book.title + ", ");
        document.write(book.author + ", ");
        document.write(book.price + "<br>");
    </script>
</body>
</html>
```

## prac7_10.html

![Alt text](images/image-34.png)

![Alt text](images/image-35.png)

### code

```html
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>book 객체 배열 만들기</title>
</head>
<body>
    <h3>book 객체 배열 만들기</h3>
    <hr>
    <script>
        var arr = [];
        var high = 0;
        var highTitle;
        for(var i=0; i<5; i++) {
            arr[i] = prompt('콤마(,)로 분리하면서 책제목 저자 가격 순으로 입력');
            var string = arr[i].split(",");
            var book = new Object();
            book.title = string[0];
            book.author = string[1];
            book.price = string[2];
            if(book.price > high) {
                high = book.price;
                highTitle = book.title;
            }
        }
        for(var i=0; i<5; i++) {
            document.write(arr[i] + "<br>");
        }
        document.write("<hr>");
        document.write("가장 가격이 비싼 책은 " + highTitle);
    </script>
</body>
</html>
```