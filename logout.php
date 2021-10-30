<?php
if(isset($_POST['logout_btn'])){ //employee
	session_name("employee");
	session_start();
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}

if(isset($_POST['a_logout_btn'])){ //admin
	session_name("admin");
	session_start();
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login_admin.php');
}
?>