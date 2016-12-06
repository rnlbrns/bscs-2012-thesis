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
	require_once("dateFrom.php");
	require_once("dateTo.php");
	echo "<form method='GET' action='rankingView.php'>";
									
	$bulanFrom=$_POST["bulanFrom"];
		if ($bulanFrom=="") $dateFromMonth=date("m");
		else
		{
			$bulanFrom++;
			if (strlen($bulanFrom)==1) $dateFromMonth="0".$bulanFrom;
			else $dateFromMonth=$bulanFrom;
		}
		
		$pitsaFrom=$_POST["pitsaFrom"];
		if (empty($pitsaFrom)) $dateFromDate=date("d");
		else
		{	
			if (strlen($pitsaFrom)==1) $dateFromDate="0".$pitsaFrom;
			else $dateFromDate=$pitsaFrom;
		}
			
		$tuigFrom=$_POST["tuigFrom"];
		if (empty($tuigFrom)) $dateFromYear=date("Y");
		else $dateFromYear=$tuigFrom;
					
		$bulanTo=$_POST["bulanTo"];
		if ($bulanTo=="") $dateToMonth=date("m");
		else
		{	
			$bulanTo++;
			if (strlen($bulanTo)==1) $dateToMonth="0".$bulanTo;
			else $dateToMonth=$bulanTo;
		}
				
		$pitsaTo=$_POST["pitsaTo"];
		if (empty($pitsaTo)) $dateToDate=date("d");
		else
		{
			if (strlen($pitsaTo)==1) $dateToDate="0".$pitsaTo;
			else $dateToDate=$pitsaTo;
		}
					
		$tuigTo=$_POST["tuigTo"];
		if (empty($tuigTo)) $dateToYear=date("Y");
		else $dateToYear=$tuigTo;
									
		$fromPitsa=$dateFromYear."-".$dateFromMonth."-".$dateFromDate;
		$toPitsa=$dateToYear."-".$dateToMonth."-".$dateToDate;
			
			/*$qry="select * from app_tbl where APP_CONFREJ=0 and GRANT_ID=".$_GET["GRANT_ID"];
			$kuery=mysql_query($qry) or die(mysql_error());
			$kadamo=mysql_num_rows($kuery);*/
			echo"<center>
    			<br /><td colspan='3'><font size='2'><b>Application Period</b>:<br />
    			<font size='2'>From:
   				".dateFrom("bulanFrom","pitsaFrom","tuigFrom",$dateFromMonth,$dateFromDate,$dateFromYear,2008)."
  				To:
   				".dateTo("bulanTo","pitsaTo","tuigTo",$dateToMonth,$dateToDate,$dateToYear,2008)."</td>
  			</tr>
			<br /><br />";
			

echo "<center><h4>
Select a grant :
<form method='POST' action='rankingView.php'>
<select name='GRANT_ID'>";

			$kuery=mysql_query("select * from grant_tbl");
			$kadamo=mysql_num_rows($kuery);
			$kawnt=1;
			while($kawnt<=$kadamo){
					$row=mysql_fetch_array($kuery);
					$GRANT_ID=$row["GRANT_ID"];
					$GRANT_CODE=$row["GRANT_CODE"];
					$kawnt++;

			echo"<option value=".$GRANT_ID.">".$GRANT_CODE."</option>";	
			}
echo "</select><br />
<b>	Slots</b>: <input type='text' name='rankingCountLimit'  style='width:50px'>
<input type='submit' name='grantFW' value='Start Ranking'/>
</form>
</h4>


</center>";

					$listApp="SELECT * FROM app_tbl a, grant_tbl b WHERE a.APP_CONFREJ=1 and a.GRANT_ID=b.GRANT_ID and a.APP_APPROVE=0 and a.APP_DATEAPP  BETWEEN MAKEDATE( EXTRACT(YEAR FROM CURDATE()),1) AND MAKEDATE( EXTRACT(YEAR FROM CURDATE()),365) ";
				
				
				$listApp;
			$listappkwery=mysql_query($listApp)or die(mysql_error());
			$kadamo=mysql_num_rows($listappkwery);
			$ihap=0;
echo "<br />";
										
$granttypeqry=(mysql_query("select * from grant_tbl where GRANT_ID=".$GRANT_ID));
$www=mysql_fetch_array($granttypeqry);
$GRANT_SHORTNAM=$www["GRANT_SHORTNAM"];
echo "<b>Applicants As of ";
echo date('l jS \of F Y h:i:s A');
echo "</b><br /><br />	";
echo "
<table class='tableView' border=1>
<tr bgcolor='#a6bdfa'>
<td align='center'><b>Grant applied for</b></td>
<td align='center'><b>Name of Applicant</b></td>
<td align='center'><b>Age</b></td>
<td align='center'><b>NCAE Score</b></td>
<td align='center'><b>GWA</b></td>
<td align='center'><b>Parent's ITR</b></td>
<td align='center'><b>Home Address</b></td>
<td align='center'><b>High School</b></td>
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
					$GRANT_SHORTNAM=$row["GRANT_SHORTNAM"];
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
					//<td><input type='radio' name='APP_ID' id='APP_ID' value='".$APP_ID."'></td>
					echo "	<tr bgcolor='".$kolor."'>
										<td>".$GRANT_SHORTNAM."</td>
										<td>".mb_strtoupper($APP_LASTNAME).", ".mb_strtoupper($APP_FIRSTNAME)."  ".mb_strtoupper($APP_MIDNAME)."</td>
										<td>".$APP_AGE."</td>
										<td>".$APP_NCAESCR."</td>
										<td>".$APP_GWA."</td>
										<td>".$APP_AITR."</td>
										<td>".mb_strtoupper($APP_PERMADD)."</td>
										<td>".mb_strtoupper($APP_HSNAM)."</td>
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
								
								&nbsp;&nbsp;
								</center>
				";
require_once("footer.php");
?>
<?php
}
else
{
		echo "<script>alert('Access Denied! You Must be logged-in first!');
				window.location.href='index.php';
			</script>";
}
?>
