<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
if($_GET["updateMISSION"]==1)
{
	$updateFAQkwery="update missioncontenttbl set missionCONTENT='".$_POST["missionCONTENT"]."' where missionID=1";
	paragUpdateDB::updateTable($updateFAQkwery);
	echo "
	<script>alert('MISSION AND VISION for Front-end Updated!')</script>
	<script>window.location.href='WEBMGT_MISSION.php'</script>";
			}
require_once("header.php");
echo"
<div id='sample'>
<script type='text/javascript' src='../nicEdit.js'></script>
<script type='text/javascript'>
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
";
konekServer::abriDB();
$selectFAQkwery=mysql_query("select * from missioncontenttbl where missionID=1") or die(mysql_error());
$selectFAQkweryFetch=mysql_fetch_array($selectFAQkwery);
$missionCONTENT=$selectFAQkweryFetch["missionCONTENT"];
echo"<CENTER><br /><br /><h3>Mission and Vision</h3><br />
<form method='post' action='WEBMGT_MISSION.php?updateMISSION=1'>
<textarea name='missionCONTENT' style='width: 300px; height: 100px;'>
".$missionCONTENT."
</textarea>
<br />
<input type='submit' name='wtf' value='Update MISSION' />
<input type='button' value='Cancel' onClick='history.back();'>
</form></div>";
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
