<?php	
	session_start();
	if (!isset($_SESSION['user_login_status']) and $_SESSION['user_login_status'] != 1 and !empty($_SESSION['user_login_status'])) {
        header("location: ../login.php");
		exit;
    }