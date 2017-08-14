<?php
include_once "../menu/head.txt";
include_once "../nav.txt";
if(!(isset($_SESSION['login'])) && $_SESSION['login']=='')
{
	header("Location: ../view/client_login.php");
}

include_once "../product_nav.txt"; 
?>

<?php
include_once "../database/connection.php";
$ret_em=$_POST['returns_email'];
$p_id=$_POST['productid'];
$o_id=$_POST['orderid'];
$query="INSERT INTO returns(name, email, mobileno, order_id, order_date, product_name, product_id, qty_return, reason_for_ret, opened) VALUES('$_POST[full_name]', '$_POST[returns_email]', '$_POST[returns_mobileno]', '$_POST[orderid]', '$_POST[orderdate]', '$_POST[productname]', '$_POST[productid]', '$_POST[product_quantity]', '$_POST[return_reason_id]', '$_POST[opened]')";

$test="SELECT order_id, product_id, email FROM orders WHERE order_id='$o_id' AND product_id='$p_id' AND email='$ret_em'";
$test_result=mysqli_query($con, $test) or die(mysqli_error($con));
$num_rows=mysqli_num_rows($test_result);

if($num_rows>0)
{
$result=mysqli_query($con, $query) or die(mysqli_error($con));
echo "<strong style='color:blue'> Successfully sumbitted your return request, <a href='ret_id_send.php' style='color:red'>Click here!</a> to get your Return id to your email.</strong>";
}	
	else
	{
		echo "<h1 style='color:green'>Product Returns</h1>
<p>Please complete the form below to reques an RMA number.</p>
<form action='returns.php' method='POST'>
<div>
<h1>Order Information</h1>
Full Name<strong style='color:red'>*</strong>:<br>
<input type='text' name='full_name' required size='50'>

<br>
E-Mail<strong style='color:red'>*</strong>:<br>
<input type='email' name='returns_email' required size='50'>

<br>
Mobile No<strong style='color:red'>*</strong>:<br>
<input type='text' name='returns_mobileno' required size='50'>

<br>
Order ID<strong style='color:red'>*</strong>:<br>
<input type='text' name='order_id' required size='50'>

<br>
Order Date:<br>
<input type='date' name='order_date' size='50'>
<br>
</div>

<div>
<h1>Product Information &amp; Reason form Return</h1>
Product Name<strong style='color:red'>*</strong>:<br>
<input type='text' name='product_name' required size='50'>
<br>
Product Id<strong style='color:red'>*</strong>:<br>
<input type='text' name='product_id' required size='50'>
<br>
Quantity<strong style='color:red'>*</strong>:<br>
<input type='number' name='product_quantity' size='50' required>
<br>
Reason for Return<strong style='color:red'>*</strong>:<br>
<input type='radio' name='return_reason_id' value='1'>Dead On Arrival<br>
<input type='radio' name='return_reason_id' value='2'>
Faulty, please supply details <br>
<input type='radio' name='return_reason_id' value='3'>
                  Order Error<br>
<input type='radio' name='return_reason_id' value='4'>
                  Received Wrong Item<br>
 <input type='radio' name='return_reason_id' value='1'>
                  Other, please supply details<br>  <br>
   Product is opened<strong style='color:red'>*</strong>:<br>   <input type='radio' name='opened' value='1'>Yes<br>
   <input type='radio' name='opened' value='0' checked>No<br>   <br>
   <strong>Faulty or other details:</strong><br><textarea name='returns_comment'  rows='10' cols='30' placeholder='Faulty or other details'></textarea><br>            </div>
<br>
<br>
<input type='submit' value='Submit'>
<br>
</form>"."<br>";

echo "<strong style='color:red'>Error: Incorrect email, order_id, product_id</strong><br>";
	}
mysqli_close($con);
?>
<?php 
include_once "../menu/foot.txt";

 ?>