<?php
session_start();
if (isset($_POST['submit'])){

    if(isset($_POST['Clearance'])){
      $table = "clearance_table";
      $_SESSION['table'] = $table;
      header('Location: fillup.php?purpose='. $_POST['Clearance']);
    }

    if(isset($_POST['certification'])){
      $table = "certification_table";
      $_SESSION['table'] = $table;
      header('Location: fillup.php?purpose='. $_POST['certification']);
    }

    if(isset($_POST['Permit'])){
    $permit = $_POST['Permit'];
    if($permit != "Travel Permit"){
      $_SESSION['table'] = "permit_table";
        header('Location: fillup1.php?purpose='. $_POST['Permit']);
    }
    else{
        $_SESSION['table'] = "travelpermit_table";
        header('Location: Travel.php?purpose='. $_POST['Permit']);
      }
    }
}

?>
<html>
<head>
  <title>E-Brgy Choices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color:  #87CEEB;
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
select {
  width: 100%;
  padding: 14px 20px;
  border-radius: 10px;
  background-color: #f1f1f1;
}
.body{
  background-color: #FFE4E1;
}
.div0 {
  background-color: white;
  padding: 5px;
  border-radius: 4px;
  margin-left: 10%;
  margin-right: 10%;
}
.div1 {
  background: linear-gradient(to right, #009999 0%, #00cc99 100%);
  padding: 5px;
  border-radius: 5px;
  margin-left: 0%;
  margin-right: 0%;
  color: white;
}
.div2 {
  background: linear-gradient(to right, #009999 0%, #00cc99 100%);
  padding: 15px;
  border-radius: 5px;
  margin-left: 0%;
  margin-right: 0%;
  color: white;
}
</style>

</head>
  <header>
    <div class="div1">
      <img src="logos1.png" width="100" height="100" style="margin-left: 3%;">
      <span><h2 style="float: right; margin-top: 2%; margin-right: 16%;">Online Fill-up Registration Form for Citizens In Malabon City</h2></span>
    </div>
  </header>
<body class="body">
  <a href="homepage.php"><button style="float: left; border: none; background-color: transparent; margin-left: 70px; margin-top: 12px;"><img width="50px" height="50px" src="back.png"></button></a>
  <br>
  <div class="div0">
    <center>

    <form action="" method="POST">
  <div class="div2"><label for="clearance">Choose your Clearance need</label></div>
  <select id="clear" name="Clearance" onchange="bruh();">
  <option values="" selected hidden>Choose Clearance</option>
  <option value="Bank Transaction">Bank Transaction</option>
  <option value="Loan Purpose">Loan Purpose</option>
  <option value="Motor Loan Pupose">Motor Loan Pupose</option>
  <option value="Pedicab/Tricycle Registration">Pedicab/Tricycle Registration</option>
  <option value="TIN ID Requirements">TIN ID Requirements</option>
  <option value="Internet Application">Internet Application</option>
  <option value="Maynilad Application">Maynilad Application</option>
  <option value="Meralco Application">Meralco Application</option>
  <option value="Postal ID Application">Postal ID Application</option>
  <option value="Local Employment">Local Employment</option>
  <option value="Residency">Residency</option>
  <option value="Travel Abroad">Travel Abroad</option>
  </select>
 <div class="div2"><label for="certification">Choose your Certification need</label></div>
  <select id="cert" name="certification" onchange="luh();">
  <option values="" selected hidden>Choose Certifications</option>
  <option value="Death Claim">Death Claim</option>
  <option value="Legal Purpose">Legal Purpose</option>
  <option value="Burial Assistance">Burial Assistance</option>
  <option value="Financial Assistance">Financial Assistance</option>
  <option value="Medical Assistance">Medical Assistance</option>
  <option value="Public Atty. Office Assistance">Public Atty. Office Assistance</option>
  <option value="BIR Requirements">BIR Requirements</option>
  <option value="Philhealth Requirements">Philhealth Requirements</option>
  <option value="PWD Requirements">PWD Requirements</option>
  <option value="School Requirements">School Requirements</option>
  <option value="Senior Citizen Requirements">Senior Citizen Requirements</option>
  <option value="Solo Parent Requirements">Solo Parent Requirements</option>
  <option value="SSS Requirements">SSS Requirements</option>
  </select>
 <div class="div2"><label for="barangay">Choose your Permit need</label></div>
  <select id="permit" name="Permit" onchange="nudaw();">
  <option values="" selected hidden>Choose Permits</option>
  <option value="Building Permit">Building Permit</option>
  <option value="Business Permit">Business Permit</option>
  <option value="Demolition Permit">Demolition Permit</option>
  <option value="Excavation Permit">Excavation Permit</option>
  <option value="Fencing Permit">Fencing Permit</option>
  <option value="Renovation Permit">Renovation Permit</option>
  <option value="Sunken Permit">Sunken Permit</option>
  <option value="Wiring Permit">Wiring Permit</option>
  <option value="Travel Permit">Travel Permit</option>
  </select>
<input type="submit" value="Clear Form" onclick="reset();" style="width: 40%; background-color: #00cc99;">
<input type="submit" disabled id = "submit"name = "submit"value="Submit" style="width: 40%; background-color: #00cc99;">
</form>
</center>


</div>
<script>
  function reset(){
    document.getElementById("submit").disabled = true;
    document.getElementById("clear").disabled = false;
    document.getElementById("clear").selectedIndex = "0";
    document.getElementById("cert").disabled = false;
    document.getElementById("cert").selectedIndex = "0";
    document.getElementById("permit").disabled = false;
    document.getElementById("permit").selectedIndex = "0";
  }
  function nyeks(){
    document.getElementById("clear").disabled = false;
    document.getElementById("cert").disabled = false;
    document.getElementById("permit").disabled = false;
  }
  function bruh(){
    document.getElementById("submit").disabled = false;
    document.getElementById("cert").disabled = true;
    document.getElementById("permit").disabled = true;
  }function luh(){
    document.getElementById("submit").disabled = false;
    document.getElementById("clear").disabled = true;
    document.getElementById("permit").disabled = true;
  }function nudaw(){
    document.getElementById("submit").disabled = false;
    document.getElementById("clear").disabled = true;
    document.getElementById("cert").disabled = true;
  }  </script>
</body>
</html>