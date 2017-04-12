<main class="full_height">
		<div class="container content_container">
		<div class="row"></div>
			<div class="row">

			    <form class="col s12" method="post" action="<?php echo base_url(); ?>auth/login">
			    	<div class="row">
			    		<div class="col s12">
			    			<h2 class="header">Cpanel LogIn</h2>
			    			<div class="divider"></div>
			    		</div>
			    	</div>
			    	<div class="row"></div>
					<div class="row">
						<div class="input-field col l4 offset-l4 s12">
							<i class="material-icons prefix">account_circle</i>
							<input id="first_name" type="text" class="validate" name="cpanel_username">
							<label for="first_name" data-error="Please provide your First Name" data-success="All cool here!">User Name</label>
						</div>
					</div>
					<div class="row">
				        <div class="input-field col l4 offset-l4 s12">
							<i class="material-icons prefix">account_circle</i>
							<input id="last_name" type="password" class="validate" name="cpanel_password">
							<label for="last_name" data-error="Please provide your Last Name" data-success="All cool here!">Password</label>
						</div>
					</div>
					<div class="row"></div>
					<div class="row">
						<div class="col s12 center">
							<button class="btn waves-effect waves-light login_button" type="submit" name="cpanel_btn_login" value="cpanel_login">LogIn
								<i class="material-icons right">send</i>
							</button>
						</div>
					</div>
			    </form>
			</div>	
			<div class="row">
			<?php 
				if ($login_err) {
		      		?>
		      			<div class="col l4 offset-l4 s12 validation_msg"><i class="material-icons prefix">warning</i> Username or Password is wrong!</div>
		      		<?php
		      	}
			?>
			</div>		
		</div>
	</main>