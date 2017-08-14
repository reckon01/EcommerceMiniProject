<?php
session_start();
if(!(isset($_SESSION['admin'])) && $_SESSION['admin']=='')
{
	header("Location: ../admin/admin_login.html");
}
echo "<a href='../index.php' style='color:blue'>Back to Home</a><br><br>";
$admin=$_SESSION['admin'];
?>
<!doctype html>
<html>
<head><title>Admin main page</title></head>
<body>
<nav>
<span style='color:blue'>Current Loggedin Admin:</span> <?php echo "<strong style='color:red'>".$admin."</strong>"; ?>
<span style='color:red'><span style='color:white'>=====</span><a href='logout.php' style='color:red'><strong>Logout</strong></a></span>
</nav>
<?php
echo "<br><br><br>";
?>
<fieldset>
<legend>Admin Functionalities</legend>
<ul>
<li><h3><a href='admin_add.html'>Add Products</a></h3></li>
<li><h3><a href='admin_del.php'>Delete Products</a></h3></li>
<li><h3><a href='view_acc.php'>View User Accounts</a></h3></li>
<li><h3><a href='user_orders.php'>View User Orders</a></h3></li>
</ul>
</fieldset>
</body>
</html>
