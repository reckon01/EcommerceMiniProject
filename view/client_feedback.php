<?php 
include_once "../menu/head.txt";
include_once "../nav.txt";
include_once "../product_nav.txt"; ?>
<article>
<div>
<form action="../controller/feedback.php" method="POST">
<fieldset>
<legend>User Feedback</legend>
<h3 color="green">Enter Your Email:</h3>
<input type="email" name="feedback_email" size="50" placeholder="johndoe123@example.com" required>
<br>
<br>
<h3 color="green">Please Enter You Feedback:</h3>
<textarea name="feedback_mssg" rows="10" cols="30"  required placeholder="enter your feedback here!">
</textarea>
<br>
<br>
<input type="submit" name="sub" value="give feedback!">
<br>
<br>
</fieldset>
</form>
</div>
</article>

<?php include_once "../menu/foot.txt"; ?>