<?php
var_dump($_POST);

$request = isset($_POST['search']) ? urlencode($_POST['search']) : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Link</title>
</head>
<body>
	<h1>Search for:</h1>
	<form method="POST">
	    <label>Search for?</label>
	    <input type="text" name="search">
	    <input type="submit">
	</form>
	<a href="https://duckduckgo.com/?q=<?= $request ?>">Go there now</a>
</body>
</html>