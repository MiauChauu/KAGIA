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

<div id="error">
</div>

<div class="główne">
<form id="login-form" role="form" method="post">

	<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value=""  required>
<!-- <br /><br /> -->

	<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
<!-- <br /><br /> -->

	<input value="Zaloguj się" type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn-primary"></input>
	<div id="login-button"></div>
</form>
</div>

</body>

</html>
