<?php
	session_start();

$db=mysqli_connect("localhost","root","","login");
mysqli_set_charset($db,'utf8');

if(!$db)
{
  die("connection failed: ".mysqli_connect_error());
}
$name=$_POST['name'];
$email = $_POST['email'];
$mobile=$_POST['mobile'];
$password = $_POST['password'];
$sql="INSERT INTO users (username,email,mobile,password) VALUES ('".$name."','".$email."','".$mobile."','".$password."')";
if (mysqli_query($db,$sql)) {
    echo "New record created successfully"; 
    $sql1="select id from users where email='".$email."' and password='".$password."'";
    $res1=mysqli_query($db,$sql1);
    if($row=mysqli_fetch_assoc($res1)){
     $_SESSION['id'] = $row['id'];
     header("Location: afterlogin.php");  
    }
}
else {
    echo "Error: username or email already taken<br>" . mysqli_error($db);
}

mysqli_close($db);

?>