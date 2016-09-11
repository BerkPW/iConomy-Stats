<?php

$set = array(
	'site_name' => 'iConomy Stats',
	'table_limit' => '10' /* Table line limit */,
	'head' => '1', /* 1 = Player Head [ON] || 0 = Player Head [OFF] */
	'mysql' => array(
		'host' => 'localhost',
		'username' => 'root',
		'password' => 'root',
		'database' => 'stt',
	)
);

#######################
## Database Settings ##
#######################

//Error Reporting
error_reporting(0);

$host = $set["mysql"]["host"];
$username = $set["mysql"]["username"];
$password = $set["mysql"]["password"];
$database = $set["mysql"]["database"];

try {
     $db = new PDO("mysql:host=$host;dbname=$database", "$username", "$password");
     $db->query("SET CHARACTER SET uf8");
} catch ( PDOException $e ){
     print $e->getMessage();
     die();
}

?>