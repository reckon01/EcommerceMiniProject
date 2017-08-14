<?php
include_once "../menu/head.txt";
include_once "../nav.txt";
$user=$_SESSION['login'];
include_once "../product_nav.txt";
include_once "../database/connection.php";

$catId=$_POST['cat_id'];
$productId=$_POST['product_id'];
$productName=$_POST['product_name'];
$price=$_POST['price'];

$address=$_POST['ship_address'];
$user=$_SESSION['login'];
$fullName=$_POST['fullname'];
$pin=$_POST['pin'];
$emailId=$_POST['email'];
$mob=$_POST['mobileno'];
$landmark=$_POST['landmark'];
$pay=$_POST['payment'];
$orderDate=date('d-m-y');
$state=$_POST['state'];
$query="INSERT INTO orders(cat_id, order_date, product_id, address, product_name, price, pin, landmark, state, username, name, mobileno, email)".
"VALUES('$catId','$orderDate','$productId','$address','$productName','$price','$pin','$landmark','$state', '$user','$fullName','$mob','$emailId')";						   
mysqli_query($con,$query) or die(mysqli_error($con));

$update_cart="DELETE FROM cart WHERE product_id='$_POST[product_id]'";
mysqli_query($con, $update_cart) or die(mysqli_error($con));

echo "<h5 style='color:blue'>Successfully Placed order. Please <a href='../controller/get_order_id.php?pid=$productId' style='color:red'>Click here</a> to Get Order id, which you keep carefully if you want to return that product in future.<h5>";

?>

<?php 
include_once "../menu/foot.txt";