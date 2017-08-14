<?php
include_once "../menu/head.txt";
include_once "../nav.txt";
if(!(isset($_SESSION['login'])) && $_SESSION['login']=='')
{
	header("Location: ../view/client_login.php");
}

include_once "../product_nav.txt";

$pid=$_GET['pid'];
$uname=$_SESSION['login'];
$price=$_GET['price'];
$pname=$_GET['pname'];
$manufac=$_GET['manu'];
$cid=$_GET['catid'];
$scid=$_GET['subcatid'];
$qty=$_GET['qty'];

include_once "../database/connection.php";

$q="SELECT product_id FROM cart WHERE product_id='$pid' AND username='$uname'";
$r=mysqli_query($con, $q) or die(mysqli_error());
$n=mysqli_num_rows($r);
if($n==0)
{
$query="INSERT INTO cart(product_id, username, cat_id, sub_cat_id, qty, price, manufacturar, product_name) VALUES('$pid', '$uname', '$cid', '$scid', '$qty', '$price', '$manufac', '$pname')";
	mysqli_query($con, $query) or die(mysqli_error($con));
	echo "<h3 style='color:blue'> Successfully added to Cart, please check your cart for further update</h3>";
}
else{
	echo "<h3 style='color:red'>You have already added this item, please goto your cart items for further query</h3>";
}


include_once "../menu/foot.txt"; 
?>