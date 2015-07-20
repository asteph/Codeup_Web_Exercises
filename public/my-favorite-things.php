<?php  

$favorites = ['The Fam Bam', 'The Outdoors', 'The Flying', 'The Literature', 'The Music'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Favorites</title>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Berkshire+Swash" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<style>
	body{
		margin: 30px;
		text-align: center;
		font-family: 'Open Sans', sans-serif;
		font-size: 1.5em;
	}
	h1{
		font: 400 3.5em/125% 'Berkshire Swash', Helvetica, Sans-serif;
		line-height: 2em;
	}
	table{
		margin-left: auto;
		margin-right: auto;
		width: 400px;
		border-collapse: collapse;
		text-align: center;
	}
	td{
		border: solid black 1px;
	}
	</style>
</head>
<body>
	<h1>Top 5 Favorite Things</h1>
	<table>
	<?php foreach($favorites as $key => $favorite){ ?>
		<tr>
		<?php if($key % 2 == 0){?>
			<td>
		<?php } else {?>
			<td style="background-color: #F1F1F1">
		<?php } ?>		
		<?php echo $favorite ?></td></tr>
	<?php } ?> 
	</table>
</body>
</html>