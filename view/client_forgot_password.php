<?php 
include_once "../menu/head.txt";
include_once "../nav.txt";
include_once "../product_nav.txt"; ?>

<article>
   
  <form action="../controller/forgot_password.php" method="POST">
   <fieldset>
   <legend>Resetting Password</legend>
  Username:<br>
  <input type="text" name="forgot_uname" required size="30" placeholder="johndoe007">
  <br>
  <br>
   Email:<br>
   <input type="email" name="forgot_email" size="30" required placeholder="johndoe@example.com">
   <br>
   <input type="submit" value="Submit">
   <br>
   </fieldset>
     </form>
   </article>
   
   <?php include_once "../menu/foot.txt"; ?>