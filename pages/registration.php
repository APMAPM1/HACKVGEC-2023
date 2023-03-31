<?php
	include("dbconfig.php");
if (isset($_POST['submit'])) {

	$user = $_POST['username'];
	$email = $_POST['email'];
	$pass = md5($_POST['password']);
	$c_pass = md5($_POST['confirm_password']);
	$sql = mysqli_query($conn,"SELECT * FROM user WHERE Email ='$email' OR Username ='$user'");
	
	if(mysqli_num_rows($sql)>0)
	{
		echo "<script> alert('Email or Enrollment No Has Alredy Token')</script>";
	}else{
		if($pass == $c_pass){
			$query = "INSERT INTO user VALUES('','$user','$email','$pass')";
			mysqli_query($conn,$query);
			echo "<script> alert('Registration Succesfully')</script>";
		}else{
			echo "<script> alert('Password Does Not Match')</script>";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Sign Up | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Registration</h1>
							<p class="lead">
								<b>Learning Management System</b>
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form action="" method="post" autocomplete="off">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" id="username" name="username" placeholder="Enter your username" />
										</div>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" id="email" name="email" placeholder="Enter your email" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" id="password" name="password" placeholder="Enter password" />
										</div>
										<div class="mb-3">
											<label class="form-label">Confirm Password</label>
											<input class="form-control form-control-lg" type="password" id="confirm_password" name="confirm_password" placeholder="Enter confirm password" />
										</div>
										<div class="text-center mt-3">
											<!-- <a href="index.html" class="btn btn-lg btn-primary">Sign up</a> -->
											<button type="submit" class="btn btn-lg btn-primary" name="submit">Sign up</button>
										</div>
									</form>
									<br/>
											Do you have any account..? <a href="U_login.php" class="text text-lg text-primary">Sign in</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>