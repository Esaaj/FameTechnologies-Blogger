<?php
	include 'config.php';
	session_start();
	$uid=$_GET['id'];
	$sql = "DELETE from story where story_id=$uid";
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	    header("location:blog_dashboard.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>