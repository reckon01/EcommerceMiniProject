<?php
include_once "../database/connection.php";
$pid=$_POST['product_id'];
$pname=$_POST['product_name'];
$price=$_POST['price'];
$qty=$_POST['qty'];
$manu=$_POST['manufac'];
$catid=$_POST['catg_id'];
$q="SELECT * FROM product WHERE product_id='$pid'";
$r=mysqli_query($con, $q) or die(mysqli_error($con));
$n=mysqli_num_rows($r);
if($n==0){
$query="INSERT INTO product(product_id, product_name, price, quantity, manufacturar, cat_id) VALUES('{$pid}','{$pname}','{$price}','{$qty}','{$manu}','{$catid}')";
mysqli_query($con, $query) or die(mysqli_error($con));
echo "<h3 style='color:blue'>Successfully Added product to your database, <a href='main.php' style='color:red'>Click here</a> to go main admin page</h3>";
}
else{
	echo "<h3 style='color:blue'>You have already added this Product, Please add a new product. <a href='admin_add.html' style='color:red'>Click here</a> to add products</h3>";
}
?>