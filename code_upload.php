<?php
include("config.php");
$target_dir = "db/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

	$file_name=$_FILES["fileToUpload"]["name"];
  $p_name=$_POST['p_name'];
  $p_desc=$_POST['p_desc'];
//  $p_img="upload/".$_FILES['p_img']["name"];
  $p_price=$_POST['p_price'];
  $p_color=$_POST['p_color'];
  
  $c_desc=$_POST['c_desc'];
  $b_name=$_POST['b_name'];
  
	
$sql1="insert into product(product_name,product_desc,product_image,product_price,product_color) values ('$p_name','$p_desc','$file_name','$p_price','p_color')";
$sql2="insert into product_color(color_name) values ('$p_color')";
$sql3="insert into category(category_name, category_desc) values ('$c_desc')";
$sql4="insert into brand(brand_name) values ('$b_name')";
mysqli_query($con,$sql1) or die(mysqli_error($con));	
mysqli_query($con,$sql2) or die(mysqli_error($con));
mysqli_query($con,$sql3) or die(mysqli_error($con));
mysqli_query($con,$sql4) or die(mysqli_error($con));


header("location:addproduct.php");
	}else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>