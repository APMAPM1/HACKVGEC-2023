<?php

session_start();
include("dbconfig.php");

if (isset($_SESSION['username'])) {
	// echo "hii login call welcome";exit;
	header("Location:index.php");
}
if (isset($_POST['signin'])) {

	$user = $_POST['A_Username'];
	$pass = md5($_POST['A_Password']);

	function sessionlogin($user)
	{
	
	if(filter_var($user, FILTER_VALIDATE_EMAIL)) {
			return true;
	} else {
			return false;
		}
	}
	$check = sessionlogin($user);
	if ($check) {
		// code...
		$sql= mysqli_query($conn,"SELECT * FROM admin WHERE Admin_Username ='$user' AND Admin_Password='$pass'");
		echo "hello";
	}else{
		$sql= mysqli_query($conn,"SELECT * FROM admin WHERE Admin_Username ='$user' AND Admin_Password='$pass'");
		echo "hello world";
	}
	
	if(mysqli_fetch_assoc($sql) > 0){
		$res = mysqli_fetch_assoc($sql);
		$_SESSION['username']=$user;
		header("location:index.php");
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

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>Sign In | AdminKit Demo</title>

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
							<h1 class="h2">Welcome, Learning Management System</h1>
							<p class="lead">
								Sign in to your account to continue
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="img/avatars/avatar.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
									</div>
									<form method="POST">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control form-control-lg" type="text" name="A_Username" placeholder="Enter your email" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="A_Password" placeholder="Enter your password" />
											<small>
											<a href="index.html">Forgot password?</a>
										</small>
										</div>
										<div>
											<label class="form-check">
											<input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
											<span class="form-check-label">
											Remember me next time
											</span>
										</label>
										</div>
										<div class="text-center mt-3">
											<a href="" class="btn btn-lg btn-primary" name="signin">Sign in</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
										</div>
									</form>
									
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