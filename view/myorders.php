<?php
include_once "../menu/head.txt";
include_once  "../nav.txt";
if(!(isset($_SESSION['login'])) && $_SESSION['login']=='')
{
	header("Location: ../view/client_login.php");
}
include_once "../product_nav.txt";
include_once "../database/connection.php";

$query="SELECT * FROM orders WHERE username='$_SESSION[login]'";

$result=mysqli_query($con, $query) or die(mysqli_query($con));

$num_rows=mysqli_num_rows($result);
$order_id=array();
$product_id=array();
$price=array();
$manufacturar=array();
$product_name=array();
$order_date=array();
$j=0;
while($row=mysqli_fetch_assoc($result))
{

$order_id[$j]=$row['order_id'];
$product_id[$j]=$row['product_id'];
$price[$j]=$row['price'];
$product_name[$j]=$row['product_name'];
$order_date[$j]=$row['order_date'];
$j++;
}
if($num_rows==0)
{
	echo "<h3 style='color:blue'>Your Order List is Empty, <a href='../controller/cart.php' style='color:red'>Click here</a> to buy Products now.</h3><br>";
}
else{
	echo "<h2 style='color:blue' align='center'>--My Orders--</h3>";
echo "<pre><h5 style='color:red;'>Order Id      Product Id		Product Name		Price	      Action</h5></pre><br>";
for($i=0; $i<$num_rows; $i++){
echo "<pre>".$order_id[$i]." 		".$product_id[$i]."			   ".$product_name[$i]." ".$price[$i]."	  "."<a href='../view/cancel_order.php?o_id=$order_id[$i]' style='color:green'>Cancel</a> / <a href='../view/returns_client.php'>Return</a></pre><br>";
echo "<hr>";
}
}
?>
<?php
include_once "../menu/foot.txt";
?>