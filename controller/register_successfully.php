<?php
include_once "../menu/head.txt";
include_once "../nav.txt";
include_once "../product_nav.txt";

echo $_SESSION['login']."<span style='color:blue'>  You are succesfully registered, please remember your username and password for further progress. <a href='../index.php'>Click here to go to Home Page</a></span>"."<br>";

include_once "../menu/foot.txt";

?>