<?php 
include_once "../menu/head.txt";
include_once "../nav.txt";
include_once "../product_nav.txt"; 
include_once "../database/connection.php";
$query="DELETE FROM orders WHERE username='$_SESSION[login]' AND order_id='$_GET[o_id]'";
mysqli_query($con, $query) or die(mysqli_error($con));
echo "<h4 style='color:blue'>Succeefully cancelled order. We are glad to help you in every aspect. <a href='../index.php' style='color:red'>Keep Shopping</a></h4>";
?>

<?php
include_once "../menu/foot.txt";
?>