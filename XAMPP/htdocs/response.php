<?php
//include connection file 
error_reporting(E_ERROR | E_PARSE);
include_once("connect/db_cls_connect.php");
$db = new dbObj();
$connString =  $db->getConnstring();

$params = $_REQUEST;
$action = $params['action'] !='' ? $params['action'] : '';
$empCls = new Employee($connString);

switch($action) {
 case 'login':
	$empCls->login();
 break;
 case 'logout':
	$empCls->logout();
 break;
 case 'register':
	$empCls->register();
 break;
 default:
 return;
}


class Employee {
	protected $conn;
	protected $data = array();
	function __construct($connString) {
		$this->conn = $connString;
	}
	
	function login() {
		if(isset($_POST['login-submit'])) {
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);
			$sql = "SELECT id_uzytkownika, username, password FROM logowanie WHERE username='$username'";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$row = mysqli_fetch_assoc($resultset);
			if($password == $row['password']){
				echo "1";
				$_SESSION['user_session'] = $row['username'];
			} else {
				echo "Ohhh ! Wrong Credential."; // wrong details
			}
		}
	}

	function register() {
		if(isset($_POST['register-submit'])) {
			$username = trim($_POST['username']);
			$password = trim($_POST['password']);
			$sql = "SELECT id_uzytkownika, username, password FROM logowanie WHERE username='$username'";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$row = mysqli_fetch_assoc($resultset);
			if($username == $row['username']){
				echo "Oh no, this username already exist";
			} else {
				$sql2 = "INSERT INTO logowanie (username,password) VALUES ('$username','$password')";
				$resultset = mysqli_query($this->conn, $sql2) or die("database error:". mysqli_error($this->conn));
				//$row = mysqli_fetch_assoc($resultset);
				echo "1";
			}
		}
	}

	function logout() {
		unset($_SESSION['user_session']);
		if(session_destroy()) {
			header("Location: Strona_główna+logowanie.php");
		}
	}
}
?>
	