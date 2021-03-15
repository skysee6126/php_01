<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "member");

$hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
echo $hashedPassword;
$sql = "
    INSERT INTO member
    (email, password)
    VALUES('{$_POST['email']}', '{$hashedPassword}'
    )";
echo $sql;
$result = mysqli_query($conn, $sql);

if ($result === false) {
    echo "저장에 문제가 생겼습니다. 관리자에게 문의해주세요.";
    echo mysqli_error($conn);
} else {
    session_start();
        $_SESSION['userId'] = $_POST['email'];
        print_r($_SESSION);
        echo $_SESSION['userId'];

?>
    <script>
        alert("회원가입이 완료되었습니다");
        location.href = "index.php";
        
    </script>
<?php
}
?>
