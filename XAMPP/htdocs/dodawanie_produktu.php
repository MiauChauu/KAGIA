<?php
include('newheader.php');
?>

<div id="addingTable">
	<form id="adding-form" role="form" method="post">
	<table class="adding">
		<tr><th colspan="2"><h3>Dodawanie produktu</h3></th></tr>
		<script type="text/javascript" src="dodawanie.js">
		</script>
		<div id="gameName" style="display:block">
			<tr>
				<td>
					Nazwa gry
				</td>
				<td>
					<input name="gameNameInput" id="gameNameInput" list="gamelist"></input>
					<datalist id="gamelist">
					</datalist>
				</td>
			</tr>
		</div>
		<div id="gameValue" style="display:block">
			<tr>
				<td>
					Cena
				</td>
				<td>
					<input type="number" step="0.01" name="gameValueInput" id="gameValueInput"></input>
				</td>
			</tr>
		</div>
		<div id="gameKey" style="display:block">
			<tr>
				<td>
					Klucz
				</td>
				<td>
					<input name="gameKeyInput" id="gameKeyInput"></input>
				</td>
			</tr>
		</div>
		<div id="gameSubmit" style="display:block">
			<tr>
				<td colspan="2">
					<input value="Ustaw oferte" type="submit" name="game-submit" id="game-submit" class="btn-primary"></input>
				</td>
			</tr>
			<tr>
				<td>
					<div id="game-button" style="display:none"></div>
				</td>
			</tr>
		</div>
	</table>
	</form>
</div>
<script type="text/javascript" src="wyswietlanie.js"></script>
<!--<input value="GENERATE" type="submit" id="generate" class="btn-primary"></input>-->
<div id="offers" class="główne">
	<h3>Wystawione oferty</h3>
	<table id="printing" class="adding">
		<tr><th>Nazwa Gry</th><th>Cena</th><th>Klucz</th></tr>
	</table>
</div>
	
</body>
</html>