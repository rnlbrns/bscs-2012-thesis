<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
require_once("header.php");
require_once("HEI_ADD.php");
classAddHEI::functionAddHEI();	
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
