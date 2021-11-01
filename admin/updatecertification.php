<?php
session_start();
require_once('../database-config.php');
if(isset($_GET['link']) and isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "Select * from certification_table where id = '$id'";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $_COOKIE['firstname'] = $row['first_name'];
        $_COOKIE['middlename'] = $row['middle_name'];
        $_COOKIE['lastname'] = $row['last_name'];
        $_COOKIE['age'] = $row['age'];
        $_COOKIE['gender'] = $row['gender'];
        $_COOKIE['address'] = $row['address'];
        $_COOKIE['birthday'] = $row['birthday'];
        $_COOKIE['birthplace'] = $row['birthplace'];
        $_COOKIE['contact_number'] = $row['contact_number'];
        $_COOKIE['status'] = $row['status'];
        $_COOKIE['spouse'] = $row['spouse'];
        $_COOKIE['spouse_age'] = $row['spouse_age'];
        $_COOKIE['year_stay'] = $row['year_stay'];
        $_COOKIE['voter'] = $row['voter'];
        $_COOKIE['voter_number'] = $row['voter_number'];
        $_COOKIE['house'] = $row['house'];
        $_COOKIE['occupation'] = $row['occupation'];
        $_COOKIE['companyname'] = $row['companyname'];
    }
    if (isset($_POST['reg'])){
        $firstname = $_POST['fname'];
        $middlename = $_POST['mname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];
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
        $sql = "UPDATE `certification_table` SET `first_name` = '$firstname', `middle_name` = '$middlename', `last_name` = '$lastname', `age` = '$age', `gender` = '$gender', `address` = '$address', `birthday` = '$birthday', `birthplace` = '$birthplace', `status` = '$status', `spouse` = '$spouse', `spouse_age` = '$spouse_age', `year_stay` = '$year_stay', `voter` = '$voter', `voter_number` = '$voterNo', `house` = '$house', `occupation` = '$occupation', `companyname` = '$companyname', `contact_number` = '$contactnumber' WHERE `certification_table`.`id` = $id";
        mysqli_query($con,$sql);
        header('location:admin.php?link=certification&update=certification');
        setcookie("brgy-request", "updated", time()+3600);
      }
      
}
else{
    header("location:admin.php?link=certification");
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

<img src="../logos1.png" width="95" height="95" style="float: left; margin-left: 12%; margin-top: 0%;">
<div class="div">

<h6 style="margin-right: 10%;"><CENTER><b>Republic of the Philippines<br>
  Barangay <?php echo ucfirst($_SESSION['barangay']);?><br>
  Malabon City<br></CENTER>
<center style="margin-left: 9%;">OFFICE OF THE PUNONG BARANGAY</b></center>
</h6>
<hr color="black" size="5px">
<?php
$link = $_GET['link'];
echo "<a href='admin.php?link=$link'><button style='float: left; border: none; background-color: transparent;'><img width='50px' height='50px' src='../back.png'></button></a>";
?>
<center><h5 style="margin-right: 40px;"><b>APPLICATION FORM<BR>CERTIFICATION AND CLEARANCE</b></h5></CENTER>

<b><br>

<form action="" method="post">
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname" placeholder="Your First name.." required value="<?php echo $_COOKIE['firstname']; ?>">

    <label for="mname">Middle Name:</label>
    <input type="text" id="mname" name="mname" placeholder="Your Middle name.." required value="<?php echo $_COOKIE['middlename']; ?>">

    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lastname" placeholder="Your Last name.." required value="<?php echo $_COOKIE['lastname']; ?>">

    <label for="age">Age:</label><br>
    <input onkeypress="return isNumber(event);" type="text" id="age" name="age" placeholder="Your Age.." style="width: 30%;" required value="<?php echo $_COOKIE['age']; ?>">

<span> <p>Gender:</p>
  <input type="radio" id="male" name="gender" value="Male" required <?php if($_COOKIE['gender'] == "Male"){echo "checked";} ?>>
  <label for="male">MALE</label><br>
  <input type="radio" id="female" name="gender" value="Female" required <?php if($_COOKIE['gender'] == "Female"){echo "checked";} ?>>
  <label for="female">FEMALE</label></span><br><br>


    <label for="address">Address:</label>
    <input type="text" id="address" name="address" placeholder="Your Address.." required value="<?php echo $_COOKIE['address']; ?>"><br>

  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday" required value="<?php echo $_COOKIE['birthday']; ?>"><br><br>

    <label for="bplace">Birthplace:</label>
    <input type="text" id="bplace" name="birthplace" placeholder="Your Birthplace.." required value="<?php echo $_COOKIE['birthplace']; ?>">

    <label for="contactno">Contact No.:</label>
    <input onkeypress="return isNumber(event);" type="text" id="contactno" name="contactNo" placeholder="Your Contact no.." required value="<?php echo $_COOKIE['contact_number']; ?>">
 

    <p>Status:</p>
  <input type="radio" id="single" name="status" value="Single" required <?php if($_COOKIE['status'] == "Single"){echo "checked";} ?>>
  <label for="single">SINGLE</label><br>
  <input type="radio" id="married" name="status" value="Married" required <?php if($_COOKIE['status'] == "Married"){echo "checked";} ?>>
  <label for="married">MARRIED</label><br>
  <input type="radio" id="separated" name="status" value="Separated" required <?php if($_COOKIE['status'] == "Separated"){echo "checked";} ?>>
  <label for="separated">SEPARATED</label><br>
  <input type="radio" id="divorced" name="status" value="Divorced" required <?php if($_COOKIE['status'] == "Divorced"){echo "checked";} ?>>
  <label for="divorced">DIVORCED</label><br>
  <input type="radio" id="widowed" name="status" value="Widowed" required <?php if($_COOKIE['status'] == "Widowed"){echo "checked";} ?>>
  <label for="widowed">WIDOWED</label><br><br>


    <label for="spouse">Spouse:</label>
    <input type="text" id="spouse" name="spouse" placeholder="Spouse.." style="width: 45%;" required value="<?php echo $_COOKIE['spouse']; ?>">
    <span><label for="age1">Age:</label></span>
    <input onkeypress="return isNumber(event);" type="text" id="age1" name="age1" placeholder="Age.." style="width: 44%;" required value="<?php echo $_COOKIE['spouse_age']; ?>">
<br>
    <label for="stay">When did you stay in Malabon?:</label>
    <input type="text" id="stay" name="whendid" placeholder="Type here..." required value="<?php echo $_COOKIE['year_stay']; ?>">
<br>

    <p>Voters?:</p>
  <input type="radio" id="yes" name="voters" value="Yes" required <?php if($_COOKIE['voter'] == "Yes"){echo "checked";} ?>>
  <label for="yes">YES</label><br>
  <input type="radio" id="no" name="voters" value="No" required <?php if($_COOKIE['voter'] == "No"){echo "checked";} ?>>
  <label for="no">NO</label></span><br><br>


    <label for="votersno.">Voters No.</label>
    <input type="text" id="votersno" name="votersNo" placeholder="Your Voters no.." required value="<?php echo $_COOKIE['voter_number']; ?>">
<br>

    <p>House:</p>
  <input type="radio" id="owner" name="house" value="Owner" required <?php if($_COOKIE['house'] == "Owner"){echo "checked";} ?>>
  <label for="owner">OWNER</label><br>
  <input type="radio" id="rental" name="house" value="Rental" required  <?php if($_COOKIE['house'] == "Rental"){echo "checked";} ?>>
  <label for="rental">RENTAL</label></span><br><br>


<label for="spouse">Occupation:</label>
    <input type="text" id="occupation" name="occupation" placeholder="Occupation.." style="width: 37%;" required value="<?php echo $_COOKIE['occupation']; ?>">
    <span><label for="nameofc">Name of Company:</label></span>
    <input type="text" id="company" name="nameCompany" placeholder="Name of Company.." style="width: 38%;" required value="<?php echo $_COOKIE['companyname']; ?>">
<br>

  <center><input type="submit" value="UPDATE" name="reg" style="width: 40%; background-color: #00cc99; font-size:1.5rem; margin-top:1rem; font-weight:bold;border-radius:10px;"></center>
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