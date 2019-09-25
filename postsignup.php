<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "blog";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$name=$_POST['username'];
	$password=$_POST['password'];
	$catagory=$_POST['catagory'];
	$sql = "SELECT * FROM blogger order by blogger_id ASC";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $pid=$row["blogger_id"];
	    }
	}else {
	    $pid=0;
	}
	$pid=$pid+1;
	//inserting values
	$sql = "INSERT INTO blogger (blogger_id, blogger_name, blogger_password, blogger_catagory)
	VALUES ('$pid', '$name', '$password', '$catagory')";
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	    header("location:blog_login.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>