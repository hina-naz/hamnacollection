<?php
session_start();
include("config.php");
	if(isset($_POST['login'])) {
      // username and password sent from form 
      
      $myname = $_POST['adminname'];
      $mypassword =$_POST['adminpassword']; 
      
      $sql = "SELECT admin_id FROM admin WHERE admin_name = '$myname' and admin_password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      if($count == 1) {
         echo("$myname");
         $_SESSION['login_user'] = $myname;
         
         header("location: addproduct.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>Admin Login</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	 <link rel="stylesheet" href="index.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="index.php"><h4><img src="images\logo.png" height="50px" width="50px">.com</h4></a>
		</nav>
		<div class="container">
			<div class="col-md-10" style="margin:5%;" align="center">
				<img src="images/profile-Female-icon.png" height="200px" width="200px" style="border-radius:100px; border:2px solid #65566D;">
				<h1>Admin Login</h1>
			</div>
		<div class="logform" style="margin-left:20%; margin-right:20%;">
			<form method="POST">
				  <div class="form-group row">
					<label class="col-sm-2 col-form-label">Username</label>
					<div class="col-sm-9">
					  <input type="text" class="form-control" name="adminname" placeholder="Username">
					</div>
				  </div>
				  <div class="form-group row">
					<label class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-9">
					  <input type="password" class="form-control" name="adminpassword" placeholder="Password">
					</div>
				  </div>
				  <div class="form-group row">
					<div class="col-sm-10">
					  <div class="form-check">
						<input class="form-check-input" type="checkbox" id="gridCheck1">
						<label class="form-check-label" for="gridCheck1">remember me</label>
					  </div>
					</div>
				  </div>
				  <div class="form-group row">
					<div class="col-sm-10">
					  <button type="submit" name="login" class="btn btn-primary">Sign in</button>
					  <label>Don't have an account<a href="#"> Sign Up</a><label>
					</div>
				  </div>
					</form>
		</div>
	</div>
</body>
</html>