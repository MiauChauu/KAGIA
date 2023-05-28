<?php
//include connection file 
error_reporting(E_ERROR | E_PARSE);
include_once("connect/db_cls_connect.php");
$db = new dbObj();
$connString =  $db->getConnstring();

$params = $_REQUEST;
$action = $params['action'] !='' ? $params['action'] : '';
$empCls = new Infos($connString);

switch($action) {
 case 'set_everything':
	$empCls->setEverything();
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
	
	function setEverything() {
			$username = trim($_SESSION['user_session']);
			$password = trim($_POST['password']);
			$p_pic = $_POST['p_pic'];
			$p_bg = $_POST['p_bg'];
			$sql = "SELECT id_uzytkownika, username, password, profile_picture, profile_background FROM logowanie WHERE username='$username'";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$row = mysqli_fetch_assoc($resultset);
			if($p_pic == '')
			{
				$p_pic=$row['profile_picture'];
			}
			if($p_bg == '')
			{
				$p_bg=$row['profile_background'];
			}
			$sql = "UPDATE logowanie SET profile_picture='$p_pic', profile_background='$p_bg' WHERE username='$username'";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			//$row = mysqli_fetch_assoc($resultset);
	}
	
}
?>
	