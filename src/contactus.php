<?php
require_once("a-connection.php");
require_once("header.php");
konekServer::abriDB();
$contactcontentqry=mysql_query("select * from contactcontent_tbl where contactcontent_id=1") or die(mysql_error());
$contactcontentqryfetch=mysql_fetch_array($contactcontentqry);
$contactcontent_txt=$contactcontentqryfetch["contactcontent_txt"];
echo $contactcontent_txt;
require_once("footer.php");
?>