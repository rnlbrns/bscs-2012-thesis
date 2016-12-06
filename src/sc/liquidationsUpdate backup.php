<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('SC_USERNAM')&&session_is_registered('SC_USERNAM'))
{
?>
<?php
require_once("header.php");
class liquidationsUpdate extends konekServer
{
 function inputNewBill($BENEFICIARY_ID){
		
	$this->abriDB();
	$BENEFICIARY_ID;
	$queryText="select * from beneficiary_tbl a, grant_tbl b, schoolyr_tbl c where a.HEI_ID=".$_SESSION["HEI_ID"]." and a.GRANT_ID=b.GRANT_ID and a.BENEFICIARY_ID=".$BENEFICIARY_ID." and c.schoolyr_yr>a.BENE_SCHOOLYREFFEC";
	$query=mysql_query($queryText);
	
		$fetchThis=mysql_fetch_array($query);
		$BENEFICIARY_nam1=$fetchThis["BENEFICIARY_nam1"];
		$BENEFICIARY_nam2=$fetchThis["BENEFICIARY_nam2"];
		$BENEFICIARY_nam3=$fetchThis["BENEFICIARY_nam3"];
		$HEI_ID=$fetchThis["HEI_ID"];
		echo"<h3>Add New Bill for ".mb_strtoupper($BENEFICIARY_nam3).", ".mb_strtoupper($BENEFICIARY_nam1)." ".mb_strtoupper($BENEFICIARY_nam2)." </h3>
		</br>
		</br>
		
		<form method='post' action='liquidationsUpdate.php?HEI_ID=".$HEI_ID."'>
		<table border=1>
		<tr>
		<td><b>School Year</b></td>
		<td><select name='schoolyr_yr'>";
		$SYKawnt=mysql_num_rows($query);
		$SYIhap=0;
		while($SYIhap<$SYKawnt){
		$SYIhap++;
		$SYDisp=mysql_fetch_array($SYPagawasQry);
		$schoolyr_yr=$fetchThis["schoolyr_yr"];
		echo "<option value='".$schoolyr_yr."'>".$schoolyr_yr."</option>";
		}
		echo"</select>
		</td></tr>
		<tr>
		<td><b>Semester</b><td>
		<select name='PAYMENT_SEM'>
		<option value='1'>1</option>
		<option value='2'>2</option>
		</select>
		</td></tr>
		<tr>
		<td><b>Amount:</b></td>
		<td><input type='text' name='PAYMENT_BILL' value=".$fetchThis["GRANT_MERITDESCINT"]." readonly='readonly'/></td>
		</tr>
		</table>
		<br>
		<input type='hidden' value=".$BENEFICIARY_ID." name='BENEFICIARY_ID'>
		<input type='hidden' value=".$HEI_ID." name='HEI_ID'>
		<input type='submit' value='Submit Bill' name='fw'>
		<input type='button' value='Cancel' onClick='history.back();'>
		</form>
		";

}

	function addNewBeneficiary(){
		konekServer::abriDB();

$qry=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.HEI_ID=0 and a.GRANT_ID=b.GRANT_ID");
$kawnt=mysql_num_rows($qry);
$ihap=0;


echo "<center>
<form method='post' action='liquidationsAdd.php'>
<table class='tableView' border=1>
<tr>
<td></td>
<td align='center'><b>Name</b></td>
<td align='center'><b>Grant</b></td>
<td align='center'><b>Award No.</b></td>
<td align='center'><b>Effectivity of Grant</b></td>
<td align='center'><b>Address</b></td>
<td align='center'><b>Contact No.</b></td>
<td align='center'><b>Remarks</b></td>
</tr>
";

if ($kawnt>0){	

					while($ihap<$kawnt){
					$ihap++;
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
					
					echo "	<tr>
										<td align='center'><input type='radio' name='BENEFICIARY_ID' id='BENEFICIARY_ID' value=".$BENEFICIARY_ID."></td>
										<td align='center'>".$BENEFICIARY_nam3.", ".$BENEFICIARY_nam1."  ".$BENEFICIARY_nam2."</td>
										<td align='center'>".$GRANT_SHORTNAM."</td>
										<td align='center'>".$BENEFICIARY_AWARDNO."</td>
										<td align='center'>".$BENEFICIARY_GRANTEFFECTIVITY."</td>
										<td align='center'>".$BENEFICIARY_MAILADD."</td>
										<td align='center'>".$BENEFICIARY_CONTACTNO."</td>
										<td align='center'>".$BENEFICIARY_STAT."</td>
										</tr>";

}
}
else {
	echo "<tr><td colspan=23>NO RECORDS FOUND</td></tr>";
	}
echo"</table>
<br />
<input type='hidden' name='HEI_ID' value=".$_GET["HEI_ID"].">
<input type='submit' value='Add Beneficiary to HEI' name='fw'>
<input type='button' value='Cancel' onClick='history.back();'>

</form>
</center>";

		
		}//end add beneficiary
function editBeneficiary($BENEFICIARY_ID){
		$this->abriDB();
		$querybeneficiary_tbl=mysql_query("select * from beneficiary_tbl where BENEFICIARY_ID=".$BENEFICIARY_ID."");
					
					$row=mysql_fetch_array($querybeneficiary_tbl);
					$BENEFICIARY_ID=$row["BENEFICIARY_ID"];
					$BENEFICIARY_nam1=$row["BENEFICIARY_nam1"];
					$BENEFICIARY_nam2=$row["BENEFICIARY_nam2"];
					$BENEFICIARY_nam3=$row["BENEFICIARY_nam3"];
					$BENEFICIARY_AWARDNO=$row["BENEFICIARY_AWARDNO"];
					$GRANT_SHORTNAM=$row["GRANT_SHORTNAM"];
					$HEI_ID=$row["HEI_ID"];
					$PROG_NAM=$row["PROG_NAM"];
					$BENEFICIARY_YRLVL=$row["BENEFICIARY_YRLVL"]; 
					$BENEFICIARY_GRANTEFFECTIVITY=$row["BENEFICIARY_GRANTEFFECTIVITY"];
					$BENEFICIARY_MAILADD=$row["BENEFICIARY_MAILADD"];
					$BENEFICIARY_CONTACTNO=$row["BENEFICIARY_CONTACTNO"];
					$BENEFICIARY_STAT=$row["BENEFICIARY_STAT"];
		echo "
		<center>
		<h3>Update Beneficiary</h3>
		<form method='POST' action='liquidationsUpdateAction.php?updateBenefactor=1' >
		<input type='hidden' value=".$HEI_ID." name='HEI_ID' />
		<input type='hidden' value=".$BENEFICIARY_ID." name='BENEFICIARY_ID' />
		<table border=0 class=''>
		<tr>
		<td>First Name</td><td><input type='text' name='BENEFICIARY_nam1' value='".$BENEFICIARY_nam1."'/></td>
		</tr>
		<tr>
		<td>Middle Name</td><td><input type='text' name='BENEFICIARY_nam2' value='".$BENEFICIARY_nam2."'/></td>
		</tr>
		<tr>
		<td>Last Name</td><td><input type='text' name='BENEFICIARY_nam3'  value='".$BENEFICIARY_nam3."'/></td>
		</tr>
		<tr>
		<td>StuFAP Program</td><td><select name='GRANT_ID'>";
		
								$HEI="select * from grant_tbl";
								$HEI_kuery=mysql_query($HEI) or die(mysql_error());
								$HEI_list=mysql_num_rows($HEI_kuery);														
								$ihap=0;
								while($HEI_list>$ihap)
								{
								$ihap++;
								$row=mysql_fetch_array($HEI_kuery);
								$GRANT_ID=$row["GRANT_ID"];
								$GRANT_SHORTNAM=$row["GRANT_SHORTNAM"];
								echo"<option value=".$GRANT_ID.">".$GRANT_SHORTNAM."</option>";
								}
		echo"</select></td>
		</tr>
		<td>Course:</td><td><select name='PROG_ID'>";
		
								
		
								$HEI="select * from program_tbl";
								$HEI_kuery=mysql_query($HEI) or die(mysql_error());
								$HEI_list=mysql_num_rows($HEI_kuery);														
								$ihap=0;
								while($HEI_list>$ihap)
								{
								$ihap++;
								$row=mysql_fetch_array($HEI_kuery);
								$PROG_ID=$row["PROG_ID"];
								$PROG_NAM=$row["PROG_NAM"];
								echo"<option value=".$PROG_ID.">".$PROG_NAM."</option>";
								}						
		echo"</select></td>
		</tr>
		<tr>
		<td>Year Level:</td><td><input type='text' name='BENEFICIARY_YRLVL' value='".$BENEFICIARY_YRLVL."'/></td>
		</tr>
		<tr>
		<td>Award Number:</td><td><input type='text' name='BENEFICIARY_AWARDNO'  value='".$BENEFICIARY_AWARDNO."'/></td>
		</tr> 
		<tr>
			<td>Effectivity of Grant</td><td>
			<select name='BENEFICIARY_GRANTEFFECTIVITY'>
			<option value='SY 2005-2006'>SY 2005-2006</option>
			<option value='SY 2006-2007'>SY 2006-2007</option>
			<option value='SY 2007-2008'>SY 2007-2008</option>
			<option value='SY 2008-2009'>SY 2008-2009</option>
			<option value='SY 2009-2010'>SY 2009-2010</option>
			<option value='SY 2010-2011'>SY 2010-2011</option>
			<option value='SY 2011-2012'>SY 2011-2012</option>
			</select>
			</td>
		</tr>
		<tr><td colspan=2 align='center'><b>Home Address</b></td></tr>
		<tr>
		<td>Street & No.</td><td><input type='text' name='BENEFICIARY_MAILADD'  value='".$BENEFICIARY_MAILADD."' /></td>
		</tr>
		<tr>
		<td>Contact NO.</td><td><input type='text' name='BENEFICIARY_CONTACTNO' value='".$BENEFICIARY_CONTACTNO."' /></td>
		</tr>
		<tr>
		<td>Status.</td><td>
		<select name='BENEFICIARY_STAT'>
		<option value='New'>New</option>
		<option value='Enrolled'>Enrolled</option>
		<option value='Transferred'>Transferred</option>
		</select>
		</td>
		</tr>
		</table><br />
		<input type='submit' name='updateBeneficiary' value='Update Beneficiary Info' />
		&nbsp;&nbsp;&nbsp;
		<input type='button' value='Cancel' onClick='history.back();'>
		</form><br /><br /><br /><br /><br /><br />
		
		</center>";
		
		}//end edit beneficiary
		
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
		echo"<form method='POST' action='liquidationsUpdate.php?HEI_ID=".$HEI_ID."'>
		<input type='hidden' name='BENEFICIARY_ID' value=".$BENEFICIARY_ID." />
		<table class='tableView' border=1>
		<tr>
		<td align='center'><b>School Year</b></td>
		<td align='center'><b>Semester</b></td>
		<td align='center'><b>Billing</b></td>
		<td align='center'><b>Order Date</b></td>
		<td align='center'><b>Status</b></td>
		</tr>";
			if ($querybeneficiarypayment_tblkadamo>0)
					{	
					while ($querybeneficiarypayment_tblihap<$querybeneficiarypayment_tblkadamo)
					{	
					$querybeneficiarypayment_tblihap++;
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
										<td align='center'>".$PAYMENT_STATUS."</td>
										</tr>";
				}
				
				
		}
		else
			{	
			echo "	<tr>
								<td colspan='11' align='center'>No payment records made yet!</td></tr>";
				}
				
			echo"</table>
			<input type='submit' name='fw' value='Add New Bill'>
		<input type='button' value='Cancel' onClick='history.back();'>
			";
			}
function viewGrades($BENEFICIARY_ID){
		$this->abriDB();
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
		<table class='tableView' border=1>
		<tr><td></td>
		<td align='center'><b>School Year</b></td>
		<td align='center'><b>Year Level</b></td>
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
					$kolor="#ffffff"; 
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
		<br />
		<input type='submit' name='fw' value='Input New Grade' />
		<input type='button' value='Cancel' onClick='history.back();'>
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
		
		echo"<table class='tableView' cellspacing=5 cellpadding=5 border=1 >
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
		
		}//end view Grades
		
	function inputNewGrades($BENEFICIARY_ID){
		$this->abriDB();
		
			$qryName=mysql_query("select * from beneficiary_tbl where BENEFICIARY_ID=".$BENEFICIARY_ID);	
					$qrow=mysql_fetch_array($qryName);
					$BENEFICIARY_ID=$qrow["BENEFICIARY_ID"];
					$BENEFICIARY_nam1=$qrow["BENEFICIARY_nam1"];
					$BENEFICIARY_nam2=$qrow["BENEFICIARY_nam2"];
					$BENEFICIARY_nam3=$qrow["BENEFICIARY_nam3"];
					$HEI_ID=$qrow["HEI_ID"];
					
		echo"
		<center>
		<h3>Input New Grade for ".mb_strtoupper($BENEFICIARY_nam3).", ".mb_strtoupper($BENEFICIARY_nam1)." ".mb_strtoupper($BENEFICIARY_nam2)."</h3>
		<form method='POST' action='liquidationsUpdate.php' >
		<input type='hidden' name='BENEFICIARY_ID' value=".$BENEFICIARY_ID." >
		<table border=1><tr><td><b>Select Year</b></td><td><select name='schoolyr_yr'>";
$SYPagawasQry=mysql_query("select * from schoolyr_tbl");
$SYKawnt=mysql_num_rows($SYPagawasQry);
$SYIhap=0;
while($SYIhap<$SYKawnt){
	$SYIhap++;
	$SYDisp=mysql_fetch_array($SYPagawasQry);
	$schoolyr_yr=$SYDisp["schoolyr_yr"];
	echo "<option value='".$schoolyr_yr."'>".$schoolyr_yr."</option>	";
	}
echo "</select></td></tr><tr>
		<td><b>Year</td><td>
		<select name='GRADE_SCHOOLYR'>
		<option value='1'>1</opton>
		<option value='2'>2</opton>
		<option value='3'>3</opton>
		<option value='4'>4</opton>	
		</select>
		</td>
		</tr>
		<tr>
		<td><b>Sem</td><td>
		<select name='GRADE_SEM'>
		<option value='1'>1</opton>
		<option value='2'>2</opton>
		</select>
		</td>
		</tr>
		<tr>
		<td><b>Subject</td><td><input type='text' name='GRADE_SUBJ' onKeyPress='return paraAddress(event, false)' style='width:200px'/></td>
		</tr>
		<tr>
		<td><b>Units</td><td><input type='text' name='GRADE_UNIT' maxlength='5' onKeyPress='return numbersonly(event, false)' style='width:30px'/></td>
		</tr>
		<tr>
		<td><b>Grade</td><td><input type='text' name='GRADE_GRADE'  maxlength='5' onKeyPress='return numbersonly(event, false)' style='width:60px'/></td>
		</tr>
		</table>
		<br />
		<input type='submit' name='fw' value='Submit Grade' />
		<input type='button' value='Cancel' onClick='history.back();'>
		</form></center>
		";
		}//end inputNewGrades
	
}//end class
if ($_POST["fw"]=="Add new Beneficiary")
{

								$sulod=new liquidationsUpdate();
								$butang=new paragLayOut();
								$butang->butangSulod($sulod->addNewBeneficiary());

}
else if ($_POST["fw"]=="Update Beneficiary Info")
{
	
	$BENEFICIARY_ID=$_POST["BENEFICIARY_ID"];
	if(empty($BENEFICIARY_ID))
	{
		
			echo "<script>alert('Select a Beneficiary to update!')</script>";
			echo "<script>window.location.href='liquidationsMain.php'</script>";
	}
	
	
	
	$sulod=new liquidationsUpdate();
	$butang=new paragLayOut();
	$butang->butangSulod($sulod->editBeneficiary($BENEFICIARY_ID));

}
else if ($_POST["fw"]=="View Grades")
{
	
	$BENEFICIARY_ID=$_POST["BENEFICIARY_ID"];
	if(empty($BENEFICIARY_ID))
	{
		
			echo "<script>alert('Select a Beneficiary to input Grades!')</script>";
			echo "<script>window.location.href='liquidationsMain.php'</script>";
	}
	
	
	
	$sulod=new liquidationsUpdate();
	$butang=new paragLayOut();
	$butang->butangSulod($sulod->viewGrades($BENEFICIARY_ID));

}
else if ($_POST["fw"]=="View Payments")
{
	
	$BENEFICIARY_ID=$_POST["BENEFICIARY_ID"];
	if(empty($BENEFICIARY_ID))
	{
		
			echo "<script>alert('Select a Beneficiary to view Payments!')</script>";
			echo "<script>window.location.href='liquidationsMain.php'</script>";
	}
	
	
	
	$sulod=new liquidationsUpdate();
	$butang=new paragLayOut();
	$butang->butangSulod($sulod->viewPayments($BENEFICIARY_ID));

}
else if ($_POST["fw"]=="Input New Grade")
{
	
	$BENEFICIARY_ID=$_POST["BENEFICIARY_ID"];
	if(empty($BENEFICIARY_ID))
	{
		
			echo "<script>alert('Select a Beneficiary to input Grades!')</script>";
			echo "<script>window.location.href='liquidationsMain.php'</script>";
	}
	
	
	
	$sulod=new liquidationsUpdate();
	$butang=new paragLayOut();
	$butang->butangSulod($sulod->inputNewGrades($BENEFICIARY_ID));

}
else if ($_POST["fw"]=="Submit Grade")
{
	
	$BENEFICIARY_ID=$_POST["BENEFICIARY_ID"];
	$GRADE_SCHOOLYR=$_POST["GRADE_SCHOOLYR"];
	$GRADE_SEM=$_POST["GRADE_SEM"];
	$GRADE_SUBJ=$_POST["GRADE_SUBJ"];
	$GRADE_UNIT=$_POST["GRADE_UNIT"];
	$GRADE_GRADE=$_POST["GRADE_GRADE"];
	$schoolyr_yr=$_POST["schoolyr_yr"];
	konekServer::abriDB();
	
	
	$checkIfSubExistQuery=mysql_query("select * from grade_tbl where GRADE_SUBJ='".$GRADE_SUBJ."' and BENEFICIARY_ID=".$BENEFICIARY_ID);
	$checkIfSubExistNumRows=mysql_num_rows($checkIfSubExistQuery);

	if($checkIfSubExistNumRows==0){
	$inputGradeqry="INSERT INTO grade_tbl (GRADE_ID ,GRADE_SCHOOLYR ,GRADE_SEM ,GRADE_SUBJ ,GRADE_UNIT ,GRADE_GRADE ,BENEFICIARY_ID, schoolyr_yr)
VALUES (NULL , ".$GRADE_SCHOOLYR.", ".$GRADE_SEM.", '".$GRADE_SUBJ."', ".$GRADE_UNIT.",".$GRADE_GRADE.", ".$BENEFICIARY_ID.", '".$schoolyr_yr."'
)";
			
paragUpdateDB::updateTable($inputGradeqry);
$BENEFICIARY_STAT;
	if($GRADE_GRADE>3){
		$query_recommendForDropping=mysql_query("update beneficiary_tbl set BENEFICIARY_STAT='Recommended for Waive' where BENEFICIARY_ID=".$BENEFICIARY_ID) or die(mysql_error());
		}
echo "<script>alert('Grade Added!')</script>";
	$sulod=new liquidationsUpdate();
	$butang=new paragLayOut();
	$butang->butangSulod($sulod->viewGrades($BENEFICIARY_ID));

}
else if($checkIfSubExistNumRows>0){
	
echo "<script>alert('Grade for Subject Already exists!!')</script>";
	$sulod=new liquidationsUpdate();
	$butang=new paragLayOut();
	$butang->butangSulod($sulod->viewGrades($BENEFICIARY_ID));

	}
}
else if ($_POST["fw"]=="Add New Bill")
{
	
	$BENEFICIARY_ID=$_POST["BENEFICIARY_ID"];
	if(empty($BENEFICIARY_ID))
	{
		
			echo "<script>alert('Select a Beneficiary to input Bill!')</script>";
			echo "<script>window.location.href='liquidationsMain.php'</script>";
	}
	
	
	
	$sulod=new liquidationsUpdate();
	$butang=new paragLayOut();
	$butang->butangSulod($sulod->inputNewBill($BENEFICIARY_ID));


}
else if ($_POST["fw"]=="Submit Bill")
{
	konekServer::abriDB();
	$BENEFICIARY_ID=$_POST["BENEFICIARY_ID"];
	$HEI_ID=$_POST["HEI_ID"];
	$PAYMENT_BILL=$_POST["PAYMENT_BILL"];
	$PAYMENT_SEM=$_POST["PAYMENT_SEM"];
	$schoolyr_yr=$_POST["schoolyr_yr"];
	 $a="INSERT INTO payment_tbl (PAYMENT_ID,
BENEFICIARY_ID ,
PAYMENT_BILL ,
PAYMENT_DATE ,
PAYMENT_SEM ,
schoolyr_yr ,
PAYMENT_STATUS
)
VALUES (
NULL , ".$BENEFICIARY_ID.", ".$PAYMENT_BILL.", now(), '".$PAYMENT_SEM."', '".$schoolyr_yr."', 'UNPAID'
)";
	$queryInsertPaymentText=mysql_query($a) or die(mysql_error());
			echo "<script>alert('Bill Submitted!')</script>";
			echo "<script>window.location.href='liquidationsMain.php'</script>";

}
else if(empty($_POST["fw"]))
{
			echo "<script>alert('you have no rights to access this page!')</script>";
			echo "<script>window.location.href='liquidationsMain.php'</script>";

}
require_once("footer.php");
?>
<?php
}
else
{
		
			echo "<script>alert('you have no rights to access this page!')</script>";
		echo "<script>
				window.location.href='index.php';
			</script>";
}
?>
