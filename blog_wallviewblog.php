<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<!–– bootstrap stylesheet -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php 
	include 'config.php';
	$uid=$_GET['id'];
	$sql = "SELECT * FROM story where story_id='$uid'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$title=$row['story_title'];
            $tags=$row['story_tags'];
            $short=$row['short_story'];
            $blogger_name=$row['blogger_username'];
            $para1=$row['story_para1'];
            $para2=$row['story_para2'];
            $image1=$row['story_photo1'];
            $image2=$row['story_photo2'];
            $cdate=$row['cdate'];	
	    }
	}
?>
<body style="background-color:#F9F2CB">
	<nav class="navbar navbar-expand-sm navbar-dark fixed-top justify-content-end" style="background-color: #563D7C;">
		<img src="images/logo.png" alt="blogger logo" style="height:3rem;">
	    <a class="navbar-brand" href="blog_index.php" style="margin-left:2rem">My Blog - Blogger</a>
	    <a class="btn btn-warning ml-auto mr-1" href="blog_index.php">Wall</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	</nav>
	
	<div class="container" style="margin-top:5rem">
		<div class="text-center">
			<h2><?php echo $title; ?></h2>
		</div>
	</div>	
	<div class="container" style="margin-top:2rem">
		<img src="<?php echo $image1; ?>" class="card-img-top" alt="...">
		<p style="float:right; text-align:justify;">Blogged By - <?php echo $blogger_name; ?> on  <?php echo $cdate; ?>
		<p style="margin-top:3rem; text-indent: 4rem; text-align:justify;"><?php echo $para1; ?></p>
		<p style="text-align:justify;"><?php echo $para2; ?></p>
	</div>
</div>
</body>
<!–– bootstrap javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
