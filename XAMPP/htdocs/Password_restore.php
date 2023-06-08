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

    <div class="glowne" id="restore-div" style="display: block;">
		<form id="restore-form" role="form" method="post" autocomplete="off">
			<h2>Odzyskiwanie hasła</h2>
			<div class="inputBox">
				<input type="text" name="username" id="username" required="required">
				<span>Login</span>
				<i></i>
			</div>
            <div id="userquestiondiv" class="inputBox" style="display: none;">
                <input value="0" type="hidden" name="usercheck" id="usercheck" style="display: none;">
				<p name="userquestion" id="userquestion">2</p>
				<span>Pytanie</span>
				<i></i>
			</div>
			<div id="useranswerdiv" class="inputBox" style="display: none;">
				<input value="" type="text" name="useranswer" id="useranswer">
				<span>Odpowiedź</span>
				<i></i>
			</div>
            <input type="submit" value="Wyślij prośbę o odzyskanie hasła" name="restore-submit" id="restore-submit" class="btn-primary">
        </form>
    </div>

    <div class="glowne" id="change-div" style="display: none;">
		<form id="change-form" role="form" method="post" autocomplete="off">
			<h2>Zmiana hasła</h2>
			<div class="inputBox">
				<input type="password" name="password1" id="password1" required="required">
				<span>Nowe Hasło</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" name="password2" id="password2" required="required">
				<span>Powtórz Hasło</span>
				<i></i>
			</div>
            <input value="" type="hidden" name="usernamecheck" id="usernamecheck" style="display: none;">
            <input type="submit" value="Zmień hasło" name="change-submit" id="change-submit" class="btn-primary">
        </form>
    </div>

    <h1>Not registered yet? <a href="Rejestracja.php">Rejestracja</a></h1>
    <h1>Forgot <a href="Password_restore.php">Password</a> ?</h1>

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
