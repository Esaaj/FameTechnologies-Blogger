<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<!–– bootstrap stylesheet -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php 
	include 'config.php';
	session_start();
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
	}
	else{
		header("location:blog_login.php?id=2");
	}
	if(isset($_GET['id'])){
		$sid=$_GET['id'];
		$sql = "SELECT * FROM story where story_id=$sid";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()){
                $title=$row['story_title'];
                $tags=$row['story_tags'];
                $short=$row['short_story'];
                $para1=$row['story_para1'];
                $para2=$row['story_para2'];
                $image1=$row['story_photo1'];
                $image2=$row['story_photo2'];	
            }
        }
	}
	$_SESSION["uid"] = $sid;
?>
<body style="background-color:#F9F2CB">
	<nav class="navbar navbar-expand-sm navbar-dark fixed-top justify-content-end" style="background-color: #563D7C;">
	    <img src="images/logo.png" alt="blogger logo" style="height:3rem;">
	    <a class="navbar-brand" href="blog_index.php" style="margin-left:2rem">My Blog - Update Blog</a>
	    <a class="btn btn-success ml-auto mr-1" href="blog_dashboard.php">Dashboard</a>
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
			        	<a class="dropdown-item" href="#">logout</a>
			        </div>
			    </li>
	        </ul>
    	</div>
	</nav>
	<div class="col-md-10 offset-md-1 col-xs-12 align-center" style="margin-top:6rem;">
		<div class="card">
	  		<div class="card-header text-center" style="background-color:#FF6600;">
	    		UPDATE BLOG
	  		</div>
	  		<div class="card-body" style="background-color:#FFFFFF;">
	  			<form action="postupdateblog.php" method="POST" enctype="multipart/form-data">
				    <label for="basic-url">Title</label>
				    <input type="text" class="form-control" name="title" value="<?php echo $title; ?>">
				    <label for="basic-url">Tags</label>
				    <input type="Text" class="form-control" name="Tags" value="<?php echo $tags; ?>">
				    <label for="basic-url">Short Story</label>
				    <input type="Text" class="form-control" name="short_story" value="<?php echo $short; ?>">
				    <label for="basic-url">Story - Paragraph one</label>
				    <textarea rows="8" cols="30" class="form-control" name="story1" ><?php echo $para1; ?></textarea>
				    <label for="basic-url">Story - Paragraph Two</label>
				    <textarea rows="8" cols="30" class="form-control" name="story2" ><?php echo $para2; ?></textarea>
				    <div class="container-fuild" style="margin-top:2rem">
						<div class="row">
							<hr size="10" width="37%" align="left" color="black">
							<h5>Change the picture if needed</h5>
							<hr size="10" width="37%" align="right" color="black">
						</div>
					</div>
				    <div class="row" style="margin-top:2rem">
				    	<div class="col-md-9">
				    		<img src="<?php echo $image1?>" class="img-fluid" alt="Responsive image">
				    	</div>
				    	<div class="col-md-3">
				    		<img src="<?php echo $image2?>" class="img-fluid" alt="Responsive image">
				    	</div>
				    </div>
				    <div class="row" style="margin-top:2rem">
				    	<div class="col-md-9">
					  		<input type="file" name="photo1"><br>
					  		<label for="files">Picture 1 - Choose a image with Max Cover-size image</label>
					  	</div>
					  	<div class="col-md-3">
					  		<input type="file" name="photo2"><br>
					  		<label for="files">Picture 2 -<br> Choose a Logo (350*350)</label>
					  	</div>
					</div>
				    <button class="btn btn-success mt-4" type="submit">Update Post</button>
				</form>
	  		</div>
		</div>
	</div>

</body>
<!–– bootstrap javascript -->
<script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
