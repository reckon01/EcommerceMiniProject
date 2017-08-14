<?php
echo "<a href='main.php' style='color:blue'>Home</a><br>";
include_once "../database/connection.php";
$q="SELECT * FROM orders";
$username=array();
$address=array();
$order_id=array();
$order_date=array();
$email=array();
$mobileno=array();
$product_id=array();
$product_name=array();
$r=mysqli_query($con, $q);
$n=mysqli_num_rows($r);
$j=0;
while($row=mysqli_fetch_assoc($r)){
	$username[$j]=$row['username'];
	$address[$j]=$row['address'];
	$order_id[$j]=$row['order_id'];
	$order_date[$j]=$row['order_date'];
	$mobileno[$j]=$row['mobileno'];
	$email[$j]=$row['email'];
	$product_id[$j]=$row['product_id'];
	$product_name[$j]=$row['product_name'];
	$j++;
	}
if($n==0)
{
	echo "<h3 style='color:blue'>Any user does no place any order yet now, <a href='main.php' style='color:red'>Click here</a> to go to main admin page.</h3><br>";
}
else{
	echo "<br><br><h3 style='color:blue' align='center'>User's Order List</h3><br>";
	?>
	<table border='1px solid black' cellspacing='0px' align='center'>
	<tr>
	<th>Username</th>
	<th>Address</th>
	<th>Order Id</th>
	<th>Order Date</th>
	<th>Product Id</th>
	<th>Product Name</th>
	<th>Email</th>
    <th>Mobile No</th>
	</tr>
	<?php
	for($i=0; $i<$n; $i++){
		?>
		<tr>
		<td><?php echo $username[$i];?></td>
		<td><?php echo $address[$i];?></td>
		<td><?php echo $order_id[$i]; ?></td>
		<td><?php echo $order_date[$i]; ?></td>
		<td><?php echo $product_id[$i]; ?></td>
		<td><?php echo $product_name[$i]; ?></td>
		<td><?php echo $email[$i]; ?></td>
		<td><?php echo $mobileno[$i]; ?></td>
		</tr>
		<?php
	}
}
?>
