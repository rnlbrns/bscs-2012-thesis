<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('edusupervisorUsername')&&session_is_registered('edusupervisorPassword'))
{
?><?php
require('html_table.php');
require_once("a-connection.php");
class reports extends konekServer{
function reportsByDiscplinePDF($HEI_ID){
$this->abriDB();
$today = date("F j, Y");

$pdf=new PDF_HTML_Table();
$pdf->AddPage();
$pdf->SetFont('Arial','',6);
/*
$heinamqry=mysql_query("select * from hei_tbl where HEI_ID=".$_POST["HEI_ID"]);
$dispThis=mysql_fetch_array($heinamqry);
$HEI_NAM=$dispThis["HEI_NAM"];
$_POST["qry"];*/
$_POST["qry"];	
$qryBusinessFullMerit=mysql_query($_POST["qry"]) or die(mysql_error());
$countBusinessFullMerit=mysql_num_rows($qryBusinessFullMerit);
$ihapBusinessFullMerit=0;
$addRow;
while($ihapBusinessFullMerit<$countBusinessFullMerit){
$ihapBusinessFullMerit++;
$disp=mysql_fetch_array($qryBusinessFullMerit);
$addRow.="<tr>
	<td align='center'>".mb_strtoupper($disp["BENEFICIARY_nam3"]).", ".mb_strtoupper($disp["BENEFICIARY_nam1"])." ".mb_strtoupper($disp["BENEFICIARY_nam2"])." </td>
	<td align='center'>".mb_strtoupper($disp["GRANT_SHORTNAM"])." </td>
	<td align='center'>".mb_strtoupper($disp["BENEFICIARY_AWARDNO"])." </td>
	<td>".date("F j, Y",strtotime($disp["BENEFICIARY_GRANTEFFECTIVITY"]))."</td>
	<td align='center'>".mb_strtoupper($disp["BENEFICIARY_MAILADD"])." </td>
	<td align='center'>".mb_strtoupper($disp["BENEFICIARY_CONTACTNO"])." </td>
	</tr>
	";
}
	$pdf->WriteHTML("
	<b>List of StuFAP New/Unenrolled Beneficiaries</b>
	<br />
	<br />
	As of ".date('l jS \of F Y h:i:s A')."
	<table border=1>
	<tr>
	<td ><b>Name.</b></td>
	<td><b>Grant</b></td>
	<td><b>Award Num</b></td>
	<td><b>Grant Effectivity</b></td>
	<td><b>Address</b></td>
	<td><b>Contact No.</b></td>
	</tr>".$addRow."</table>");

	


$pdf->Output();
}// end reportsByDiscplinePDF


	


}// end class

						if($_POST["REPORT_SELECT"]=="ByDiscipline"){
								$sulod=new reports();
								$butang=new paragLayOut();
								$butang->butangSulod($sulod->reportsByDiscplinePDF($_POST["HEI_ID"]));
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
