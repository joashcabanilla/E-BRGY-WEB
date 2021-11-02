<?php
session_start();
require_once('../database-config.php');
if(!isset($_SESSION['barangay']))
{
    header("location:loginadmin.php");
}
if(isset($_GET['process']) and $_GET['process'] == "addvoterid" and isset($_COOKIE['votersid'])){
    $votersid = $_COOKIE['votersid'];
    $barangay = $_GET['barangay'];
    $link = $_GET['link'];
    if(isset($_SESSION['panghulo']) and $_SESSION['panghulo'] == 1){
        $sql = "select * from panghulo where voters_id = '$votersid'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_num_rows($result);
        if($row == 1){
            $_COOKIE['check_voter'] = "already exist";
            setcookie("votersid", "", time() - 3600);
        }
        else{
            $sql = "INSERT INTO `panghulo` (`id`, `voters_id`) VALUES (NULL, '$votersid')";
            mysqli_query($con,$sql);
            $_COOKIE['check_voter'] = "saved";
            setcookie("votersid", "", time() - 3600);
        }
    }
    else{
        $sql = "select * from votersid_table where brgy = '$barangay' and voters_id = '$votersid'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_num_rows($result);
        if($row == 1){
            $_COOKIE['check_voter'] = "already exist";
            setcookie("votersid", "", time() - 3600);
        }
        else{
            $sql = "INSERT INTO `votersid_table` (`id`, `voters_id`, `brgy`) VALUES (NULL, '$votersid', '$barangay')";
            mysqli_query($con,$sql);
            $_COOKIE['check_voter'] = "saved";
            setcookie("votersid", "", time() - 3600);
        }
    }
}

