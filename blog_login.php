<!DOCTYPE html>
<html>
<head>
	<title>Blog - Login</title>
	<!–– bootstrap stylesheet -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
	if(isset($_GET['id'])){
		if($_GET['id']==1){
			echo '<script language="javascript">';
			echo 'alert("Incorrect Username/Password")';
			echo '</script>';
			$check="is-invalid"; 
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("session has been expired please login to continue")';
			echo '</script>';
			$check=" ";
		}
		
	}
	else
	{
		$check=" ";
	}
?>
<body style="height:100%; background-image:url('images/signup.jpg'); background-repeat:no-repeat; background-size:cover; ">
	<div class="col-sm-4 col-xs-12" style="float:right; margin-right:4rem; margin-top:11rem;">
		<div class="card">
	  		<div class="card-header text-center" style="background-color:#C09A8D;">
	    		LOGIN
	  		</div>
	  		<div class="card-body" style="background-color:#FBF4CD;">
	  			<form action="postlogin.php" method="POST">
				    <label for="username">Username</label>
				    <input type="text" class="form-control" name="username" required>
				    <label for="password">Password</label>
				    <input type="Password" class="form-control <?php echo $check ?>" id="validationServer01" name="password" required>
				    <button class="btn btn-success mt-4" type="submit">Login</button>
				</form>
	  		</div>
		</div>
	</div>
</body>
<!–– bootstrap javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
