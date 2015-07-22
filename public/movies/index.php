<?php 
	session_start();
	$moviesArray = array();
	var_dump($_POST);
	// check to see if there are any movies
	if (!empty($_SESSION['movies'])) {
	    $moviesArray = $_SESSION['movies'];
	}
	if(!empty($_POST)){
		$moviesArray[] = $_POST;
	}
	$_SESSION['movies'] = $moviesArray;
	var_dump($_SESSION);
	var_dump($moviesArray);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Movies Index</title>
</head>
<body>
	<form method="POST">
        <label>Movie Title</label>
        <input type="text" name="title"><br>
        <label>Description</label>
        <input type="text" name="description"><br>
        <input type="submit">
    </form>
	<a href="logout.php">logout</a>
    <br>
    <h1>Movies</h1>
    <ol>
    <? foreach($moviesArray as $key => $movie): ?>
    	<li>
    	<a href="show.php?index=<?= $key ?>"><?= $movie['title']?></a>
    	</li>
	<? endforeach; ?>
	</ul>
</body>
</html>