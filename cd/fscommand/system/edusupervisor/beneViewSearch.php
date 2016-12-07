<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('edusupervisorUsername')&&session_is_registered('edusupervisorPassword'))
{
?>
<?php
require_once("header.php");
class liquidationsSulod extends konekServer{
	function liquidationsTbl(){
			$this->abriDB();
			$qry="select * from beneficiary_tbl a, grant_tbl b, program_tbl c, hei_tbl d where a.HEI_ID=".$_GET["HEI_ID"]." and a.BENEFICIARY_nam3='".$_GET["BENEFICIARY_nam3"]."' and d.HEI_ID=".$_GET["HEI_ID"]." and a.GRANT_ID=b.GRANT_ID and a.PROG_ID=c.PROG_ID and !(a.BENEFICIARY_STAT='WAIVED') order by BENEFICIARY_nam3 ASC";
			
			$kuery=mysql_query($qry);
			$kadamo=mysql_num_rows($kuery);
			$ihap=0;
			$skulnammongetqrytext="select * from hei_tbl where HEI_ID=".$_GET["HEI_ID"];
			$skulnammongetqry=mysql_query($skulnammongetqrytext);
			$skulnammonget=mysql_fetch_array($skulnammongetqry);
			$HEI_NAM=$skulnammonget["HEI_NAM"];
			$HEI_MUN=$skulnammonget["HEI_MUN"];
			$HEI_PROV=$skulnammonget["HEI_PROV"];
echo "<form name='form' action='beneViewSearch.php' method='get'>
  Input Last Name for Search for Applicant:
  <input type='text' name='BENEFICIARY_nam3' />
  <input type='hidden' name='GRANT_ID' value=".$GRANT_ID." >
  <input type='hidden' name='HEI_ID' value=".$_GET["HEI_ID"]." >
  <input type='submit' name='Submit' value='Search' />
</form><br />";
echo "

<center><b>LIST OF CHED STUDENT FINANCIAL ASSISTANCE PROGRAMS (STUFAPS) BENEFICIARIES</b>";
echo "<br />
As of ";
echo date('l jS \of F Y h:i:s A');
echo"</center><br /><br />";
echo "Name of HEI: <b>".$HEI_NAM."</b>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "Address: <b>".$HEI_MUN.", ".$HEI_PROV."</b>";
echo "<br />";
echo "
<form method='post' action='beneViewLiquidations.php'>
<table class='tableView' border=1>
<br>
<tr bgcolor='#a6bdfa'>	
<td></td>
<td align='center'><b>Name of Beneficiary</br></td>
<td align='center'><b>STUFAP Program</br></td>
<td align='center'><b>Degree Program and Yr. Level</br></td>
<td align='center'><b>Award No.</br></td>
<td align='center'><b>Effectivity of Grant</br></td>
<td align='center'><b>Home Address</br></td>
<td align='center'><b>Contact No.</br></td>
<td align='center'><b>STATUS/REMARKS</br></td>
</tr>";
if ($kadamo>0)
					{	
					$marka=0;
					while ($ihap<$kadamo)
					{	
					$ihap++;
					if ($marka==1)
					{ 
					$marka=0; 
					$kolor="#ffff99"; 
					}
					else {
					$marka=1; $kolor="#ffffff"; 
					}
					$row=mysql_fetch_array($kuery);
					$BENEFICIARY_ID=$row["BENEFICIARY_ID"];
					$BENEFICIARY_nam1=$row["BENEFICIARY_nam1"];
					$BENEFICIARY_nam2=$row["BENEFICIARY_nam2"];
					$BENEFICIARY_nam3=$row["BENEFICIARY_nam3"];
					$BENEFICIARY_AWARDNO=$row["BENEFICIARY_AWARDNO"];
					$GRANT_SHORTNAM=$row["GRANT_SHORTNAM"];
					$PROG_NAM=$row["PROG_NAM"];
					$PROG_CODE=$row["PROG_CODE"];
					$BENEFICIARY_YRLVL=$row["BENEFICIARY_YRLVL"]; 
					$BENEFICIARY_GRANTEFFECTIVITY=$row["BENEFICIARY_GRANTEFFECTIVITY"];
					$BENEFICIARY_MAILADD=$row["BENEFICIARY_MAILADD"];
					$BENEFICIARY_CONTACTNO=$row["BENEFICIARY_CONTACTNO"];
					$BENEFICIARY_STAT=$row["BENEFICIARY_STAT"];
					
					echo "	<tr bgcolor='".$kolor."'>
										<td><input type='radio' name='BENEFICIARY_ID' id='BENEFICIARY_ID' value='".$BENEFICIARY_ID."'></td>
										<td align='center'>".mb_strtoupper($BENEFICIARY_nam3).", ".mb_strtoupper($BENEFICIARY_nam1)."  ".mb_strtoupper($BENEFICIARY_nam2)."</td>
										<td align='center'>".$GRANT_SHORTNAM."</td>
										<td align='center'>".$PROG_CODE." - ".$BENEFICIARY_YRLVL."</td>
										<td align='center'>".mb_strtoupper($BENEFICIARY_AWARDNO)."</td>
										<td align='center'>".$BENEFICIARY_GRANTEFFECTIVITY."</td>
										<td align='center'>".mb_strtoupper($BENEFICIARY_MAILADD)."</td>
										<td align='center'>".$BENEFICIARY_CONTACTNO."</td>
										<td align='center'>".$BENEFICIARY_STAT."</td>
										</tr>";
				}
			}
			else
			{	
			echo "	<tr>
								<td colspan='11' align='center'>No records found!</td></tr>";
				}
				
				echo "	</table>
				<center>
								<table><tr><td align='center'>
								<input type='submit' value='View Grades' name='fw'>
								&nbsp;
								<input type='submit' value='List of Payments' name='fw'>
								
								&nbsp;&nbsp;
								</form></td></tr></table>
				</center>
				";
								}}
								$sulod=new liquidationsSulod();
								$butang=new paragLayOut();
								$butang->butangSulod($sulod->liquidationsTbl());



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
