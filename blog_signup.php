<!DOCTYPE html>
<html>
<head>
	<title>Blog - Sign Up</title>
	<!-- bootstrap stylesheet -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="height:100%; background-image:url('images/signup.jpg'); background-repeat:no-repeat; background-size:cover; ">
	<div class="col-sm-4 col-xs-12" style="float:right; margin-right:4rem; margin-top:7rem;">
		<div class="card">
	  		<div class="card-header text-center" style="background-color:#C09A8D;">
	    		SIGN UP
	  		</div>
	  		<div class="card-body" style="background-color:#FBF4CD;">
	  			<form action="postsignup.php" method="POST">
				    <label for="basic-url">Username</label>
				    <input type="text" class="form-control" name="username">
				    <label for="basic-url">Password</label>
				    <input type="Password" class="form-control" name="password" id="password">
				    <label for="basic-url">Re-Type Password</label>
				    <input type="Password" class="form-control" name="repassword" id="repassword">
				    <label for="basic-url">Catagories</label>
				    <input type="text" class="form-control" data-toggle="tooltip" data-placement="top" title="Select a catagories of the blog your going to write" name="catagory">
				    <button class="btn btn-success ml-auto mr-1 mt-4" type="submit">Sign up</button>
				</form>
	  		</div>
		</div>
	</div>
</body>
<!-- validation -->
<script type="text/javascript">
document.getElementById("password").addEventListener("keyup", testpassword2);
document.getElementById("repassword").addEventListener("keyup", testpassword2);

function testpassword2() {
  var text1 = document.getElementById("password");
  var text2 = document.getElementById("repassword");
  if (text1.value == text2.value)
    repassword.style.borderColor = "#2EFE2E";
  else
    repassword.style.borderColor = "red";
}
</script>
<!-- bootstrap javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
