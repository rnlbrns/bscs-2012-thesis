<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
if($_GET["updatecontact"]==1)
{
	$updatecontentkwery="update contactcontent_tbl set contactcontent_txt='".$_POST["contactcontent_txt"]."' where contactcontent_id=1";
	paragUpdateDB::updateTable($updatecontentkwery);
	echo "
	<script>alert('Contact Us for Front-end Updated!')</script>
	<script>window.location.href='WEBMGT_CONTACT.php'</script>";
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
$selectFAQkwery=mysql_query("select * from contactcontent_tbl where contactcontent_id=1") or die(mysql_error());
$selectFAQkweryFetch=mysql_fetch_array($selectFAQkwery);
$contactcontent_txt=$selectFAQkweryFetch["contactcontent_txt"];
echo"<CENTER><br /><br /><h3>Contact Us</h3><br />
<form method='post' action='WEBMGT_CONTACT.php?updatecontact=1'>
<textarea name='contactcontent_txt' style='width: 300px; height: 100px;'>
".$contactcontent_txt."
</textarea>
<br />
<input type='submit' name='wtf' value='Update Contact Page' />
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
