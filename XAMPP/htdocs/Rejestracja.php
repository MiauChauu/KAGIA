<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="pl">

<head> 
<meta charset="utf-8">
<title>Rejestracja</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<!--<link rel="stylesheet" href="CSS_uniwersalny.css" type="text/css"/>-->
<link rel="stylesheet" type="text/css" href="persona.css">
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="libs/common.js"></script>

</head>

<body> 


<div id="panel" style="display: none;">
</div>
<!--Rejestracja-->
    <div class="glowne">
		<form id="register-form" role="form" method="post" autocomplete="off">
			<h2>Rejestracja</h2>
			<div class="inputBox">
				<input type="text" name="username" id="username" required="required">
				<span>Login</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" name="password" id="password" required="required">
				<span>Hasło</span>
				<i></i>
			</div>
            <div class="inputBox">
				<input type="password" name="passwordcheck" id="passwordcheck" required="required">
				<span>Powtórz Hasło</span>
				<i></i>
			</div>
            <div class="inputBox">
				<select name="question" id="question" required="required">
                    <option value="1">Jaki jest twój ulubiony kolor?</option>
                    <option value="2" selected>Jakie jest imię twojego pierwszego zwierzaka?</option>
                    <option value="3">W jakim mieście urodził się twój ojciec?</option>
                    <option value="4">Jaki jest twój ulubiony film?</option>
				<span>Pytanie Pomocnicze Przy Odzyskiwaniu Hasła</span>
				<i></i>
			</div>
            <div class="inputBox">
				<input type="text" name="answer" id="answer" required="required">
				<span>Odpowiedź Do Pytania Pomocniczego</span>
				<i></i>
			</div>
            <input type="submit" value="Zarejestruj się" name="register-submit" id="register-submit" class="btn-primary">
        </form>
    </div>

    <h1>Already registered? <a href="Strona_główna+logowanie.php">Logowanie</a></h1>

    <div id="background-wrap">
        <div class="bubble x1"></div>
        <div class="bubble x2"></div>
        <div class="bubble x3"></div>
        <div class="bubble x4"></div>
        <div class="bubble x5"></div>
        <div class="bubble x6"></div>
        <div class="bubble x7"></div>
        <div class="bubble x8"></div>
        <div class="bubble x9"></div>
        <div class="bubble x10"></div>
    </div>

</body>

</html>
