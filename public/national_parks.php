<?php  
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', '');

require_once '../db_connect.php';

$parks = $dbc->query('SELECT * FROM national_parks')->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>National Parks</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
		body{
			width: 80%;
			margin-left: auto;
			margin-right: auto;
			padding-top: 4em;
		}
	</style>
	</head>
</head>
<body>
	<table class = 'table table-bordered'>
		<thead>
		    <tr>
		        <th>Name</th>
		        <th>Location</th>
		        <th>Date Established</th>
		        <th>Area (acres)</th>
		        <th>Description</th>
		    </tr>
		</thead>
		<tbody>
			<? foreach ($parks as $park): ?>
				<tr>
				    <td><?= $park['name']; ?></td>
				    <td><?= $park['location']; ?></td>
				    <td><?= $park['date_established']; ?></td>
				    <td><?= $park['area_in_acres']; ?></td>
				    <td><?= $park['description']; ?></td>
				</tr>
			<? endforeach; ?>
		</tbody>
	</table>
</body>
</html>