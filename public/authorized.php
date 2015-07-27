<?php
require_once '../Input.php';
require_once '../Auth.php';
	session_start();
	if($_SESSION['loggedIn'] != 'true'){
		header('Location: login.php');
		} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Authorized</title>
</head>
<body>
	<h1>Authorized</h1>
	<a href="logout.php">logout</a>
</body>
</html>