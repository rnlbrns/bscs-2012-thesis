<?php
require_once("header.php");
require_once("a-connection.php");
konekServer::abriDB();
echo "<center><h2>Announcements Posted By CHED REGION-VIII</h2>
";
$announcementtbl_qry=mysql_query("select * from announcement_tbl");
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
	<table border=1>
	<tr>
		<td><b>Subject</b></td><td>".$announcement_header."</td>
	</tr>
	<tr>
		<td><b>Date Posted</b></td><td><i>".date("F j, Y", strtotime($announcement_date))."</i></td>
	</tr>
	<tr>
		<td><b>Details</b></td><td>".$announcement_text."</td>
	</tr>

	</tr>
	</table>
	<br />
	<hr>";
	}
echo"</center>";
require_once("footer.php");
?>
