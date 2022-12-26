<?php
//! Session 
session_start();
//! Include Connection
include "config/database.php";
?>
<!DOCTYPE html>
<html>

<head>
	<title>FixIt | SignUP</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../admin-dashboard/assets/style/bootstrap.min.css">
	<link rel="stylesheet" href="../admin-dashboard/assets/style/animations.css">
	<link rel="stylesheet" href="../admin-dashboard/assets/style/fonts.css">
	<link rel="stylesheet" href="../admin-dashboard/assets/style/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="../admin-dashboard/assets/style/dashboard.css" class="color-switcher-link">
	<script src="../admin-dashboard/assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body class="admin">
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="https://html.modernwebtemplates.com/fixit/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
			</form>
		</div>
	</div>
	<div class="modal fade" tabindex="-1" role="dialog" id="admin_contact_modal">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<form class="with_padding contact-form" method="post" action="https://html.modernwebtemplates.com/fixit/">
					<div class="row">
						<div class="col-sm-12">
							<h3>Contact Admin</h3>
							<div class="contact-form-name">
								<label for="name">Full Name
									<span class="required">*</span>
								</label>
								<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="contact-form-subject">
								<label for="subject">Subject
									<span class="required">*</span>
								</label>
								<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="contact-form-message">
								<label for="message">Message</label>
								<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="col-sm-12 text-center">
							<div class="contact-form-submit">
								<button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button wide_button color1">Send Message</button>
								<button type="reset" id="contact_form_reset" name="contact_reset" class="theme_button wide_button">Clear Form</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="canvas">
		<div id="box_wrapper">
			<section class="ls section_padding_top_100 section_padding_bottom_100 section_full_height">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 to_animate">
							<div class="with_border with_padding">
								<h4 class="text-center">
									Sign Up New Account
								</h4>
								<hr class="bottommargin_30">
								<?php if (isset($_SESSION['errors'])) : ?>
									<?php foreach ($_SESSION['errors'] as $error) : ?>
										<div class="alert alert-danger w-50 mx-auto mt-5 text-center">
											<p class="text-center p-0 m-0">
												<?= $error ?>
											</p>
										</div>
									<?php endforeach; ?>
									<?php unset($_SESSION['errors']) ?>
								<?php elseif (isset($_SESSION['success'])) : ?>
									<div class="alert alert-success w-50 mx-auto mt-5 text-center">
										<?= $_SESSION['success'] ?>
										<?php unset($_SESSION['success']) ?>
									</div>
								<?php endif; ?>
								<div class="wrap-forms">
									<form action="../admin-dashboard/core/register.php" method="post">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="login-name">Your Name</label>
													<i class="grey fa fa-user"></i>
													<input type="text" class="form-control" name="name" id="login-name" placeholder="Name">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="login-email">Email address</label>
													<i class="grey fa fa-envelope-o"></i>
													<input type="email" class="form-control" name="email" id="login-email" placeholder="Email Address">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="login-password">Password</label>
													<i class="grey fa fa-pencil-square-o"></i>
													<input type="password" class="form-control" name="password" id="login-password" placeholder="Password">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="login-password2">Retype Password</label>
													<i class="grey fa fa-pencil-square-o"></i>
													<input type="password" class="form-control" name="re-pass" id="login-password2" placeholder="Retype Password">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="checkbox">
													<input type="checkbox" id="remember_me_checkbox">
													<label for="remember_me_checkbox">Rememrber Me</label>
												</div>
											</div>
										</div>
										<button type="submit" name="submit" class="theme_button block_button color1">Create an account</button>
									</form>
								</div>
							</div>
							<p class="divider_20 text-center"> Already registered?
								<a href="signin.php">Log In</a>.
							</p>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<script src="../admin-dashboard/assets/js/compressed.js"></script>
	<script src="../admin-dashboard/assets/js/main.js"></script>
</body>

</html>