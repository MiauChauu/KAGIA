$(document).ready(function() {
			$('#search-form').submit(function(e) {
				e.preventDefault();

				var category = $('#category-select').val();

				if (category !== '') {
					$.ajax({
						url: 'search.php',
						type: 'GET',
						data: {
							'category': category
						},
						success: function(response) {
							$('#search-results').html(response);
						},
						error: function(error) {
							console.error('Blad zadania. Kod odpowiedzi: ' + error.status);
						}
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