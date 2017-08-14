<?php
include_once "../menu/head.txt";
include_once  "../nav.txt";
include_once "../product_nav.txt";
include_once "../database/connection.php";
$query="SELECT * FROM orders WHERE order_id='$_POST[order_id]' AND username='$_POST[username]' AND product_id='$_POST[product_id]'";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
$num_rows=mysqli_num_rows($result);
if($num_rows==0){
	echo "<h3 style='color:blue'>You do no ordered any Product right now, Please <a href='../view/myorders.php' style='color:red'>Click here</a> to order.</h3>";
}
else{
	
while($row=mysqli_fetch_assoc($result)){
	
	$pname=$row['product_name'];
	$price=$row['price'];
	$addr=$row['address'];
	$pin=$row['pin'];
	$landmark=$row['landmark'];
	$reg=$row['state'];
}
?>
<div>
<h3>Order Status:</h3>
<span style="color:white">___________________________________________________</span>On Way<span style="color:white">_____________</span>
<br>

<strong style="color:blue">Verify Order________________Dispatch Product____________</strong><strong style="color:red">O</strong><strong style="color:green">____________Regional Office_________________Shipping Address</strong>
<br>
<strong>(Order id: <?php echo $_POST['order_id']; ?>)<span style="color:white">______________</span>(Pid: <?php echo $_POST['product_id'].", ".$pname;?>)<span style="color:white">___________________</span><span style="color:white">______</span>(<?php echo $reg; ?>)<span style="color:white">_________________</span>(<?php echo $addr.", ".$landmark.", ".$pin ?>)</strong>
<?php
}
?>
<?php
include_once "../menu/foot.txt";
?>