<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="pl">

<head> 
<meta charset="utf-8">
<title> logowanie-str główna</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<!--<link rel="stylesheet" href="CSS_uniwersalny.css" type="text/css"/>-->
<link rel="stylesheet" type="text/css" href="persona.css">
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.0.3.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="libs/common.js"></script>

</head>

<body> 

user:admin
<br>
password:admin

<div id="panel" style="display: none;">
</div>

    <div class="glowne">
		<form id="login-form" role="form" method="post" autocomplete="off">
			<h2>Zaloguj się</h2>
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
            <input type="submit" value="Zaloguj się" name="login-submit" id="login-submit" class="btn-primary">
        </form>
    </div>

    <h1>Not registered yet? <a href="Rejestracja.php">Rejestracja</a></h1>

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
