<?php 
	session_start();
	$moviesArray = array();
	//look at posted information
	var_dump($_POST);
	//if delete has been pressed, delete movie associated with that button	
	if(isset($_POST['delete'])){
		$position = (int)$_POST['delete'];
		$_SESSION['movies'] = array_splice($_SESSION['movies'], $position , 1);
		var_dump($_SESSION['movies']);
		unset($_POST['delete']);
	}
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
	    <form method = "POST">
        	<input type="submit" name="delete" value="<?= $key ?>" />
    	</form>
	<? endforeach; ?>
	</ul>
</body>
</html>