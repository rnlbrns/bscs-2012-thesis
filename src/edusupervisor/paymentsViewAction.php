<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('edusupervisorUsername')&&session_is_registered('edusupervisorPassword'))
{
?>
<?php
konekServer::abriDB();
$PAYMENT_ID=$_GET["PAYMENT_ID"];


$updatePaymentActionQueryText="update payment_tbl set PAYMENT_STATUS='SENT' where PAYMENT_ID=".$PAYMENT_ID;
$updatePaymentActionQuery=mysql_query($updatePaymentActionQueryText);


$insertpaymentrecords_tbltext="insert into paymentrecords_tbl set PAYMENT_ID=".$PAYMENT_ID;
$insertpaymentrecords_tbltextquery=mysql_query($insertpaymentrecords_tbltext) or die(mysql_error());
	$audittrailquery=mysql_query("insert into audittrail_tbl set audittrail_username='".$_SESSION["edusupervisorUsername"]."',  audittrail_activity='Sent Check', audittrail_time=now() ") or die(mysql_error());	

		echo "<script>alert('Check Sent to HEI or taken by scholar! Please wait for confirmation by the HEI Scholarship Coordinator if it has been received!');
				window.location.href='paymentsMain.php';
			</script>";
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
