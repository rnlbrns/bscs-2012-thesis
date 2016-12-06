<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('SC_USERNAM')&&session_is_registered('SC_USERNAM'))
{
?>
<?php
require_once("header.php");
class liquidationsSulod extends konekServer{
	function liquidationsTbl(){
			$this->abriDB();
			$qry="select * from beneficiary_tbl a, grant_tbl b, program_tbl c, hei_tbl d where a.HEI_ID=".$_SESSION["HEI_ID"]." and d.HEI_ID=".$_SESSION["HEI_ID"]." and a.GRANT_ID=b.GRANT_ID and a.PROG_ID=c.PROG_ID";
			$kuery=mysql_query($qry);
			$kadamo=mysql_num_rows($kuery);
			$ihap=0;
echo "<br />";
echo "<center><b>LIST OF CHED STUDENT FINANCIAL ASSISTANCE PROGRAMS (STUFAPS) & OTOS BENEFICIARIES</b>";
echo "<br />
As of ";
echo date('l jS \of F Y h:i:s A');
echo"</center><br /><br />";
echo "Name of HEI: <b>".$_SESSION['HEI_NAM']."</b>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "Address: <b>".$_SESSION['HEI_MUN'].", ".$_SESSION['HEI_PROV']."</b>";
echo "<br />";
echo "
<form method='post' action='liquidationsUpdate.php?HEI_ID=".$_SESSION['HEI_ID']."'>
<table class='tableView' border=1>
<tr>
<td></td>
<td>Name of Beneficiary</td>
<td>STUFAP Program</td>
<td>Degree Program and Yr. Level</td>
<td>Award No.</td>
<td>Effectivity of Grant</td>
<td>Home Address</td>
<td>Contact No.</td>
<td>STATUS/REMARKS</td>
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
					$kolor="#ffffff"; 
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
					$BENEFICIARY_YRLVL=$row["BENEFICIARY_YRLVL"]; 
					$BENEFICIARY_GRANTEFFECTIVITY=$row["BENEFICIARY_GRANTEFFECTIVITY"];
					$BENEFICIARY_MAILADD=$row["BENEFICIARY_MAILADD"];
					$BENEFICIARY_CONTACTNO=$row["BENEFICIARY_CONTACTNO"];
					$BENEFICIARY_STAT=$row["BENEFICIARY_STAT"];
					
					echo "	<tr bgcolor='".$kolor."'>
										<td><input type='radio' name='BENEFICIARY_ID' id='BENEFICIARY_ID' value='".$BENEFICIARY_ID."'></td>
										<td>".$BENEFICIARY_nam3.", ".$BENEFICIARY_nam1."  ".$BENEFICIARY_nam2."</td>
										<td>".$GRANT_SHORTNAM."</td>
										<td>".$PROG_NAM." - ".$BENEFICIARY_YRLVL."</td>
										<td>".$BENEFICIARY_AWARDNO."</td>
										<td>".$BENEFICIARY_GRANTEFFECTIVITY."</td>
										<td>".$BENEFICIARY_MAILADD."</td>
										<td>".$BENEFICIARY_CONTACTNO."</td>
										<td>".$BENEFICIARY_STAT."</td>
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
								<input type='submit' value='Add new Beneficiary' name='fw'>
								&nbsp;
								<input type='submit' value='Update Beneficiary Info' name='fw'>
								&nbsp;
								<input type='submit' value='View Grades' name='fw'>
								&nbsp;
								<input type='button' value='Payment Records' name='fw'>
								
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
