<?php
echo "<a href='main.php' style='color:blue'>Home</a><br>";
include_once "../database/connection.php";
$q="SELECT * FROM product";
$r=mysqli_query($con, $q);
$n=mysqli_num_rows($r);
$pid=array();
$pname=array();
$price=array();
$qty=array();
$manu=array();
$catid=array();
$j=0;
while($row=mysqli_fetch_assoc($r)){
	$pid[$j]=$row['product_id'];
	$pname[$j]=$row['product_name'];
	$price[$j]=$row['price'];
	$qty[$j]=$row['quantity'];
	$manu[$j]=$row['manufacturar'];
	$catid[$j]=$row['cat_id'];
	$j++;
	}
	if($n==0)
{
	echo "<h3 style='color:blue'>You have not added any product, <a href='admin_add.html'>Add Products Now.</a></h3><br>";
}
else{
	echo "<h2 style='color:blue' align='center'>--All Products--</h3>";
echo "<pre><h5 style='color:blue;'>Product Id          Product Name	     Manufacturar	         Price	         Quantity     Category Id        Action</h5></pre><br>";
for($i=0; $i<$n; $i++){
echo "<pre>".$pid[$i]."		 ".$pname[$i]."		".$manu[$i]."		".$price[$i]."		".$qty[$i]."         ".$catid[$i]."              "."<a href='delete.php?pid=$pid[$i]' style='color:red'>Delete</a></pre><br>";
echo "<hr>";
}
}