<?php include("app/views/header.php"); ?>

		<main class="main">
			<div class="page-header">
				<div class="container d-flex flex-column align-items-center">
					<nav aria-label="breadcrumb" class="breadcrumb-nav">
						<div class="container">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="demo4.html">Home</a></li>
								<li class="breadcrumb-item"><a href="category.html">Shop</a></li>
								<li class="breadcrumb-item active" aria-current="page">
									My Account
								</li>
							</ol>
						</div>
					</nav>

					<h1>My Account</h1>
				</div>
			</div>

			<div class="container login-container">
				<div class="row">
					<div class="col-lg-10 mx-auto">
						<div class="row">
							<div class="col-md-6">
								<div class="heading mb-1">
									<h2 class="title">Login</h2>
								</div>
								<?php if(isset($_SESSION['success'])): ?>
									<div class="alert alert-success" role="alert">
										<?php 
											echo $_SESSION['success'];
											session_destroy(); 
										?>
									</div>
								<?php endif; ?>
								<form action="/?url=confirmLogin" method="post">
									<label for="login-email">
										Username or email address
										<span class="required">*</span>
									</label>
									<input type="email" name="email" class="form-input form-wide" id="login-email" required="" <?php if(isset($_COOKIE['user_email'])){ ?>value="<?=$_COOKIE['user_email'] ?>" <?php } ?>>
									<?php if(isset($_SESSION['error'])): ?>
										<div class="alert alert-danger" role="alert">
											<?php 
												echo $_SESSION['error'];
												session_destroy(); 
											?>
										</div>
									<?php endif; ?>

									<label for="login-password">
										Password
										<span class="required">*</span>
									</label>
									<input type="password" name="password" class="form-input form-wide" id="login-password" required="" <?php if(isset($_COOKIE['password'])){ ?>value="<?=$_COOKIE['password'] ?>" <?php } ?>>

									<div class="form-footer">
										<div class="custom-control custom-checkbox mb-0">
											<input type="checkbox" name="remember_me" class="custom-control-input" id="lost-password">
											<label class="custom-control-label mb-0" for="lost-password">Remember
												me</label>
										</div>

										<a href="forgot-password.html" class="forget-password text-dark form-footer-right">Forgot
											Password?</a>
									</div>
									<button type="submit" class="btn btn-dark btn-md w-100">
										LOGIN
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main><!-- End .main -->

<?php include("app/views/footer.php"); ?>