<?php 
	var_dump($_GET);
	$name = 'Alissa Stephens';
	$date = date('Y-m-d');
	$params = array(
	    'search'    => 'iphone 6',
	    'condition' => 'new',
	    'page'      => 5
	);
	$url = 'https://great-auctions.com/index.php?' . http_build_query($params);


	// outputs: https://great-auctions.com/index.php?search=iphone+6&condition=new&page=5
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET Requests</title>
</head>
<body>
	<a href="?name=<?= $name; ?>&date=<?= $date; ?>">My Name</a>
	<a href="http://example.com/index.php?var1=value1&var2=value2&var3=value3">--------</a>
	<a href="<?= $url ?>">Great Auctions</a>
	<form method="GET" action="https://duckduckgo.com/">
    <input type="text" name="q" value="" placeholder="Search DuckDuckGo">
    <button type="submit">Go!</button>
</form>
</body>
</html>