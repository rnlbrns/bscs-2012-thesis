<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
if($_GET["updateSITEMAP"]==1)
{
	$updateFAQkwery="update faqcontenttbl set faqCONTENT='".$_POST["faqCONTENT"]."' where faqID=1";
	paragUpdateDB::updateTable($updateFAQkwery);
	echo "
	<script>alert('FAQ for Front-end Updated!')</script>
	<script>window.location.href='WEBMGT_FAQ.php'</script>";
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
$selectFAQkwery=mysql_query("select * from faqcontenttbl where faqID=1") or die(mysql_error());
$selectFAQkweryFetch=mysql_fetch_array($selectFAQkwery);
$faqCONTENT=$selectFAQkweryFetch["faqCONTENT"];
echo"<CENTER><br /><br /><h3>Site Map</h3><br />
<form method='post' action='WEBMGT_SITEMAP.php?updateSITEMAP=1'>
<textarea name='faqCONTENT' style='width: 300px; height: 100px;'>
".$faqCONTENT."
</textarea>
<br />
<input type='submit' name='wtf' value='Update FAQ' />
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
