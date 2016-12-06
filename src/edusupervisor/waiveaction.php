<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('edusupervisorUsername')&&session_is_registered('edusupervisorPassword'))
{
?>
<?php
konekServer::abriDB();
if($_POST["fw"]=="Confirm Waive"){
$BENEFICIARY_ID=$_POST["BENEFICIARY_ID"];

$querydueforwaivescholars=mysql_query("update beneficiary_tbl set BENEFICIARY_STAT='Waived' where BENEFICIARY_ID=".$BENEFICIARY_ID);

echo"<script>alert('Scholarship waived! This has been sent to the Email Address! of the scholar');
				window.location.href='waive.php';
			</script>
";
}
else if($_POST["fw"]=="Ignore Recommendation Waive"){
$BENEFICIARY_ID=$_POST["BENEFICIARY_ID"];

$querydueforwaivescholars=mysql_query("update beneficiary_tbl set BENEFICIARY_STAT='Enrolled' where BENEFICIARY_ID=".$BENEFICIARY_ID);



	$audittrailquery=mysql_query("insert into audittrail_tbl set audittrail_username='".$_SESSION["edusupervisorUsername"]."',  audittrail_activity='Waived a Scholarship', audittrail_time=now() ") ;	
	
	
echo"<script>alert('Scholarship waived has been ignored.');
				window.location.href='waive.php';
			</script>
";
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
