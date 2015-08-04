<?php  
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', '');

require_once '../db_connect.php';
require_once '../Input.php';
$limit = 4;
$lastPage = ceil(($dbc->query('SELECT count(*) FROM national_parks')->fetchColumn())/$limit);
$page = Input::has('page')? Input::get('page') : 1;
$nextPage = $page + 1; 
$previousPage = $page - 1; 
$offset = ($page - 1) * 4; //page number determines how much offset there is
$parks = $dbc->prepare("SELECT * FROM national_parks LIMIT :limit OFFSET :offset");
$parks->bindValue(':limit', $limit, PDO::PARAM_INT);
$parks->bindValue(':offset', $offset, PDO::PARAM_INT);
$parks->execute();
$parkInfo = $parks->fetchAll(PDO::FETCH_ASSOC);

$newPark = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');
if (Input::has('name') && Input::has('location') && Input::has('date_established') && Input::has('area_in_acres') && Input::has('description')){
	$newPark->bindValue(':name', Input::get('name'), PDO::PARAM_STR);
    $newPark->bindValue(':location',  Input::get('location'),  PDO::PARAM_STR);
    $newPark->bindValue(':date_established',  Input::get('date_established'),  PDO::PARAM_STR);
    $newPark->bindValue(':area_in_acres',  Input::get('area_in_acres'),  PDO::PARAM_INT);
    $newPark->bindValue(':description',  Input::get('description'),  PDO::PARAM_STR);
    $newPark->execute();
}

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
			margin-bottom: 4em;
			padding-top: 4em;
		}
		form{
			margin-top: 4em;
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
			<? foreach ($parkInfo as $park): ?>
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
	<?php if($page != 1): ?>
		<a href="?page=<?= $previousPage ?>" class="btn btn-default">PREVIOUS</a>
	<?php endif; ?>
	<?php if($page < $lastPage): ?>
	<a href="?page=<?= $nextPage ?>" class="btn btn-default">NEXT</a>
	<?php endif; ?>

	<form role="form">
	  <div class="form-group">
	    <label for="name">Park Name:</label>
	    <input name="name" type="text" class="form-control" id="name">
	  </div>
	  <div class="form-group">
	    <label for="location">Location:</label>
	    <input name="location" type="text" class="form-control" id="location">
	  </div>
	  <div class="form-group">
	    <label for="date_established">Date Established:</label>
	    <input name="date_established" type="text" class="form-control" id="date-est">
	  </div>
	  <div class="form-group">
	    <label for="Area">Area in Acres:</label>
	    <input name="area_in_acres" type="text" class="form-control" id="Area">
	  </div>
	  <div class="form-group">
	    <label for="description">Description:</label>
	    <input name="description" type="textarea" class="form-control" id="description">
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>
</body>
</html>