if(isset($_GET['process']) and $_GET['process'] == "updatevoterid" and isset($_COOKIE['votersid'])){
    $votersid = $_COOKIE['votersid'];
    $barangay = $_GET['barangay'];
    $link = $_GET['link'];
    $table_id = $_COOKIE['votersid_table'];
    if(isset($_SESSION['panghulo']) and $_SESSION['panghulo'] == 1){
        $sql = "select * from panghulo where voters_id = '$votersid'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_num_rows($result);
        if($row == 1){
            $_COOKIE['check_voter'] = "already exist";
            setcookie("votersid", "", time() - 3600);
        }
        else{
            $sql = "UPDATE `panghulo` SET `voters_id` = '$votersid' WHERE `panghulo`.`id` = $table_id";
            mysqli_query($con,$sql);
            $_COOKIE['check_voter'] = "saved";
            setcookie("votersid", "", time() - 3600);
        }
    }
    else{
        $sql = "select * from votersid_table where brgy = '$barangay' and voters_id = '$votersid'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_num_rows($result);
        if($row == 1){
            $_COOKIE['check_voter'] = "already exist";
            setcookie("votersid", "", time() - 3600);
        }
        else{
            $sql = "UPDATE `votersid_table` SET `voters_id` = '$votersid' WHERE `votersid_table`.`id` = $table_id";
            mysqli_query($con,$sql);
            $_COOKIE['check_voter'] = "saved";
            setcookie("votersid", "", time() - 3600);
        } 
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
    <?php
        $link = $_GET['link'];
        echo "<style>.$link{background-color:#1c5c7c}</style>";
    ?>
	</head>
	<body>
        <div class="container">
            <div class="sidemenu">
                <div class="brgylogo">
                    <img src="images/admin-logo.png" width = "90" height = "110" />
                    <p class="barangay-name"><?php echo "BARANGAY " . strtoupper($_SESSION['barangay']);?></p>
                </div>
                <div class="brgylink">
                    <a href="admin.php?link=clearance" class="clearance">CLEARANCE</a>
                    <a href="admin.php?link=certification" class="certification">CERTIFICATION</a>
                    <a href="admin.php?link=permit" class="permit">PERMIT</a>
                    <a href="admin.php?link=travelpermit" class="travelpermit">TRAVEL PERMIT</a>
                    <a href="admin.php?link=account" class="account">VOTER ACCOUNT</a>
                    <a href="logout.php">LOGOUT</a>
                </div>
            </div>
            <div class="container-table">
                    <?php
                        $link = $_GET['link'];
                        $barangay = $_SESSION['barangay'];
                        if($link == "account")
                        {
                            echo "<div class='addvoter'>
                            <form action='admin.php' method='GET' id='formvoter'>
                            <input type='hidden' name='link' value='$link'>
                            <input type='hidden' name='barangay' value='$barangay'>
                            <input type='hidden' name='process' value='addvoterid'>
                            </form>
                            <button class='addvoterbtn'>ADD VOTERS ID</button>    
                            </div>";
                        }
                    ?>
                    <div class="content-table">
                    <?php
                        $link = $_GET['link'];
                        $barangay = $_SESSION['barangay'];
                        require_once('../database-config.php');
                        if($link == "clearance"){
                            $sql = "select * from clearance_table where barangay = '$barangay' ORDER BY print";
                            $result = mysqli_query($con,$sql);
                            echo "<table class='clearance-table'>
                                <tr>
                                    <th>NAME</th>
                                    <th>DATE</th>
                                    <th>CONTACT NO</th>
                                    <th>PURPOSE</th>
                                    <th>PRINT</th>
                                </tr>";
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $firstname = $row['first_name'];
                                    $middlename = $row['middle_name'];
                                    $lastname = $row['last_name'];
                                    $date = $row['date'];
                                    $contactNo = $row['contact_number'];
                                    $purpose = $row['purpose'];
                                    $barangay = $row['barangay'];
                                    $id = $row['id'];
                                    $print = $row['print'];
                                    echo "<tr class='clearance-row-$id'>
                                        <td>$firstname $middlename $lastname</td>
                                        <td>$date</td>
                                        <td>$contactNo</td>
                                        <td>$purpose</td>
                                        <td id='td_button' class='printStatus$id'>";
                                    if($print == "printed"){
                                        echo "PRINTED</td>";
                                    }
                                    else{
                                        echo "<a href='updateclearance.php?link=$link&id=$id' id=update-$id>UPDATE</a>
                                        <a target='_blank' href='../brgy_clearance.php?link=$link&id=$id' id='print-$id'>PRINT</a>
                                        </td>
                                        </tr>";
                                    }
                                }
                            echo"</table";
                        }
                        elseif($link == "certification"){
                            $sql = "select * from certification_table where barangay = '$barangay' ORDER BY print";
                            $result = mysqli_query($con,$sql);
                            echo "<table class='certification-table'>
                                <tr>
                                    <th>NAME</th>
                                    <th>DATE</th>
                                    <th>CONTACT NO</th>
                                    <th>PURPOSE</th>
                                    <th>PRINT</th>
                                </tr>";
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $firstname = $row['first_name'];
                                    $middlename = $row['middle_name'];
                                    $lastname = $row['last_name'];
                                    $date = $row['date'];
                                    $contactNo = $row['contact_number'];
                                    $purpose = $row['purpose'];
                                    $barangay = $row['barangay'];
                                    $id = $row['id'];
                                    $print = $row['print'];
                                    echo "<tr class='certification-row-$id'>
                                        <td>$firstname $middlename $lastname</td>
                                        <td>$date</td>
                                        <td>$contactNo</td>
                                        <td>$purpose</td>
                                        <td id='td_button' class='printStatus$id'>";
                                    if($print == "printed"){
                                        echo "PRINTED</td>";
                                    }
                                    else{
                                        echo "<a href='updatecertification.php?link=$link&id=$id' id=update-$id>UPDATE</a>
                                        <a target='_blank' href='../brgy_cert.php?link=$link&id=$id' id='print-$id'>PRINT</a>
                                        </td>
                                        </tr>";
                                    }
                                }
                            echo"</table";
                        }
                        elseif($link == "permit"){
                            $sql = "select * from permit_table where barangay = '$barangay' ORDER BY print";
                            $result = mysqli_query($con,$sql);
                            echo "<table class='permit-table'>
                                <tr>
                                    <th>NAME</th>
                                    <th>DATE</th>
                                    <th>CONTACT NO</th>
                                    <th>PURPOSE</th>
                                    <th>PRINT</th>
                                </tr>";
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $firstname = $row['first_name'];
                                    $middlename = $row['middle_name'];
                                    $lastname = $row['last_name'];
                                    $date = $row['date'];
                                    $contactNo = $row['contact_number'];
                                    $purpose = $row['purpose'];
                                    $barangay = $row['barangay'];
                                    $id = $row['id'];
                                    $print = $row['print'];
                                    echo "<tr class='permit-row-$id'>
                                        <td>$firstname $middlename $lastname</td>
                                        <td>$date</td>
                                        <td>$contactNo</td>
                                        <td>$purpose</td>
                                        <td id='td_button' class='printStatus$id'>";
                                    if($print == "printed"){
                                        echo "PRINTED</td>";
                                    }
                                    else{
                                        echo "<a href='updatepermit.php?link=$link&id=$id' id=update-$id>UPDATE</a>";
                                        if($purpose == "Business Permit")
                                        {
                                            echo" <a target='_blank' href='../Businesspermit.php?link=$link&id=$id' id='print-$id'>PRINT</a>
                                            </td>
                                            </tr>";
                                        }
                                        else{
                                            echo" <a target='_blank' href='../buildingpermit.php?link=$link&id=$id' id='print-$id'>PRINT</a>
                                            </td>
                                            </tr>";
                                        }
                                    }
                                }
                            echo"</table";
                        }
                        elseif($link == "travelpermit"){
                            $sql = "select * from travelpermit_table where barangay = '$barangay' ORDER BY print";
                            $result = mysqli_query($con,$sql);
                            echo "<table class='travelpermit-table'>
                                <tr>
                                    <th>NAME</th>
                                    <th>DATE</th>
                                    <th>ADDRESS</th>
                                    <th>PURPOSE</th>
                                    <th>PRINT</th>
                                </tr>";
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $firstname = $row['first_name'];
                                    $middlename = $row['middle_name'];
                                    $lastname = $row['last_name'];
                                    $date = $row['date'];
                                    $purpose = $row['purpose'];
                                    $barangay = $row['barangay'];
                                    $id = $row['id'];
                                    $print = $row['print'];
                                    $address = $row['address'];
                                    echo "<tr class='travelpermit-row-$id'>
                                        <td>$firstname $middlename $lastname</td>
                                        <td>$date</td>
                                        <td>$address</td>
                                        <td>$purpose</td>
                                        <td id='td_button' class='printStatus$id'>";
                                    if($print == "printed"){
                                        echo "PRINTED</td>";
                                    }
                                    else{
                                        echo "<a href='updatetravelpermit.php?link=$link&id=$id' id=update-$id>UPDATE</a>
                                            <a target='_blank' href='../Travelpermit.php?link=$link&id=$id' id='print-$id'>PRINT</a>
                                            </td>
                                            </tr>";
                                    }
                                }
                            echo"</table";
                        }
                        elseif($link == "account"){
                            
                            if(isset($_SESSION['panghulo']) and $_SESSION['panghulo'] == 1){
                                $sql = "select * from panghulo";
                                $result = mysqli_query($con,$sql);
                            }
                            else{
                                $sql = "select * from votersid_table where brgy = '$barangay' ORDER BY voters_id asc";
                                $result = mysqli_query($con,$sql);
                            }
                            echo "<table class='account-table'>
                                <tr>
                                    <th>VOTERS ID</th>
                                    <th>BUTTON</th>
                                </tr>";
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    $id = $row['id'];
                                    $voter_id = $row['voters_id'];
                                    echo "<tr class='travelpermit-row-$id'>
                                        <td class='voterid-$id'>$voter_id</td>
                                        <td id='td_button' class='printStatus$id'>";
                                        echo "<button id=update-$id>UPDATE</button></td></tr>";
                                }
                            echo"</table";
                        }
                    ?>
                    </div>
                    </div>
                </div>
        </div>
        <?php
           echo"<form action='admin.php' method='GET' id='update-formvoter'>
            <input type='hidden' name='link' value='$link'>
            <input type='hidden' name='barangay' value='$barangay'>
            <input type='hidden' name='process' value='updatevoterid'>
            </form>";
            if(isset($_COOKIE['check_voter']) and $_COOKIE['check_voter'] == "saved")
            {
                echo "<script>swal('', 'VOTERS ID SUCCESSFULLY SAVED', 'success')</script>";
                //setcookie("check_voter", "", time() - 3600);
            }
            elseif(isset($_COOKIE['check_voter']) and $_COOKIE['check_voter'] == "already exist")
            {
                echo "<script>swal('', 'VOTERS ID ALREADY EXIST', 'warning')</script>";
                //setcookie("check_voter", "", time() - 3600);
            }

            if(isset($_GET['link']) and isset($_GET['update']) and $_GET['update'] == "clearance" and isset($_COOKIE['brgy-request']))
            {
                echo "<script>swal('', 'BARANGAY CLEARANCE SUCCESSFULLY UPDATED', 'success')</script>";
                //setcookie("brgy-request", "", time() - 3600);
            }
            elseif(isset($_GET['link']) and isset($_GET['update']) and $_GET['update'] == "certification" and isset($_COOKIE['brgy-request']))
            {
                echo "<script>swal('', 'BARANGAY CERTIFICATION SUCCESSFULLY UPDATED', 'success')</script>";
                //setcookie("brgy-request", "", time() - 3600);
            }
            elseif(isset($_GET['link']) and isset($_GET['update']) and $_GET['update'] == "permit" and isset($_COOKIE['brgy-request']))
            {
                echo "<script>swal('', 'BARANGAY PERMIT SUCCESSFULLY UPDATED', 'success')</script>";
                //setcookie("brgy-request", "", time() - 3600);
            }
            elseif(isset($_GET['link']) and isset($_GET['update']) and $_GET['update'] == "travelpermit" and isset($_COOKIE['brgy-request']))
            {
                echo "<script>swal('', 'BARANGAY TRAVEL PERMIT SUCCESSFULLY UPDATED', 'success')</script>";
                //setcookie("brgy-request", "", time() - 3600);
            }
        ?>
        <script src="js/admin.js"></script>
	</body>
</html>