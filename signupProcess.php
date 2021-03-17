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
    echo "Please contact host to solve the issue";
    echo mysqli_error($conn);
} else {
    session_start();
        $_SESSION['userId'] = $_POST['email'];
        $_SESSION['chk_ssid'] = session_id();
        // print_r($_SESSION);
        // echo $_SESSION['userId'];

?>
    <script>
        alert("会員登録が完了しました");
        location.href = "index.php";
        
    </script>
<?php
}
?>
