<?php
require_once("a-connection.php");
require_once("header.php");
$homeEcho=mysql_query("select * from home homecontenttbl");

require_once("footer.php");
?>