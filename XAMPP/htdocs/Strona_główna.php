<?php
include('newheader.php');
?>
<form id="search-form" method="get">
		<label for="category-select">Kategorie:</label>
		<select id="category-select" name="category">
			<option value="">Wybierz kategorię</option>
		</select>
		<button type="submit">Szukaj</button>
	</form>

	<div id="search-results">
		<table id="printing2">
			
		</table>
	</div>
	<script src="kategoria.js"></script>	
</body>
</html>