<?php
	session_start();

$db=mysqli_connect("localhost","root","","login");
mysqli_set_charset($db,'utf8');

if(!$db)
{
  die("connection failed: ".mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql="select * from users where email='".$email."' and password='".$password."'";

$res=mysqli_query($db,$sql);

if(!$row=mysqli_fetch_assoc($res))
{
	echo "Your username or password is incorrect";
}
else
{
    $_SESSION['id'] = $row['id'];
    header("Location: afterlogin.php");
}

?>