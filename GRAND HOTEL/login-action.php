<?php

$con = mysqli_connect('localhost', 'root', '', 'trials');

if(!$con)
{
  echo 'Not Connected to Server';

}
if(!mysqli_select_db($con,'trials'))
{
  echo 'Database Not Selected';
}
$Username = $_POST['username'];
$Password = $_POST['password'];

$sql = ("SELECT * FROM `try` WHERE username='$username' AND password='" . md5($password) ."'");

if(!mysqli_query($con,$sql))
{
  echo 'Not Inserted';
}
else
{
  echo 'Inserted';
}
header("Location:welcome.php");
?>




































