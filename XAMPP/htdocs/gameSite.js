$(document).ready(function(){
  var urlParams = new URLSearchParams(window.location.search);
  var game = urlParams.get('game');
  console.log(game);
  getOffer();

  //Getting offers

  function getOffer() {	
		alikeGames = new Array();
		var data = game;
		$.ajax({				
			type : 'POST',
			url  : 'getGame.php?action=getOffer',
			data : {game:data},
			beforeSend: function(){	
				console.log("Game: ", game);
			},
			success : function(response){
        console.log(response);
							var table = document.getElementById("printing3");
							
							// Loop through the data and generate table rows
							var n=4;
							for (var i = 0; i < response.length; i++) {
								// Create a new row element
								var row = document.createElement("tr");
                row.setAttribute("data-hidden-value",response[n*i]);
                row.addEventListener("click", function() {
									// Data to be sent
									
									var offer = this.getAttribute("data-hidden-value");

									console.log(this.getAttribute("data-hidden-value"));
									// Construct the URL with the data
									var url = "Payment.php?offer=" + encodeURIComponent(offer);
								  
									// Create a new XMLHttpRequest object
									var xhr = new XMLHttpRequest();
								  
									// Set up the AJAX request
									xhr.open("POST", url, true);
									xhr.setRequestHeader("Content-Type", "application/json");
								  
									// Send the data as JSON
									xhr.send(JSON.stringify(game));
								  
									// Handle the response from the target site
									xhr.onload = function() {
									  if (xhr.status === 200) {
										// Request succeeded
										console.log("AJAX request successful!");
										window.location.href = url;
									  } else {
										// Request failed
										console.log("AJAX request failed:", xhr.statusText);
									  }
									};
								  
									// Handle any errors that occur during the AJAX request
									xhr.onerror = function() {
									  console.log("AJAX request failed:", xhr.statusText);
									};
								  });
								
								// Create table cells and populate them with data
								var gameNameCell = document.createElement("td");
								gameNameCell.textContent = response[n*i+1];  
								row.appendChild(gameNameCell);

								
								var valueCell = document.createElement("td");
								valueCell.textContent = response[n*i+2];
								row.appendChild(valueCell);
							
								var keyCell = document.createElement("td");
								keyCell.textContent = response[n*i+3];
								row.appendChild(keyCell);
								
								// Append the row to the table
								table.appendChild(row);
              }
			},
			dataType:"json"
		});

		return false;
	}
});