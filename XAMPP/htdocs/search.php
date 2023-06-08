<?php
$host = 'localhost';
$user = 'root';
$password = 'root';
$database = 'projekt';

// Połączenie z bazą danych
$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
	die('Błąd połączenia z bazą danych: ' . $conn->connect_error);
}

// Pobranie wartości przekazanej z formularza
$category = $_GET['category'];

// Zapytanie SQL do pobrania gier na podstawie wybranej kategorii
$sql = "SELECT * FROM gry
		INNER JOIN szczegoly_gry ON gry.id_gry = szczegoly_gry.gry_id
		INNER JOIN kategoria ON szczegoly_gry.kategoria_id = kategoria.id_kategoria
		WHERE kategoria.id_kategoria = '$category'";

$result = $conn->query($sql);
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
