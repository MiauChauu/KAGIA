$(document).ready(function() {
			$('#search-form').submit(function(e) {
				e.preventDefault();

				var category = $('#category-select').val();

				if (category !== '') {
					$.ajax({
						url: 'search.php',
						type: 'POST',
						data: {
							'category': category
						},
						success: function(response) {
							//$('#search-results').html(response);
							console.log(response);
							var table = document.getElementById("printing2");
							
							// Loop through the data and generate table rows
							var n=1;
							for (var i = 0; i < response.length; i++) {
								// Create a new row element
								var row = document.createElement("tr");
								
								// Create table cells and populate them with data
								var gameNameCell = document.createElement("td");
								gameNameCell.textContent = response[n*i];
								gameNameCell.addEventListener("click", function() {
									// Data to be sent
									
									var game = this.textContent

									console.log(this.textContent);
									// Construct the URL with the data
									var url = "GameSite.php?game=" + encodeURIComponent(game);
								  
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
								row.appendChild(gameNameCell);

								/*
								var valueCell = document.createElement("td");
								valueCell.textContent = response[n*i+1];
								row.appendChild(valueCell);
							
								var keyCell = document.createElement("td");
								keyCell.textContent = response[n*i+2];
								row.appendChild(keyCell);
								*/
								// Append the row to the table
								table.appendChild(row);
							}
						},
						error: function(error) {
							console.log(error);
							console.error('Blad zadania. Kod odpowiedzi: ' + error.status);
						},
						dataType:"json"
					});
				}
			});
	loadCategories();
		});

		function loadCategories() {
			$.ajax({
				url: 'categories.php',
				type: 'GET',
				success: function(response) {
					var categories = response;

					var select = document.getElementById('category-select');
					select.innerHTML = ''; 

					categories.forEach(function(category) {
						var option = document.createElement('option');
						option.value = category.id;
						option.textContent = category.name;
						select.appendChild(option);
					});
				},
				error: function(error) {
					console.error('Blad zadania. Kod odpowiedzi: ' + error.status);
				}
			});
		}