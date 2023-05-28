$(document).ready(function(){
	$("#adding-form").validate({
		rules: {
			gameNameInput: {
				required: true,
			},
			gameValueInput: {
				required: true,
			},
			gameKeyInput: {
				required: true,
			},
		},
		messages: {
			gameNameInput: "Please enter name of your game",
			gameValueInput: "Please enter value of your game",
			gameKeyInput:{
			  required: "Please enter key of your game"
			 },
		},
		submitHandler: submitOrderForm	
	});	
  /*Dodawanie produktu*/
  //$('.adding').css("border","3px solid white");
	$('#gameNameInput').on("input", function() {
		console.log($('#gameNameInput').val());
		getGame();
	});
	
	function getGame() {	
		alikeGames = new Array();
		var data = $('#gameNameInput').val();
		$.ajax({				
			type : 'POST',
			url  : 'getGame.php?action=getGame',
			data : { gamename : data },
			beforeSend: function(){	
				
			},
			success : function(response){
				var cList = document.querySelector("#gamelist");
				if (cList.children[0]) {
					while(cList.children[0]){
					cList.children[0].remove();
					}
				}
				if($.trim(response)==="1")
				{
					console.log(response);
				} else {
				response.forEach(element => alikeGames.push(element));
				console.log("Gra:",alikeGames);
				$.each(alikeGames, function(i, item) {
					$("#gamelist").append($("<option>").text(item));
				});
				}
			},
			dataType:"json"
		});

		return false;
	}
	
	function submitOrderForm() {		
		var data = $("#adding-form").serialize();
		$.ajax({				
			type : 'POST',
			url  : 'getGame.php?action=sendGame',
			data : data,
			beforeSend: function(){	
				$("#sendError").fadeOut();
				$("#game-button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
			},
			success : function(response){			
				if($.trim(response) === "Inserted"){
					console.log('ligma');									
					$("#game-submit").html('Sending ...');
					setTimeout(' window.location.href = "dodawanie_produktu.php"; ',2000);
				} else {									
					$("#sendError").fadeIn(1000, function(){						
						$("#sendError").html(response).show();
					});
				}
				console.log(response);
			}
		});
		return false;
	}
	
	
});  