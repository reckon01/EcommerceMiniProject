<?php
echo "<a href='main.php' style='color:blue'>Home</a><br>";
include_once "../database/connection.php";
$q="DELETE FROM product WHERE product_id='$_GET[pid]'";
mysqli_query($con, $q);
echo "<h3 style='color:blue'>Successfully deleted item, <a href='main.php' style='color:red'>Click here</a> to go to main admin page</h3>";
?>