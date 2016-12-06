<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('SC_USERNAM')&&session_is_registered('SC_USERNAM'))
{
?>
<?php
konekServer::abriDB();
$PAYMENT_ID=$_GET["PAYMENT_ID"];
$updatePaymentActionQueryText="update payment_tbl set PAYMENT_STATUS='PAID' where PAYMENT_ID=".$PAYMENT_ID;
$updatePaymentActionQuery=mysql_query($updatePaymentActionQueryText);
		echo "<script>alert('Check Sent to HEI or taken by scholar! Please wait for confirmation by the HEI Scholarship Coordinator if it has been received!');
				window.location.href='liquidationsMain.php';
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
