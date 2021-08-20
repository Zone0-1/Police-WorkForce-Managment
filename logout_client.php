<?php
	session_start();
	unset($_SESSION['name']);
	unset($_SESSION['registration_id']);
	session_destroy();
	header("location:login.php");
?>