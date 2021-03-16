
<?php
//compare id and password

$conn = mysqli_connect("127.0.0.1", "root", "", "member");

// Bring password from DB and compare with hashedPassword
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
        // $_SESSION['userId'] = $row['id'];
        // print_r($_SESSION);
        // echo $_SESSION['userId']
    } else {
    }
} ?>
