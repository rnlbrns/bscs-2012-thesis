<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
if($_GET["updatemain"]==1)
{
	$updateFAQkwery="update frontmaincontent_tbl set frontmaincontent_txt='".$_POST["frontmaincontent_txt"]."' where frontmaincontent_id=1";
	paragUpdateDB::updateTable($updateFAQkwery);
	echo "
	<script>alert('Main text for Front-end Updated!')</script>
	<script>window.location.href='WEBMGT_MAIN.php'</script>";
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
$selectFAQkwery=mysql_query("select * from frontmaincontent_tbl where frontmaincontent_id=1") or die(mysql_error());
$selectFAQkweryFetch=mysql_fetch_array($selectFAQkwery);
$frontmaincontent_txt=$selectFAQkweryFetch["frontmaincontent_txt"];
echo"<CENTER><br /><br /><h3>Main Content</h3><br />
<form method='post' action='WEBMGT_MAIN.php?updatemain=1'>
<textarea name='frontmaincontent_txt' style='width: 300px; height: 100px;'>
".$frontmaincontent_txt."
</textarea>
<br />
<input type='submit' name='wtf' value='Update Main' />
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
