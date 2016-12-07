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
echo "<center><h4>
View List of Scholars Per School :
<form method='POST' action='beneView.php'>
<select name='HEI_ID'>";

			$kuery=mysql_query("select * from hei_tbl ");
			$kadamo=mysql_num_rows($kuery);
			$kawnt=1;
			while($kawnt<=$kadamo){
					$row=mysql_fetch_array($kuery);
					$HEI_ID=$row["HEI_ID"];
					$HEI_ACRONAM=$row["HEI_ACRONAM"];
					$kawnt++;

			echo"<option value=".$HEI_ID.">".$HEI_ACRONAM."</option>";	
			}
echo "</select><br />
<input type='submit' name='grantFW' value='View'/>
</form>
</h4>
";

echo "<center><b>List of StuFAP New/Unenrolled Beneficiaries</b>";
								
			
echo "<br /><br />
As of ";
echo date('l jS \of F Y h:i:s A');
$qer="select * from beneficiary_tbl a, grant_tbl b where a.HEI_ID=0 and b.GRANT_ID=a.GRANT_ID";
$qry=mysql_query($qer);
$kawnt=mysql_num_rows($qry);
$ihap=0;

echo "<form method='post' action='beneListPDF.php'>
<table width='100%'>
<tr><td align='left'>
<input type='image' src='pdf.gif' name='pdfw' />
<input type='hidden' name='REPORT_SELECT' value='ByDiscipline'>
<input type='hidden' name='HEI_ID' value=".$_POST["HEI_ID"].">
<input type='hidden' name='qry' value='".$qer."'>
</td></tr></table>
</form>
</center>
<table class='tableView' border=1>
<tr bgcolor='#a6bdfa'>
<td align='center'><b>Name</br></td>
<td align='center'><b>Grant</br></td>
<td align='center'><b>Award Number</br></td>
<td align='center'><b>Grant Effectivity</br></td>
<td align='center'><b>Address</br></td>
<td align='center'><b>Contact No.</br></td>
</tr>
";

if ($kawnt>0){	

					while($ihap<$kawnt){
					$ihap++;
					if ($marka==1)
					{ 
					$marka=0; 
					$kolor="#ffff99"; 
					}
					else {
					$marka=1; $kolor="#ffffff"; 
					}
					$row=mysql_fetch_array($qry);
					$BENEFICIARY_ID=$row["BENEFICIARY_ID"];
					$BENEFICIARY_nam1=$row["BENEFICIARY_nam1"];
					$BENEFICIARY_nam2=$row["BENEFICIARY_nam2"];
					$BENEFICIARY_nam3=$row["BENEFICIARY_nam3"];
					$BENEFICIARY_AWARDNO=$row["BENEFICIARY_AWARDNO"];
					$GRANT_SHORTNAM=$row["GRANT_SHORTNAM"];
					$PROG_NAM=$row["PROG_NAM"];
					$BENEFICIARY_YRLVL=$row["BENEFICIARY_YRLVL"]; 
					$BENEFICIARY_GRANTEFFECTIVITY=$row["BENEFICIARY_GRANTEFFECTIVITY"];
					$BENEFICIARY_MAILADD=$row["BENEFICIARY_MAILADD"];
					$BENEFICIARY_CONTACTNO=$row["BENEFICIARY_CONTACTNO"];
					$BENEFICIARY_STAT=$row["BENEFICIARY_STAT"];
					
					echo "	<tr bgcolor=".$kolor.">
										<td>".mb_strtoupper($BENEFICIARY_nam3).", ".mb_strtoupper($BENEFICIARY_nam1)."  ".mb_strtoupper($BENEFICIARY_nam2)."</td>
										<td>".$GRANT_SHORTNAM."</td>
										<td>".mb_strtoupper($BENEFICIARY_AWARDNO)."</td>
										<td>".date("F j, Y",strtotime($BENEFICIARY_GRANTEFFECTIVITY))."</td>
										<td>".mb_strtoupper($BENEFICIARY_MAILADD)."</td>
										<td>".$BENEFICIARY_CONTACTNO."</td>
										</tr>";

}
}
else {
	echo "<tr><td colspan=23 align='center'>NO RECORDS FOUND</td></tr>";
	}
echo"</table>
";
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
	