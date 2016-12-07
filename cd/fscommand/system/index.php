<?php
require_once("header.php");
require_once("a-connection.php");
konekServer::abriDB();
$frontmainqry=mysql_query("select * from frontmaincontent_tbl where frontmaincontent_id=1") or die(mysql_error());
$frontmainqryfetch=mysql_fetch_array($frontmainqry);
$frontmaincontent_txt=$frontmainqryfetch["frontmaincontent_txt"];
echo $frontmaincontent_txt;

require_once("footer.php");
?>