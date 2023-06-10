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

// Pobranie wartości przekazanej z formularza
$category = $_POST['category'];

$category = $conn->real_escape_string($category);

// Zapytanie SQL do pobrania gier na podstawie wybranej kategorii
$sql = "SELECT gry.nazwa_gry
		FROM gry
		INNER JOIN kategoria ON gry.id_kategoria = kategoria.id_kategoria
		WHERE kategoria.id_kategoria = '$category'";

$result = $conn->query($sql);

if ($result === false) {
	echo 'Błąd zapytania: ' . $conn->error;
	exit;
}

	$resultset = array();
	// Wyświetlenie wyników
	while ($row = mysqli_fetch_assoc($result)) {
		//echo '<p>Nazwa gry: ' . $row['nazwa_gry'] . '</p>';
		//echo '<p>Kategoria: ' . $row['nazwa'] . '</p>';
		$resultset[] = $row['nazwa_gry'];
		// Wyświetlanie innych informacji o grze
	}

	$resultset = json_encode($resultset);
	echo $resultset;


$conn->close();
?>
