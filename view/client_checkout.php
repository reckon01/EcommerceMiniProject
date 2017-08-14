<?php
include_once "../menu/head.txt";
include_once "../nav.txt";
include_once "../product_nav.txt";
?>
<form action="../controller/order.php" method="POST">

<input type="hidden" name="cat_id" value="<?php echo $_GET['cat_id']; ?>">
<input type="hidden" name="product_id" value="<?php echo $_GET['product_id']; ?>">
<input type="hidden" name="product_name" value="<?php echo $_GET['product_name']; ?>">
<input type="hidden" name="price" value="<?php echo $_GET['price']; ?>">

<fieldset>
<legend style="color:green">CHECKOUT CART PRODUCT</legend>
     <h4>Shipping Details:</h4>
     Full Name<strong style="color:red">*</strong>:<br>
     <input type="text" name="fullname" size="50" required>
     <br>
     Email<strong style="color:red">*</strong>:<br>
     <input type="email" name="email" size="50" required>
     <br>
     Mobile No<strong style="color:red">*</strong>:<br>
     <input type="text" name="mobileno" size="50" required>
     <br>
     Shipping Address<strong style="color:red">*</strong>:<br>
     <input type="text" name="ship_address" size="50" required>
     <br>
      Land Mark:<br>
     <input type="text" name="landmark" size="50">
     <br>
	 State<strong style="color:red">*</strong>:<br>
	 <input type="text" name="state" required size="50">
	 <br>
     Pin Code<strong style="color:red">*</strong>:<br>
     <input type="text" name="pin" size="50" required>
     <br>
     <br>
     <h4>Payment Detals:</h4>
     Payment Gateway<strong style="color:red">*</strong>:
    <select name="payment" style="color:green;">
    <option value="cash on delivery" style="color:green;">Cash On Delivery</option>
    <option value="net banking" style="color:green;">Net Banking</option>
    <option value="debit card" style="color:green;">Debit Card</option>
    </select>
     <br>
     <br>
     <span>I have read and agree to the <a href='../help/terms&conditions.php'>Terms & Conditions </a></span><input type='checkbox' name='tnc' required>
	 <br>
     <br>
     <input type="submit" value="Conform Details">
     </fieldset>
     </form>
     
     <?php include_once "../menu/foot.txt"; ?>
     
     
     
     
     
