<?php
session_start();
require_once('database-config.php');
if(isset($_GET['purpose'])){
  $purpose = $_GET['purpose'];
}
if (isset($_POST['reg'])){
  $table = $_SESSION['table'];
  $barangay = $_SESSION['barangay'];
  $firstname = $_POST['fname'];
  $middlename = $_POST['mname'];
  $lastname = $_POST['lname'];
  $age = $_POST['age'];
  $date = $_POST['date'];
  $address = $_POST['address'];
  $location = $_POST['location'];
  $sql = "INSERT INTO `$table` (`id`, `first_name`, `middle_name`, `last_name`, `date`, `age`, `address`, `location`, `purpose`, `barangay`, `print`) VALUES (NULL, '$firstname', '$middlename', '$lastname', '$date', '$age', '$address', '$location', '$purpose', '$barangay', 'pending')";
  mysqli_query($con,$sql);
  header('Location: confirm.html');
}
?>
<html>
<head>
<title>Fill up Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
</head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #87CEEB;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #008080;
}
body{
 font-family: 'Raleway', sans-serif;
}
.body{
  background-color: #FFE4E1;
}
.div {
  background-color: white;
  padding: 20px;
  margin-left: 10%;
  margin-right: 10%;
}
</style>
<body class="body">

<img src="logos1.png" width="95" height="95" style="float: left; margin-left: 13%; margin-top: 0%;">
<div class="div">

<h6 style="margin-right: 10%;"><CENTER><b>Republic of the Philippines<br>
  Barangay <?php echo ucfirst($_SESSION['barangay']);?><br>
  Malabon City<br></CENTER>
<center style="margin-left: 9%;">OFFICE OF THE PUNONG BARANGAY</br></center>
</h6>
<hr color="black" size="5px">

<a href="choices.php"><button style="float: left; border: none; background-color: transparent;"><img width="50px" height="50px" src="back.png"></button></a>

<center><h4 style="margin-right: 50px;"><b>TRAVEL PERMIT FORM</b></h4></center><br>


<form action="" method="POST">
  <label for="date">Date Today:</label>
  <input type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" required><br><br>

    <label for="fname1">First Name:</label>
    <input type="text" id="fname" name="fname" placeholder="Your First name.." required>

     <label for="mname1">Middle Name:</label>
    <input type="text" id="mname" name="mname" placeholder="Your Middle name.." required>

    <label for="lname1">Last Name:</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name.." required>

    <label for="age">Age:</label>
    <input onkeypress="return isNumber(event);" type="text" id="age" name="age" placeholder="Your Age.." required>

    <label for="address1">Address:</label>
    <input type="text" id="address" name="address" placeholder="Your Address.." required>

    <label for="location">Location:</label>
    <input type="text" id="location" name="location" placeholder="Location.." required>


      <center><input type="submit" name ="reg" value="Submit" style="width:50%; background-color: #00cc99;"></center>
</b>
</form>
</div>
<script>
   function isNumber(e) {
                       e = e || window.event;
                       var charCode = e.which ? e.which : e.keyCode;
                       return /\d/.test(String.fromCharCode(charCode));
}
  document.getElementById("fname1").onkeypress=function(e){ 
var e=window.event || e 
var keyunicode=e.charCode || e.keyCode 
return (keyunicode>=65 && keyunicode<=122 || keyunicode==8 || keyunicode==32)? true : false 
} 
document.getElementById("mname1").onkeypress=function(e){ 
var e=window.event || e 
var keyunicode=e.charCode || e.keyCode 
return (keyunicode>=65 && keyunicode<=122 || keyunicode==8 || keyunicode==32)? true : false 
} 
document.getElementById("lname1").onkeypress=function(e){ 
var e=window.event || e 
var keyunicode=e.charCode || e.keyCode 
return (keyunicode>=65 && keyunicode<=122 || keyunicode==8 || keyunicode==32)? true : false 
} 
document.getElementById("bname").onkeypress=function(e){ 
var e=window.event || e 
var keyunicode=e.charCode || e.keyCode 
return (keyunicode>=65 && keyunicode<=122 || keyunicode==8 || keyunicode==32)? true : false 
} 
</script>
</body>
  </html>