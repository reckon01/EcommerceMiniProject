<?php 
include_once "../menu/head.txt";
include_once "../nav.txt";
include_once "../product_nav.txt"; ?>
<article>
   <form action="../controller/login.php" method="POST">
   <fieldset>
   <legend color="green">Please Login to Continue!</legend>
   Username:<br>
   <input type="text" name="login_uname" size="40" placeholder="james007" required>
   <br>
   <br>
   Password:<br>
   <input type="password" name="login_password" required size="40">
   <br>
   <br>
   <input type="submit" value="Log In" required>
   <br>
   </fieldset>
   </form>
   </article>
   <?php include_once "../menu/foot.txt"; ?>