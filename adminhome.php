<?php
session_start();


if(!isset($_SESSION["email"]))
{
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>THIS IS ADMIN HOME PAGE</h1><?php echo $_SESSION["email"] ?>

<a href="logout.php">Logout</a>
</body>
</html>
