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
 case 'getGames':
	$empCls->getGames();
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
	
	function getGames() {
		
			$sql = "SELECT id_uzytkownika, username, password FROM logowanie WHERE username='$username'";
			$results = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$row = mysqli_fetch_assoc($resultset2);
			$userid=$row['id_uzytkownika'];

			$sql = "SELECT id_gry, nazwa_gry FROM gry WHERE nazwa_gry='$gameName'";
			$results = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			$row2 = mysqli_fetch_assoc($results);
			$gameid=$row2['id_gry'];

			
			$username = trim($_SESSION['user_session']);

			$sql = "SELECT nazwa_gry, cena, klucz FROM oferty INNER JOIN logowanie ON oferty.id_sprzedajacego=logowanie.id_uzytkownika INNER JOIN gry ON oferty.id_gry=gry.id_gry WHERE username='$username'";
			$results = mysqli_query($this->conn, $sql) or die("database error:". mysqli_error($this->conn));
			//$userData = mysql_fetch_array($results, MYSQL_ASSOC);

			$resultset = array();
			$i=0;
			while ($row = mysqli_fetch_assoc($results)) {
			  $resultset[] = $row['nazwa_gry'];
			  $resultset[] = $row['cena'];
			  $resultset[] = $row['klucz'];
			  $i=$i+1;
			}

			// $resultset now holds all rows from the first query.
			//foreach ($resultset as $result){
			 //... etc...
				
			//$row = mysqli_fetch_assoc($resultset);
			$resultset = json_encode($resultset);
			
			echo $resultset;
			
			
			}
			
	}	
?>
	