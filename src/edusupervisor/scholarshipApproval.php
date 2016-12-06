<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('edusupervisorUsername')&&session_is_registered('edusupervisorPassword'))
{
?>
<?php
$APP_ID=$_POST["APP_ID"];

require_once("header.php");
konekServer::abriDB();
if($_POST["fw"]=="Approve Scholarship"){
	
	
if(!empty($APP_ID))
{
	$appshowinfo=mysql_query("select * from APP_TBL a, GRANT_TBL b where APP_ID=".$APP_ID." and a.GRANT_ID=b.GRANT_ID") or die(mysql_error());
	$appinfofetch=mysql_fetch_array($appshowinfo);
	
	$APP_FIRSTNAME=$appinfofetch["APP_FIRSTNAME"];
	$APP_MIDNAME=$appinfofetch["APP_MIDNAME"];
	$APP_LASTNAME=$appinfofetch["APP_LASTNAME"];
	$GRANT_SHORTNAM=$appinfofetch["GRANT_SHORTNAM"];
	$GRANT_ID=$appinfofetch["GRANT_ID"];
	
	
	
		$awardno_tblQry=mysql_query("select * from awardno_tbl where AWARDNO_AVAILABILITY=0 and GRANT_ID=".$GRANT_ID);
		$awardno_tblQryKawnt=mysql_num_rows($awardno_tblQry);
		$awardno_tblQryIhap=0;
		
	echo "Approve scholarship for ".mb_strtoupper($APP_LASTNAME).", ".mb_strtoupper($APP_FIRSTNAME)." ".mb_strtoupper($APP_MIDNAME)." for  ".mb_strtoupper($GRANT_SHORTNAM)." <br />
	Give Award Number:
	<form method='post' action='scholarshipApprovalAction.php'>
	<table>
	<tr>
	<td><select name='BENEFICIARY_AWARDNO'>";
		
		if($awardno_tblQryKawnt>0){
		while($awardno_tblQryIhap<$awardno_tblQryKawnt){
			$awardno_tblQryIhap++;
			$awardno_tbldisp=mysql_fetch_array($awardno_tblQry);
			$AWARDNO_AWARD=$awardno_tbldisp["AWARDNO_AWARD"];
			echo "<option value='".$AWARDNO_AWARD."'>".$AWARDNO_AWARD."</option>	";
			}
			}
			else{
			echo"<option>NO MORE AWARD NUMBERS AVAILABLE</option>";
			}
		echo "</select></td>
	</tr>
	<tr>
			<td>
		<select name='schoolyr_yr'>";
		$SYPagawasQry=mysql_query("select * from schoolyr_tbl");
		$SYKawnt=mysql_num_rows($SYPagawasQry);
		$SYIhap=0;
		while($SYIhap<$SYKawnt){
			$SYIhap++;
			$SYDisp=mysql_fetch_array($SYPagawasQry);
			$schoolyr_yr=$SYDisp["schoolyr_yr"];
			echo "<option value='".$schoolyr_yr."'>".$schoolyr_yr."</option>";
			}
		echo "</select></td>
	</tr>
	<tr>
	<td><input type='submit' name='fwrd' value='Approve'></td>
	</tr>
	</table>
	<input type='hidden' name='APP_ID' value=".$APP_ID." >
	<input type='button' value='Cancel' onClick='history.back();'>

	</form>";
	}
}
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