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
 case 'restore':
	$empCls->restore();
 break;
 case 'change':
	$empCls->change();
 break;
 case 'purchase':
	$empCls->purchase();
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
			$question = trim($_POST['question']);
			$answer = trim($_POST['answer']);
			$sql = "SELECT id_uzytkownika, username, password FROM logowanie WHERE username='$username'";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$row = mysqli_fetch_assoc($resultset);
			if($username == $row['username']){
				echo "Oh no, this username already exist";
			} else {
				$sql2 = "INSERT INTO logowanie (username,password,question_id,answer) VALUES ('$username','$password','$question','$answer')";
				$resultset = mysqli_query($this->conn, $sql2) or die("database error:". mysqli_error($this->conn));
				//$row = mysqli_fetch_assoc($resultset);
				echo "1";
			}
		}
	}

	function restore() {
		if(isset($_POST['restore-submit'])) {
			if(trim($_POST['usercheck']=="0")){
				$usercheck= trim($_POST['usercheck']);
				$username = trim($_POST['username']);
				$sql = "SELECT id_uzytkownika, username, password, question_id FROM logowanie INNER JOIN pytania ON logowanie.question_id=pytania.id WHERE username='$username'";
				$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
				$row = mysqli_fetch_assoc($resultset);
				$question = $row['question_id'];
				if(mysqli_num_rows($resultset)>0){
					echo "$question";
				} else {
					echo "error1";
				}
			} else if(trim($_POST['usercheck']=="1")){
				$username = trim($_POST['username']);
				$answer = trim($_POST['useranswer']);
				$sql = "SELECT id_uzytkownika, username, password, answer FROM logowanie WHERE username='$username'";
				$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
				$row = mysqli_fetch_assoc($resultset);
				$goodanswer = $row['answer'];
				if($goodanswer===$answer){
					echo "success";
				} else {
					echo "error2, $goodanswer";
				}
			}
		}
	}

	function change() {
		if(isset($_POST['change-submit'])) {
			$username = trim($_POST['usernamecheck']);
			$password1 = trim($_POST['password1']);
			$password2 = trim($_POST['password2']);
			$sql = "UPDATE logowanie SET password = '$password1' WHERE username = '$username'";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			echo "$resultset";
		}
	}

	function purchase() {
		if(isset($_POST['purchase-submit'])) {
			$offer_id = trim($_POST['offer_id']);
			$sql = "SELECT klucz FROM oferty WHERE id_oferty = '$offer_id'";
			$resultset = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$row = mysqli_fetch_assoc($resultset);
			$key = $row['klucz'];
			//$sql2 = "DELETE FROM oferty WHERE id_oferty = '$offer_id'";
			//$resultset2 = mysqli_query($this->conn, $sql2) or die("database error:". mysqli_error($this->conn));
			echo "$key";
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
	