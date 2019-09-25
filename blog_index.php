<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<!–– bootstrap stylesheet -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
	if(isset($_POST['tags'])){
		$tags=$_POST['tags'];
		$title="Search result of " . $_POST['tags'] . "'s tag";
		$sql="SELECT * FROM story where story_tags='$tags'";
	}
	else{
		$title="Blogger Blog Wall";
		$sql="SELECT * FROM story order by story_id DESC";
	}
?>
<body style="background-color:#F9F2CB">
	<nav class="navbar navbar-expand-sm navbar-dark fixed-top justify-content-end" style="background-color: #563D7C;">
	    <img src="images/logo.png" alt="blogger logo" style="height:3rem;">
	    <a class="navbar-brand" href="blog_index.php" style="margin-left:2rem">My Blog - Wall</a>
	    <button class="btn btn-success ml-auto mr-1" type="button" data-toggle="modal" data-target="#exampleModal">Search</</button>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
	        <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
	        <ul class="navbar-nav text-right">
	            <li class="nav-item">
	                <a class="nav-link" href="blog_login.php">LOGIN</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link" href="blog_signup.php">SIGNUP</a>
	            </li>
	        </ul>
    	</div>
	</nav>
	<div class="container-fuild" style="margin-top:6rem">
		<div class="row">
			<hr size="10" width="40%" align="left" color="black">
			<h5><?php echo $title; ?></h5>
			<hr size="10" width="40%" align="right" color="black">
		</div>
	</div>	
	<div class="container-fuild">
	<div class="card-deck" style="margin-top:2rem">
		<?php
			include 'config.php';
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
					<small class="text-muted"><a href="blog_wallviewblog.php?id=<?php echo $story_id;?>" >  View Full Blog  </a></small>
				</div>
			</div>
		</div>
		<?php
				}
    		}      
		?>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select tag to search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<form action="blog_index.php" method="post">
        		<label for="username">Tags</label>
				<input type="text" class="form-control" name="tags" required>
        	
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>	
      </div>
    </div>
  </div>
</div>
</body>
<!–– bootstrap javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
