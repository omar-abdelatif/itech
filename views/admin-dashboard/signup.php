<?php
//! Session 
if (session_status() == PHP_SESSION_NONE) session_start();
//! Include Functions
include "core/functions.php";
//! Include Header
include INCLUDEURL . "views/admin-dashboard/views/inc/header.php";
//! Include Connection
include INCLUDEURL . "views/admin-dashboard/config/database.php";
?>
<div class="preloader">
	<div class="preloader_image"></div>
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
										<p class="text-center p-0 m-0"> <?= $error ?> </p>
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
								<form action="<?= URL . "views/admin-dashbaord/core/register.php" ?>" method="post">
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
									<button type="submit" name="submit" class="theme_button block_button color1">Create an account</button>
								</form>
							</div>
						</div>
						<p class="divider_20 text-center"> Already registered?
							<a href="<?= URL . "views/admin-dashboard/signin.php" ?>">Log In</a>.
						</p>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<?php
//! Include Footer
include INCLUDEURL . "views/admin-dashboard/views/inc/footer.php";
?>