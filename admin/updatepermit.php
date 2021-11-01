<?php
session_start();
require_once('../database-config.php');
if(isset($_GET['link']) and isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "Select * from permit_table where id = '$id'";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $_COOKIE['firstname'] = $row['first_name'];
        $_COOKIE['middlename'] = $row['middle_name'];
        $_COOKIE['lastname'] = $row['last_name'];
        $_COOKIE['address'] = $row['address'];
        $_COOKIE['contact_number'] = $row['contact_number'];
        $_COOKIE['amount'] = $row['amount'];
        $_COOKIE['storey_number'] = $row['storey_number'];
        $_COOKIE['business_name'] = $row['business_name'];
        $_COOKIE['amount2'] = $row['amount2'];
        $_COOKIE['square_meters'] = $row['square_meters'];
        $_COOKIE['location'] = $row['location'];
    }
    if (isset($_POST['reg'])){
        $firstname = $_POST['fname'];
        $middlename = $_POST['mname'];
        $lastname = $_POST['lname'];
        $address = $_POST['address'];
        $contactNo = $_POST['contactn'];
        $amount = $_POST['amount'];
        $storey_number = $_POST['numberstorey'];
        $business_name = $_POST['nbusiness'];
        $amount1 = $_POST['amount1'];
        $squareMeter = $_POST['howmany'];
        $location = $_POST['location'];
        $sql = "UPDATE `permit_table` SET `first_name` = '$firstname', `middle_name` = '$middlename', `last_name` = '$lastname', `address` = '$address', `contact_number` = '$contactNo', `amount` = '$amount', `storey_number` = '$storey_number', `business_name` = '$business_name', `amount2` = '$amount1', `square_meters` = '$squareMeter', `location` = '$location' WHERE `permit_table`.`id` = $id";
        mysqli_query($con,$sql);
        header('location:admin.php?link=permit&update=permit');
        setcookie("brgy-request", "updated", time()+3600);
      }
      
}
else{
    header("location:admin.php?link=permit");
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
  border-radius: 4px;
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
  padding: 50px;
  margin-left: 10%;
  margin-right: 10%;
}
</style>
<body class="body">

<img src="../logos1.png" width="95" height="95" style="float: left; margin-left: 13%; margin-top: 3%;">
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
<center><h4 style="margin-right: 50px;"><b>APPLICATION FOR PERMIT FORM</b></h4></center><br>
<b><br>

<form action="" method="POST">
    <label for="fname1">First Name:</label>
    <input  type="text" id="fname" name="fname" placeholder="Your First name.." required value="<?php echo $_COOKIE['firstname']; ?>">

     <label for="mname1">Middle Name:</label>
    <input type="text" id="mname" name="mname" placeholder="Your Middle name.." required value="<?php echo $_COOKIE['middlename']; ?>">

    <label for="lname1">Last Name:</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name.." required value="<?php echo $_COOKIE['lastname']; ?>">

    <label for="address1">Address:</label>
    <input type="text" id="address" name="address" placeholder="Your Address.." required value="<?php echo $_COOKIE['address']; ?>">

    <label for="contactno1">Contact No.:</label>
    <input onkeypress="return isNumber(event);" type="text" id="contactno" name="contactn" placeholder="Your Contact no.." required value="<?php echo $_COOKIE['contact_number']; ?>">
    <br>
    <label>(FOR BUILDING PERMIT, RENOVATION AND WIRING PERMIT), (FOR BARANGAY OFFICIAL ONLY):</label>
    <br><br>
    <label for="amount">Amount:</label>
    <input onkeypress="return isNumber(event);" type="text" id="amount" name="amount" placeholder="Amount.." required value="<?php echo $_COOKIE['amount']; ?>">

    <label for="storey">Number of Storey:</label>
    <input onkeypress="return isNumber(event);" type="text" id="storey" name="numberstorey" placeholder="Number of Storey.." required value="<?php echo $_COOKIE['storey_number']; ?>">

    <label for="nameofb">Name of Business or Building:</label>
    <input type="text" id="bname" name="nbusiness" placeholder="Name of Business or Building.." required value="<?php echo $_COOKIE['business_name']; ?>">

<br>
    <label>(FOR SUNKEN PERMIT), (FOR BARANGAY OFFICIAL ONLY):</label>
    <br><br>
    <label for="amount1">Amount:</label>
    <input onkeypress="return isNumber(event);" type="text" id="amount1" name="amount1" placeholder="Amount.." required value="<?php echo $_COOKIE['amount2']; ?>">

    <label for="meter">How many Square Meters:</label>
    <input type="text" id="meter" name="howmany" placeholder="How many Square Meters.." required value="<?php echo $_COOKIE['square_meters']; ?>">

    <label for="location">Location:</label>
    <input type="text" id="location" name="location" placeholder="Location.." required value="<?php echo $_COOKIE['location']; ?>">


      <center><input type="submit" name ="reg" value="UPDATE" style="width: 40%; background-color: #00cc99; font-size:1.5rem; margin-top:1rem; font-weight:bold;border-radius:10px;"></center>
</b>
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
document.getElementById("bname").onkeypress=function(e){ 
var e=window.event || e 
var keyunicode=e.charCode || e.keyCode 
return (keyunicode>=65 && keyunicode<=122 || keyunicode==8 || keyunicode==32)? true : false 
} 
</script>
</body>
</html>