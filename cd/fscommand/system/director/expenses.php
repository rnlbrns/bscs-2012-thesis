<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('directorUsername'))
{
?>
<?php
require_once("header.php");
konekServer::abriDB();
	$audittrailquery=mysql_query("insert into audittrail_tbl set audittrail_username='".$_SESSION["directorUsername"]."',  audittrail_activity='Viewed Expenses', audittrail_time=now() ") or die(mysql_error());	
echo "
<center>
<h3>Released Check by CHED R-08 Summary</h3>
As of ".date('l jS \of F Y h:i:s A')."
";

$paymentrecords_querytext="select * from payment_tbl a, paymentrecords_tbl b, beneficiary_tbl c, hei_tbl d, grant_tbl e, program_tbl f where a.PAYMENT_ID=b.PAYMENT_ID and a.BENEFICIARY_ID=c.BENEFICIARY_ID and c.HEI_ID=d.HEI_ID and c.GRANT_ID=e.GRANT_ID and c.PROG_ID=f.PROG_ID and a.PAYMENT_STATUS=&#39;SENT&#39; order by PAYMENTRECORDS_DATE limit 30";
$paymentrecords_query=mysql_query("select * from payment_tbl a, paymentrecords_tbl b, beneficiary_tbl c, hei_tbl d, grant_tbl e, program_tbl f where a.PAYMENT_ID=b.PAYMENT_ID and a.BENEFICIARY_ID=c.BENEFICIARY_ID and c.HEI_ID=d.HEI_ID and c.GRANT_ID=e.GRANT_ID and c.PROG_ID=f.PROG_ID and a.PAYMENT_STATUS='SENT' order by PAYMENTRECORDS_DATE limit 30") or die(mysql_error());
$paymentrecords_querycount=mysql_num_rows($paymentrecords_query);
$paymentrecords_queryihap=0;

echo"
<br />
<br />
<form method='post' action='expensesPDF.php'>
<table width='100%'>
<tr><td align='right'>
<input type='image' src='pdf.gif' name='pdfw' >
<input type='hidden' name='REPORT_SELECT' value='ByDiscipline'>
<input type='hidden' name='qry' value='".$qryPasa."'>
<input type='hidden' name='paymentrecords_querytext' value='".$paymentrecords_querytext."'>
</td></tr></table>
</form>
<table class='tableView' border=1>
<tr  bgcolor='#a6bdfa'>
<td>Release Date</td>
<td>Name</td>
<td>Award Number</td>
<td>Prog and Year</td>
<td>Grant</td>
<td>HEI</td>
<td>Amount</td>
</tr>
";
if($paymentrecords_querycount>0){
while($paymentrecords_queryihap<$paymentrecords_querycount){
$paymentrecords_queryihap++;
					if ($marka==1)
					{ 
					$marka=0; 
					$kolor="#ffff99"; 
					}
					else {
					$marka=1; $kolor="#ffffff"; 
					}
$paymentrecords_queryfetch=mysql_fetch_array($paymentrecords_query);

$BENEFICIARY_ID=$paymentrecords_queryfetch["BENEFICIARY_ID"]; 	
$PAYMENTRECORDS_DATE=$paymentrecords_queryfetch["PAYMENTRECORDS_DATE"]; 	
$PAYMENT_ID=$paymentrecords_queryfetch["PAYMENT_ID"]; 	
$BENEFICIARY_AWARDNO=$paymentrecords_queryfetch["BENEFICIARY_AWARDNO"]; 	
$BENEFICIARY_nam1=$paymentrecords_queryfetch["BENEFICIARY_nam1"];
$BENEFICIARY_nam2=$paymentrecords_queryfetch["BENEFICIARY_nam2"];
$BENEFICIARY_nam3=$paymentrecords_queryfetch["BENEFICIARY_nam3"];
$BENEFICIARY_nam3=$paymentrecords_queryfetch["BENEFICIARY_nam3"];
$PROG_CODE=$paymentrecords_queryfetch["PROG_CODE"]; 
$BENEFICIARY_YRLVL =$paymentrecords_queryfetch["BENEFICIARY_YRLVL"]; 
$GRANT_CODE =$paymentrecords_queryfetch["GRANT_CODE"]; 
$HEI_ACRONAM =$paymentrecords_queryfetch["HEI_ACRONAM"]; 
$PAYMENT_BILL =$paymentrecords_queryfetch["PAYMENT_BILL"]; 
					
					
			echo"<tr bgcolor=".$kolor.">
			<td align='center'>".date("F j, Y", strtotime($PAYMENTRECORDS_DATE))."</td>
			<td align='center'><a href='paymentsViewGrade.php?BENEFICIARY_ID=".$BENEFICIARY_ID."'>".mb_strtoupper($BENEFICIARY_nam3).", ".mb_strtoupper($BENEFICIARY_nam1)." ".mb_strtoupper($BENEFICIARY_nam2)."</a></td>
				<td align='center'>".mb_strtoupper($BENEFICIARY_AWARDNO)."</td>
			<td align='center'>".mb_strtoupper($PROG_CODE)."-".$BENEFICIARY_YRLVL."</td>
			<td align='center'>".mb_strtoupper($GRANT_CODE)."</td>
			<td align='center'>".mb_strtoupper($HEI_ACRONAM)."</td>
			<td align='right'>".$PAYMENT_BILL."</td>";


}}

else{
	echo"<tr><td colspan='20' align='center'>****No RECORDS FOUND!****</td></tr>";
	}
echo "
</table>
<br /></center>";
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
