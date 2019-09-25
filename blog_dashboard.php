<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<!–– bootstrap stylesheet -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php 
	session_start();
	include 'config.php';
	if(isset($_SESSION['bid'])){
		$sid=$_SESSION['bid'];
		$sql = "SELECT * FROM blogger where blogger_id='$sid'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$blogger_name=$row["blogger_name"];
		    	$blogger_catagory=$row['blogger_catagory'];
		    }
		}
		$counter=0;
		$cdate="Not yet started";
		$sql = "SELECT * FROM story where blogger_id='$sid'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		    	$counter=$counter+1;
		    	$cdate=$row["cdate"];
		    }
		}
	}
	else{
		header("location:blog_login.php?id=2");
	}


?>
<body style="background-color:#F9F2CB">
	<nav class="navbar navbar-expand-sm navbar-dark fixed-top justify-content-end" style="background-color: #563D7C;">
		<img src="images/logo.png" alt="blogger logo" style="height:3rem;">
	    <a class="navbar-brand" href="blog_index.php" style="margin-left:2rem">My Blog - Blogger Dashbaord</a>
	    <a class="btn btn-success ml-auto mr-1" href="blog_create_blog.php">Create Blog</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
	        <ul class="navbar-nav text-right">
	            <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          <?php echo $blogger_name; ?>
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			        	<a class="dropdown-item" href="postlogout.php">logout</a>
			        </div>
			    </li>
	        </ul>
    	</div>
	</nav>
	<div class="container-fuild">
		<div class="col-sm-12 col-xs-12" style="margin-top:5rem">
			<div class="card mb-3">
				<div class="card-header text-center" style="background-color:#FF6600">
					<?php echo $blogger_name; ?>'s Blog Details
				</div>
				<div class="container-fuild row" style="height:5rem">
					<div class="col-sm-3" style="margin-top:13px; margin-left:50px">
						<img src="images/logo_length.png" alt="blogger logo" style="height:3rem;">
					</div>
					<h6 class="card-title col-sm-2 " style="margin-top:25px">Tags : <?php echo $blogger_catagory; ?></h5>
					<h6 class="card-title col-sm-3" style="margin-top:25px">Blog Count : <?php echo $counter; ?></h5>
					<h6 class="card-title col-sm-3" style="margin-top:25px">Last Blog on : <?php echo $cdate; ?></h5>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fuild">
		<div class="row">
			<hr size="10" width="43%" align="left" color="black">
			<h5>Your Blog's</h5>
			<hr size="10" width="43%" align="right" color="black">
		</div>
	</div>	
	<div class="container-fuild">
	<div class="card-deck" style="margin-top:1rem">

		<?php
			$sql = "SELECT * FROM story where blogger_id=$sid";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()){
                    $story_title=$row['story_title'];
                    $story_tags=$row['story_tags'];
                    $story_short=$row['short_story'];
                    $cdate=$row['cdate'];
                    $story_id=$row['story_id'];
                    $ccdate=date("Y-m-d");
                    $days=abs($cdate - $ccdate);
                    $image=$row['story_photo2'];	     
		?>

		<div class="col-sm-4 col-xs-12">
			<div class="card mb-3">
				<img src="<?php echo $image; ?>" class="card-img-top" alt="..." height="250px">
				<div class="card-body text-center">
					<h5 class="card-title" style="height:3rem"><?php echo $story_title; ?></h5>
					<p class="card-text" style="height:5rem"><?php echo $story_short; ?></p>
					<p class="card-text"><small class="text-muted">Last updated <?php echo $days; ?> days ago -  </small></p>
				</div>
				<div class="card-footer text-center">
					<small class="text-muted"><a href="blog_update_blog.php?id=<?php echo $story_id;?>" style="color:green">Update Blog  /</a><a href="blog_viewblog.php?id=<?php echo $story_id;?>" >  View Full Blog  /</a><a href="postdeleteblog.php?id=<?php echo $story_id;?>" style="color:red">  Delete Blog</a></small>
				</div>
			</div>
		</div>
		<?php
				}
    		}      
		?>
	</div>
</div>
</body>
<!–– bootstrap javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
