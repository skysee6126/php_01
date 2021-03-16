
<?php
//compare id and password

$conn = mysqli_connect("127.0.0.1", "root", "", "member");

$email = $_POST['email'];
$password = $_POST['password'];

// Bring to DB
$sql = "SELECT * FROM member WHERE email ='{$email}'";
$result = mysqli_query($conn, $sql);

// Bring password from DB and compare with hashedPassword
$row = mysqli_fetch_array($result);
$hashedPassword = $row['password'];
$row['id'];

foreach($row as $key => $r){
    echo "{$key} : {$r} <br>";
}

// Check the both password
$passwordResult = password_verify($password, $hashedPassword);
if ($passwordResult === true) {
    //  login successed case
    // Save ID to seeesion
    session_start();
    $_SESSION['userId'] = $row['id'];
    print_r($_SESSION);
    echo $_SESSION['userId'];
    
?>
    <script>
        alert("ログイン成功")
        location.href = "index.php";
    </script>
<?php
} else {
    // Login failed case
?>
    <script>
        alert("ログインできません");
    </script>
<?php
}
?>




<!-- version2
<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "member");

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$sql = "SELECT * FROM member WHERE email ='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if ($row != null){
  $hashedPassword = $row['password'];
  echo $row['password'];
  echo  $hashedPassword;
  if (password_verify($password, $hashedPassword)) {

        session_start();
        echo "success!";
        $_SESSION['userId'] = $row['id'];
        print_r($_SESSION);
        echo $_SESSION['userId']
    } else {
    }
} ?> -->
