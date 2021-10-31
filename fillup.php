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
  $lastname = $_POST['lastname'];
  $age = $_POST['age'];
  $date = $_POST['date'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $birthday = $_POST['birthday'];
  $birthplace = $_POST['birthplace'];
  $contactnumber = $_POST['contactNo'];
  $status = $_POST['status'];
  $spouse = $_POST['spouse'];
  $spouse_age = $_POST['age1'];
  $year_stay = $_POST['whendid'];
  $voter = $_POST['voters'];
  $voterNo = $_POST['votersNo'];
  $house = $_POST['house'];
  $occupation = $_POST['occupation'];
  $companyname = $_POST['nameCompany'];
  $sql = "INSERT INTO `$table` (`id`, `first_name`, `middle_name`, `last_name`, `date`, `age`, `gender`, `address`, `birthday`, `birthplace`, `contact_number`, `status`, `spouse`, `spouse_age`, `year_stay`, `voter`, `voter_number`, `house`, `occupation`, `companyname`, `purpose`, `barangay`,`print`) VALUES (NULL, '$firstname', '$middlename', '$lastname', '$date', '$age', '$gender', '$address', '$birthday', '$birthplace', '$contactnumber', '$status', '$spouse', '$spouse_age', '$year_stay', '$voter', '$voterNo', '$house', '$occupation', '$companyname', '$purpose', '$barangay', 'pending')";
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
  background-color:#87CEEB;
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

<img src="logos1.png" width="95" height="95" style="float: left; margin-left: 12%; margin-top: 0%;">
<div class="div">

<h6 style="margin-right: 10%;"><CENTER><b>Republic of the Philippines<br>
  Barangay <?php echo ucfirst($_SESSION['barangay']);?><br>
  Malabon City<br></CENTER>
<center style="margin-left: 9%;">OFFICE OF THE PUNONG BARANGAY</b></center>
</h6>
<hr color="black" size="5px">

  <a href="choices.php"><button style="float: left; border: none; background-color: transparent;"><img width="50px" height="50px" src="back.png"></button></a>



<center><h5 style="margin-right: 40px;"><b>APPLICATION FORM<BR>CERTIFICATION AND CLEARANCE</b></h5></CENTER>

<b>

<form action="" method="post">

    <label for="date">Date Today:</label>
    <input type="date" id="date" name="date" placeholder="date('d/m/y')" value="<?php echo date('Y-m-d'); ?>" required><br><br>

    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname" placeholder="Your First name.." required>

    <label for="mname">Middle Name:</label>
    <input type="text" id="mname" name="mname" placeholder="Your Middle name.." required>

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lastname" placeholder="Your Last name.." required>

    <label for="age">Age:</label><br>
    <input onkeypress="return isNumber(event);" type="text" id="age" name="age" placeholder="Your Age.." style="width: 30%;" required>

<span> <p>Gender:</p>
  <input type="radio" id="male" name="gender" value="Male" required>
  <label for="male">MALE</label><br>
  <input type="radio" id="female" name="gender" value="Female" required>
  <label for="female">FEMALE</label></span><br><br>


    <label for="address">Address:</label>
    <input type="text" id="address" name="address" placeholder="Your Address.." required><br>

  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday" required><br><br>

    <label for="bplace">Birthplace:</label>
    <input type="text" id="bplace" name="birthplace" placeholder="Your Birthplace.." required>

    <label for="contactno">Contact No.:</label>
    <input onkeypress="return isNumber(event);" type="text" id="contactno" name="contactNo" placeholder="Your Contact no.." required>
 

    <p>Status:</p>
  <input type="radio" id="single" name="status" value="Single" required>
  <label for="single">SINGLE</label><br>
  <input type="radio" id="married" name="status" value="Married" required>
  <label for="married">MARRIED</label><br>
  <input type="radio" id="separated" name="status" value="Separated" required>
  <label for="separated">SEPARATED</label><br>
  <input type="radio" id="divorced" name="status" value="Divorced" required>
  <label for="divorced">DIVORCED</label><br>
  <input type="radio" id="widowed" name="status" value="Widowed" required>
  <label for="widowed">WIDOWED</label><br><br>


    <label for="spouse">Spouse:</label>
    <input type="text" id="spouse" name="spouse" placeholder="Spouse.." style="width: 45%;" required>
    <span><label for="age1">Age:</label></span>
    <input onkeypress="return isNumber(event);" type="text" id="age1" name="age1" placeholder="Age.." style="width: 44%;" required>
<br>
    <label for="stay">When did you stay in Malabon?:</label>
    <input type="text" id="stay" name="whendid" placeholder="Type here..." required>
<br>

    <p>Voters?:</p>
  <input type="radio" id="yes" name="voters" value="Yes" required>
  <label for="yes">YES</label><br>
  <input type="radio" id="no" name="voters" value="No" required>
  <label for="no">NO</label></span><br><br>


    <label for="votersno.">Voters No.</label>
    <input type="text" id="votersno" name="votersNo" placeholder="Your Voters no.." required>
<br>

    <p>House:</p>
  <input type="radio" id="owner" name="house" value="Owner" required>
  <label for="owner">OWNER</label><br>
  <input type="radio" id="rental" name="house" value="Rental" required>
  <label for="rental">RENTAL</label></span><br><br>


<label for="spouse">Occupation:</label>
    <input type="text" id="occupation" name="occupation" placeholder="Occupation.." style="width: 37%;" required>
    <span><label for="nameofc">Name of Company:</label></span>
    <input type="text" id="company" name="nameCompany" placeholder="Name of Company.." style="width: 38%;" required>
<br>

  <center><input type="submit" value="Submit" name="reg" style="width: 50%; background-color: #00cc99;"></center>
</B>
</form>
</div>
<script>
  function isNumber(e) {
                       e = e || window.event;
                       var charCode = e.which ? e.which : e.keyCode;
                       return /\d/.test(String.fromCharCode(charCode));
}
document.getElementById("fname").onkeypress=function(e){ 
var e=window.event || e 
var keyunicode=e.charCode || e.keyCode 
return (keyunicode>=65 && keyunicode<=122 || keyunicode==8 || keyunicode==32)? true : false 
} 
document.getElementById("mname").onkeypress=function(e){ 
var e=window.event || e 
var keyunicode=e.charCode || e.keyCode 
return (keyunicode>=65 && keyunicode<=122 || keyunicode==8 || keyunicode==32)? true : false 
} 
document.getElementById("lname").onkeypress=function(e){ 
var e=window.event || e 
var keyunicode=e.charCode || e.keyCode 
return (keyunicode>=65 && keyunicode<=122 || keyunicode==8 || keyunicode==32)? true : false 
} 
document.getElementById("bplace").onkeypress=function(e){ 
var e=window.event || e 
var keyunicode=e.charCode || e.keyCode 
return (keyunicode>=65 && keyunicode<=122 || keyunicode==8 || keyunicode==32)? true : false 
} 
document.getElementById("spouse").onkeypress=function(e){ 
var e=window.event || e 
var keyunicode=e.charCode || e.keyCode 
return (keyunicode>=65 && keyunicode<=122 || keyunicode==8 || keyunicode==32)? true : false 
} 
</script>
</body>
</html>