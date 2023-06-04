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
});