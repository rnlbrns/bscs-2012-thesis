<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('edusupervisorUsername')&&session_is_registered('edusupervisorPassword'))
{
?>
<?php
require_once("header.php");
konekServer::abriDB();
echo "<center><h2>Announcements</h2>
<form method='post' action='announcementsadd.php'>
<input type='submit'  value='Add New Announcement' name='fw' />
</form><br />
";
$announcementtbl_qry=mysql_query("select * from announcement_tbl order by announcement_id desc");
$announcementtbl_count=mysql_num_rows($announcementtbl_qry);
$announcementtbl_ihap=0;
while($announcementtbl_ihap<$announcementtbl_count){
	$announcementtbl_ihap++;
	
	$announcementtbl_fetch=mysql_fetch_array($announcementtbl_qry);
	$announcement_header=$announcementtbl_fetch["announcement_header"];
	$announcement_text=$announcementtbl_fetch["announcement_text"];
	$announcement_id=$announcementtbl_fetch["announcement_id"];
	 $announcement_date=$announcementtbl_fetch["announcement_date"];
	echo"
	<div><h3>".$announcement_header."</h3></div>
	<div><i>Posted on ".date("F j, Y", strtotime($announcement_date))."</i></div>
	<div><br />[<a href='announcementsedit.php?announcement_id=".$announcement_id."'/>edit</a>]</div>
	
	<br />
	<div>".$announcement_text."</div>
	
	<br />
	<br />
	<hr>";
	}
echo"</center>";
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
