<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('edusupervisorUsername')&&session_is_registered('edusupervisorPassword'))
{
?>
<?php
$APP_ID=$_GET["APP_ID"];

require_once("header.php");

class rankingActionClasses extends konekServer{
	
	
function approveScholarship(){
$this->abriDB();
$APP_ID=$_GET["APP_ID"];
if(!empty($APP_ID))
{
	$appshowinfo=mysql_query("select * from APP_TBL where APP_ID=".$APP_ID) or die(mysql_error());
	$appinfofetch=mysql_fetch_array($appshowinfo);
	
	$APP_FIRSTNAME=$appinfofetch["APP_FIRSTNAME"];
	$APP_MIDNAME=$appinfofetch["APP_MIDNAME"];
	$APP_LASTNAME=$appinfofetch["APP_LASTNAME"];
	$APP_BDAY=$appinfofetch["APP_BDAY"];
	$APP_BPLACE=$appinfofetch["APP_BPLACE"];
	$APP_CSTAT=$appinfofetch["APP_CSTAT"];
	$APP_GENDER=$appinfofetch["APP_GENDER"];
	$APP_CITI=$appinfofetch["APP_CITI"];
	$APP_RELI=$appinfofetch["APP_RELI"];
	$APP_MAILADD=$appinfofetch["APP_MAILADD"];
	$APP_PERMADD=$appinfofetch["APP_PERMADD"];
	$APP_HSNAM=$appinfofetch["APP_HSNAM"];
	$APP_HSADD=$appinfofetch["APP_HSADD"];
	$APP_HSTYP=$appinfofetch["APP_HSTYP"];
	$APP_HSYR=$appinfofetch["APP_HSYR"];
	$APP_GWA=$appinfofetch["APP_GWA"];
	$APP_HSRANK=$appinfofetch["APP_HSRANK"];
	$APP_NCAESCR=$appinfofetch["APP_NCAESCR"];
	$APP_NCAEDATE=$appinfofetch["APP_NCAEDATE"];
	$APP_GRADDATE=$appinfofetch["APP_GRADDATE"];
	$APP_FATSTAT=$appinfofetch["APP_FATSTAT"];
	$APP_FATFIRSTNAME=$appinfofetch["APP_FATFIRSTNAME"];
	$APP_FATMIDNAME=$appinfofetch["APP_FATMIDNAME"];
	$APP_FATLASTNAME=$appinfofetch["APP_FATLASTNAME"];
	$APP_FATADD=$appinfofetch["APP_FATADD"];
	$APP_FATJOB=$appinfofetch["APP_FATJOB"];
	$APP_MOTSTAT=$appinfofetch["APP_MOTSTAT"];
	$APP_MOTFIRSTNAME=$appinfofetch["APP_MOTFIRSTNAME"];
	$APP_MOTMIDNAME=$appinfofetch["APP_MOTMIDNAME"];
	$APP_MOTLASTNAME=$appinfofetch["APP_MOTLASTNAME"];
	$APP_MOTADD=$appinfofetch["APP_MOTADD"];
	$APP_MOTJOB=$appinfofetch["APP_MOTJOB"];
	$APP_COURSEFACTOR=$appinfofetch["APP_COURSEFACTOR"];
	$APP_HEIPREF=$appinfofetch["APP_HEIPREF"];
	$APP_SIBNO=$appinfofetch["APP_SIBNO"];
	$APP_AITR=$appinfofetch["APP_AITR"];
	$APP_CONTACT=$appinfofetch["APP_CONTACT"];
	$APP_EMAILADD=$appinfofetch["APP_EMAILADD"];
	
	
	echo"<center><form method='POST' action='scholarshipApproval.php'>
	<input type='hidden' value=".$APP_ID." name='APP_ID' />
	<input type='hidden' value=".$GRANT_ID." name='GRANT_ID' />
	";
	echo"<h4>OSS FORM no. 1 for: ".mb_strtoupper($APP_LASTNAME).", ".mb_strtoupper($APP_FIRSTNAME)." ".mb_strtoupper($APP_MIDNAME)."</h4>";
	echo"<table class='tableView' cellspacing=10>
	<tr><td align='right'>Birthday:</td><td align='left'><b>".$APP_BDAY."</b></td></tr>
	<tr><td align='right'>Civil Status:</td><td align='left'><b>".mb_strtoupper($APP_CSTAT)."</b></td></tr>
	<tr><td align='right'>Citizenship:</td><td align='left'><b>".mb_strtoupper($APP_CITI)."</b></td></tr>
	<tr><td align='right'>Contact No:</td><td align='left'><b>".mb_strtoupper($APP_CONTACT)."</b></td></tr>
	<tr><td align='right'>Email Address:</td><td align='left'><b>".mb_strtoupper($APP_EMAILADD)."</b></td></tr>
	<tr><td align='right'>Mailing Address:</td><td align='left'><b>".mb_strtoupper($APP_MAILADD)."</b></td></tr>
	<tr><td align='right'>Permanent Address:</td><td align='left'><b>".mb_strtoupper($APP_PERMADD)."</b></td></tr>
	<tr><td align='right'>High School:</td><td align='left'><b>".mb_strtoupper($APP_HSNAM)."</b></td></tr>
	<tr><td align='right'>High School Address:</td><td align='left'><b>".mb_strtoupper($APP_HSADD)."</b></td></tr>
	<tr><td align='right'>High School Type:</td><td align='left'><b>".mb_strtoupper($APP_HSTYP)."</b></td></tr>
	<tr><td align='right'>GWA:</td><td align='left'><b>".mb_strtoupper($APP_HSYR)."</b></td></tr>
	<tr><td align='right'>Rank in Class:</td><td align='left'><b>".mb_strtoupper($APP_HSRANK)."</b></td></tr>
	<tr><td align='right'>Ncae Score:</td><td align='left'><b>".mb_strtoupper($APP_NCAESCR)."</b></td></tr>
	<tr><td align='right'>NCAE Exam Date:</td><td align='left'><b>".mb_strtoupper($APP_NCAEDATE)."</b></td></tr>
	<tr><td align='right'>Graduation Date:</td><td align='left'><b>".mb_strtoupper($APP_GRADDATE)."</b></td></tr>
	<tr><td align='right'>Father:</td><td align='left'><b>".mb_strtoupper($APP_FATSTAT)."</b></td></tr>
	<tr><td align='right'>Father's Name:</td><td align='left'><b>".mb_strtoupper($APP_FATLASTNAME).", ".mb_strtoupper($APP_FATFIRSTNAME)." ".mb_strtoupper($APP_FATMIDNAME)."</b></td></tr>
	<tr><td align='right'>Father's Occupation:</td><td align='left'><b>".mb_strtoupper($APP_FATJOB)."</b></td></tr>
	<tr><td align='right'>Address:</td><td align='left'><b>".mb_strtoupper($APP_FATADD)."</b></td></tr>
	<tr><td align='right'>Mother:</td><td align='left'><b>".mb_strtoupper($APP_MOTSTAT)."</b></td></tr>
	<tr><td align='right'>Mother's Name:</td><td align='left'><b>".mb_strtoupper($APP_MOTLASTNAME).", ".mb_strtoupper($APP_MOTFIRSTNAME)." ".mb_strtoupper($APP_MOTMIDNAME)."</b></td></tr>
	<tr><td align='right'>Mother's Occupation:</td><td align='left'><b>".mb_strtoupper($APP_MOTJOB)."</b></td></tr>
	<tr><td align='right'>Address:</td><td align='left'><b>".mb_strtoupper($APP_MOTADD)."</b></td></tr>
	<tr><td align='right'>Parent's annual income tax return:</td><td align='left'><b>".mb_strtoupper($APP_AITR)."</b></td></tr>
	<tr><td align='right'>Children in the family:</td><td align='left'><b>".mb_strtoupper($APP_SIBNO)."</b></td></tr>
	";
	$hei_qry=mysql_query("select * from hei_tbl where HEI_ID=".$APP_HEIPREF);
	$fetchThis=mysql_fetch_array($hei_qry);
	$dispHEINAME=$fetchThis["HEI_ACRONAM"];
	echo"
	<tr><td align='right'>College intended to enroll in:</td><td align='left'><b>".mb_strtoupper($dispHEINAME)."</b></td></tr>
	<tr><td align='right'>reasons picked the school:</td><td align='left'><b>".mb_strtoupper($APP_COURSEFACTOR)."</b></td></tr>

	</table>";
echo"

<input type='hidden' name='APP_AITR' value='".$APP_AITR."' />
<input type='hidden' name='APP_NCAESCR' value='".$APP_NCAESCR."' />
<input type='hidden' name='APP_GWA' value='".$APP_GWA."' />
<input type='hidden' name='APP_SIBNO' value='".$APP_SIBNO."' />
<input type='submit' name='fw' value='Approve Scholarship' />
<input type='button' value='Cancel' onClick='history.back();'>
</form></center>";
}
else if(empty($APP_ID))
{
		echo "<script>alert('Please! Select an applicant first!');
				window.location.href='ranking.php';
			</script>";

}
		
		}//end approveScholarship()
	
function transferScholarship(){
		
$this->abriDB();
$APP_ID=$_GET["APP_ID"];
if(!empty($APP_ID))
{
	$appshowinfo=mysql_query("select * from APP_TBL where APP_ID=".$APP_ID) or die(mysql_error());
	$appinfofetch=mysql_fetch_array($appshowinfo);
	
	$APP_FIRSTNAME=$appinfofetch["APP_FIRSTNAME"];
	$APP_MIDNAME=$appinfofetch["APP_MIDNAME"];
	$APP_LASTNAME=$appinfofetch["APP_LASTNAME"];
	$APP_BDAY=$appinfofetch["APP_BDAY"];
	$APP_BPLACE=$appinfofetch["APP_BPLACE"];
	$APP_CSTAT=$appinfofetch["APP_CSTAT"];
	$APP_GENDER=$appinfofetch["APP_GENDER"];
	$APP_CITI=$appinfofetch["APP_CITI"];
	$APP_RELI=$appinfofetch["APP_RELI"];
	$APP_MAILADD=$appinfofetch["APP_MAILADD"];
	$APP_PERMADD=$appinfofetch["APP_PERMADD"];
	$APP_HSNAM=$appinfofetch["APP_HSNAM"];
	$APP_HSADD=$appinfofetch["APP_HSADD"];
	$APP_HSTYP=$appinfofetch["APP_HSTYP"];
	$APP_HSYR=$appinfofetch["APP_HSYR"];
	$APP_GWA=$appinfofetch["APP_GWA"];
	$APP_HSRANK=$appinfofetch["APP_HSRANK"];
	$APP_NCAESCR=$appinfofetch["APP_NCAESCR"];
	$APP_NCAEDATE=$appinfofetch["APP_NCAEDATE"];
	$APP_GRADDATE=$appinfofetch["APP_GRADDATE"];
	$APP_FATSTAT=$appinfofetch["APP_FATSTAT"];
	$APP_FATFIRSTNAME=$appinfofetch["APP_FATFIRSTNAME"];
	$APP_FATMIDNAME=$appinfofetch["APP_FATMIDNAME"];
	$APP_FATLASTNAME=$appinfofetch["APP_FATLASTNAME"];
	$APP_FATADD=$appinfofetch["APP_FATADD"];
	$APP_FATJOB=$appinfofetch["APP_FATJOB"];
	$APP_MOTSTAT=$appinfofetch["APP_MOTSTAT"];
	$APP_MOTFIRSTNAME=$appinfofetch["APP_MOTFIRSTNAME"];
	$APP_MOTMIDNAME=$appinfofetch["APP_MOTMIDNAME"];
	$APP_MOTLASTNAME=$appinfofetch["APP_MOTLASTNAME"];
	$APP_MOTADD=$appinfofetch["APP_MOTADD"];
	$APP_MOTJOB=$appinfofetch["APP_MOTJOB"];
	$APP_COURSEFACTOR=$appinfofetch["APP_COURSEFACTOR"];
	$APP_HEIPREF=$appinfofetch["APP_HEIPREF"];
	$APP_SIBNO=$appinfofetch["APP_SIBNO"];
	$APP_AITR=$appinfofetch["APP_AITR"];
	$APP_CONTACT=$appinfofetch["APP_CONTACT"];
	$APP_EMAILADD=$appinfofetch["APP_EMAILADD"];
	
	
	echo"<center><form method='POST' action='scholarshipTransfer.php?APP_ID=".$APP_ID."'>
	";
	echo"<h4>Transfer: ".mb_strtoupper($APP_LASTNAME).", ".mb_strtoupper($APP_FIRSTNAME)." ".mb_strtoupper($APP_MIDNAME)."</h4>";
	echo "<select name='GRANT_ID'>";
	
			$kuery=mysql_query("select * from grant_tbl");
			$kadamo=mysql_num_rows($kuery);
			$kawnt=1;
			while($kawnt<=$kadamo){
					$row=mysql_fetch_array($kuery);
					$GRANT_ID=$row["GRANT_ID"];
					$GRANT_SHORTNAM=$row["GRANT_SHORTNAM"];
					$kawnt++;

			echo"<option value=".$GRANT_ID.">".$GRANT_SHORTNAM."</option>";	
			}
	echo"</select>";

echo"

<input type='hidden' name='APP_AITR' value='".$APP_AITR."' />
<input type='hidden' name='APP_NCAESCR' value='".$APP_NCAESCR."' />
<input type='hidden' name='APP_GWA' value='".$APP_GWA."' />
<input type='hidden' name='APP_SIBNO' value='".$APP_SIBNO."' />
<input type='submit' name='fw' value='Transfer Scholarship' />
<input type='button' value='Cancel' onClick='history.back();'>
</form></center>";
}
else if(empty($APP_ID))
{
		echo "<script>alert('Please! Select an applicant first!');
				window.location.href='ranking.php';
			</script>";

}
		
		
		}//end approveScholarship()
	
	}//end rankingClasses
							if($_GET["action"]=="Approve")
							{
								$sulod=new rankingActionClasses();
								$butang=new paragLayOut();
								$butang->butangSulod($sulod->approveScholarship());
								
							}
							else if($_GET["action"]=="Transfer")
							{
								$sulod=new rankingActionClasses();
								$butang=new paragLayOut();
								$butang->butangSulod($sulod->transferScholarship());
								
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