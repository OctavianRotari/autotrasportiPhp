<?php
$db['db_host']="localhost";
$db['db_user']="y31nln5c_octavia";
$db['db_password']="*SNP58NF5{}z";
$db['db_database']="y31nln5c_cms";

foreach($db as $key => $value) {
	define(strtoupper($key), $value);
}

$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

if(!$connection){
	die('Something went wrong ' . mysqli_error($connection));
}
?>