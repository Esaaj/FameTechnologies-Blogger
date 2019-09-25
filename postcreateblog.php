<?php 
	include 'config.php';
	session_start();
	$sid='';
	$blogger_name="";
	if(isset($_SESSION['bid'])){
		$sid=$_SESSION['bid'];
		$sql = "SELECT * FROM blogger where blogger_id='$sid'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$blogger_name=$row["blogger_name"];
		    }
		}
	}
	$title=$_POST['title'];
	$tags=$_POST['Tags'];
	$short_story=$_POST['short_story'];
	$story1=$_POST['story1'];
	$story2=$_POST['story2'];
	$target_path = "c:/wamp64/Codeigniter/my_blog/stored_image/";
	$target_path1 = "stored_image/"; 
	$target_path = $target_path.basename( $_FILES['photo1']['name']); 
	$target_path1 = $target_path1.basename( $_FILES['photo1']['name']); 
	if(move_uploaded_file($_FILES['photo1']['tmp_name'], $target_path)) { 
	 echo "File1 uploaded successfully!"; 
	} else{ 
	 echo "Sorry, file not uploaded, please try again!"; 
	}
	$target_path = "c:/wamp64/Codeigniter/my_blog/stored_image/";
	$target_path2 = "stored_image/"; 
	$target_path = $target_path.basename( $_FILES['photo2']['name']); 
	$target_path2 = $target_path2.basename( $_FILES['photo2']['name']); 
	if(move_uploaded_file($_FILES['photo2']['tmp_name'], $target_path)) { 
	 echo "File2 uploaded successfully!"; 
	} else{ 
	 echo "Sorry, file not uploaded, please try again!"; 
	}
	$sql = "SELECT * FROM story order by story_id ASC";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $pid=$row["story_id"];
	    }
	}else {
	    $pid=0;
	}
	$pid=$pid+1;
	//inserting values
	$sql = "INSERT INTO story (story_id, story_title, story_tags,short_story,blogger_username, blogger_id,story_para1, story_para2, story_photo1,story_photo2,cdate)
	VALUES ('$pid', '$title', '$tags', '$short_story','$blogger_name', '$sid', '$story1', '$story2', '$target_path1', '$target_path2',CURDATE())";
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	    header("location:blog_dashboard.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>