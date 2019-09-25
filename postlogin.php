<?php
	include 'config.php';
	$name=$_POST['username'];
	$password=$_POST['password'];
	$sql = "SELECT * FROM blogger where blogger_name='$name'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$blogger_id=$row["blogger_id"];
	        $dbpassword=$row["blogger_password"];
	    }
	}
	if($dbpassword==$password){
		session_start();
		// Storing session data
		$_SESSION["bid"] = $blogger_id;
		echo "Logged in successfully";
	    header("location:blog_dashboard.php");
	}
	else{
		header("location:blog_login.php?id=1");
	}
?>