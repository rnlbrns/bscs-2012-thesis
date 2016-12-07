<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
require_once("header.php");
echo "<center><h2>Website Management</h2></center><br /><div id='example-two'>
					
    		<ul class='nav'>
                <li class='nav-one'><a href='#webmg1' class='current'>Main</a></li>
                <li class='nav-two'><a href='#webmg2'>Contact</a></li>
                <li class='nav-three'><a href='#webmg3'>About Us</a></li>
                <li class='nav-four last'><a href='#webmg4'>FAQ</a></li>
            </ul>
    		
    		<div class='list-wrap'>
    		
    			<ul id='webmg1'>";
				if($_GET["updatemain"]==1)
				{
					$updateFAQkwery="update frontmaincontent_tbl set frontmaincontent_txt='".$_POST["frontmaincontent_txt"]."' where frontmaincontent_id=1";
					paragUpdateDB::updateTable($updateFAQkwery);
					echo "
					<script>alert('Main text for Front-end Updated!')</script>
					<script>window.location.href='websitemanagement.php#webmg1'</script>";
				}
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
				<form method='post' action='websitemanagement.php?updatemain=1'>
				<textarea name='frontmaincontent_txt' style='width: 600px; height: 100px;'>
				".$frontmaincontent_txt."
				</textarea>
				<br />
				<input type='submit' name='wtf' value='Update Main' />
				<input type='button' value='Cancel' onClick='history.back();'>
				</form></div>";
    		echo"	</ul>
        		 
        		 <ul id='webmg2' class='hide'>
                   ";
				   
			if($_GET["updatecontact"]==1)
			{
				$updatecontentkwery="update contactcontent_tbl set contactcontent_txt='".$_POST["contactcontent_txt"]."' where contactcontent_id=1";
				paragUpdateDB::updateTable($updatecontentkwery);
				echo "
				<script>alert('Contact Us for Front-end Updated!')</script>
				<script>window.location.href='websitemanagement.php#webmg2'</script>";
			}
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
			echo"<CENTER><br /><br /><h3>Contact Us Content</h3><br />
			<form method='post' action='websitemanagement.php?updatecontact=1'>
			<textarea name='contactcontent_txt' style='width: 600px; height: 100px;'>
			".$contactcontent_txt."
			</textarea>
			<br />
			<input type='submit' name='wtf' value='Update Contact Page' />
			<input type='button' value='Cancel' onClick='history.back();'>
			</form></div>";
				   echo" </ul>
        		 
        		 <ul id='webmg3' class='hide'>";
				 if($_GET["updateMISSION"]==1)
{
	$updateFAQkwery="update missioncontenttbl set missionCONTENT='".$_POST["missionCONTENT"]."' where missionID=1";
	paragUpdateDB::updateTable($updateFAQkwery);
	echo "
	<script>alert('ABOUT US for Front-end Updated!')</script>
	<script>window.location.href='websitemanagement.php#webmg2'</script>";
			}
			echo"
<div id='sample'>
<script type='text/javascript' src='../nicEdit.js'></script>
<script type='text/javascript'>
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>
";
konekServer::abriDB();
$selectFAQkwery=mysql_query("select * from missioncontenttbl where missionID=1") or die(mysql_error());
$selectFAQkweryFetch=mysql_fetch_array($selectFAQkwery);
$missionCONTENT=$selectFAQkweryFetch["missionCONTENT"];
echo"<CENTER><br /><br /><h3>About Us Content</h3><br />
<form method='post' action='websitemanagement.php?updateMISSION=1'>
<textarea name='missionCONTENT' style='width: 600px; height: 100px;'>
".$missionCONTENT."
</textarea>
<br />
<input type='submit' name='wtf' value='Update MISSION' />
<input type='button' value='Cancel' onClick='history.back();'>
</form></div>";
				 echo" </ul>
        		 
        		 <ul id='webmg4' class='hide'>
               ";
			   if($_GET["updateFAQ"]==1)
{
	$updateFAQkwery="update faqcontenttbl set faqCONTENT='".$_POST["faqCONTENT"]."' where faqID=1";
	paragUpdateDB::updateTable($updateFAQkwery);
	echo "
	<script>alert('FAQ for Front-end Updated!')</script>
	<script>window.location.href='websitemanagement.php#webmg4'</script>";
			}
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
echo"<CENTER><br /><br /><h3>FAQ Content</h3><br />
<form method='post' action='websitemanagement.php?updateFAQ=1'>
<textarea name='faqCONTENT' style='width: 600px; height: 100px;'>
".$faqCONTENT."
</textarea>
<br />
<input type='submit' name='wtf' value='Update FAQ' />
<input type='button' value='Cancel' onClick='history.back();'>
</form></div>";
			   echo "</ul>
        		 
    		 </div> <!-- END List Wrap -->
		 
		 </div> <!-- END Organic Tabs (Example One) -->";
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
