<?php 
include_once "../menu/head.txt";
include_once "../nav.txt";
include_once "../product_nav.txt"; ?>
<?php
include_once "../database/connection.php";
$query="INSERT INTO feedback(email, messg) VALUES('$_POST[feedback_email]', '$_POST[feedback_mssg]')";
mysqli_query($con, $query) or die(mysqli_error($con));
echo "<p style='color:blue'>Thank You for your valuable feedback!!, We will be very glad to help you anyway. Thank you again and have a nice time.</p>"."<br>";
?>
<?php
include_once "../menu/foot.txt";
?>