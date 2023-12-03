# function.php 주석

```php
// PHP에서 세션을 시작하기 위해 사용되는 함수
// 함수 호출되면 PHP는 세션을 관리하기 위한 작업 수행, 세션 변수에 접근하고 값을 저장하거나 사용할 수 있음
// 1. 세션 식별자 확인: 클라이언트의 요청에 세션 식별자가 포함되어 있는지 확인, 세션 식별자는 일반적으로 쿠키에 저장됨
// 2. 새로운 세션 생성: 요청에 세션 식별자가 없는 경우, PHP는 새로운 세션을 생성하고 세션 식별자를 클라이언트에게 할당
// 이 식별자는 쿠키에 저장되어 다음 요청에서 사용
// 3. 기존 세션 로드: 요청에 세션 식별자가 있는 경우, PHP는 해당 식별자를 사용하여 기존 세션을 로드
// 이로 인해 이전에 저장된 세션 변수에 접근 가능
// 4. 세션 변수 사용: 세션을 시작한 후, $_SESSION 배열을 통해 세션 변수에 접근하고 값을 저장하거나 사용 가능
// 예를 들어, $_SESSION['username'] = 'john123';와 같이 세션 변수에 값을 저장할 수 있음
// 세션을 시작하기 위해 반드시 호출되어야 하므로, 보통 PHP 스크립트 파일의 가장 상단에 위치
session_start();

// 데이터베이스에 연결
$db = mysqli_connect('localhost', 'root', '', 'multi_login');

// 변수 선언
$username = "";
$email    = "";
$errors   = array(); // 오류 메세지를 저장할 배열

// 회원가입 버튼(register_btn)이 클릭된 경우 register() 함수 호출
if (isset($_POST['register_btn'])) {
        register();
}

// 회원가입 기능
function register(){

        // 함수 내에서 사용하기 위해 전역 변수로 선언된 변수들
        global $db, $errors, $username, $email;

        // 폼에서 입력된 값들을 받아옴 (e() 함수를 사용하여 이스케이프 처리)
        // POST 요청으로 전송된 데이터 중 'username', 'email', 'password_1', 'password_2'라는 키에 대응하는 값
        // e() 함수는 주어진 값을 HTML 특수 문자로 이스케이프하여 안전하게 처리하는 역할
        // 처리된 값을 $username 변수에 할당하여 나중에 사용할 수 있도록 준비
        $username    =  e($_POST['username']);
        $email       =  e($_POST['email']);
        $password_1  =  e($_POST['password_1']);
        $password_2  =  e($_POST['password_2']);

        // 폼 유효성 검사: 필수 항목이 비어있는지 확인
        if (empty($username)) { // $username 변수가 비어있으면 if문 들어감
                array_push($errors, "Username is required"); // 입력한 메세지를 $error 배열에 추가
        }
        if (empty($email)) { 
                array_push($errors, "Email is required"); 
        }
        if (empty($password_1)) { 
                array_push($errors, "Password is required"); 
        }
        if ($password_1 != $password_2) { // $password_1과 $password_2 변수 값이 서로 같지 않을 경우 if문 들어감
                array_push($errors, "The two passwords do not match");
        }

        // 폼에 오류가 없는 경우 회원 등록
        // count() 함수로 $error 배열의 요소 개수를 반환
        // 요소 개수를 가져온 후, '==' 비교 연산자를 사용하여 0과 비교
        if (count($errors) == 0) { 
                $password = md5($password_1); // 비밀번호를 암호화하여 데이터베이스에 저장

                // isset() 함수 이용해 POST 요청으로 전송된 데이터 중 'user_type'이라는 키가 설정되어 있는지 확인
                if (isset($_POST['user_type'])) { // 'user_type'이 설정되어 있다면 if문 들어가고 그렇지 않으면 else로 들어감
                        
                        // $_POST['user_type'] 변수의 값을 e() 함수를 이용하여 주어진 값을 HTML 특수 문자로 escape하여 안전하게 처리
                        // $_POST['user_type']은 POST 요청으로 전송된 데이터 중 'user_type'이라는 키에 대응하는 값을 의미
                        // 처리된 값을 $user_type 변수에 할당하여 나중에 사용
                        $user_type = e($_POST['user_type']);

                        // SQL 쿼리문
                        // 'user' 테이블에 새로운 사용자 정보를 삽입하는 INSERT 쿼리를 만드는 역할
                        // 'username', 'email', 'user_type', 'password'는 해당 변수들에 저장된 값을 사용하여 값을 채움
                        // 이 INSERT 쿼리문은 나중에 데이터베이스에서 실행되어 새로운 사용자 정보를 저장
                        $query = "INSERT INTO users (username, email, user_type, password) 
                                VALUES('$username', '$email', '$user_type', '$password')";
                        
                        // MySQL 데이터베이스에 쿼리를 실행하는 부분
                        // 이 코드는 $db 변수에 저장된 데이터베이스 연결 객체를 사용해 $query 변수에 저장된 SQL 쿼리를 실행하는 역할
                        // mysqli_query() 함수는 쿼리의 실행 결과를 반환
                        // INSERT 쿼리의 경우, 새로운 레코드가 성공적으로 삽입되면 true를 반환, 실패하면 false를 반환
                        // 쿼리의 성공 또는 실패 여부를 반환
                        mysqli_query($db, $query);

                        // 세션 변수 사용하여 메세지를 저장
                        // 사용자가 성공적으로 생성되었을 때 세션 변수에 메세지를 저장함
                        $_SESSION['success']  = "New user successfully created!!";

                        // 헤더 함수 사용하여 브라우저를 다른 페이지로 리다이렉트하는 역할을 수행
                        // 브라우저를 home.php라는 페이지로 리다이렉트하라는 의미
                        // header() 함수는 HTTP 헤더를 설정하는 역할
                        // location 헤더를 설정하여 브라우저에게 새로운 페이지로 이동하도록 지시
                        // 브라우저는 이 헤더를 받으면 지정되 URL(home.php)로 자동으로 이동
                        // 주의해야 할 점은 header() 함수를 사용하여 헤더를 설정하기 전에 아무런 출력이나 HTML 코드가 없어야 함
                        // 이유는 헤더는 페이지의 시작 부분에 위치해야 하기 때문
                        header('location: home.php');
                }else{
                        $query = "INSERT INTO users (username, email, user_type, password) 
                                VALUES('$username', '$email', 'user', '$password')";
                        mysqli_query($db, $query);

                        // 생성된 사용자의 ID를 가져옴
                        // mysqli_insert_id() 함수는 마지막으로 삽입된 행의 ID 값을 반환하는 함수
                        // 밑에 있는 코드에서 $db라는 데이터베이스 연결 객체를 사용하여 mysqli_insert_id() 함수를 호출하고, 그 결과를 $logged_in_user_id 변수에 저장
                        // 변수 안에는 데이터베이스에 방금 삽입된 사용자의 ID 값을 나타냄
                        // 새로운 사용자가 데이터베이스에 성공적으로 삽입되었을 때, 해당 사용자의 ID 값을 변수에 저장함
                        $logged_in_user_id = mysqli_insert_id($db);

                        $_SESSION['user'] = getUserById($logged_in_user_id); // 로그인된 사용자를 세션에 저장
                        $_SESSION['success']  = "You are now logged in";
                        header('location: index.php');                          
                }
        }
}

// ID를 기반으로 사용자 정보를 가져오는 함수
function getUserById($id){ // $id라는 매개변수는 가져올 사용자의 ID 값을 나타냄
        global $db; // $db 변수를 전역 범위에서 사용할 수 있도록 설정
        
        // query 변수에는 가져올 사용자 정보를 조회하기 위한 SQL 쿼리문이 저장됨
        // $db는 데이터베이스 연결 객체를 나타냄
        $query = "SELECT * FROM users WHERE id=" . $id; 
        $result = mysqli_query($db, $query); // 데이터베이스에 쿼리를 실행하고, 결과를 $result 변수에 저장
        $user = mysqli_fetch_assoc($result); // result에서 한 행의 데이터를 연관 배열 형태로 가져오고, 이를 $user 변수에 저장
        return $user;
}

// 문자열 이스케이프 함수
function e($val){ // $val이라는 매개변수를 받음, 이 매개변수는 이스케이프할 문자열 값을 나타냄
        global $db;

        // trim($val) 함수를 사용하여 주어진 값의 양쪽 공백을 제거, 문자열 값이 삽입되기 전에 불필요한 공백을 제거하기 위함
        // $val 값을 데이터베이스에 삽입하기 전에 이스케이프 처리
        // 데이터베이스에 삽입될 때 문제를 일으킬 수 있는 특수 문자를 이스케이프하여 안전하게 처리
        // 최종적으로 이스케이프된 값을 반환하여 호출한 곳으로 전달
        return mysqli_real_escape_string($db, trim($val));
}

// 오류 메세지 표시 함수
function display_error() {
        global $errors;

        if (count($errors) > 0){ // 오류 메시지가 하나 이상 존재하는지 확인
                echo '<div class="error">'; // 오류 메세지가 존재한다면, 오류를 표시하는 <div> 요소를 출력
                        foreach ($errors as $error){ // foreach문을 사용하여 $errors 배열의 각 요소에 대해 반복
                                echo $error .'<br>';
                        }
                echo '</div>';
        }
}

// 로그인 상태 확인 함수
function isLoggedIn()
{

        // $_SESSION['user'] 세션 변수의 존재 여부를 확인
        // 만약 $_SESSION['user'] 세션 변수가 존재한다면, 로그인 상태로 간주하여 true를 반환
        // 세션 변수가 존재하지 않는 경우, 로그인되지 않은 상태로 간주하여 false를 반환
        if (isset($_SESSION['user'])) {
                return true;
        }else{
                return false;
        }
}

// 로그아웃 처리
// URL 매개변수 중 logout이 존재하는지 확인
if (isset($_GET['logout'])) {
    session_destroy(); // session_destroy() 함수를 사용하여 현재 세션을 파기, 현재 세션에 저장된 모든 세션 데이터가 삭제
    unset($_SESSION['user']); // unset() 함수를 사용하여 $_SESSION['user'] 세션 변수를 제거
    header("location: login.php"); // 로그아웃 후, 사용자를 로그인 페이지(login.php)로 리디렉션함, 로그아웃 후에는 로그인 페이지로 돌아가도록 하는 역할
}

// 로그인 버튼(login_btn)이 클릭된 경우 login() 함수 호출
// login_btn이라는 이름의 폼 데이터가 전송되었는지 확인
// 사용자가 로그인 버튼을 클릭하면 로그인 처리를 수행하는 함수를 호출
if (isset($_POST['login_btn'])) {
    login();
}

// 로그인 기능
function login(){
    global $db, $username, $errors;

    // 폼에서 값 가져오기
    $username = e($_POST['username']);
    $password = e($_POST['password']);

    // 폼이 올바르게 작성되었는지 확인
    if (empty($username)) {
            array_push($errors, "Username is required");
    }
    if (empty($password)) {
            array_push($errors, "Password is required");
    }

    // 폼에 오류가 없는 경우 로그인 시도
    if (count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) { // 사용자가 존재하는 경우
                // 사용자가 관리자인지 확인
                $logged_in_user = mysqli_fetch_assoc($results);
                if ($logged_in_user['user_type'] == 'admin') {
                        $_SESSION['user'] = $logged_in_user;
                        $_SESSION['success']  = "You are now logged in";
                        header('location: admin/home.php');               
                }else{
                        $_SESSION['user'] = $logged_in_user;
                        $_SESSION['success']  = "You are now logged in";
                        header('location: index.php');
                }
        }else {
                array_push($errors, "Wrong username/password combination");
        }
    }
}

// 관리자 여부 확인 함수
function isAdmin()
{       
        
        // $_SESSION['user'] 세션 변수의 존재 여부를 확인
        // 또한, $_SESSION['user']['user_type'] == 'admin'으로 user_type이 'admin'인지 확인
        if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
                return true; // 세션 변수가 존재하고, 해당 사용자의 user_type이 'admin'인 경우, 관리자로 간주하여 true를 반환
        }else{
                return false; // 세션 변수가 존재하지 않거나, 해당 사용자의 user_type이 'admin'이 아닌 경우, 관리자가 아닌 것으로 간주하여 false를 반환
        }
}
```
