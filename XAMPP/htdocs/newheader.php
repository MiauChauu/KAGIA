<?php
session_start();
?>
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="libs/common.css">-->
<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> <!--sprawdzić co to-->
	
	<title>Panel</title>
	
	<link rel="stylesheet" type="text/css" href="persona.css">
	<link href="styl_panelu.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'> <!tu chyba trzeba coś zmienić>
	<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="libs/common.js"></script>
	<!--
	<script type="text/javascript" charset="utf8" src="libs/edit_profile.js"></script>
	-->
	<script type="text/javascript" charset="utf8" src="libs/get_p_pic.js"></script>
	<link href="css/fontello.css" rel="stylesheet" type="text/css" /> <!--sprawdzić co to-->
	
</head>

<body>

	<div class="wrapper">
		<div class="nav">
			<ol>
				<li><a href="dodawanie_produktu.php">Dodanie produktu</a></li>
				<li><a href="#">Ranking gier</a></li>
				<li><a href="dashboard.php">Edytuj profil</a></li>
                <li><a href="#">Ustawienia</a></li>
                <li><a href="response.php?action=logout" class="btn btn-default btn-sm">Wyloguj</a></li>
				<div style="float:left;" class="profile_pic_div">
				<a href="p_użytkownika.php" class="btn btn-default btn-sm">
					<img class="profile_pic" alt="profile_pic" style="width:30px;height:30px;" src="https://cdn.shopify.com/s/files/1/2104/4963/articles/Staff_Template.png?v=1680660921&width=1440" border="5px solid white">
				</a>
				</div>
			</ol>
		
		</div>
		

		

	<!--odniesienie do pliku jquery z zewnątrz, potrzebny do tego poniżej-->
	<!--całość po niżej jest po to by pasek był przykleiony do góry krawędzi nawet jak bedzie się przesuwało stronę w dół-->
	<script> 

	$(document).ready(function() {
	var NavY = $('.nav').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.nav').addClass('sticky');
	} else {
		$('.nav').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
</script>
	
	</div>