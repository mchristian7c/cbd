<!-- Custom Login/Register/Password Code @ https://digwp.com/2010/12/login-register-password-code/ -->
<!-- Theme Template Code -->
<?php global $user_ID, $user_identity; if (!$user_ID) { ?>

<div class="col-sm-4 col-sm-offset-4 content-container tabs">
		<ul class="nav nav-tabs sub-page-content">
				<li><a data-toggle="tab" href="#tab-1">Login</a></li>
				<li><a data-toggle="tab" href="#tab-2">Register</a></li>
				<li><a data-toggle="tab" href="#tab-3">Forgot?</a></li>
		</ul>

		<div class="tab-content sub-page-content">
				<div id="tab-1" class="tab-pane fade">

								<?php $register = $_GET['register']; $reset = $_GET['reset']; if ($register == true) { ?>

								<h3>Success!</h3>
								<p>Check your email for the password and then return to log in.</p>

								<?php } elseif ($reset == true) { ?>

								<h3>Success!</h3>
								<p>Check your email to reset your password.</p>

								<?php } else { ?>

								<h3>Have an account?</h3>
								<p>Log in to download all our resource freebies.</p>

								<?php } ?>

								<form method="post" action="<?php bloginfo('url') ?>/wp-login.php" class="wp-user-form">
									<div class="username">
										<input type="text" placeholder="Username" name="log" value="<?php echo esc_attr(stripslashes($user_login)); ?>" size="20" id="user_login" tabindex="11" />
									</div>
									<div class="password">
										<input type="password" placeholder="Password" name="pwd" value="" size="20" id="user_pass" tabindex="12" />
									</div>
									<div class="login_fields">
										<div class="remembercheck">

												<input type="checkbox" name="rememberme" value="forever" checked="checked" id="remembercheck" tabindex="13" /> Remember me
											<label for="remembercheck"></label>
										</div>
										<?php do_action('login_form'); ?>
										<input type="submit" name="user-submit" value="<?php _e('Login'); ?>" tabindex="14" class="resource-login user-submit" />
										<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>" />
										<input type="hidden" name="user-cookie" value="1" />
									</div>
								</form>				</div>
				<div id="tab-2" class="tab-pane fade">
					<h3>Register for CV resources</h3>
					<p>Sign up to download all our resource freebies.</p>
					<form method="post" action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" class="wp-user-form">
						<div class="username">
							<input type="text" name="user_login" placeholder="Username" value="<?php echo esc_attr(stripslashes($user_login)); ?>" size="20" id="user_login" tabindex="101" />
						</div>
						<div class="password">
							<input type="text" name="user_email" placeholder="Your Email" value="<?php echo esc_attr(stripslashes($user_email)); ?>" size="25" id="user_email" tabindex="102" />
						</div>
						<div class="login_fields">
							<?php do_action('register_form'); ?>
							<input type="submit" name="user-submit" value="<?php _e('Sign up!'); ?>" class="resource-login user-submit" tabindex="103" />
							<?php $register = $_GET['register']; if($register == true) { echo '<p>Check your email for the password!</p>'; } ?>
							<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>?register=true" />
							<input type="hidden" name="user-cookie" value="1" />
						</div>
					</form>
				</div>
				<div id="tab-3" class="tab-pane fade">
					<h3>Lose something?</h3>
					<p>Enter your username or email to reset your password.</p>
					<form method="post" action="<?php echo site_url('wp-login.php?action=lostpassword', 'login_post') ?>" class="wp-user-form">
						<div class="username">
							<label for="user_login" class="hide"><?php _e('Username or Email'); ?>: </label>
							<input type="text" name="user_login" value="" size="20" id="user_login" tabindex="1001" />
						</div>
						<div class="login_fields">
							<?php do_action('login_form', 'resetpass'); ?>
							<input type="submit" name="user-submit" value="<?php _e('Reset my password'); ?>" class="resource-login user-submit" tabindex="1002" />
							<?php $reset = $_GET['reset']; if($reset == true) { echo '<p>A message will be sent to your email address.</p>'; } ?>
							<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>?reset=true" />
							<input type="hidden" name="user-cookie" value="1" />
						</div>
					</form>
				</div>
			</div>
</div>

<?php } else { // is logged in ?>

<div class="sidebox">
	<h3>Welcome, <?php echo $user_identity; ?></h3>
	<div class="usericon">
		<?php global $userdata; echo get_avatar($userdata->ID, 60); ?>

	</div>
	<div class="userinfo">
		<p>You&rsquo;re logged in as <strong><?php echo $user_identity; ?></strong></p>
		<p>
			<a href="<?php echo wp_logout_url('index.php'); ?>">Log out</a> |
			<?php if (current_user_can('manage_options')) {
				echo '<a href="' . admin_url() . '">' . __('Admin') . '</a>'; } else {
				echo '<a href="' . admin_url() . 'profile.php">' . __('Profile') . '</a>'; } ?>

		</p>
	</div>
</div>

<?php } ?>

<!-- Custom Login/Register/Password Code @ https://digwp.com/2010/12/login-register-password-code/ -->
