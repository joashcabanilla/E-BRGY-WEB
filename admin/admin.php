<?php
session_start();
if(!isset($_SESSION['barangay']))
{
    header("location:loginadmin.php");
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
                                        echo "<a href='' id=update-$id>UPDATE</a>
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
                                        echo "<a href='' id=update-$id>UPDATE</a>
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
                                        echo "<a href='' id=update-$id>UPDATE</a>";
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
                                        echo "<a href='' id=update-$id>UPDATE</a>
                                            <a target='_blank' href='../Travelpermit.php?link=$link&id=$id' id='print-$id'>PRINT</a>
                                            </td>
                                            </tr>";
                                    }
                                }
                            echo"</table";
                        }
                        elseif($link == "account"){
                            $sql = "select * from votersid_table where brgy = '$barangay' ORDER BY id";
                            $result = mysqli_query($con,$sql);
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
                                        <td>$voter_id</td>
                                        <td id='td_button' class='printStatus$id'>";
                                        echo "<a href='' id=update-$id>UPDATE</a></td></tr>";
                                }
                            echo"</table";
                        }
                    ?>
                        </div>
                    </div>
                </div>
        </div>
        <script src="js/admin.js"></script>
	</body>
</html>