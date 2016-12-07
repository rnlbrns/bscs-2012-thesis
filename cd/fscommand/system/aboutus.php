<?php
require_once("a-connection.php");
require_once("header.php");
konekServer::abriDB();
$selectFAQkwery=mysql_query("select * from missioncontenttbl where missionID=1") or die(mysql_error());
$selectFAQkweryFetch=mysql_fetch_array($selectFAQkwery);
$missionCONTENT=$selectFAQkweryFetch["missionCONTENT"];
echo $missionCONTENT;
require_once("footer.php");
?>