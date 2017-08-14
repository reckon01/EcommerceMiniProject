<?php
include_once "../menu/head.txt";
include_once "../nav.txt";
include_once "../product_nav.txt"; ?>
<?php
   include_once "../database/connection.php";
   $em=$_POST['forgot_email'];
   $uname=$_POST['forgot_uname'];
   $link="http://localhost/OnlineStore/view/change_password.php";
   $query="SELECT email, username FROM customer WHERE email='$em' AND username='$uname'";
   $result=mysqli_query($con, $query);
   $num_rows=mysqli_num_rows($result);
	if($num_rows>0)
	  {
	     /*
		 mail($em, "reseting password: please click on the link below",$link);
		 note: we need a smtp clent to work this mail function
		 
		*/
		 
		 echo "<h3 style='color:blue'><a href='../view/change_password.php' style='color:red'>Click here</a> to change password</h3><br><br>";
		  /*echo "<form action='change_password.php' method='POST'>
   <fieldset>
   <legend>Reset Password</legend>
   Enter Conformation Passcode:<br>
   <input type='password' name='con_passcode' size='50' required>
   <br>
   <br>
   <input type='submit' value='Validate'>
   <br>
   </fieldset>
     </form>";*/
		     	  
	  }
	  else
	    {
			echo " <form action='../controller/forgot_password.php' method='POST'>
   <fieldset>
   <legend>Resetting Password</legend>
   Username:<br>
   <input type='text' name='forgot_uname' size='30' required placeholder='johodoe007'>
   <br>
   <br>
   Email:<br>
   <input type='email' name='forgot_email' size='30' required placeholder='johndoe@example.com'>
   <br>
   <input type='submit' value='Submit'>
   <br>
   </fieldset>
     </form><br>";
	echo "<p style='color:red'>Error: Incorrect username and email, please enter user registered username, email to this site<br>";
		}
   
   ?>
   <?php include_once "../menu/foot.txt"; ?>