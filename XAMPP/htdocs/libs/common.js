$(document).ready(function(){
	/* handling login form validation */
	$("#login-form").validate({
		rules: {
			password: {
				required: true,
			},
			username: {
				required: true,
			},
		},
		messages: {
			password:{
			  required: "Please enter your password"
			 },
			username: "Please enter your username",
		},
		submitHandler: submitForm	
	});	

	/* Handling login functionality */
	function submitForm() {		
		var data = $("#login-form").serialize();
		$.ajax({				
			type : 'POST',
			url  : 'response.php?action=login',
			data : data,
			beforeSend: function(){	
				$("#error").fadeOut();
				$("#login_button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success : function(response){			
				if($.trim(response) === "1"){
					console.log('dddd');									
					$("#login-submit").html('Signing In ...');
					setTimeout(' window.location.href = "p_użytkownika.php"; ',2000);
				} else {									
					$("#error").fadeIn(1000, function(){						
						$("#error").html(response).show();
					});
				}
			}
		});
		return false;
	}

	/* handling register form validation */

	$("#register-form").validate({
		rules: {
			passwordcheck: {
				required: true,
				equalTo: "#password", // Ensure passwordcheck matches the value of the password field
			},
			password: {
				required: true,
				minlength: 8, // Minimum password length of 8 characters
			},
			username: {
				required: true,
			},
			question: {
				required: true,
			},
			answer: {
				required: true,
			},
		},
		messages: {
			passwordcheck:{
				required: "Please confirm your password",
				equalTo: "Passwords do not match",
			   },
			password:{
			  required: "Please enter your password",
			  minlength: "Password must be at least 8 characters long",
			 },
			username: "Please enter your username",
			answer: "Wybierz odpowiedź na pytanie pomocnicze",
		},
		submitHandler: submitRegisterForm	
	});	

	/* Handling register functionality */
	function submitRegisterForm() {		
		var data = $("#register-form").serialize();
		$.ajax({				
			type : 'POST',
			url  : 'response.php?action=register',
			data : data,
			beforeSend: function(){	
				//$("#error").fadeOut();
				//$("#register_button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				console.log('before registering');
				setTimeout(function() {
					console.log("After wait");
				  }, 5000); // Wait for 5 seconds (5000 milliseconds)
			},
			success : function(response){			
				if($.trim(response) === "1"){
					console.log('rrrr');									
					$("#register-submit").html('Register in progress ...');
					setTimeout(' window.location.href = "Strona_główna+logowanie.php"; ',2000);
				} else {									
					console.log("ERROR");
				}
			}
		});
		return false;
	}

	/* Handling logout functionality */
	function logout() {
		console.log('fdfdf');
		$.ajax({				
			type : 'POST',
			url  : 'response.php?action=logout',
			data : data,
			success : function(response){
				window.location.href = "Strona_główna+logowanie.php";
			}
		});
		return false;
	}
	
	/* handling password restore form validation */

	$("#restore-form").validate({
		rules: {
			username: {
				required: true,
			},
			useranswer: {
				required: false,
			},
		},
		messages: {
			username: "Please enter your username",
			useranswer: "Wprowadź odpowiedź na pytanie pomocnicze",
		},
		submitHandler: submitRestoreForm	
	});	

	/* Handling password restore functionality */
	function submitRestoreForm() {		
		var data = $("#restore-form").serialize();
		$.ajax({				
			type : 'POST',
			url  : 'response.php?action=restore',
			data : data,
			beforeSend: function(){	
				//$("#error").fadeOut();
				//$("#register_button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
				//console.log('before restoring');
				console.log($("#username").val());
			},
			success : function(response){		
				//console.log("ENTER");	
				//console.log(response);
				if($.trim(response) === "error1"){
					console.log('No such user');									
					$("#restore-submit").val('No such user. Try Again...');
					//setTimeout(' window.location.href = "Strona_główna+logowanie.php"; ',2000);
				} else if($.trim(response) === "success") {									
					console.log("Success: Valid answer");
					$("#usernamecheck").val($("#username").val());
					$("#restore-submit").val('Changing password in a moment...');
					$("#restore-div").css("display", "none");
					$("#change-div").css("display", "block");
				} else if($.trim(response) === "error2") {									
					console.log("ERROR: Invalid answer");
				} else {
					$("#restore-submit").val('Wyślij prośbę o odzyskanie hasła');
					questions=["Jaki jest twój ulubiony kolor?","Jakie jest imię twojego pierwszego zwierzaka?","W jakim mieście urodził się twój ojciec?","Jaki jest twój ulubiony film?"];
					$("#userquestiondiv").css("display", "block");
					$("#useranswerdiv").css("display", "block");
					//console.log(typeof(Number(response)));
					//console.log(questions[Number(response)]);
					$("#userquestion").html(questions[Number(response)-1]);
					$("#usercheck").val('1');
				}
			}
		});
		return false;
	}

	/* handling change password form validation */
	$("#change-form").validate({
		rules: {
			password1: {
				required: true,
				minlength: 8,
			},
			password2: {
				required: true,
				equalTo: "#password1",
			},
		},
		messages: {
			password1:{
			  required: "Please enter your password",
			  minlength: "Password must be at least 8 characters long",
			 },
			 password2: "Please enter your password",
			 equalTo: "Passwords do not match",
		},
		submitHandler: submitChangeForm	
	});	

	/* Handling change password functionality */
	function submitChangeForm() {		
		var data = $("#change-form").serialize();
		$.ajax({				
			type : 'POST',
			url  : 'response.php?action=change',
			data : data,
			beforeSend: function(){	
				//$("#error").fadeOut();
				//$("#login_button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success : function(response){			
				if($.trim(response) === "1"){
					console.log('dddd');									
					$("#change-submit").html('Changing ...');
					setTimeout(' window.location.href = "Strona_główna+logowanie.php"; ',2000);
				} else {									
					console.log("Changing Error");
				}
			}
		});
		return false;
	}
});