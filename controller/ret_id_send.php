<?php

include_once "../menu/head.txt";
include_once "../nav.txt";
include_once "../product_nav.txt";
include_once "../database/connection.php";
//we are getting the return id to email the customer from returns table
$ret_id="SELECT return_id FROM returns";
$ret_id_query=mysqli_query($con, $ret_id) or die(mysqli_error($con));
$row1=mysqli_fetch_assoc($ret_id_query);
$id=$row1['return_id'];

//we are getting the email to send the return id to the customer from returns table
$ret_email="SELECT email FROM returns";
$ret_email_query=mysqli_query($con, $ret_email) or die(mysqli_error($con));
$row2=mysqli_fetch_assoc($ret_email_query);
$email=$row2['email'];

/*mail($email, "return request identification number", "your return request id is ".$id." please kept it carefully for further query", "From. shopNow team" );
*/
?>
<h3 style="color:blue">Your return id sent to your email <?php echo $email; ?>.<br> please kept it form any further query.<br> Thank you!</h3>

<?php 
include_once "../menu/foot.txt";
 ?>
