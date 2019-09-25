<?php 
	unset($_SESSION['bid']);
	session_destroy();
	header("location:blog_login.php");
?>