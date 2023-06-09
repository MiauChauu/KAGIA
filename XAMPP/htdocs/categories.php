<?php
$host = 'localhost';
$user = 'root';
$password = 'root';
$database = 'project';

// Połączenie z bazą danych
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
	die('Błąd połączenia z bazą danych: ' . $conn->connect_error);
}

// Zapytanie SQL do pobrania wszystkich kategorii
$sql = "SELECT * FROM kategoria";

$result = $conn->query($sql);
$categories = array();

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$category = array(
			'id' => $row['id_kategoria'],
			'name' => $row['nazwa']
		);
		$categories[] = $category;
	}
}

$conn->close();

// Zwracanie danych kategorii w formacie JSON
header('Content-Type: application/json');
echo json_encode($categories);
?>
