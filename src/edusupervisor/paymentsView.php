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

$queryText="select * from beneficiary_tbl a, grant_tbl b, payment_tbl c, program_tbl d where a.HEI_ID=".$_POST["HEI_ID"]." and a.GRANT_ID=b.GRANT_ID and c.schoolyr_yr='".$_POST["schoolyr_yr"]."' and a.BENEFICIARY_ID=c.BENEFICIARY_ID and c.PAYMENT_SEM=".$_POST["PAYMENT_SEM"]." and a.PROG_ID=d.PROG_ID";
$gradeReport_query=mysql_query($queryText);
$gradeReport_queryKawnt=mysql_num_rows($gradeReport_query);
$gradeReport_queryIhap=0;
echo "<center>
<h3>Certified List of Grantees for Payment</br></h3>
<h3>First Semester SY ".$_POST["schoolyr_yr"]."</br></h3>

<table  class='tableView' border=1>
<tr bgcolor='#a6bdfa'>
<td align='center'><b>Award No.</br></td>
<td align='center'><b>Name</br></td>
<td align='center'><b>Gender</br></td>
<td align='center'><b>Address</br></td>
<td align='center'><b>Course/Year Level</br></td>
<td align='center'><b>Total Billing</br></td>
<td align='center'><b>Tuition</br></td>
<td align='center'><b>Allowance</br></td>
<td align='center'><b>Date</br></td>
<td align='center'><b>Action</br></td>
</tr>
";

/*

<td align='center'><b>No. of Units Earned (previous semester)</br></td>
<td align='center'><b>Cost/Unit</br></td>
<td align='center'><b>Total Tuition Fee</br></td>
<td align='center'><b>Allowance</br></td>
<td align='center'><b>Total Other Fees</br></td>
*/
if($gradeReport_queryKawnt>0){
while($gradeReport_queryIhap<$gradeReport_queryKawnt){
$gradeReport_queryIhap++;
					if ($marka==1)
					{ 
					$marka=0; 
					$kolor="#ffff99"; 
					}
					else {
					$marka=1; $kolor="#ffffff"; 
					}
$gradeFetch=mysql_fetch_array($gradeReport_query);

$BENEFICIARY_ID=$gradeFetch["BENEFICIARY_ID"]; 	
$PAYMENT_ID=$gradeFetch["PAYMENT_ID"]; 	
$BENEFICIARY_AWARDNO=$gradeFetch["BENEFICIARY_AWARDNO"]; 	
$BENEFICIARY_nam1=$gradeFetch["BENEFICIARY_nam1"];
$BENEFICIARY_nam2=$gradeFetch["BENEFICIARY_nam2"];
$BENEFICIARY_nam3=$gradeFetch["BENEFICIARY_nam3"];
$BENEFICIARY_GENDER=$gradeFetch["BENEFICIARY_GENDER"];
$BENEFICIARY_MAILADD=$gradeFetch["BENEFICIARY_MAILADD"];
$BENEFICIARY_MAILADD=$gradeFetch["BENEFICIARY_MAILADD"];
$PROG_CODE=$gradeFetch["PROG_CODE"];
$BENEFICIARY_YRLVL=$gradeFetch["BENEFICIARY_YRLVL"];
$PAYMENT_BILL=$gradeFetch["PAYMENT_BILL"];
$PAYMENT_TUITION=$gradeFetch["PAYMENT_TUITION"];
$PAYMENT_ALLOWANCE=$gradeFetch["PAYMENT_ALLOWANCE"];	
$PAYMENT_DATE=$gradeFetch["PAYMENT_DATE"];
$PAYMENT_STATUS=$gradeFetch["PAYMENT_STATUS"];
echo"<tr bgcolor=".$kolor.">
			<td align='center'>".mb_strtoupper($BENEFICIARY_AWARDNO)."</td>
			<td align='center'><a href='paymentsViewGrade.php?BENEFICIARY_ID=".$BENEFICIARY_ID."'>".mb_strtoupper($BENEFICIARY_nam3).", ".mb_strtoupper($BENEFICIARY_nam1)." ".mb_strtoupper($BENEFICIARY_nam2)."</a></td>
			<td align='center'>".mb_strtoupper($BENEFICIARY_GENDER)."</td>
			<td align='center'>".mb_strtoupper($BENEFICIARY_MAILADD)."</td>
			<td align='center'>".$PROG_CODE."-".$BENEFICIARY_YRLVL."</td>
			<td align='center'>".$PAYMENT_BILL."</td>
			<td align='center'>".$PAYMENT_TUITION."</td>
			<td align='center'>".$PAYMENT_ALLOWANCE."</td>
			<td align='center'>".$PAYMENT_DATE."</td>
			<td align='center'>";
			$PAYMENT_STATUSactiontext;
			if($PAYMENT_STATUS=="UNPAID"){
			$PAYMENT_STATUSactiontext="<a href='paymentsViewAction.php?PAYMENT_ID=".$PAYMENT_ID ."'>Send Check".$PAYMET_STATUS."</a>";
			}
			else if($PAYMENT_STATUS=="SENT"){
			$PAYMENT_STATUSactiontext="Check Sent";
			}
			else if($PAYMENT_STATUS=="PAID"){
			$PAYMENT_STATUSactiontext="PAID";
			}
			echo $PAYMENT_STATUSactiontext."</td>
			
</tr>";
}
}
else{
	echo"<tr><td colspan='4' align='center'>****No RECORDS FOUND!****</td></tr>";
	}
echo "</table></center>";
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
