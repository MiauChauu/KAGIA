<?php
include('partials/header.php');
?>



<div id="panel">
			<div class="alert alert-info">
				<ul>
					<li>Sample login email : test</li>
					<li>Password  : testpass</li>
				</ul>
			</div>
		<div class="glowne">
				  <div class="alert alert-danger" role="alert" id="error" style="display: none;">...</div>
				  <form id="login-form" name="login_form" role="form" style="display: block;" method="post">
						<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value=""  required>
						<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">      
							<input value="Zaloguj się" type="submit" name="login-submit" id="login-submit" tabindex="4" class="btn-primary"></input>
				  </form>
		</div>
</div>

<?php
include('partials/footer.php')
?>