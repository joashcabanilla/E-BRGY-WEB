<?php
//localhost
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'malabon';

$con = mysqli_connect($db_host, $db_username, $db_password, $db_name);

if(!$con){
    die('Error : ('. $con->connect_errno .')'. $con->connect_error);
}

?>