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
 case 'getGame':
	$empCls->getGame();
 break;
 case 'sendGame';
	$empCls->sendGame();
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
	
	function getGame() {
			$gamename = trim($_POST['gamename']);
			if($gamename==""){
				echo "1";
			} else {
			$sql = "SELECT id_gry, nazwa_gry FROM gry WHERE nazwa_gry LIKE '%$gamename%'";
			$results = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			//$userData = mysql_fetch_array($results, MYSQL_ASSOC);

			$resultset = array();
			while ($row = mysqli_fetch_assoc($results)) {
			  $resultset[] = $row['nazwa_gry'];
			}

			// $resultset now holds all rows from the first query.
			//foreach ($resultset as $result){
			 //... etc...
				
			//$row = mysqli_fetch_assoc($resultset);
			$resultset = json_encode($resultset);
			echo $resultset;
			}
			
	}
	
	function sendGame() {
		if(isset($_POST['game-submit'])) {
			$gameName = trim($_POST['gameNameInput']);
			$gameValue = trim($_POST['gameValueInput']);
			$gameKey = trim($_POST['gameKeyInput']);
			$username = trim($_SESSION['user_session']);
			$sql = "SELECT id_gry, nazwa_gry FROM gry WHERE nazwa_gry='$gameName'";
			$resultset1 = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$row1 = mysqli_fetch_assoc($resultset1);
			$gameid=$row1['id_gry'];
			$sql = "SELECT id_uzytkownika, username, password FROM logowanie WHERE username='$username'";
			$resultset2 = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$row2 = mysqli_fetch_assoc($resultset2);
			$userid=$row2['id_uzytkownika'];
			if($row1['nazwa_gry']==$gameName){
				$sql = "INSERT INTO oferty (id_gry,id_sprzedajacego,cena,klucz) VALUES ('$gameid','$userid','$gameValue','$gameKey')";
				$resultset3 = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
				//echo "$gameid, $username = $userid, $gameValue, $gameKey";
				echo "Inserted";
			} else {
				echo "No trochę do lufy wyszło przyznaje";
			//if($password == $row['password']){
			//	echo "1";
			//	$_SESSION['user_session'] = $row['username'];
			//} else {
			//	echo "Ohhh ! Wrong Credential."; // wrong details
			//}
		}
	}
	
}
}
?>
	