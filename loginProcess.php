<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "member");

//아이디 비교와 비밀번호 비교가 필요한 시점이다.
// 1차로 DB에서 비밀번호를 가져온다 
// 평문의 비밀번호와 암호화된 비밀번호를 비교해서 검증한다.

$email = $_POST['email'];
$password = $_POST['password'];

// DB 정보 가져오기 
$sql = "SELECT * FROM member WHERE email ='{$email}'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
$hashedPassword = $row['password'];
$row['email'];

foreach($row as $key => $r){
    echo "{$key} : {$r} <br>";
}
// echo $row['email'];
// echo $row['password'];

if ($_POST['email'] == $key && $_POST['password'] == $r ) {
    session_start();
    $_SESSION['userId'] = $row['email'];
    print_r($_SESSION);
    echo $_SESSION['userId'];
    
?>
    <script>
        alert("로그인에 성공하였습니다.")
        location.href = "index.php";
    </script>
<?php
} else {
    // 로그인 실패 
?>
    <script>
        alert("로그인에 실패하였습니다");
    </script>
<?php
}
?>
