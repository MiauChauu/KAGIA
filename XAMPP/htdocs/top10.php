<?php
include('newheader.php');
?>
<html>
	<head>
	<?php include ('conn.php');
		?>
		<title> top10 </title>
		<link rel="stylesheet" href="stylemarcel.css" type="text/css">
	</head>
	<body>
		<div id="h1">
			Main<br>
			<?php
			echo date("d/m/y");
			echo'<br>';
			echo date("l");
			?>
			
		<div id="content">
		
			<?php
			$a=0;
			$sql="SELECT * FROM gry ORDER BY ocena DESC;";
			$result=mysqli_query($connect,$sql);
			$rows=mysqli_num_rows($result);
			if($rows>0){
				while($top=mysqli_fetch_array($result)){
			if($a < 10){
				echo "nazwa: " ,$top['nazwa_gry'],"  ","ocena: ", $top['ocena'];
				echo '<br>';
				$a++;
					}
				}
			}
			?>
			
			
		</div>
		<div id="footer">
			Author XYZ
		</div>
	</body>