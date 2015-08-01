<?php 
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', '');

require_once 'db_connect.php';

// Create the query and assign to var
$createTable = 
	'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established DATE NOT NULL,
    area_in_acres DOUBLE(12,2) NOT NULL,
    PRIMARY KEY (id))';
// delete table if exists
$dbc->exec('DROP TABLE IF EXISTS `national_parks`');
// Run query, if there are errors they will be thrown as PDOExceptions
$dbc->exec($createTable);