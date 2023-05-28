$(document).ready(function(){
	console.log("i'm in");
	/*$('#generate').click(function(){
		getGames();
	});*/
	getGames();
	
	function getGames() {	
		Games = new Array();
		var data = {pomoc:"HELP"};
		$.ajax({				
			type : 'POST',
			url  : 'getGames.php?action=getGames',
			data : data,
			beforeSend: function(){	
				console.log("czy to w ogóle działa?")
			},
			success : function(response){
				console.log("i'm in more");
				console.log(response);
				var table = document.getElementById("printing");
				
				// Loop through the data and generate table rows
				var n=3;
				for (var i = 0; i < response.length; i++) {
					// Create a new row element
					var row = document.createElement("tr");
					
					// Create table cells and populate them with data
					var gameNameCell = document.createElement("td");
					gameNameCell.textContent = response[n*i];
					row.appendChild(gameNameCell);
				
					var valueCell = document.createElement("td");
					valueCell.textContent = response[n*i+1];
					row.appendChild(valueCell);
				
					var keyCell = document.createElement("td");
					keyCell.textContent = response[n*i+2];
					row.appendChild(keyCell);
				
					// Append the row to the table
					table.appendChild(row);
				}

			},
			error: function(){
				console.log('error jebany');
			},
			dataType:"json"
		});

		return false;
	}
	
	
});  