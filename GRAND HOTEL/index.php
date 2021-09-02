<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<h1 style="text-align:center;">THE GRAND HOTEL</h1>
<meta charset="UTF-8">
<title>Simple Login & Registration in PHP & MYSQL</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="2020.jpg">
<?php
if (!isset($_SESSION['username'])) ?>
	<div class="wrapper">
<h5>Login</h5>
<form method="post" action="login-action.php">
<label>Username:</label><br>
<input type="text" name="username" required/><br>
<label>Password:</label><br>
<input type="password" name="password" required /><br>
<input type="submit" value="Login" />
</form>
<div class="bottom-text">
	<input type="checkbox" name="remember" checked="checked"> Remember Me
<a href="#">forgot password</a>
</div>
Not a member yet? Click <a href="registration.php">here</a> to register.
<?php 
 //else if (isset($_SESSION['username'])) { ?>
<?php 
//echo $_SESSION['username'] ?> | <a href="logout.php">Logout</a>
<?php 
?>
</body>
</html>
