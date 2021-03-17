<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
try {
  $pdo = new PDO("mysql:host=127.0.0.1; dbname=member; charset=utf8", "root", "");
  //tryの中に入れる
  $sql = "SELECT * FROM member WHERE email = :email";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(":email", $email);
  // $stmt -> bindValue(":password", $password); //たぶん抽出条件にこれ入れたらだめ
  $stmt->execute();
  $row = $stmt->fetch();
  echo $password;
  print_r( $row(['password']));

    //認証処理
    if(password_verify($password, $row['password'])){
        print '認証成功';
    }else{
        print '認証失敗';
    }
    if ($stmt == false) {
    $error = $stmt->errprInfo();
    exit("QueryError:".$error[2]);
}
} catch (PDOException $e) {
    exit('DbConnectError'.$e->getMessage());
}

?>
