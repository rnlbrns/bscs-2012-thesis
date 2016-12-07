<?php
require_once("header.php");
require_once("a-connection.php");


class beneViewLiquidations extends konekServer{
	function viewGrades(){
$this->abriDB();
$BENEFICIARY_ID=$_POST["BENEFICIARY_ID"];
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
		echo "<center>
		<h3>Grades for ".mb_strtoupper($BENEFICIARY_nam3).", ".mb_strtoupper($BENEFICIARY_nam1)." ".mb_strtoupper($BENEFICIARY_nam2)." </h3>
		<br />";
		echo"<form method='POST' action='liquidationsUpdate.php?HEI_ID=".$HEI_ID."'>
		<input type='hidden' name='BENEFICIARY_ID' value=".$BENEFICIARY_ID." />
		<table class='tableView' cellspacing='2' border=1 align='center'	>
		<tr bgcolor='#a6bdfa'>
		<td align='center'><b>School Year</b></td>
		<td align='center'><b>Year Level</b></td>
		<td align='center'><b>Semester</b></td>
		<td align='center'><b>Subject</b></td>
		<td align='center'><b>Units</b></td>
		<td align='center'><b>Grade</b></td>
		<td align='center'><b>Category</b></td>
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
					$row=mysql_fetch_array($querybeneficiary_tbl);
					$GRADE_ID=$row["GRADE_ID"];
					$GRADE_SCHOOLYR=$row["GRADE_SCHOOLYR"];
					$GRADE_SEM=$row["GRADE_SEM"];
					$GRADE_SUBJ=$row["GRADE_SUBJ"];
					$GRADE_UNIT=$row["GRADE_UNIT"];
					$GRADE_GRADE=$row["GRADE_GRADE"];
					$schoolyr_yr=$row["schoolyr_yr"];
					$GRADE_REQ=$row["GRADE_REQ"];
					
					echo "	<tr bgcolor='".$kolor."'>
										<td align='center'>".$schoolyr_yr."</td>
										<td align='center'>".$GRADE_SCHOOLYR."</td>
										<td align='center'>".$GRADE_SEM."</td>
										<td align='center'>".mb_strtoupper($GRADE_SUBJ)."</td>
										<td align='center'>".$GRADE_UNIT."</td>
										<td align='center'>".$GRADE_GRADE."</td>
										<td align='center'>".$GRADE_REQ."</td>
										</tr>";
				}
				
		}
		else
			{	
			echo "	<tr>
								<td colspan='11' align='center'>No records found!</td></tr>";
				}
				
		echo"</table>
		<br />
<input type='button' value='Return' onClick='history.back();'>
		<br />
		<br />";
		
		
		$yr1sem1gradeqry=mysql_query("select * from grade_tbl where GRADE_SCHOOLYR=1 and GRADE_SEM=1 and BENEFICIARY_ID=".$BENEFICIARY_ID);
		$kawntyr1sem1=mysql_num_rows($yr1sem1gradeqry);
		$fetchUnitsyr1sem1=0;
		$fetchGradeyr1sem1=0;
		$gwayr1sem1;
		if($kawntyr1sem1>0)
		{
		while($kawntyr1sem1>0){
			$fetchThis=mysql_fetch_array($yr1sem1gradeqry);
			$fetchUnitsyr1sem1=$fetchUnitsyr1sem1+$fetchThis["GRADE_UNIT"];
			$fetchGradeyr1sem1=$fetchGradeyr1sem1+($fetchThis["GRADE_UNIT"]*$fetchThis["GRADE_GRADE"]);
			$kawntyr1sem1--;
			}
					$gwayr1sem1=$fetchGradeyr1sem1/$fetchUnitsyr1sem1;
			}
		else{
			$gwayr1sem1="No Records yet";
			}
		//end year 1 sem 1
		
		$yr1sem2gradeqry=mysql_query("select * from grade_tbl where GRADE_SCHOOLYR=1 and GRADE_SEM=2 and BENEFICIARY_ID=".$BENEFICIARY_ID);
		$kawntyr1sem2=mysql_num_rows($yr1sem2gradeqry);
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
			}
		else{
			$gwayr4sem2="No Records yet";
			}
		//end year 4 sem 2
		
		echo"<table class='tableView' cellspacing=3 border=1>
		<tr>
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
		</table>
		</form>
		";
		
		echo"</center>";
}//end view grades

