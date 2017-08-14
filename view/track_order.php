<?php
include_once "../menu/head.txt";
include_once  "../nav.txt";
if(!(isset($_SESSION['login'])) && $_SESSION['login']=='')
{
	header("Location: ../view/client_login.php");
}
include_once "../product_nav.txt";
?>
<form action="../controller/track.php" method="POST">
<fieldset>
<legend>Track Order:</legend>
<span style="color:red">Note*:</span><em style="color:blue">You will get product id and order id from Your My Orders.</em>
<br>
<br>
Enter Yousername<strong style="color:red">*</strong>:<br>
<input type="text" name="username" placeholder="john doe123">
<br>
<br>
Product Id<strong style="color:red">*</strong>:<br>
<input type="number" name="product_id">
<br>
<br>
Order Id<strong style="color:red">*</strong>:<br>
<input type="number" name="order_id">
<br>
<br>
<input type="submit" value="Track">
<br>
<br>
</fieldset>
</form>
<?php
include_once "../menu/foot.txt";
?>