<?php
//include connection file 
error_reporting(E_ERROR | E_PARSE);
include_once("connect/db_cls_connect.php");
//include_once("connect/db_connect_table_values.php");
$db = new dbObj();
$connString =  $db->getConnstring();

$params = $_REQUEST;
$action = $params['action'] !='' ? $params['action'] : '';
$empCls = new Infos($connString);

switch($action) {
 case 'get_profile_picture':
	$empCls->getProfilePicture();
 break;
 case 'get_profile_background':
	$empCls->getProfileBackground();
 break;
 default:
 return;
}


class Infos{
	protected $conn;
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}
	
	function getProfilePicture() {
			$username = trim($_SESSION['user_session']);
			$password = trim($_POST['password']);
			$sql = "SELECT id_uzytkownika, username, password, profile_picture, profile_background FROM logowanie WHERE username='$username'";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$row = mysqli_fetch_assoc($resultset);
			echo $row['profile_picture'];
			
	}
	
	function getProfileBackground() {
			$username = trim($_SESSION['user_session']);
			$password = trim($_POST['password']);
			$sql = "SELECT id_uzytkownika, username, password, profile_picture, profile_background FROM logowanie WHERE username='$username'";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$row = mysqli_fetch_assoc($resultset);
			echo $row['profile_background'];
			
	}
}
?>
	