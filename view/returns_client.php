<?php 
include_once "../menu/head.txt";
include_once "../nav.txt";
include_once "../product_nav.txt"; ?>
<article>
<h1 style="color:green">Product Returns</h1>
<p>Please complete the form below to reques a return identification number.</p>
<span style="color:red"><strong style="color:blue">NOTE:</strong>  <code>If you are not logged in, please log in before filling the form</code></span>
<form action="../controller/returns.php" method="POST">
<div>
<h1>Order Information</h1>
Full Name<strong style="color:red">*</strong>:<br>
<input type="text" name="full_name" required size="50">

<br>
E-Mail<strong style="color:red">*</strong>:<br>
<input type="email" name="returns_email" required size="50">

<br>
Mobile No<strong style="color:red">*</strong>:<br>
<input type="text" name="returns_mobileno" required size="50">

<br>
Order ID<strong style="color:red">*</strong>:<br>
<input type="text" name="orderid" required size="50">

<br>
Order Date:<br>
<input type="date" name="orderdate" size="50">
<br>
</div>

<div>
<h1>Product Information &amp; Reason form Return</h1>
Product Name<strong style="color:red">*</strong>:<br>
<input type="text" name="productname" required size="50">
<br>
Product Id<strong style="color:red">*</strong>:<br>
<input type="text" name="productid" required size="50">
<br>
Quantity<strong style="color:red">*</strong>:<br>
<input type="number" name="product_quantity" size="50" required>
<br>
Reason for Return<strong style="color:red">*</strong>:<br>
<input type="radio" name="return_reason_id" value="1">Dead On Arrival<br>
<input type="radio" name="return_reason_id" value="2">
Faulty, please supply details <br>
<input type="radio" name="return_reason_id" value="3">
                  Order Error<br>
<input type="radio" name="return_reason_id" value="4">
                  Received Wrong Item<br>
 <input type="radio" name="return_reason_id" value="1">
                  Other, please supply details<br>  <br>
   Product is opened<strong style="color:red">*</strong>:<br>   <input type="radio" name="opened" value="1">Yes<br>
   <input type="radio" name="opened" value="0" checked>No<br>   <br>
   <strong>Faulty or other details:</strong><br><textarea name="returns_comment"  rows="10" cols="30" placeholder="Faulty or other details"></textarea><br>            </div>
<br>
<br>
   <span>I have read and agree to the <a href='../help/termsconditions.php'>Terms & Conditions </a></span><input type='checkbox' name='tnc' required>
	 <br>
<br>
<input type="submit" value="Submit">
<br>
</form>
</article>
<?php include_once "../menu/foot.txt"; ?>