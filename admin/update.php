<?php
  if(isset($_POST['update'])) {



$connection= mysqli_connect("localhost","root","","malabon");
  
  $id = $_POST['id'];
  $first_name = $_POST['first_name'];
  $middle_name = $_POST['middle_name'];
  $last_name = $_POST['last_name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $birthday = $_POST['birthday'];
  $birthplace = $_POST['birthplace'];
  $contact_number = $_POST['contact_number'];
  $status = $_POST['status'];
  $spouse = $_POST['spouse'];
  $year_stay = $_POST['year_stay'];
  $voter = $_POST['voter'];
  $occupation = $_POST['occupation'];
  $name_company = $_POST['name_company'];

	$query = "UPDATE `clearance_table` SET `first_name`='".$first_name."',`middle_name`='".$middle_name."',`last_name`='".$last_name."',`age`='".$age."',`gender`='".$gender."',`address`='".$address."',`birthday`='".$birthday."',`birthplace`='".$birthplace."',`contact_number`='".$contact_number."',`status`='".$status."',`spouse`='".$spouse."',`year_stay`='".$year_stay."',`voter`='".$voter."',`occupation`='".$occupation."',`name_company`='".$name_company."' WHERE `id`='".$id."'";
  $result = mysql_query($connect, $query);
    }
?>
<html>
<style>
input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Update Form</h3>

<div>
  <form action="/action_page.php">
  	<label for="id">id</label><br>
    <input type="text" id="id" name="id" placeholder="Your name.."><br>

    <label for="fname">First Name</label><br>
    <input type="text" id="fname" name="first_name" placeholder="Your name.."><br>

    <label for="mname">middle Name</label><br>
    <input type="text" id="mname" name="middle_name" placeholder="Your name.."><br>

    <label for="lname">Last Name</label><br>
    <input type="text" id="lname" name="last_name" placeholder="Your last name.."><br>

  	<label for="age">age</label><br>
    <input type="text" id="age" name="age" placeholder="Your last name.."><br>
  	
  	<label for="gender">gender</label><br>
    <input type="text" id="gender" name="gender" placeholder="Your last name.."><br>

    <label for="address">address</label><br>
    <input type="text" id="address" name="address" placeholder="Your last name.."><br>

    <label for="birthday">birthday</label><br>
    <input type="text" id="birthday" name="birthday" placeholder="Your last name.."><br>

    <label for="birthplace">birthplace</label><br>
    <input type="text" id="birthplace" name="birthplace" placeholder="Your last name.."><br>

    <label for="contact">contact number</label><br>
    <input type="text" id="contact" name="contact_number" placeholder="Your last name.."><br>

    <label for="status">status</label><br>
    <input type="text" id="status" name="status" placeholder="Your last name.."><br>

    <label for="spouse">spouse</label><br>
    <input type="text" id="spouse" name="spouse" placeholder="Your last name.."><br>

    <label for="years_stay">years stay in malabon</label><br>
    <input type="text" id="years_stay" name="year_stay" placeholder="Your last name.."><br>

    <label for="voter">voter</label><br>
    <input type="text" id="voter" name="voter" placeholder="Your last name.."><br>

    <label for="occupation">occupation</label><br>
    <input type="text" id="occupation" name="occupation" placeholder="Your last name.."><br>

    <label for="name_company">Compnay Name</label><br>
    <input type="text" id="name_company" name="name_company" placeholder="Your last name.."><br>
    <input type="submit" name="update" value="Submit">
  </form>
</div>

</body>
</html>


