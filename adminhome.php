<?php
include("config.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>Admin Login</title>
	<link rel="stylesheet" href="admin.css">
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<style>
		a, h2{
			color:#65566D;

		}
		a:hover{
			text-decoration:none;
		}
		.container{
			margin-top:3%;
		}

	</style>
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="index.html"><h4><img src="images\logo.png" height="50px" width="50px">.com</h4></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav" style="margin-left:85%;">
				<li class="nav-item">
					<img src="images/female.png" height="50px" width="50px" style="border-radius:100px; border:2px solid #65566D;">
					<h6 style="color:white; float:right; padding-top:15%;">Admin Name</h6>
				</li>
			</ul>
		</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
				<a href="addproduct.php">
					<div class="card" style="width: 15rem; margin:5%;">
					  <img class="card-img-top" src="images/addproduct.png" alt="Card image cap">
					  <div class="card-body">
						<h2>Add Produdcts</h2>
					  </div>
					</div>
				</a>
				</div>
				<div class="col-md-3">
				<a href="addcategory.php">
					<div class="card" style="width: 15rem; margin:5%;">
					   <img class="card-img-top" src="images/addproduct.png" alt="Card image cap">
					  <div class="card-body">
						<h2>Add Category</h2>
					  </div>
					</div>
				</a>
				</div>
			<div class="col-md-3">
				<a href="viewproducts.php">
					<div class="card" style="width: 15rem; margin:5%;">
					   <img class="card-img-top" src="images/view.png" alt="Card image cap">
					  <div class="card-body">
						<h2>View Produdcts</h2>
					  </div>
					</div>
				</a>
				</div>
				<div class="col-md-3">
				<a href="vieworders.php">
					<div class="card" style="width: 15rem; margin:5%;">
					   <img class="card-img-top" src="images/view.png" alt="Card image cap">
					  <div class="card-body">
						<h2>View Order Details</h2>
					  </div>
					</div>
				</a>
				</div>
			</div>
		</div>
</body>