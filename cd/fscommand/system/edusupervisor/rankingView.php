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

			$fromPitsa=$_GET["tuigFrom"]."-".$_GET["bulanFrom"]."-".$_GET["pitsaFrom"];
			$toPitsa=$_GET["tuigTo"]."-".$_GET["bulanTo"]."-".$_GET["pitsaTo"];
			$listApp;
				if(empty($_GET["rankingCountLimit"]))
				{
				
					echo"	<script>alert('Input Number of Slots')</script>";
							echo "<script>history.back();</script>";
				}
				if($fromPitsa<$toPitsa)
				{
					$listApp="SELECT * FROM app_tbl WHERE APP_DATEAPP BETWEEN '".$fromPitsa."' AND '".$toPitsa."' AND GRANT_ID=".$_GET["GRANT_ID"]." and APP_CONFREJ=1 order by APP_RANKCAL desc limit ".$_GET["rankingCountLimit"]."";
				}
				else
				{
					
					echo "<script>alert('Input valid ranking period!!');
											window.location.href='ranking.php';
										</script>";
				}

			$listappkwery=mysql_query($listApp)or die(mysql_error());
			$kadamo=mysql_num_rows($listappkwery);
			$ihap=0;

			$RANKNO=1;		
					$granttblqry=mysql_query("select * from grant_tbl where GRANT_ID=".$_GET["GRANT_ID"]) or die(mysql_error());
					$www=mysql_fetch_array($granttblqry);
					$GRANT_SHORTNAM=$www["GRANT_SHORTNAM"];
			
echo "<br />";
echo "<center><b>Ranking Applicants for: ".$GRANT_SHORTNAM."</b>";
								
$RANK_BASE=60080;
echo "<br />
<b>Inputted Slots: ".$_GET["rankingCountLimit"]."</b>
<br />
As of 
From ".$fromPitsa." - ".$toPitsa."";

echo"<br /><br /> ";
echo date('l jS \of F Y h:i:s A');
echo"
</center><br /><br />";
echo "<br />";
echo "
<center>
<form method='post' action='appViewInfoApp.php'>
<table class='tableView' border='1' width='100%'>
<tr bgcolor='#a6bdfa'>
<td align='center'><b>RANK</td>
<td align='center'><b>Name of Applicant</td>
<td align='center'><b>NCAE Score</b></td>
<td align='center'><b>GWA</b></td>
<td align='center'><b>Parent's ITR</b></td>
<td align='center'><b>Siblings</b></td>
<td align='center'><b>Status</b></td>
<td align='center'><b>Actions</b></td>
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
					$row=mysql_fetch_array($listappkwery);
					$APP_ID=$row["APP_ID"];
					$APP_FIRSTNAME=$row["APP_FIRSTNAME"];
					$APP_MIDNAME=$row["APP_MIDNAME"];
					$APP_LASTNAME=$row["APP_LASTNAME"];
					$APP_SIBNO=$row["APP_SIBNO"];
					$APP_AGE = floor((time() - strtotime($APP_BDAY))/(60*60*24*365.2425));
					$APP_NCAESCR=$row["APP_NCAESCR"];
					$APP_GWA=$row["APP_GWA"];
					$APP_AITR=$row["APP_AITR"];
					$APP_PERMADD=$row["APP_PERMADD"];
					$APP_HSNAM=$row["APP_HSNAM"];
					$APP_APPROVE=$row["APP_APPROVE"];
					$APP_RANKCAL=$row["APP_RANKCAL"];
					$approvaltxtdisp;
					
					if($APP_APPROVE==0)
					{
						$approvaltxtdisp="Pending";
						$approveTransfertxt="<b>
						<a href='rankingAction.php?action=Approve&APP_ID=".$APP_ID."'>APPROVE</a>&nbsp;&nbsp;
						<a  href='rankingAction.php?action=Transfer&APP_ID=".$APP_ID."'>TRANSFER</a></b>";
					}
					else if($APP_APPROVE==1)
					{
						$approvaltxtdisp="Approved";	
						$approveTransfertxt="----------";	
					}
								
					$RANKPOINTS=$RANK_BASE/$APP_RANKCAL;
					echo "	<tr  bgcolor='".$kolor."'>
										<td align='center'>".$RANKNO."</td>
										<td align='center'>".mb_strtoupper($APP_LASTNAME).", ".mb_strtoupper($APP_FIRSTNAME)."  ".mb_strtoupper($APP_MIDNAME)."</td>
										<td align='center'>".$APP_NCAESCR."</td>
										<td align='center'>".$APP_GWA."</td>
										<td align='center'>".$APP_AITR."</td>
										<td align='center'>".$APP_SIBNO."</td>
										<td align='center'>".mb_strtoupper($approvaltxtdisp)."</td>
										<td align='center'>".$approveTransfertxt."</td>
											
									
										</tr>";
					$RANKNO++;
				}
			}
			else
			{	
			echo "	<tr>
								<td colspan='11' align='center'>No records found!</td></tr>";
				}
				
				echo "	</table>
				<center>
								
								</form>
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
