<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
require_once("header.php");
echo "<center><h2>Administratative Utilities</h2>
<br />
You Need access to phpMyAdmin To Back-Up and Restore Database
<form method='post' action='http://localhost/phpmyadmin/db_export.php?db=ched'>
<input type='submit' value='Back-up/Export Database' name='fw' />
</form>
<br />

<form method='post' action='http://localhost/phpmyadmin/db_import.php?db=ched'>
<input type='submit' value='Restore/Import Database' name='fw' />
</center>";
require_once("footer.php");
?>
<?php
}
else
{
		echo "<script>
				window.location.href='index.php';
			</script>";
}
?>
