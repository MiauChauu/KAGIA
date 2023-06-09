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
$category = $_GET['category'];

$category = $conn->real_escape_string($category);

// Zapytanie SQL do pobrania gier na podstawie wybranej kategorii
$sql = "SELECT gry.nazwa_gry, kategoria.nazwa
		FROM gry
		INNER JOIN kategoria ON gry.id_kategoria = kategoria.id_kategoria
		WHERE kategoria.id_kategoria = '$category'";

$result = $conn->query($sql);
if ($result === false) {
	echo 'Błąd zapytania: ' . $conn->error;
	exit;
}

if ($result->num_rows > 0) {
	// Wyświetlenie wyników
	while ($row = $result->fetch_assoc()) {
		echo '<p>Nazwa gry: ' . $row['nazwa_gry'] . '</p>';
		echo '<p>Kategoria: ' . $row['nazwa'] . '</p>';
		// Wyświetlanie innych informacji o grze
	}
} else {
	echo 'Brak wyników.';
}

$conn->close();
?>
