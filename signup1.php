<!doctype html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Welcome to Signup</h2>
								<p>Existing User?</p>
								<a href="login.php" class="btn btn-white btn-outline-white">Login</a>
							</div>
						</div>
						<div class="login-wrap p-4 p-lg-5">
							<P style="color:red;">*The ID is already taken*</P>
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign Up</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<form action="bcsignup.php" method="post" class="signin-form">
								<div class="form-group mb-3">
									<label class="label" for="ID">ID</label>
									<input type="text" class="form-control" placeholder="ID" name="txtID" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="name">Name</label>
									<input type="text" class="form-control" placeholder="Username" name="txtName" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="EMail">E-Mail</label>
									<input type="email" class="form-control" placeholder="EMail" name="txtEMail" required>
								</div>
								<div class="form-group mb-3">
									<label class="label" for="name">Password</label>
									<input type="password" class="form-control" placeholder="Password" name="txtPassword" required>
								</div>
								<!-- <div class="form-group mb-3">
									<label class="label" for="password">Confirm Password</label>
								<input type="password" class="form-control" placeholder="Password" name="txtPassword" required>
								</div> -->
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
								</div>
								<!-- <div class="form-group d-md-flex">
									<div class="w-50 text-left">
										<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
												<input type="checkbox" checked>
												<span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
								</div> -->
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>