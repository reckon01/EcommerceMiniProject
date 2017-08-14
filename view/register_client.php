<?php 
include_once "../menu/head.txt";
include_once "../nav.txt";
include_once "../product_nav.txt"; ?>
<article>
      <div>
      <form action="../controller/register.php" method="POST">
      <fieldset>
      <legend style="color:green">User Registration</legend>
     Full Name<strong style="color:red">*</strong>:<br>
     <input type="text" name="fullname" size="50" required>
     <br>
Address<strong style="color:red">*</strong>:<br> <input type="text" name="user_address" size="50" required>
     <br>
     Pin<strong style="color:red">*</strong>:<br>
     <input type="text" name="pin_code" size="50" required>
     <br>
     State<strong style="color:red">*</strong>:<br>
     <input type="text" name="user_state" size="50" required>
     <br>
     Mobile No<strong style="color:red">*</strong>:<br>
     <input type="text" name="mobile_no" size="50" required>
     <br>
     Email<strong style="color:red">*</strong>:<br>
     <input type="email" name="email_id" placeholder="johndoe123@example.com" size="50" required>
     <br>
	 Username<strong style="color:red">*</strong>:<br>
	 <input type="text" name="uname" size="50" required placeholder="Username must be unique">
	 <br>
     Password<strong style="color:red">*</strong>:<br>
     <input type="password" name="user_password" size="30" required>
     <br>
	 Conform Password<strong style="color:red">*</strong>:<br>
     <input type="password" name="conform_password" size="30" required>
	 <br>
     <br>
     <span>I have read and agree to the <a href='../help/terms&conditions.php'>Terms & Conditions </a></span><input type='checkbox' name='tnc' required>
	 <br>
     <br>
     <input type="submit" value="Submit Details"">
      </fieldset>
      </form>
      </div>
      </article>
	  
	  <?php include_once "../menu/foot.txt"; ?>