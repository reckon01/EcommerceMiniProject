<?php 
include_once "../menu/head.txt";
include_once "../nav.txt";
include_once "../product_nav.txt"; 
?>
<?php
  include_once "../database/connection.php";
  
  $query="UPDATE customer SET password = '$_POST[newpass]' WHERE username = '$_POST[con_uname]'";
  
  $result=mysqli_query($con, $query);
  
 
	  if($_POST['newpass']==$_POST['conformpass'])
	  {
		  mysqli_query($con, $query) or die(mysqli_error($con));
		  echo "<br><br><br>";
		  echo "<h4 style='color:green'>Password successfully changed</h4><br>";
		  echo "<h4><a href='../view/client_login.php'>click here to login with new password</a><h4><br>";
		 
	  }
	  else
	  {
		  echo "<form action='../controller/update_pass.php' method='POST'>
		  <fieldset>
		  <legend style='color:red'>Password missmatch</legend>
		   Enter Username:<br>
		  <input type='text' name='con_uname' size='50' required>
		  <br>
		  <br>
		  Enter New Password:<br>
		  <input type='password' name='newpass' size='50' required>
		  <br>
		  <br>
		  Conform The Password:<br>
		  <input type='password' name='conformpass' size='50' required>
		  <br>
		  <br>
		  <input type='submit' value='Change Password'>
		  <br>
		  <p style='color:red>Error: Password missmatch!</p><br>";
	 
		  
	  }
	 ?>
 
  <?php
include_once "../menu/foot.txt"; 
?>