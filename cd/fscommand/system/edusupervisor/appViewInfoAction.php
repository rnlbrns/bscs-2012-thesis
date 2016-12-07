<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('edusupervisorUsername')&&session_is_registered('edusupervisorPassword'))
{
?>

<?php
konekServer::abriDB();
if($_POST["fw"]=="Confirm for Ranking"){
	$APP_ID=$_POST["APP_ID"];
	$APP_NCAESCR=$_POST["APP_NCAESCR"];
	$APP_GWA=$_POST["APP_GWA"];
	$APP_SIBNO=$_POST["APP_SIBNO"];
	$APP_AITR=$_POST["APP_AITR"];
	$APP_ID=$_POST["APP_ID"];
	$queryConfirm=mysql_query("update app_tbl set APP_CONFREJ=1 where APP_ID=".$APP_ID) or die(mysql_error());
	
$RANK_CALC= ((.40*$APP_NCAESCR)+(.30*$APP_GWA)+(.20*(300000-$APP_AITR))+(.10*$APP_SIBNO));

$queryConfirm=mysql_query("update app_tbl set APP_CONFREJ=1, APP_RANKCAL=".$RANK_CALC." where APP_ID=".$APP_ID) or die(mysql_error());
	
	$audittrailquery=mysql_query("insert into audittrail_tbl set audittrail_username='".$_SESSION["edusupervisorUsername"]."',  audittrail_activity='Confirmed an Application for Ranking', audittrail_time=now() ") ;	
	
	
		echo "<script>alert('Scholarship application has been confirmed for ranking!');
				window.location.href='applications.php';
			</script>";	
	}
else if($_POST["fw"]=="Reject Application"){
	$APP_ID=$_POST["APP_ID"];
	$queryConfirm=mysql_query("update app_tbl set APP_CONFREJ=2 where APP_ID=".$APP_ID);

	
	$audittrailquery=mysql_query("insert into audittrail_tbl set audittrail_username='".$_SESSION["edusupervisorUsername"]."',  audittrail_activity='Rejected an Application', audittrail_time=now() ") ;	
	
	
		echo "<script>alert('Scholarship application has been rejected!');
				window.location.href='applications.php';
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