<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<h1 style="text-align:center;">THE GRAND HOTEL</h1>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body background="2020.jpg">
<?php
if (!isset($_SESSION['username'])) { ?>
<?php
if (isset($_GET['register_action'])) {
if ($_GET['register_action'] == "success") { ?>
<b>Registration was Successful</b>
<br>
<b>You Can Now Log In!</b>
<?php }
}
?>
<div class="wrapper">
	<h5>Register Now</h5>
<form method="post" action="register-action.php">
<label>Username:</label><br>
<input type="text" name="username" required/><br>
<label>Password:</label><br>
<input type="password" name="password" required /><br>
<label>Full Name:</label><br>
<input type="text" name="name" required/><br>
<input type="submit" value="Register" />
</form>
Already a member? Click <a href="index.php">here</a> to login.
<?php } else { ?>
You already logged in. Click <a href="logout.php">here</a> to logout.
<?php }
?>
</body>
</html>