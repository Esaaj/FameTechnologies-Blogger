<?php 
	include 'config.php';
	session_start();
	$sid='';
	$blogger_name="";
	if(isset($_SESSION['bid'])){
		$sid=$_SESSION['bid'];
		$uid=$_SESSION['uid'];
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
	$cdate=date('Y-m-d');
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
	//updating values
	$sql = "UPDATE story SET `story_title`='$title',`story_tags`='$tags',`short_story`='$short_story',`blogger_username`='$blogger_name',`blogger_id`='$sid',`story_para1`='$story1',`story_para2`='$story2',`story_photo1`='$target_path1',`story_photo2`='$target_path2',`cdate`='$cdate' WHERE story_id='$uid'";
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	    unset($_SESSION['uid']);
	    header("location:blog_dashboard.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

?>