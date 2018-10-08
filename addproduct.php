<?php
session_start();
include("config.php");

if(!isset($_SESSION['login_user']))
{
	header("Location: admin.php");}
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
		a, h2, h1{
			color:#65566D;
		}
		a:hover{
			text-decoration:none;
		}
		form{
			margin-top:3%;
			margin-left:15%;
			margin-right:15%;
			
		}
		label{
			color:#65566D;
			font-weight:bold;
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
					<h6 style="color:white; float:right; padding-top:15%;"><?php echo($_SESSION['login_user']); ?></h6>
				</li>
			</ul>
		</div>
		</nav>
		<div class="container">
			<h1 align="center">ADD PRODUCTS</h1>
			<form method="POST" action="code_upload.php" enctype="multipart/form-data">
				  <div class="form-group">
					<label>Product Name</label>
					<input type="text" class="form-control" name="p_name" placeholder="Enter product name">
				  </div>
				  <div class="form-group">
					<label>Product Description</label>
					<input type="text" class="form-control" name="p_desc" placeholder="Enter product description">
				  </div>
				  <div class="form-group">
					<label>Product Image</label>
					<br>
					<input type="file" id="input" name="fileToUpload" placeholder="upload product image" required/>
				  </div>
				  
				   <div class="form-group">
					<label>Product colour</label>
					<input type="text" class="form-control" name="p_color" placeholder="Enter product colour">
				  </div>
				  <div class="form-group">
					<label>Product price</label>
					<input type="text" class="form-control" name="p_price" placeholder="Enter product price">
				  </div>
				  <div class="form-group">
					<label>Category Name</label><select  id="input" name="c_name" class="form-control">
						  <option value="-1" selected>Select..</option>
						  <?php 
						   $sqlt="SELECT * FROM category";
						  $queryt=mysqli_query($con,$sqlt) or die(mysqli_error($con));
						  while($row=mysqli_fetch_array($queryt)){?>
						<option><?php echo $row['category_name'];
						?></option>
						<?php } ?>
						</select>
				  </div>
				  <div class="form-group">
					<label>Category Description</label>
					<input type="text" class="form-control" name="c_desc" placeholder="Enter category description">
				  </div>
				   <div class="form-group">
					<label>Brand Name</label>
					<input type="text" class="form-control" name="b_name" placeholder="Enter brand name">
				  </div>
				  <button type="submit" class="btn">Submit</button>
			</form>
		</div>