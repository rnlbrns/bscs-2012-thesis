<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('edusupervisorUsername')&&session_is_registered('edusupervisorPassword'))
{
?>
<?php
if(!empty($_GET["APP_ID"]))
{
	
	konekServer::abriDB();
	$qrytransfergrant=mysql_query("update app_tbl set GRANT_ID=".$_POST["GRANT_ID"]." where APP_ID=".$_GET["APP_ID"]) or die(mysql_error());
		echo "<script>alert('Grant Applicant has been transferred for another catogary for ranking!');
				window.location.href='ranking.php';
			</script>";
	
}
else{
	echo "<script>alert('Please select an applicant to be transferred!');
				window.location.href='ranking.php';
			</script>";
	}
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
