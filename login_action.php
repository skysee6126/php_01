<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];


try {
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=list;charset=utf8", "root", "");
} catch (PDOExcetion $e) {
    exit('DbConnectError'.$e->getMessage());
}

$sql = "SELECT * FROM member WHERE email = :email and password = :password";
$stmt = $pdo->prepare($sql);
$stmt -> bindValue(":email", $email);
$stmt -> bindValue(":password", $password);
$res = $stmt -> execute();

if ($res == false) {
    $error = $stmt->errprInfo();
    exit("QueryError:".$error[2]);
}

$val = $stmt->fetch();

if ($val["id"] != "") {
    $_SESSION['chk_ssid'] = session_id();
    $_SESSION['email'] = $val['email'];
    header("Location: keep.php");
} else {
    header("Location: login.php");
}
exit();

?>
