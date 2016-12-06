
<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('SC_USERNAM')&&session_is_registered('SC_USERNAM'))
{
?>
<?php
require_once("header.php");
require_once("footer.php");
?>
<?php
}
else
{
		
			echo "<script>alert('you have no rights to access this page!')</script>";
		echo "<script>
				window.location.href='index.php';
			</script>";
}