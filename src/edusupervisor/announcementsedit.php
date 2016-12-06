<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('edusupervisorUsername')&&session_is_registered('edusupervisorPassword'))
{
?>
<?php
if($_GET["postNewAnnouncement"]==1)
{
	$insertmissioncontenttbl="update announcement_tbl  set announcement_text='".$_POST["announcement_text"]."', announcement_header='".$_POST["announcement_header"]."', announcement_date=now() where announcement_id=".$_POST["announcement_id"];
	paragUpdateDB::updateTable($insertmissioncontenttbl);
	
	
	$audittrailquery=mysql_query("insert into audittrail_tbl set audittrail_username='".$_SESSION["edusupervisorUsername"]."',  audittrail_activity='Updated an Announcement', audittrail_time=now() ") or die(mysql_error());	
	
	echo "
	<script>alert('Announcement Posted!')</script>
	<script>window.location.href='announcements.php'</script>";
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
$updateparaannouncement=mysql_query("select * from announcement_tbl where announcement_id=".$_GET["announcement_id"]);
	
	$announcementtbl_fetch=mysql_fetch_array($updateparaannouncement);
	$announcement_header=$announcementtbl_fetch["announcement_header"];
	$announcement_text=$announcementtbl_fetch["announcement_text"];
	$announcement_id=$announcementtbl_fetch["announcement_id"];
	
echo"<CENTER><br /><br /><h3>Update Announcement</h3><br />
<form method='post' action='announcementsedit.php?postNewAnnouncement=1'>
<b>Header: </b>
<input type='hidden' value=".$announcement_id." name='announcement_id' />
<br />
<input type='text' name='announcement_header' value='".$announcement_header."' maxlength='200' style='width:300px'/>
<br />
<br />
<b>Content</b>
<br />
<textarea name='announcement_text' style='width: 300px; height: 100px;'  >
".$announcement_text	."</textarea>
<br />
<input type='submit' name='wtf' value='Post Announcement' />
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