function viewPayments($BENEFICIARY_ID)
		{
			$this->abriDB();
			
			$querybeneficiarypayment_tbl=mysql_query("select * from payment_tbl a, beneficiary_tbl b where b.BENEFICIARY_ID=".$BENEFICIARY_ID." and a.BENEFICIARY_ID=b.BENEFICIARY_ID order by PAYMENT_DATE ASC");
			$querybeneficiarypayment_tblkadamo=mysql_num_rows($querybeneficiarypayment_tbl);
			$querybeneficiarypayment_tblihap=0;	
			$qryName=mysql_query("select * from beneficiary_tbl where BENEFICIARY_ID=".$BENEFICIARY_ID);	
					$qrow=mysql_fetch_array($qryName);
					$BENEFICIARY_ID=$qrow["BENEFICIARY_ID"];
					$BENEFICIARY_nam1=$qrow["BENEFICIARY_nam1"];
					$BENEFICIARY_nam2=$qrow["BENEFICIARY_nam2"];
					$BENEFICIARY_nam3=$qrow["BENEFICIARY_nam3"];
					$BENEFICIARY_AWARDNO=$qrow["BENEFICIARY_AWARDNO"];
					$HEI_ID=$qrow["HEI_ID"];
		
		echo "<center>
		<h3>Billing for ".mb_strtoupper($BENEFICIARY_nam3).", ".mb_strtoupper($BENEFICIARY_nam1)." ".mb_strtoupper($BENEFICIARY_nam2)." </h3>
		<br />";
		echo"
		<input type='hidden' name='BENEFICIARY_ID' value=".$BENEFICIARY_ID." />
		<table class='tableView' border=1>
		<tr bgcolor='#a6bdfa'>
		<td align='center'><b>School Yr</b></td>
		<td align='center'><b>Sem</b></td>
		<td align='center'><b>Billing</b></td>
		<td align='center'><b>Order Date</b></td>
		<td align='center'><b>Status</b></td>
		</tr>";
			if ($querybeneficiarypayment_tblkadamo>0)
					{	
					$marka=0;
					while ($querybeneficiarypayment_tblihap<$querybeneficiarypayment_tblkadamo)
					{	
					$querybeneficiarypayment_tblihap++;
					if ($marka==1)
					{ 
					$marka=0; 
					$kolor="#ffff99"; 
					}
					else {
					$marka=1; $kolor="#ffffff"; 
					}
					$row=mysql_fetch_array($querybeneficiarypayment_tbl);
					$PAYMENT_ID=$row["PAYMENT_ID"];
					$schoolyr_yr=$row["schoolyr_yr"];
					$PAYMENT_BILL=$row["PAYMENT_BILL"];
					$PAYMENT_SEM=$row["PAYMENT_SEM"];
					$PAYMENT_DATE=$row["PAYMENT_DATE"];
					$PAYMENT_STATUS=$row["PAYMENT_STATUS"];
					
					echo "	<tr bgcolor='".$kolor."'>
										<td align='center'>".$schoolyr_yr."</td>
										<td align='center'>".$PAYMENT_SEM."</td>
										<td align='center'>".$PAYMENT_BILL."</td>
										<td align='center'>".$PAYMENT_DATE."</td>
										<td align='center'>";
			$PAYMENT_STATUSactiontext;
			if($PAYMENT_STATUS=="UNPAID"){
			$PAYMENT_STATUSactiontext=$PAYMENT_STATUS;
			}
			else if($PAYMENT_STATUS=="SENT"){
			$PAYMENT_STATUSactiontext="<a href='paymentConfirmReceived.php?PAYMENT_ID=".$PAYMENT_ID."'>Confirm Received</a>";
			}
			else if($PAYMENT_STATUS=="PAID"){
			$PAYMENT_STATUSactiontext="PAID";
			}
			echo $PAYMENT_STATUSactiontext."</td>
										</tr>";
				}
				
				
		}
		else
			{	
			echo "	<tr>
								<td colspan='11' align='center'>No payment records made yet!</td></tr>";
				}
				
			echo"</table>
		<input type='button' value='Cancel' onClick='history.back();'>
			";
			}
}//end class


if($_POST["fw"]=="View Grades"){
	
	$BENEFICIARY_ID=$_POST["BENEFICIARY_ID"];
	if(empty($BENEFICIARY_ID))
	{
		
			echo "<script>alert('Select a Beneficiary to view Grades!')</script>";
			echo "<script>history.back();</script>";
	}
	
								$sulod=new beneViewLiquidations();
								$butang=new paragLayOut();
								$butang->butangSulod($sulod->viewGrades());
	
	}
	
	
else if($_POST["fw"]=="List of Payments"){
	
	$BENEFICIARY_ID=$_POST["BENEFICIARY_ID"];
	if(empty($BENEFICIARY_ID))
	{
		
			echo "<script>alert('Select a Beneficiary to view Payments!')</script>";
			echo "<script>history.back();</script>";
	}
	
	
	
	$sulod=new beneViewLiquidations();
	$butang=new paragLayOut();
	$butang->butangSulod($sulod->viewPayments($BENEFICIARY_ID));
	
	}
require_once("footer.php");
		?>