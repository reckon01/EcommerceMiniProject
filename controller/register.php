<?php
    include_once "../menu/head.txt"; 

    include_once "../database/connection.php";
	$user=$_POST['uname'];
	$user=htmlspecialchars($user);
	$emailid=$_POST['email_id'];
	
	$u="SELECT username FROM customer WHERE username='$user'";
	$e="SELECT email FROM customer WHERE email='$emailid'";
	
	
	$rsltu=mysqli_query($con, $u) or die(mysqli_error($con));
	$rslte=mysqli_query($con, $e) or die(mysqli_error());
	
	
	$num_user=mysqli_num_rows($rsltu);
	$num_email=mysqli_num_rows($rslte);
	include_once "../nav.txt";
	if($num_email==0 && $num_user==0)
   {
	  if($_POST['user_password']==$_POST['conform_password'])
	  {  
   $query="INSERT INTO customer(name, address, email, pin, state, mobileno, username, password) VALUES('$_POST[fullname]', '$_POST[user_address]', '$_POST[email_id]', '$_POST[pin_code]', '$_POST[user_state]', '$_POST[mobile_no]', '$_POST[uname]', '$_POST[user_password]')";

   mysqli_query($con, $query) or die(mysqli_error($con));
   $_SESSION['login']=$_POST['uname'];
   header("Location: ../controller/register_successfully.php");
   }
   }
    
    
	include_once "../product_nav.txt";
	
   if($num_email==0 && $num_user==0)
   {
	  if($_POST['user_password']!=$_POST['conform_password'])
	  {
	   echo "<form action='../controller/register.php' method='POST'>
      <fieldset>
      <legend style='color:green'>User Registration</legend>
     Full Name<strong style='color:red'>*</strong>:<br>
     <input type='text' name='fullname' size='50' required>
     <br>
Address<strong style='color:red'>*</strong>:<br> <input type='text' name='user_address' size='50' required>
     <br>
     Pin<strong style='color:red'>*</strong>:<br>
     <input type='text' name='pin_code' size='50' required>
     <br>
     District<strong style='color:red'>*</strong>:<br>
     <input type='text' name='user_district' size='50' required>
     <br>
     Mobile No<strong style='color:red'>*</strong>:<br>
     <input type='text' name='mobile_no' size='50' required>
     <br>
     Email<strong style='color:red'>*</strong>:<br>
     <input type='email' name='email_id' placeholder='johndoe123@example.com' size='50' required>
     <br>
	  Username<strong style='color:red'>*</strong>:<br>
	 <input type='text' name='uname' size='50' required placeholder='Username must be unique'>
	 <br>
     Password<strong style='color:red'>*</strong>:<br>
     <input type='password' name='user_password' size='30' required>
     <br>
	 Conform Password<strong style='color:red'>*</strong>:<br>
     <input type='password' name='conform_password' size='30' required>
	 <br>
	  <br>
     <span>I have read and agree to the <a href='../help/terms&conditions.php'>Terms & Conditions </a></span><input type='checkbox' name='tnc' required>
	 <br>
     <br>
     <input type='submit' value='Submit Details'>
      </fieldset>
      </form>";
		echo "<br><p style='color:red'><em>Error: </em>Password missmatch</p><br>";
   }
   }
	
	if($num_user>0 && $num_email==0)
	{
		echo "<form action='../controller/register.php' method='POST'>
      <fieldset>
      <legend style='color:green'>User Registration</legend>
     Full Name<strong style='color:red'>*</strong>:<br>
     <input type='text' name='fullname' size='50' required>
     <br>
Address<strong style='color:red'>*</strong>:<br> <input type='text' name='user_address' size='50' required>
     <br>
     Pin<strong style='color:red'>*</strong>:<br>
     <input type='text' name='pin_code' size='50' required>
     <br>
     District<strong style='color:red'>*</strong>:<br>
     <input type='text' name='user_district' size='50' required>
     <br>
     Mobile No<strong style='color:red'>*</strong>:<br>
     <input type='text' name='mobile_no' size='50' required>
     <br>
     Email<strong style='color:red'>*</strong>:<br>
     <input type='email' name='email_id' placeholder='johndoe123@example.com' size='50' required>
     <br>
	 Username<strong style='color:red'>*</strong>:<br>
	 <input type='text' name='uname' size='50' required placeholder='Username must be unique'>
	 <br>
     Password<strong style='color:red'>*</strong>:<br>
     <input type='password' name='user_password' size='30' required>
	 <br>
	 Conform Password<strong style='color:red'>*</strong>:<br>
     <input type='password' name='conform_password' size='30' required>
	 <br>
	  <br>
     <span>I have read and agree to the <a href='../help/terms&conditions.php'>Terms & Conditions </a></span><input type='checkbox' name='tnc' required>
	 <br>
     <br>
     <input type='submit' value='Submit Details'>
      </fieldset>
      </form>";
		echo "<br><p style='color:red'>The Username is already registered, please select other</p><br>";
	}
	elseif($num_email>0 && $num_user==0)
	
	{
		echo "<form action='../controller/register.php' method='POST'>
      <fieldset>
      <legend style='color:green'>User Registration</legend>
     Full Name<strong style='color:red'>*</strong>:<br>
     <input type='text' name='fullname' size='50' required>
     <br>
Address<strong style='color:red'>*</strong>:<br> <input type='text' name='user_address' size='50' required>
     <br>
     Pin<strong style='color:red'>*</strong>:<br>
     <input type='text' name='pin_code' size='50' required>
     <br>
     District<strong style='color:red'>*</strong>:<br>
     <input type='text' name='user_district' size='50' required>
     <br>
     Mobile No<strong style='color:red'>*</strong>:<br>
     <input type='text' name='mobile_no' size='50' required>
     <br>
     Email<strong style='color:red'>*</strong>:<br>
     <input type='email' name='email_id' placeholder='johndoe123@example.com' size='50' required>
     <br>
	 Username<strong style='color:red'>*</strong>:<br>
	 <input type='text' name='uname' size='50' required placeholder='Username must be unique'>
	 <br>
     Password<strong style='color:red'>*</strong>:<br>
     <input type='password' name='user_password' size='30' required>
     <br>
	 Conform Password<strong style='color:red'>*</strong>:<br>
     <input type='password' name='conform_password' size='30' required>
	 <br>
	  <br>
     <span>I have read and agree to the <a href='../help/terms&conditions.php'>Terms & Conditions </a></span><input type='checkbox' name='tnc' required>
	 <br>
     <br>
     <input type='submit' value='Submit Details'>
      </fieldset>
      </form>";
		echo "<br><p style='color:red'>The Email Id is already registered, please select other</p><br>";
	}
	if($num_email>0 && $num_user>0)
		{
		echo "<form action='../controller/register.php' method='POST'>
      <fieldset>
      <legend style='color:green'>User Registration</legend>
     Full Name<strong style='color:red'>*</strong>:<br>
     <input type='text' name='fullname' size='50' required>
     <br>
Address<strong style='color:red'>*</strong>:<br> <input type='text' name='user_address' size='50' required>
     <br>
     Pin<strong style='color:red'>*</strong>:<br>
     <input type='text' name='pin_code' size='50' required>
     <br>
     District<strong style='color:red'>*</strong>:<br>
     <input type='text' name='user_district' size='50' required>
     <br>
     Mobile No<strong style='color:red'>*</strong>:<br>
     <input type='text' name='mobile_no' size='50' required>
     <br>
     Email<strong style='color:red'>*</strong>:<br>
     <input type='email' name='email_id' placeholder='johndoe123@example.com' size='50' required>
     <br>
	 Username<strong style='color:red'>*</strong>:<br>
	 <input type='text' name='uname' size='50' required placeholder='Username must be unique'>
	 <br>
     Password<strong style='color:red'>*</strong>:<br>
     <input type='password' name='user_password' size='30' required>
     <br>
	 Conform Password<strong style='color:red'>*</strong>:<br>
     <input type='password' name='conform_password' size='30' required>
	 <br>
	  <br>
     <span>I have read and agree to the <a href='../help/terms&conditions.php'>Terms & Conditions </a></span><input type='checkbox' name='tnc' required>
	 <br>
     <br>
     <input type='submit' value='Submit Details'>
      </fieldset>
      </form>";
		echo "<br><p style='color:red'>The Username and Email Id is already registered, please select other</p><br>";
	}
  
  
   ?>
   
   <?php include_once "../menu/foot.txt"; ?>