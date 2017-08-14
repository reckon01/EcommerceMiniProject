    <?php 
	include_once "../menu/head.txt";
	include_once "../nav.txt";
include_once "../product_nav.txt";	?>
	
	<form action='../controller/update_pass.php' method='POST'>
		  <fieldset>
		  <legend>Update Password</legend>
		  <br>
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
		  <br>;
	
	
    <?php include_once "../menu/foot.txt"; ?>