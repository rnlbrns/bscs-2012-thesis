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
$BENEFICIARY_ID=$_GET["BENEFICIARY_ID"];
konekServer::abriDB();
		$querybeneficiary_tbl=mysql_query("select * from grade_tbl a, beneficiary_tbl b where b.BENEFICIARY_ID=".$BENEFICIARY_ID." and a.BENEFICIARY_ID=b.BENEFICIARY_ID order by GRADE_SCHOOLYR ASC") or die(mysql_error());
			$kadamo=mysql_num_rows($querybeneficiary_tbl);
			$ihap=0;		
			$qryName=mysql_query("select * from beneficiary_tbl where BENEFICIARY_ID=".$BENEFICIARY_ID);	
					$qrow=mysql_fetch_array($qryName);
					$BENEFICIARY_ID=$qrow["BENEFICIARY_ID"];
					$BENEFICIARY_nam1=$qrow["BENEFICIARY_nam1"];
					$BENEFICIARY_nam2=$qrow["BENEFICIARY_nam2"];
					$BENEFICIARY_nam3=$qrow["BENEFICIARY_nam3"];
					$BENEFICIARY_AWARDNO=$qrow["BENEFICIARY_AWARDNO"];
					$HEI_ID=$qrow["HEI_ID"];
		echo "
