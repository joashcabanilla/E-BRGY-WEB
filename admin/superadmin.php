<?php
session_start();
require_once('../database-config.php');
if(!isset($_SESSION['barangay']))
{
    header("location:loginadmin.php");
}
if(isset($_GET['brgyform']) and $_GET['brgyform'] == "add" and isset($_COOKIE['brgy_barangay'])){
    $brgy_barangay = $_COOKIE['brgy_barangay'];
    $brgy_username = $_COOKIE['brgy_username'];
    $brgy_password = $_COOKIE['brgy_password'];
    $sql = "select * from admins where username = '$brgy_username' and barangay = '$brgy_barangay'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_num_rows($result);
    if($row == 1){
        $_COOKIE['check_brgy'] = "already exist";
        setcookie("brgy_barangay", "", time() - 3600);
        setcookie("brgy_username", "", time() - 3600);
        setcookie("brgy_password", "", time() - 3600);
    }
    else{
        $sql = "INSERT INTO `admins` (`id`, `username`, `password`, `barangay`) VALUES (NULL, '$brgy_username', '$brgy_password', '$brgy_barangay')";
        mysqli_query($con,$sql);
        $_COOKIE['check_brgy'] = "saved";
        setcookie("brgy_barangay", "", time() - 3600);
        setcookie("brgy_username", "", time() - 3600);
        setcookie("brgy_password", "", time() - 3600);
    }
}

if(isset($_GET['brgyform']) and $_GET['brgyform'] == "update" and isset($_COOKIE['brgy_barangay'])){
    $brgy_id = $_COOKIE['brgy_id'];
    $brgy_barangay = $_COOKIE['brgy_barangay'];
    $brgy_username = $_COOKIE['brgy_username'];
    $brgy_password = $_COOKIE['brgy_password'];
    $sql = "select * from admins where username = '$brgy_username' and barangay = '$brgy_barangay'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_num_rows($result);
    if($row == 1){
        $_COOKIE['check_brgy'] = "already exist";
        setcookie("brgy_id", "", time() - 3600);
        setcookie("brgy_barangay", "", time() - 3600);
        setcookie("brgy_username", "", time() - 3600);
        setcookie("brgy_password", "", time() - 3600);
    }
    else{
        $sql = "UPDATE `admins` SET `username` = '$brgy_username', `password` = '$brgy_password' WHERE `admins`.`id` = $brgy_id";
        mysqli_query($con,$sql);
        $_COOKIE['check_brgy'] = "saved";
        setcookie("brgy_id", "", time() - 3600);
        setcookie("brgy_barangay", "", time() - 3600);
        setcookie("brgy_username", "", time() - 3600);
        setcookie("brgy_password", "", time() - 3600);
    }
}
?>   
<!doctype html>
<html lang="en">
  <head>
  	<title>Barangay Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/admin.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<body>
        <div class="container">
            <div class="sidemenu">
                <div class="brgylogo">
                    <img src="images/admin-logo.png" width = "90" height = "110" />
                    <p class="barangay-name"><?php echo strtoupper($_SESSION['barangay'] . " CITY");?></p>
                </div>
                <div class="brgylink" style="justify-content:flex-start; margin-top:3rem;">
                    <a href="logout.php">LOGOUT</a>
                </div>
            </div>
            <div class="container-table">
                    <?php
                            echo "<div class='addbrgy'>
                            <button class='addbrgybtn'>ADD BARANGAY ACCOUNT</button>    
                            </div>";
                    ?>
                    <div class="content-table">
                        <?php
                             require_once('../database-config.php');
                             $sql = "select * from admins ORDER BY barangay asc";
                             $result = mysqli_query($con,$sql);
                             echo "<table class='superadmin-table'>
                                <tr>
                                    <th>USERNAME</th>
                                    <th>BARANGAY</th>
                                    <th>BUTTON</th>
                                </tr>";
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $username = $row['username'];
                                    $password = $row['password'];
                                    $barangay = ucwords($row['barangay']);
                                    $id = $row['id'];
                                    echo "<tr class='superadmin-row-$id'>
                                        <td class='username-$id'>$username</td>
                                        <td class='barangay-$id'>$barangay</td>
                                        <td id='td_button' class='printStatus$id'>";
                                        echo "<button id=update-$id>UPDATE</button></td></tr>";
                                }
                                echo "</table>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="infobrgy">
            <div class="content-brgy">
                <div class="title-brgy">
                    <p class="title-text-brgy">ADD BARANGAY ACCOUNT</p>
                    <button class="title-button-brgy">X</button>
                </div>
                <div class="input-account-brgy">
                    <select class="barangay-select">
                    <option value="" selected hidden>Select Barangay</option>
                        <?php
                            require_once('../database-config.php');
                            $sql = "select * from barangay order by barangay_name asc";
                            $result = mysqli_query($con,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                                $brgy = $row['barangay_name'];
                                $brgy1 = ucwords($brgy);
                                echo "<option value='$brgy'>$brgy1</option>";
                            }
                        ?>
                    </select>
                    <input type="text" placeholder="USERNAME" class="username-brgy">
                    <input type="password" placeholder="PASSWORD" class="password-brgy">
                    <button class="savebtn-brgy">SAVE</button>
                </div>
            </div>
        </div>
        <?php
        echo "<form action='superadmin.php' method='GET' id='brgy-addform'>
             <input type='hidden' name='brgyform' value='add'>
        </form>
        <form action='superadmin.php' method='GET' id='brgy-updateform'>
             <input type='hidden' name='brgyform' value='update'>
        </form>";
        if(isset($_COOKIE['check_brgy']) and $_COOKIE['check_brgy'] == "saved")
            {
                echo "<script>swal('', 'BARANGAY ACCOUNT SUCCESSFULLY SAVED', 'success')</script>";
                setcookie("check_brgy", "", time() - 3600);
            }
            elseif(isset($_COOKIE['check_brgy']) and $_COOKIE['check_brgy'] == "already exist")
            {
                echo "<script>swal('', 'BARANGAY ACCOUNT ALREADY EXIST', 'warning')</script>";
                setcookie("check_brgy", "", time() - 3600);
            }
        ?>
        <script src="js/admin.js"></script>
	</body>
</html>

