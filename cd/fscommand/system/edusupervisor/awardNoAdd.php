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
echo "	
		<center><h3>Add new Award No</h3><br /><form method='post' action='awardNoAddAction.php'>
						<table border='0'>
							<tr>
								<td align='right'><b>Grant Category :</b></td>
								<td>
								<select name='GRANT_ID' id='GRANT_ID'>
								";
								//$connect = mysql_connect("localhost","root","") or die ("IG-ON AN WAMPSERVER!");
								//mysql_select_db("ched", $connect) or die("dre ak maaram magconect"); 
								konekServer::abriDB();
								$GRANT="select * from grant_tbl";
								$GRANT_kuery=mysql_query($GRANT) or die(mysql_error());
								$GRANT_list=mysql_num_rows($GRANT_kuery);														
								$ihap=0;
								while($GRANT_list>$ihap)
								{
								$ihap++;
								$row=mysql_fetch_array($GRANT_kuery);
								$GRANT_ID=$row["GRANT_ID"];
								$GRANT_CODE=$row["GRANT_CODE"];
								echo"<option value=".$GRANT_ID.">".$GRANT_CODE."</option>";
								}
								echo"</select></td>
							</tr>
							<tr>
								<td align='right'><b>Award No.:</b></td>
								<td><input type='text' name='AWARDNO_AWARD' id='AWARDNO_AWARD'></td>
							</tr>";
		     echo " </table><br>
			 			<input type='submit' value='Save'>
						<input type='button' value='Cancel' onClick='history.back();'>
						</form></center>";
			
		
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
