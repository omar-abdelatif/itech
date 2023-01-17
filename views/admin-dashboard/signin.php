<?php
//! Start Session
if (session_status() == PHP_SESSION_NONE) session_start();
//! Include Functions
include "core/functions.php";
//! Include Header
include INCLUDEURL . "views/admin-dashboard/views/inc/header.php";
?>
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
<div id="canvas">
	<div id="box_wrapper">
		<section class="ls section_padding_top_100 section_padding_bottom_100 section_full_height">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 to_animate">
						<div class="with_border with_padding">
							<h4 class="text-center">
								Sign In to Your Account
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
								<form method="POST" action="<?= URL . "views/admin-dashboard/core/signin.php" ?>">
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
											<div class="checkbox">
												<input type="checkbox" id="remember_me_checkbox">
												<label for="remember_me_checkbox">Rememrber Me</label>
											</div>
										</div>
									</div>
									<button type="submit" name="submit" class="theme_button block_button color1">Log In</button>
								</form>
							</div>
							<div class="darklinks text-center topmargin_20">
								<a role="button" data-toggle="collapse" href="#signin-resend-password" aria-expanded="false" aria-controls="signin-resend-password">Forgot your password?</a>
							</div>
							<div class="collapse form-inline-button" id="signin-resend-password">
								<form method="POST" action="<?= URL . "views/admin-dashboard/core/forgotpass.php" ?> " class="form-inline topmargin_20">
									<div class="form-group">
										<label class="sr-only">Enter your e-mail</label>
										<input type="email" class="form-control" placeholder="E-mail">
									</div>
									<button type="submit" class="theme_button with_icon">
										<i class="fa fa-share"></i>
									</button>
								</form>
							</div>
						</div>
						<p class="divider_20 text-center">
							Not registered? <a href="<?= URL . "views/admin-dashboard/signup.php" ?> ">Create an account</a>.<br>
							or go <a href="<?= URL . "index.php" ?>">Home</a>
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