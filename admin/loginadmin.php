<?php
require_once('../database-config.php');
session_start();
if(isset($_SESSION['barangay']))
{
	if($_SESSION['barangay'] == "malabon")
	{
		header("location:superadmin.php");
	}
	else{
		header("location:admin.php?link=clearance");
	}
}

if(isset($_POST['login']))
{
	$username = $_POST['uname'];
	$pass = $_POST['pass'];
	$sql = "select * from admins where username = '$username' and password = '$pass'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_num_rows($result);
	$sqldata = mysqli_fetch_assoc($result);
	if($row == 1){
		$_SESSION['barangay'] = $sqldata['barangay'];
		if($_SESSION['barangay'] == "malabon")
		{
			header("location:superadmin.php");
		}
		else{
			if($sqldata['barangay'] == "panghulo"){
				$_SESSION['panghulo'] = 1;
			}
			else{
				$_SESSION['panghulo'] = 0;
			}
			header("location:admin.php?link=clearance");
		}
	}
	else{
		echo "<script>alert('Failed to login')</script>";
	}
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style1.css">
	<style>
		.login-voter{
			display:flex;
			justify-content: center;
			align-items: center;
			margin-top: 1rem;
		}
		.login-voter a{
			font-size: 1.1rem;
		}
	</style>
	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
		      		<div class="w-100">
		      			<h3 class="mb-4">ADMIN</h3>
		      		</div>
		      	</div>
						<form action="" class="login-form" method="POST">
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center">
		      				<span class="fa fa-user"></span>
		      			</div>
		      			<input type="text" class="form-control rounded-left" name="uname" placeholder="Username" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center">
	            		<span class="fa fa-lock"></span>
	            	</div>
	              <input type="password" class="form-control rounded-left" name="pass" placeholder="Password" required>
	            </div>
	            <div class="form-group d-flex align-items-center">
								<div class="w-100 d-flex justify-content-end">
		            	<button type="submit"name="login" class="btn btn-primary rounded submit">Login</button>
	            	</div>
	            </div>
				<div class="login-voter">
					<a href="../index.php">Sign in Voter Account</a>
				</div>

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