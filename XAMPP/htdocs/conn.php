<?php
$dbhost="localhost";
$dbname="projekt";
$dbuser="root";
$dbpass="root";
$connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$connect){
	echo 'ojoj error';
	exit;
}
?>