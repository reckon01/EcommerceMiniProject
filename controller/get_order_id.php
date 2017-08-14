<?php
include_once "../menu/head.txt";
include_once "../nav.txt";
include_once "../product_nav.txt";
include_once "../database/connection.php";

$query="SELECT order_id, product_id FROM orders WHERE username='$_SESSION[login]' AND product_id='$_GET[pid]'";

$result=mysqli_query($con, $query) or mysqli_die(mysqli_error($con));



while($row=mysqli_fetch_assoc($result))
{
	$oid=$row['order_id'];

}
 

 echo "<h3 style='color:green'>".$_SESSION['login']." Your Order id is ".$oid.", You can also get it from <a href='../view/myorders.php' style='color:red'>My Orders</a></h3><br>";
 
 ?>
 
 
 <?php
 include_once "../menu/foot.txt";
 ?>
