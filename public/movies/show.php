<?php  
	session_start();
	if(isset($_GET['index']) && !empty($_SESSION['movies'][$_GET['index']])){
		$movieInfo = $_SESSION['movies'][$_GET['index']];
		$title = $movieInfo['title'];
		$description = $movieInfo['description'];
	}else{
		header('Location: index.php');
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Movie Info</title>
</head>
<body>
	<h1><?= $title; ?></h1>
	<p><?= $description; ?></p>
</body>
</html>