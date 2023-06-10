<?php
include('newheader.php');
?>
<?php include ('conn.php');
?>
<form id="search-form" method="get">
		<label for="category-select">Kategorie:</label>
		<select id="category-select" name="category">
			<option value="">Wybierz kategorię</option>
		</select>
		<button type="submit">Szukaj</button>
	</form>

	<div id="search-results"></div>
	<script src="kategoria.js"></script>	
</br></br>
<div class="promocjaGier">
    <?php
            $sql="SELECT * FROM gry ORDER BY RAND() LIMIT 1;";
            $result=mysqli_query($connect,$sql);
            $rows=mysqli_num_rows($result);
            if($rows>0){
                while($top=mysqli_fetch_array($result)){
                echo "POLECAMY GRĘ: " ,$top['nazwa_gry'];
                    }
            }
    ?>
<div>
</body>
</html>