<input type='button' value='Return To Payments' onClick='history.back();'
<br /><center>
		<h3>Grades for ".mb_strtoupper($BENEFICIARY_nam3).", ".mb_strtoupper($BENEFICIARY_nam1)." ".mb_strtoupper($BENEFICIARY_nam2)." </h3>
		<br />";
		echo"
		<input type='hidden' name='BENEFICIARY_ID' value=".$BENEFICIARY_ID." />
		<table class='tableView' border=1>
		<tr bgcolor='#a6bdfa'><td></td>
		<td align='center'><b>SY</b></td>
		<td align='center'><b>Yr Lvl</b></td>
		<td align='center'><b>Semester</b></td>
		<td align='center'><b>Subject</b></td>
		<td align='center'><b>Units</b></td>
		<td align='center'><b>Grade</b></td>
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
					$row=mysql_fetch_array($querybeneficiary_tbl);
					$GRADE_ID=$row["GRADE_ID"];
					$schoolyr_yr=$row["schoolyr_yr"];
					$GRADE_SCHOOLYR=$row["GRADE_SCHOOLYR"];
					$GRADE_SEM=$row["GRADE_SEM"];
					$GRADE_SUBJ=$row["GRADE_SUBJ"];
					$GRADE_UNIT=$row["GRADE_UNIT"];
					$GRADE_GRADE=$row["GRADE_GRADE"];
					
					echo "	<tr bgcolor='".$kolor."'>
										<td align='center'><input type='radio' name='GRADE_ID' id='GRADE_ID' value='".$GRADE_ID."'></td>
										<td align='center'>".$schoolyr_yr."</td>
										<td align='center'>".$GRADE_SCHOOLYR."</td>
										<td align='center'>".$GRADE_SEM."</td>
										<td align='center'>".$GRADE_SUBJ."</td>
										<td align='center'>".$GRADE_UNIT."</td>
										<td align='center'>".$GRADE_GRADE."</td>
										</tr>";
				}
				
		}
		else
			{	
			echo "	<tr>
								<td colspan='11' align='center'>No records found!</td></tr>";
				}
				
		echo"</table>
		
		<br />";
		$query_recommendForDroppingquerytext;
		$yr1sem1gradeqry=mysql_query("select * from grade_tbl where GRADE_SCHOOLYR=1 and GRADE_SEM=1 and BENEFICIARY_ID=".$BENEFICIARY_ID);
		$kawntyr1sem1=mysql_num_rows($yr1sem1gradeqry);
		$fetchUnitsyr1sem1=0;
		$fetchGradeyr1sem1=0;
		$gwayr1sem1;
		$kawntyr1sem1a=$kawntyr1sem1;
		if($kawntyr1sem1>0)
		{
		while($kawntyr1sem1>0){
			$fetchThis=mysql_fetch_array($yr1sem1gradeqry);
			$fetchUnitsyr1sem1=$fetchUnitsyr1sem1+$fetchThis["GRADE_UNIT"];
			$fetchGradeyr1sem1=$fetchGradeyr1sem1+($fetchThis["GRADE_UNIT"]*$fetchThis["GRADE_GRADE"]);
			$kawntyr1sem1--;
			}
					$gwayr1sem1=$fetchGradeyr1sem1/$fetchUnitsyr1sem1;
		if($kawntyr1sem1a>5 && $gwayr1sem1>2.5){
			
		$query_recommendForDroppingquerytext="update beneficiary_tbl set BENEFICIARY_STAT='Recommended for Waive' where BENEFICIARY_ID=".$BENEFICIARY_ID;
		}
			}
		else{
			$gwayr1sem1="No Records yet";
			}
		//end year 1 sem 1
		
		$yr1sem2gradeqry=mysql_query("select * from grade_tbl where GRADE_SCHOOLYR=1 and GRADE_SEM=2 and BENEFICIARY_ID=".$BENEFICIARY_ID);
		$kawntyr1sem2=mysql_num_rows($yr1sem2gradeqry);
		$kawntyr1sem2a=$kawntyr1sem2;
		$fetchUnitsyr1sem2=0;
		$fetchGradeyr1sem2=0;
		$gwayr1sem2;
		if($kawntyr1sem2>0)
		{
		while($kawntyr1sem2>0){
			$fetchThis=mysql_fetch_array($yr1sem2gradeqry);
			$fetchUnitsyr1sem2=$fetchUnitsyr1sem2+$fetchThis["GRADE_UNIT"];
			$fetchGradeyr1sem2=$fetchGradeyr1sem2+($fetchThis["GRADE_UNIT"]*$fetchThis["GRADE_GRADE"]);
			$kawntyr1sem2--;
			}
		$gwayr1sem2=$fetchGradeyr1sem2/$fetchUnitsyr1sem2;
		if($gwayr1sem2>2.5){
			
		$query_recommendForDroppingquerytext="update beneficiary_tbl set BENEFICIARY_STAT='Recommended for Waive' where BENEFICIARY_ID=".$BENEFICIARY_ID;
		}
			}
		else{
			$gwayr1sem2="No Records yet";
			}
		//end year 1 sem 2
		
		
		$yr2sem1gradeqry=mysql_query("select * from grade_tbl where GRADE_SCHOOLYR=2 and GRADE_SEM=1 and BENEFICIARY_ID=".$BENEFICIARY_ID);
		$kawntyr2sem1=mysql_num_rows($yr2sem1gradeqry);
		$fetchUnitsyr2sem1=0;
		$fetchGradeyr2sem1=0;
		$gwayr2sem1;
		if($kawntyr2sem1>0)
		{
		while($kawntyr2sem1>0){
			$fetchThis=mysql_fetch_array($yr2sem1gradeqry);
			$fetchUnitsyr2sem1=$fetchUnitsyr2sem1+$fetchThis["GRADE_UNIT"];
			$fetchGradeyr2sem1=$fetchGradeyr2sem1+($fetchThis["GRADE_UNIT"]*$fetchThis["GRADE_GRADE"]);
			$kawntyr2sem1--;
			}
					$gwayr2sem1=$fetchGradeyr2sem1/$fetchUnitsyr2sem1;
		
		if($gwayr2sem1>2.5){
			
		$query_recommendForDroppingquerytext="update beneficiary_tbl set BENEFICIARY_STAT='Recommended for Waive' where BENEFICIARY_ID=".$BENEFICIARY_ID;
		}
		
			}
		else{
			$gwayr2sem1="No Records yet";
			}
		//end year 2 sem 1
		
		$yr2sem2gradeqry=mysql_query("select * from grade_tbl where GRADE_SCHOOLYR=2 and GRADE_SEM=2 and BENEFICIARY_ID=".$BENEFICIARY_ID);
		$kawntyr2sem2=mysql_num_rows($yr2sem2gradeqry);
		$fetchUnitsyr2sem2=0;
		$fetchGradeyr2sem2=0;
		$gwayr2sem2;
		if($kawntyr2sem2>0)
		{
		while($kawntyr2sem2>0){
			$fetchThis=mysql_fetch_array($yr2sem2gradeqry);
			$fetchUnitsyr2sem2=$fetchUnitsyr2sem2+$fetchThis["GRADE_UNIT"];
			$fetchGradeyr2sem2=$fetchGradeyr2sem2+($fetchThis["GRADE_UNIT"]*$fetchThis["GRADE_GRADE"]);
			$kawntyr2sem2--;
			}
					$gwayr2sem2=$fetchGradeyr2sem2/$fetchUnitsyr2sem2;
			}
		else{
			$gwayr2sem2="No Records yet";
			}
		//end year 2 sem 2
		
		$yr3sem1gradeqry=mysql_query("select * from grade_tbl where GRADE_SCHOOLYR=3 and GRADE_SEM=1 and BENEFICIARY_ID=".$BENEFICIARY_ID);
		$kawntyr3sem1=mysql_num_rows($yr3sem1gradeqry);
		$fetchUnitsyr3sem1=0;
		$fetchGradeyr3sem1=0;
		$gwayr3sem1;
		if($kawntyr3sem1>0)
		{
		while($kawntyr3sem1>0){
			$fetchThis=mysql_fetch_array($yr3sem1gradeqry);
			$fetchUnitsyr3sem1=$fetchUnitsyr3sem1+$fetchThis["GRADE_UNIT"];
			$fetchGradeyr3sem1=$fetchGradeyr3sem1+($fetchThis["GRADE_UNIT"]*$fetchThis["GRADE_GRADE"]);
			$kawntyr3sem1--;
			}
					$gwayr3sem1=$fetchGradeyr3sem1/$fetchUnitsyr3sem1;
					
		if($gwayr3sem1>2.5){
			
		$query_recommendForDroppingquerytext="update beneficiary_tbl set BENEFICIARY_STAT='Recommended for Waive' where BENEFICIARY_ID=".$BENEFICIARY_ID;
		}
			}
		else{
			$gwayr3sem1="No Records yet";
			}
		//end year 3 sem 1
		
		$yr3sem2gradeqry=mysql_query("select * from grade_tbl where GRADE_SCHOOLYR=3 and GRADE_SEM=2 and BENEFICIARY_ID=".$BENEFICIARY_ID);
		$kawntyr3sem2=mysql_num_rows($yr3sem2gradeqry);
		$fetchUnitsyr3sem2=0;
		$fetchGradeyr3sem2=0;
		$gwayr3sem2;
		if($kawntyr3sem2>0)
		{
		while($kawntyr3sem2>0){
			$fetchThis=mysql_fetch_array($yr3sem2gradeqry);
			$fetchUnitsyr3sem2=$fetchUnitsyr3sem2+$fetchThis["GRADE_UNIT"];
			$fetchGradeyr3sem2=$fetchGradeyr3sem2+($fetchThis["GRADE_UNIT"]*$fetchThis["GRADE_GRADE"]);
			$kawntyr3sem2--;
			}
					$gwayr3sem2=$fetchGradeyr3sem2/$fetchUnitsyr3sem2;				
		if($gwayr3sem2>2.5){
			
		$query_recommendForDroppingquerytext="update beneficiary_tbl set BENEFICIARY_STAT='Recommended for Waive' where BENEFICIARY_ID=".$BENEFICIARY_ID;
		}
			}
		else{
			$gwayr3sem2="No Records yet";
			}
		//end year 3 sem 2
		
		$yr4sem1gradeqry=mysql_query("select * from grade_tbl where GRADE_SCHOOLYR=4 and GRADE_SEM=1 and BENEFICIARY_ID=".$BENEFICIARY_ID);
		$kawntyr4sem1=mysql_num_rows($yr4sem1gradeqry);
		$fetchUnitsyr4sem1=0;
		$fetchGradeyr4sem1=0;
		$gwayr4sem1;
		if($kawntyr4sem1>0)
		{
		while($kawntyr4sem1>0){
			$fetchThis=mysql_fetch_array($yr4sem1gradeqry);
			$fetchUnitsyr4sem1=$fetchUnitsyr4sem1+$fetchThis["GRADE_UNIT"];
			$fetchGradeyr4sem1=$fetchGradeyr4sem1+($fetchThis["GRADE_UNIT"]*$fetchThis["GRADE_GRADE"]);
			$kawntyr4sem1--;
			}
					$gwayr4sem1=$fetchGradeyr4sem1/$fetchUnitsyr4sem1;				
		if($fetchGradeyr4sem1>2.5){
			
		$query_recommendForDroppingquerytext="update beneficiary_tbl set BENEFICIARY_STAT='Recommended for Waive' where BENEFICIARY_ID=".$BENEFICIARY_ID;
		}
			}
		else{
			$gwayr4sem1="No Records yet";
			}
		//end year 4 sem 1
		$yr4sem2gradeqry=mysql_query("select * from grade_tbl where GRADE_SCHOOLYR=4 and GRADE_SEM=2 and BENEFICIARY_ID=".$BENEFICIARY_ID);
		$kawntyr4sem2=mysql_num_rows($yr4sem2gradeqry);
		$fetchUnitsyr4sem2=0;
		$fetchGradeyr4sem2=0;
		$gwayr4sem2;
		if($kawntyr4sem2>0)
		{
		while($kawntyr4sem2>0){
			$fetchThis=mysql_fetch_array($yr4sem2gradeqry);
			$fetchUnitsyr4sem2=$fetchUnitsyr4sem2+$fetchThis["GRADE_UNIT"];
			$fetchGradeyr4sem2=$fetchGradeyr4sem2+($fetchThis["GRADE_UNIT"]*$fetchThis["GRADE_GRADE"]);
			$kawntyr4sem2--;
			}
					$gwayr4sem2=$fetchGradeyr4sem2/$fetchUnitsyr4sem2;				
		if($gwayr4sem2>2.5){
			
		$query_recommendForDroppingquerytext="update beneficiary_tbl set BENEFICIARY_STAT='Recommended for Waive' where BENEFICIARY_ID=".$BENEFICIARY_ID;
		}
			}
		else{
			$gwayr4sem2="No Records yet";
			}
		//end year 4 sem 2
