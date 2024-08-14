<?php

session_start();

if(!isset($_SESSION['username']))
{
header("location:login.php");
}

elseif($_SESSION['usertype']=='student')
{
	header("location:login.php");
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>
</head>
<body>
	<h1>Admin home</h1>
	<a href="logout.php">Logout</a>
</body>
</html>