<?php
echo "<a href='main.php' style='color:blue'>Home</a><br>";
include_once "../database/connection.php";
$q="SELECT * FROM customer";
$name=array();
$username=array();
$address=array();
$pin=array();
$email=array();
$mobileno=array();
$state=array();
$password=array();
$r=mysqli_query($con, $q);
$n=mysqli_num_rows($r);
$j=0;
while($row=mysqli_fetch_assoc($r)){
	$name[$j]=$row['name'];
	$username[$j]=$row['username'];
	$address[$j]=$row['address'];
	$email[$j]=$row['email'];
	$mobileno[$j]=$row['mobileno'];
	$state[$j]=$row['state'];
	$password[$j]=$row['password'];
	$j++;
	}
if($n==0)
{
	echo "<h3 style='color:blue'>Any user does no register yet now, <a href='main.php' style='color:red'>Click here</a> to go to main admin page.</h3><br>";
}
else{
	echo "<br><br><h3 style='color:blue' align='center'>Registered User List</h3><br>";
	?>
	<table border='1px solid black' cellspacing='0px' align='center'>
	<tr>
	<th>Name</th>
	<th>Address</th>
	<th>Mobile no</th>
	<th>Email</th>
	<th>Username</th>
	<th>Password</th>
	</tr>
	<?php
	for($i=0; $i<$n; $i++){
		?>
		<tr>
		<td><?php echo $name[$i];?></td>
		<td><?php echo $address[$i];?></td>
		<td><?php echo $mobileno[$i]; ?></td>
		<td><?php echo $email[$i]; ?></td>
		<td><?php echo $username[$i]; ?></td>
		<td><?php echo $password[$i]; ?></td>
		</tr>
		<?php
	}
}
?>