$query_recommendForDroppingquerytext;
$query_recommendForDroppingquery=mysql_query($query_recommendForDroppingquerytext);
		
		echo"<table class='tableView' cellspacing=5 cellpadding=5 border=1 >
		<tr bgcolor='#a6bdfa'>
		<td align='center'><b>Year - Sem</b></td><td align='center'><b>GWA</b></td>
		</tr>
		<tr>
		<td>1st Year - 1st Sem</td><td align='center'>".round($gwayr1sem1, 3)."</td>
		</tr>
		<tr>
		<td>1st Year - 2nd Sem</td><td align='center'>".round($gwayr1sem2, 3)."</td>
		</tr>
		<tr>
		<td>2nd Year - 1st Sem</td><td align='center'>".round($gwayr2sem1, 3)."</td>
		</tr>
		<tr>
		<td>2nd Year - 2nd Sem</td><td align='center'>".round($gwayr2sem2, 3)."</td>
		</tr>
		<tr>
		<td>3rd Year - 1st Sem</td><td align='center'>".round($gwayr3sem1, 3)."</td>
		</tr>
		<tr>
		<td>3rd Year - 2nd Sem</td><td align='center'>".round($gwayr3sem2, 3)."</td>
		</tr>
		<tr>
		<td>4th Year - 1st Sem</td><td align='center'>".round($gwayr4sem1, 3)."</td>
		</tr>
		<tr>
		<td>4th Year - 2nd Sem</td><td align='center'>".round($gwayr4sem2, 3)."</td>
		</tr>
		</table>";
		
		echo"</center>";
		
$querydueforwaivescholars=mysql_query("select * from beneficiary_tbl a, program_tbl b, hei_tbl c where a.PROG_ID=b.PROG_ID and a.HEI_ID=c.HEI_ID and a.BENEFICIARY_ID=".$BENEFICIARY_ID);

$disp=mysql_fetch_array($querydueforwaivescholars);
	
echo"
</center>";
/*

<form method='post' action='waiveaction.php'>
<input type='hidden' name='BENEFICIARY_ID' value=".$BENEFICIARY_ID.">
<input type='submit' name='fw' value='Confirm Waive'>
<input type='submit' name='fw' value='Ignore Recommendation Waive'>
<input type='button' value='Cancel' onClick='history.back();'
</form>
*/
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
