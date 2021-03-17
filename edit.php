<?php


$db = mysqli_connect("localhost","root","","list");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}


$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from list where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $item = $_POST['item'];
    $quantity = $_POST['quantity'];
    $expiration = $_POST['expiration'];
	
    $edit = mysqli_query($db,"update list set item='$item', quantity='$quantity', expiration='$expiration' where id='$id'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:mypage.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="item" value="<?= $data['item'] ?>" placeholder="Enter" Required>
  <input type="number" name="quantity" value="<?= $data['quantity'] ?>" placeholder="Enter" Required>
  <input type="data" name="expiration" value="<?= $data['expiration'] ?>" placeholder="Enter" Required>
  <input type="submit" name="update" value="Update">
</form>
