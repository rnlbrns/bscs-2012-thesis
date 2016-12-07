<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('edusupervisorUsername')&&session_is_registered('edusupervisorPassword'))
{
?>
<?php
konekServer::abriDB();
$BENEFICIARY_AWARDNO=$_POST["BENEFICIARY_AWARDNO"];
if(empty($BENEFICIARY_AWARDNO))
{

	echo"	<script>alert('PLEASE FILL ALL FIELDS')</script>";
			echo "<script>history.back();</script>";
}

else{
$APP_ID=$_POST["APP_ID"];
$BENE_SCHOOLYREFFEC=$_POST["schoolyr_yr"];

$appshowinfo=mysql_query("select * from APP_TBL a, GRANT_TBL b where APP_ID=".$APP_ID." and a.GRANT_ID=b.GRANT_ID") or die(mysql_error());
$appinfofetch=mysql_fetch_array($appshowinfo);

$APP_FIRSTNAME=$appinfofetch["APP_FIRSTNAME"];
$APP_MIDNAME=$appinfofetch["APP_MIDNAME"];
$APP_LASTNAME=$appinfofetch["APP_LASTNAME"];
$APP_MAILADD=$appinfofetch["APP_MAILADD"];
$APP_CONTACT=$appinfofetch["APP_CONTACT"];
$APP_GENDER=$appinfofetch["APP_GENDER"];
$APP_CONGDIST=$appinfofetch["APP_CONGDIST"];
$GRANT_ID=$appinfofetch["GRANT_ID"];
$APP_EMAILADD=$appinfofetch["APP_EMAILADD"];
$GRANT_SHORTNAM=$appinfofetch["GRANT_SHORTNAM"];

$approvalQry=mysql_query("insert into beneficiary_tbl set BENEFICIARY_AWARDNO='".$BENEFICIARY_AWARDNO."', BENEFICIARY_nam1='".$APP_FIRSTNAME."',  BENEFICIARY_nam2='".$APP_MIDNAME."',  BENEFICIARY_GENDER='".$APP_GENDER."' ,  BENEFICIARY_nam3='".$APP_LASTNAME."' ,  GRANT_ID=".$GRANT_ID.", BENEFICIARY_CONTACTNO='".$APP_CONTACT."', BENEFICIARY_MAILADD='".$APP_MAILADD."', BENEFICIARY_STAT='NEW', BENEFICIARY_GRANTEFFECTIVITY=now(), HEI_ID=0, BENE_EMAILADD='".$APP_EMAILADD."', BENE_SCHOOLYREFFEC='".$BENE_SCHOOLYREFFEC."', BENE_CONGDIST=".$APP_CONGDIST."") or die(mysql_error());		

$updateAPPQRY="update app_tbl set APP_APPROVE=1 where APP_ID=".$APP_ID;		
paragUpdateDB::updateTable($updateAPPQRY);


$updateAPPQRY="update awardno_tbl set AWARDNO_AVAILABILITY=1 where AWARDNO_AWARD='".$BENEFICIARY_AWARDNO."'";		
paragUpdateDB::updateTable($updateAPPQRY);

	$audittrailquery=mysql_query("insert into audittrail_tbl set audittrail_username='".$_SESSION["edusupervisorUsername"]."',  audittrail_activity='Approved an Scholarship', audittrail_time=now() ") ;	

		echo "<script>alert('Scholarship for ".mb_strtoupper($APP_LASTNAME).", ".mb_strtoupper($APP_FIRSTNAME)." ".mb_strtoupper($APP_MIDNAME)." for  ".mb_strtoupper($GRANT_SHORTNAM)." has been approved! Email about the approval has been sent to the Email Address of the Scholar!');
				window.location.href='beneList.php';
			</script>";	

}
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