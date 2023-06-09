<?php
$dbhost="localhost";
$dbname="project";
$dbuser="root";
$dbpass="root";
$connect=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$connect){
	echo 'ojoj error';
	exit;
}
?>