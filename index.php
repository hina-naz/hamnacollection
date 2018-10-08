<?php
session_start();
include("config.php");
$sql = "select * from product";
$query=mysqli_query($con,$sql) or die(mysqli_error($con));
if(isset($_GET['search'])){
	$word=$_GET['word'];
	$sql="select * from product where product_name LIKE '%$word%' or category_name LIKE '%word%';";
	$query=mysqli_query($con,$sql);
}
 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>Index Page</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	 <link rel="stylesheet" href="index1.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<div class="row">
		                                                     <!-- navigation bar -->
	<nav class="navbar navbar-expand-lg navbar-light navbar-sticky navbar-airy fixed-top">
		<a class="navbar-brand" href="index.html"><h4>HAMNA COLLECTION</h4></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav" style="padding-left:68%;">
				<li class="nav-item">
					<a class="nav-link" href="#"><h5><i class="fas fa-sign-in-alt"></i>Register</h5></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><h5><i class="far fa-user"></i>Login</h5></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#"><h5><i class="fas fa-shopping-cart"></i>Cart</h5></a>
				</li>
			</ul>
      </div>
    </nav>
	</div>
	<div class="row" style="margin-top:7%; margin-left:3%; margin-right:3%;">
														<!-- LEFT SIDE -->
		<div class="col-md-3">
			<div class="logo">
			<img src="images\photo.jpg">
			<p style="text-align:center;">©all rights reserved</p>
			</div>
			<div style="margin-left:0%; margin-top:15%;">
				<div class="accordion" id="accordionExample">
				  <div class="card" style="width:250px; margin-left:0%;">
					<div class="card-header" id="headingOne">
					  <h5 class="mb-0">
						<a class="bt" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						 +women collection
						</a>
					  </h5>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
					  <div class="card-body">
						<ul>
							<li><a href="#">Frocks</a></li>
							<li><a href="#">3 piece suits</a></li>
							<li><a href="#">2 piece suits</a></li>
							<li><a href="#">shirt pieces</a></li>
						</ul>
					  </div>
					</div>
				  </div>
				  <div class="card" style="width:250px; margin-left:0%;">
					<div class="card-header" id="headingTwo">
					  <h5 class="mb-0">
						<a class="bt" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
						  +Kids collection
						</a>
					  </h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					  <div class="card-body">
						<ul>
							<li><a href="#">Lehenga</a></li>
							<li><a href="#">Frocks</a></li>
							<li><a href="#">2 piece suits</a></li>
							<li><a href="#">shirt pieces</a></li>
						</ul>
					  </div>
					</div>
				  </div>
				  <div class="card" style="width:250px; margin-left:0%;">
					<div class="card-header" id="headingThree">
					  <h5 class="mb-0">
						<a class="bt" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
						 +colours
						</a>
					  </h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					  <div class="card-body">
						<ul>
							<li><a href="#">White</a></li>
							<li><a href="#">Blue</a></li>
							<li><a href="#">Black</a></li>
							<li><a href="#">Pink</a></li>
							<li><a href="#">Red</a></li>
							<li><a href="#">Gray</a></li>
							<li><a href="#">Green</a></li>
							<li><a href="#">Yellow</a></li>
							<li><a href="#">Peach</a></li>
							<li><a href="#">Skin</a></li>
							<li><a href="#">Brown</a></li>
						</ul>
					  </div>
					</div>
				  </div>
				</div>
			</div>
		</div>
		
														 <!-- RIGHT SIDE -->
		<div class="col-md-9">
			                                                  <!-- slider -->
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="images\hc.png" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images\hc1.jpg" height="460px" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images\hc2.png"  alt="Third slide">
						</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
																	<!-- product cards 1-->
	<div style="margin-top:5%; margin-left:0%;">
		<div class="row">
		<?php while($row=mysqli_fetch_array($query))  {?>
			<div class="col-md-6">
				<div class="card" id="index1" style="margin-left:0%; margin-top:5%;">
				  <img class="card-img-top" src="db/<?php  echo($row['product_image']); ?>" style="height: 25rem;" alt="Card image cap">
				  <div class="card-body">
				  <div style="height:11rem;">
					<h5 class="card-title"><?php echo($row['product_name']); ?> </h5>
					<h5 class="card-title"><?php echo($row['product_price']); ?> </h5>
					<h5 class="card-title"><?php echo($row['brand_name']); ?> </h5>
					<p class="card-text"><?php echo($row['product_desc']); ?> </p>
					</div>
					<a href="womenwear1.html" class="btn">View All Products</a>
				  
				  </div>
				</div>
			</div>
		<?php } ?>
			
			
		</div>
	</div>
	</div>
	</div>
															<!-- shipping card -->
			<div class="row" id="ship">
				<div class="col-md-3">
					<h4><i class="fas fa-shipping-fast"></i>shipping</h4>
				</div>
				<div class="col-md-3">
					<h4><i class="fas fa-money-bill-alt"></i>cash on delivery</h4>
				</div>
				<div class="col-md-3">
					<h4><i class="fas fa-plane"></i>Across Pakistan</h4>
				</div>
				<div class="col-md-3">
					<h4><i class="fas fa-handshake"></i>Happy clients</h4>
				</div>
			</div>
															<!-- footer-->
		<div id="footer">
			<div class="row">
				<div class="col-md-3">
					<h5>INFORMATION</h5>
					<hr>
					<a href="#"><p>About</p></a>
					<a href="#"><p>Return Policy</p></a>
					<a href="#"><p>Privacy Policy</p></a>
					<a href="#"><p>Whole Sale</p></a>
					
				</div>
				<div class="col-md-3">
					<h5>CUSTOMER SERVICES</h5>
					<hr>
					<a href="contact1.html"><p>Contact Us</p></a>
					<a href="#"><p>Site Map</p></a>
					<a href="#"><p>Search Terms</p></a>
					<a href="#"><p>Track Your Order</p></a>
					<a href="#"><p>Request for a Call back</p></a>
				</div>
				<div class="col-md-3">
					<h5><i class="fas fa-envelope-square fa-1.7x" style="padding-right:2%;"></i>CONTACT US</h5>
					<hr>
					<p><i class="fas fa-envelope-square fa-1x" style="padding-right:2%;"></i>Email Addresses:</p>
					<a href="#"><p>cs@hamnacollection.com</p></a>
				</div>
				<div class="col-md-3">
					<h5>NEWSLETTER SIGNUP</h5>
					<hr>
					<div class="form-group col-md-10">
						   <input type="text" class="form-control" id="clientname" placeholder="please enter your email">
						</div>
				</div>
			</div>
				<div class="row" id="cp">
					<div class="col-md-9">
						<p> © 2018 hamnacollection.com All Rights Reserved.</p>
					</div>
					<div class="col-md-3">
						<p><i class="fab fa-facebook"></i></p>
						<p><i class="fab fa-twitter"></i></p>
						<p><i class="fab fa-instagram"></i></p>
					</div>
				</div>
		</div>
</body>
</html>