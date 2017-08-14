<?php
include_once "../menu/head.txt";
include_once  "../nav.txt";
if(!(isset($_SESSION['login'])) && $_SESSION['login']=='')
{
	header("Location: ../view/client_login.php");
}
include_once "../product_nav.txt";
include_once "../database/connection.php";
$query="SELECT * FROM cart WHERE username='$_SESSION[login]'";
$result=mysqli_query($con, $query) or die(mysqli_error());
$cart_id=array();
$sub_cat_id=array();
$product_id=array();
$cat_id=array();
$qty=array();
$price=array();
$manufacturar=array();
$product_name=array();
$j=0;

$num_rows=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result))
{
$cart_id[$j]=$row['cat_id'];
$sub_cat_id[$j]=$row['sub_cat_id'];
$product_id[$j]=$row['product_id'];
$cat_id[$j]=$row['cat_id'];
$qty[$j]=$row['qty'];
$price[$j]=$row['price'];
$manufacturar[$j]=$row['manufacturar'];
$product_name[$j]=$row['product_name'];	
$j++;
}
if($num_rows==0)
{
	echo "<h3 style='color:blue'>Your Cart is Empty, <a href='../index.php'>Add Products Now.</a></h3><br>";
}
else{
	echo "<h2 style='color:blue' align='center'>--Cart Items--</h3>";
echo "<pre><h5 style='color:red;'>Product Id		Product Name			   Manufacturar	         Price	        Check Out</h5></pre><br>";
for($i=0; $i<$num_rows; $i++){
echo "<pre>".$product_id[$i]."			   ".$product_name[$i]."		".$manufacturar[$i]."		".$price[$i]."		"."<a href='../view/client_checkout.php?cat_id=$cat_id[$i]&product_id=$product_id[$i]&product_name=$product_name[$i]&price=$price[$i]'>Buy Now</a></pre><br>";
echo "<hr>";
}
}
?>
<?php
include_once "../menu/foot.txt";
?>