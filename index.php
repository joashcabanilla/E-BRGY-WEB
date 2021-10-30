<?php
require_once('database-config.php');
session_start();
if(isset($_SESSION['votersid'])){
    header("Location:homepage.php");
} 
if(isset($_POST['login'])){
 $votersname = $_POST['voters'];
 $barangay  = $_POST['Barangay'];
 	$sql = "select * from votersid_table where voters_id = '$votersname' and brgy = '$barangay'";
 	$result = mysqli_query($con,$sql);
 		$row = mysqli_num_rows($result);
 		if($get = mysqli_fetch_array($result)){
 			if($row==1){
 				echo $get['voters_id'];
 				$barangayname = $_POST['barangay'];
    			$_SESSION['barangay'] = $barangay;
    			$_SESSION['voters'] = $votersname;
 				$barangay  = $_POST['Barangay'];
 				$_SESSION['votersid'] = $get['voters_id'];
 				header("Location:homepage.php");
 			}
 	}

 		else{
 			echo "<script>alert('Failed to login')</script>";
 		}

 	}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-BRGY Login</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="assets/css/index.css">
<style>
.div01{
	padding: 5px;
	font-family: palatino;
	color: white;
	background: linear-gradient(to right, #009999 0%, #00cc99 100%);

}
.company__info{
	background: linear-gradient(to right, #009999 0%, #00cc99 100%);
	border-top-left-radius: 20px;
	border-bottom-left-radius: 20px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	color: black;
}
select {
  width: 100%;
  padding: 14px 20px;
  border-radius: 10px;
  background-color: #f1f1f1;
}
</style>
</head>
<body class="body">
<div class="div01">

	<header style="">
	<center>
	<h2>Online Fill-up Registration Form for Citizens In Malabon City</h2>
</center>
</header>
</div>
	<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
			<div class="image-loginadmin">
				<img src="assets/images/login.png" alt="login" width="100" height="100">
			</div>
				<a href="admin/loginadmin.php" class="brgy-admin">Login As Barangay Admin</a>
				<span class="company__logo"><h2><img src="logos1.png" width="160px" height="160px"></h2></span>
				<h4 style="color: white;" class="company_title">Welcome Malabonians!</h4>
			</div>
						
			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2>Log In</h2>
					</div>
					<div class="row">

	<form method="POST" action="" control="" class="form-group">
		<label for="barangay">Choose your Barangay</label>		
      <select id="brgy" name="Barangay">
        <option values="" selected hidden>Choose Barangay</option>
        <option value="acacia">Acacia</option>
        <option value="baritan">Baritan</option>
        <option value="bayan-bayanan">Bayan-bayanan</option>
        <option value="catmon">Catmon</option>
        <option value="conception">Concepcion</option>
        <option value="dampalit">Dampalit</option>
        <option value="flores">Flores</option>
        <option value="hulong-duhat">Hulong Duhat</option>
        <option value="ibaba">Ibaba</option>
        <option value="longos">Longos</option>
        <option value="maysilo">Maysilo</option>
        <option value="muzon">Muzon</option>
        <option value="niugan">Niugan</option>
        <option value="panghulo">Panghulo</option>
        <option value="potrero">Potrero</option>
        <option value="sanagustin">San Agustin</option>
        <option value="santulan">Santulan</option>
        <option value="tanyong">Tañong</option>
        <option value="tinajeros">Tinajeros</option>
        <option value="tonsuya">Tonsuya</option>
        <option value="tugatog">Tugatog</option>
      </select>

							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="voters" id="voters" class="form__input" placeholder="Voters ID" required>
							</div>
							
							<div class="row">
								<input type="checkbox" onclick="myFunction()">
								<label for="remember_me">Show Voters ID</label>
							</div>
							<div class="row">
								<input style="background-color: #00cc99;"  name = "login" type="submit" value="Login" class="btn">
							</div>
						</form>
					</div>
					<div class="row">
						<p>Log in using your Voters ID</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="container-fluid text-center footer">

	</div>
	<script>
	function myFunction() {
  var x = document.getElementById("voters");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>	
</body>

  
</body>
</html>
