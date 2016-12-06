<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
require_once("header.php");
echo "<center><h2>Administrator Homepage</h2></center>";
require_once("footer.php");
?>
<?php
}
else
{
		echo "<script>alert('Access Denied! You Must be logged-in first!');
				window.location.href='index.php';
			</script>";
}
?>
