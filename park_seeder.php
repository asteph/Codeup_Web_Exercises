<?php 
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', '');

require_once 'db_connect.php';

$dbc->exec('TRUNCATE national_parks');

$parks = [
    ['name' => 'Acadia',   'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => 47389.67, 'description' => ''],
    ['name' => 'American Samoa',   'location' => 'American Samoa', 'date_established' => '1988-10-31', 'area_in_acres' => 9000.00, 'description' => ''],
    ['name' => 'Arches',   'location' => 'Utah', 'date_established' => '1929-04-12', 'area_in_acres' => 76518.98, 'description' => ''],
    ['name' => 'Badlands',   'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => 242755.94, 'description' => ''],
    ['name' => 'Big Bend',   'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => 801163.21, 'description' => ''],
    ['name' => 'Biscayne',   'location' => 'Florida', 'date_established' => '1980-06-28', 'area_in_acres' => 172924.07, 'description' => ''],
    ['name' => 'Bryce Canyon',   'location' => 'Utah', 'date_established' => '1928-02-25', 'area_in_acres' => 35835.08, 'description' => ''],
    ['name' => 'Canyonlands',   'location' => 'Utah', 'date_established' => '1964-09-26', 'area_in_acres' => 337597.83, 'description' => ''],
    ['name' => 'Congaree',   'location' => 'South Carolina', 'date_established' => '2003-11-10', 'area_in_acres' => 26545.86, 'description' => ''],
    ['name' => 'Denali',   'location' => 'Alaska', 'date_established' => '1917-02-26', 'area_in_acres' => 4740911.72, 'description' => '']
];
$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

foreach ($parks as $park) {
    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location',  $park['location'],  PDO::PARAM_STR);
    $stmt->bindValue(':date_established',  $park['date_established'],  PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres',  $park['area_in_acres'],  PDO::PARAM_STR);
    $stmt->bindValue(':description',  $park['description'],  PDO::PARAM_STR);

    $stmt->execute();
    
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;

}

// foreach ($parks as $park) {
//     $queryParks = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}', '{$park['description']}')";

//     $dbc->exec($queryParks);

//     echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
// }
