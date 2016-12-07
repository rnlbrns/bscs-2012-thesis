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
			$GRANT_ID=$_GET["GRANT_ID"];	

			echo"
<form name='form' action='applicationViewSearch.php' method='get'>
  Input Last Name for Search for Applicant:
  <input type='text' name='APP_LASTNAME' />
  <input type='hidden' name='GRANT_ID' value=".$GRANT_ID." >
  <input type='submit' name='Submit' value='Search' />
</form>
<center>

<form method='GET' action='appViewInfoApp.php'>";
	if($fromPitsa<$toPitsa)
				{
					$listApp="SELECT * FROM app_tbl WHERE APP_DATEAPP BETWEEN '".$fromPitsa."' AND '".$toPitsa."' AND GRANT_ID=".$GRANT_ID." and APP_CONFREJ=0 order by APP_ID DESC";
				}
				else
				{
					
					echo "<script>alert('Input valid application period!!');
											window.location.href='applications.php';
										</script>";
				}
				$listApp;
			$listappkwery=mysql_query($listApp)or die(mysql_error());
			$kadamo=mysql_num_rows($listappkwery);
			$ihap=0;
echo "<br />";
										
$granttypeqry=(mysql_query("select * from grant_tbl where GRANT_ID=".$GRANT_ID));
$www=mysql_fetch_array($granttypeqry);
$GRANT_SHORTNAM=$www["GRANT_SHORTNAM"];
echo "<b>Applicants for: ".$GRANT_SHORTNAM."</b>";
echo "<br /><br />As of ";
echo date('l jS \of F Y h:i:s A');
echo"<br /><br /><tr>";
echo "<br />";
echo "
<table class='tableView' border=1>
<tr bgcolor='#a6bdfa'>
<td></td>
<td align='center'><b>Name of Applicant</b></td>
<td align='center'><b>Age</b></td>
<td align='center'><b>NCAE Score</b></td>
<td align='center'><b>GWA</b></td>
<td align='center'><b>Parent's ITR</b></td>
<td align='center'><b>Home Address</b></td>
<td align='center'><b>High School</b></td>
<td align='center'><b>Date Of Application</b></td>
</tr>";
if ($kadamo>0)
					{	
				while($ihap<$kadamo)
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
					$APP_BDAY=$row["APP_BDAY"];
					$APP_AGE = floor((time() - strtotime($APP_BDAY))/(60*60*24*365.2425));
					$APP_NCAESCR=$row["APP_NCAESCR"];
					$APP_GWA=$row["APP_GWA"];
					$APP_AITR=$row["APP_AITR"];
					$APP_PERMADD=$row["APP_PERMADD"];
					$APP_HSNAM=$row["APP_HSNAM"];
					$APP_DATEAPP=$row["APP_DATEAPP"];
					
					echo "	<tr bgcolor='".$kolor."'>
										<td align='center'><input type='radio' name='APP_ID' id='APP_ID' value='".$APP_ID."'></td>
										<td align='center'>".mb_strtoupper($APP_LASTNAME).", ".mb_strtoupper($APP_FIRSTNAME)."  ".mb_strtoupper($APP_MIDNAME)."</td>
										<td align='center'>".$APP_AGE."</td>
										<td align='center'>".$APP_NCAESCR."</td>
										<td align='center'>".$APP_GWA."</td>
										<td align='center'>".$APP_AITR."</td>
										<td align='center'>".mb_strtoupper($APP_PERMADD)."</td>
										<td align='center'>".mb_strtoupper($APP_HSNAM)."</td>
										<td align='center'>".date("F j, Y",strtotime($APP_DATEAPP))."</td>
										</tr>";
				}
			}
			else
			{	
			echo "	<tr>
								<td colspan='11' align='center'>No records found!</td></tr>";
				}
				
				echo "	</table>
				<center><br />
								<table><tr><td align='center'>
								<input type='submit' value='View Applicant Information' name='fw'>
								&nbsp;
								<input type='button' value='Back' onClick='history.back();'>
								
								&nbsp;&nbsp;
								</form></td></tr></table>
				</center>
				";
								}}
								
								if(!empty($_GET["GRANT_ID"]))
								{
								$sulod=new liquidationsSulod();
								$butang=new paragLayOut();
								$butang->butangSulod($sulod->liquidationsTbl());
								}
								else if(empty($_GET["GRANT_ID"])){
									
									echo "<script>alert('Please Select Grant To view Applications!!');
											window.location.href='applications.php';
										</script>";
									}


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
