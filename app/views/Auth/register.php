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
							<h2 class="title">Register</h2>
						</div>

						<form action="/?url=confirmRegister" method="post">
							<label for="register-email">
								Name
								<span class="required">*</span>
							</label>
							<input type="text" name="name" class="form-input form-wide" id="register-email" required="">

							<label for="register-email">
								Email address
								<span class="required">*</span>
							</label>
							<input type="email" name="email" class="form-input form-wide" id="register-email"
								required="">

							<label for="register-email">
								City
								<span class="required">*</span>
							</label>
							<input type="text" name="city" class="form-input form-wide" id="register-email" required="">

							<label for="register-email">
								Country
								<span class="required">*</span>
							</label>
							<input type="text" name="country" class="form-input form-wide" id="register-email"
								required="">

							<label for="register-email">
								Address
								<span class="required">*</span>
							</label>
							<input type="text" name="address" class="form-input form-wide" id="register-email"
								required="">

							<label for="register-email">
								Postal Code
								<span class="required">*</span>
							</label>
							<input type="number" name="postal_code" class="form-input form-wide" id="register-email"
								required="">

							<label for="register-email">
								Phone
								<span class="required">*</span>
							</label>
							<input type="phone" name="phone" class="form-input form-wide" id="register-email"
								required="">

							<label for="register-email">
								Number
								<span class="required">*</span>
							</label>
							<input type="number" name="number" class="form-input form-wide" id="register-email" required="">

							<label for="register-password">
								Password
								<span class="required">*</span>
							</label>
							<input type="password" name="password" class="form-input form-wide" id="register-password" required="">

							<div class="form-footer mb-2">
								<button type="submit" class="btn btn-dark btn-md w-100 mr-0">
									Register
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</main><!-- End .main -->

<?php include("app/views/footer.php"); ?>