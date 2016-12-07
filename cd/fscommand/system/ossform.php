<?php
require_once("a-connection.php");
require_once("header.php");
class ossforms{
	function ossformfullmerit($PREREG_ID){
		konekServer::abriDB();
		
		$fullmeritpasaqry=mysql_query("select * from prereg_tbl  a, grant_tbl b where b.GRANT_ID=a.GRANT_ID and a.PREREG_ID=".$PREREG_ID);
		$rowmysql=mysql_fetch_array($fullmeritpasaqry);				
					
			$PREREG_LASTNAME=$rowmysql["PREREG_LASTNAME"];
			$PREREG_FIRSTNAME=$rowmysql["PREREG_FIRSTNAME"];
			$PREREG_MIDNAME=$rowmysql["PREREG_MIDNAME"];
			$PREREG_GWA=$rowmysql["PREREG_GWA"];
			$PREREG_NCAE=$rowmysql["PREREG_NCAE"];
			$PREREG_BDAY=$rowmysql["PREREG_BDAY"];
			$PREREG_AITR=$rowmysql["PREREG_AITR"];
			$PREREG_CONTACT=$rowmysql["PREREG_CONTACT"];
			$PREREG_EMAILADD=$rowmysql["PREREG_EMAILADD"];
			$GRANT_FULLNAM=$rowmysql["GRANT_FULLNAM"];
			$GRANT_ID=$rowmysql["GRANT_ID"];

			$PREREG_AGE = floor((time() - strtotime($PREREG_BDAY))/(60*60*24*365.2425));

			$PREREG_DBLCHCK=$rowmysql["PREREG_DBLCHCK"];
			if($PREREG_DBLCHCK==1){
			echo "<script>alert('Access Denied! You can only fill up OSS FOrm no. 1 once! Please check your email	');
				window.location.href='index.php';
			</script>";
			}
			
			echo"<form method='post' id='customForm' action='ossFormAdd.php?add=1'>
			<div><label for=''>Grant Suggested for: ".$GRANT_FULLNAM."</label>
			</div>
			<div>
			<label for='APP_FULLNAME'>Full Name</label>
			<select name='GRANT_ID'>";
			$grantQry=mysql_query("select * from grant_tbl where GRANT_ID>=".$GRANT_ID."");
			$kawntGrant=mysql_num_rows($grantQry);
			$grantIhap=0;
			while($grantIhap<$kawntGrant){
				$grantIhap++;
				$grantGet=mysql_fetch_array($grantQry);
				$GRANT_ID=$grantGet["GRANT_ID"];
				$GRANT_SHORTNAM=$grantGet["GRANT_SHORTNAM"];
				echo"<option value=".$GRANT_ID.">".$GRANT_SHORTNAM."</option>";
				
				}
			echo"</select>
			</div>
			<div>
				<label for='APP_FULLNAME'>Full Name</label>
				<input type='hidden' name='APP_FIRSTNAME' value='".$PREREG_FIRSTNAME."'>
				<input type='hidden' name='APP_MIDNAME' value='".$PREREG_MIDNAME."'>
				<input type='hidden' name='APP_LASTNAME' value='".$PREREG_LASTNAME."'>
				<input type='hidden' name='PREREG_ID' value='".$PREREG_ID."'>
				<input id='' name='' value='".$PREREG_LASTNAME.", ".$PREREG_FIRSTNAME." ".$PREREG_MIDNAME."' type='text' style='text-transform:uppercase; width:300px;' readonly='readonly'> 
			</div>			
			<div>
				<label for=''>Birthday</label>
				<input id='text' name='APP_BDAY' value='".$PREREG_BDAY." Age: ".$PREREG_AGE."' type='text' style='text-transform:uppercase; width:200px;' readonly='readonly' >
			</div>
			<div>
				<label for=''>Place of Birth*</label>
				<input id='' name='APP_BPLACE' value='' type='text' style='text-transform:uppercase; width:500px;' onKeyPress='return paraAddress (event, false)' >
			</div>
			<div>
				<label for='APP_CSTAT'>Status</label>
				<select name='APP_CSTAT'>
				<option value='Single'>Single</option>
				<option value='Married'>Married</option>
				<option value='Divorced'>Divorced</option>
				<option value='Widowed'>Widowed</option>
				</select>
			</div>
			
			<div>
				<label for='APP_GENDER'>Gender</label>
				<select name='APP_GENDER'>
				<option value='MALE'>Male</option>
				<option value='FEMALE'>Female</option>
				</select>
			</div>
			<div>
				<label for='APP_CITI'>Citizenship</label>
				<input id='' name='APP_CITI' value='Filipino' type='text' style='text-transform:uppercase; width:60px;' readonly='readonly'>
			</div>
			<div>
				<label for='APP_RELI'>Religion</label>
				<input id='' name='APP_RELI' type='text' style='text-transform:uppercase; width:100px;' onKeyPress='return lettersonly (event, false)' >
			</div>
			<div>
				<label for='APP_CONTACT'>Contact No.</label>
				<input id='' name='APP_CONTACT' type='text' style='text-transform:uppercase; width:200px;' disable='disabled' value='".$PREREG_CONTACT."'>
			</div>
			<div>
				<label for='APP_EMAILADD'>Email Add</label>
				<input id='' name='APP_EMAILADD' type='text' style='text-transform:uppercase; width:200px;' disable='disabled' value='".$PREREG_EMAILADD."'>
			</div>
			<div>
				<label for='APP_MAILADD'>Mailing Address*</label>
				<input id='' name='APP_MAILADD' value='' type='text' style='text-transform:uppercase; width:500px;'  onKeyPress='return paraAddress (event, false)' >
			</div>
			<div>
				<label for='APP_CONGDIST'>Congressional District: &nbsp; &nbsp;
				<select name='APP_CONGDIST'>
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
				<option value='5'>5</option>
				<option value='6'>6</option>
				</select>
				</label>
			
				
			</div>
			<div>
				<label for='APP_PERMADD'>Permanent Address*</label>
				<input id='' name='APP_PERMADD' value='' type='text' style='text-transform:uppercase; width:500px;'  onKeyPress='return paraAddress (event, false)' >
			</div>
			<div>
				<label for='APP_HSNAM'>High School Name*</label>
				<input id='' name='APP_HSNAM' value='' type='text' style='text-transform:uppercase; width:500px;'  onKeyPress='return paraAddress (event, false)' >
			</div>
			<div>
				<label for='APP_HSADD'>School Address*</label>
				<input id='' name='APP_HSADD' value='' type='text' style='text-transform:uppercase; width:500px;'  onKeyPress='return paraAddress (event, false)' >
			</div>
			<div>
				<label for='APP_HSTYP'>School Type</label>
				<select name='APP_HSTYP'>
				<option value='Public'>Public</option>
				<option value='Private'>Private</option>
				<option value='Vocational'>Vocational</option>
				</select>
			</div>
			<div>
				<label for='APP_HSYR'>Highest Grade/Year</label>
				<select name='APP_HSYR'>
					<option value='4'>4</option>
				</select>
			</div>
			<div>
				<label for='APP_HSRANK'>Rank in Class</label>
				<input id='' name='APP_HSRANK' value='' type='text' style='text-transform:uppercase; width:50px;'   onKeyPress='return numbersonly (event, false)' >
			</div>
			<div>
				<label for='APP_GWA'>GWA</label>
				<input id='' name='APP_GWA' value='".$PREREG_GWA."' type='text' style='text-transform:uppercase; width:50px;' maxlength='2' readonly='readonly'>
			</div>
			<div>
				<label for='APP_NCAESCR'>NCAE Score</label>
				<input id='' name='APP_NCAESCR' value='".$PREREG_NCAE."' type='text' style='text-transform:uppercase; width:50px;' maxlength='2' readonly='readonly'>
			</div>
			<div>
				<label for='APP_NCAEDATE'>NCAE Exam Date</label> 
			<script>DateInput('APP_NCAEDATE', true, 'YYYY-MM-DD')</script>
			</div>
			<div>
				<label for='APP_GRADDATE'>Date of Graduation</label>
			<script>DateInput('APP_GRADDATE', true, 'YYYY-MM-DD')</script>
				</div>
			<center><h3>Family Background</h3></center>
			<div>
			<div>
				<label for='APP_FATSTAT'>Father</label>
				<select name='APP_FATSTAT'>
				<option value='Living'>Living</option>
				<option value='Deceased'>Deceased</option>
				</select>
			</div>
			<label for='APP_FATFIRSTNAME'>Father's First Name*</label>
			<input id='APP_FATFIRSTNAME' name='APP_FATFIRSTNAME' value='' type='text' style='text-transform:uppercase; width:200px;' onKeyPress='return lettersonly (event, false)' >
			</div>
			<div>
			<label for='APP_FATMIDNAME'>Father's Middle Name*</label>
			<input id='' name='APP_FATMIDNAME' value=''  type='text' style='text-transform:uppercase; width:200px;' onKeyPress='return lettersonly (event, false)'>
			</div>
			<div>
			<label for='APP_FATLASTNAME'>Father's Last Name*</label>
			<input id='' name='APP_FATLASTNAME' value=''  type='text' style='text-transform:uppercase; width:200px;' onKeyPress='return lettersonly (event, false)'>
			</div>
			<div>
			<label for='APP_FATADD'>Father's Address*</label>
			<input id='' name='APP_FATADD' value='' type='text' style='text-transform:uppercase; width:500px;' onKeyPress='return paraAddress (event, false)'>
			</div>
			<div>
			<label for='APP_FATJOB'>Father's Occupation*</label>
			<input id='' name='APP_FATJOB' value='' type='text' style='text-transform:uppercase; width:200px;' onKeyPress='return lettersonly (event, false)'>
			</div>

			<div>
				<label for='APP_MOTSTAT'>Mother
				<select name='APP_MOTSTAT'>
				<option value='Living'>Living</option>
				<option value='Deceased'>Deceased</option>
				</select></label>
			</div>
			<div>
			<label for='APP_MOTFIRSTNAME'>Mother's First Name*</label>
			<input id='' name='APP_MOTFIRSTNAME' value='' type='text' style='text-transform:uppercase; width:200px;'  onKeyPress='return lettersonly (event, false)'>
			</div>
			<div>
			<label for='APP_MOTMIDNAME'>Mother's Middle Name*</label>
			<input id='' name='APP_MOTMIDNAME' value='' type='text' style='text-transform:uppercase; width:200px;'  onKeyPress='return lettersonly (event, false)'>
			</div>
			<div>
			<label for='APP_MOTLASTNAME'>Mother's Last Name*</label>
			<input id='' name='APP_MOTLASTNAME' value='' type='text' style='text-transform:uppercase; width:200px;'  onKeyPress='return lettersonly (event, false)'>
			</div>
			<div>
			<label for='APP_MOTADD'>Mother's Address*</label>
			<input id='' name='APP_MOTADD' value='' type='text' style='text-transform:uppercase; width:500px;' onKeyPress='return paraAddress(event, false)'>
			</div>
			<div>
			<label for='APP_MOTJOB'>Mother's Occupation*</label>
			<input id='' name='APP_MOTJOB' value='' type='text' style='text-transform:uppercase; width:200px;'  onKeyPress='return lettersonly (event, false)'>
			</div>
			<div>
			<label for='APP_AITR'>Total Gross Income <b>P</b></label>
			<input id='' name='APP_AITR' value='".$PREREG_AITR."' type='text' style='text-transform:uppercase; width:120px;' readonly='readonly'>
			</div>
			<div>
			<label for='APP_SIBNO'>No. of Children in the Family*</b></label>
			<input id='' name='APP_SIBNO' value='' type='text' style='text-transform:uppercase; width:50px;' maxlength='2'  onKeyPress='return numbersonly(event, false)'>
			</div>
			<div>
			<label for='APP_HEIPREF'>School intended to enroll in:</b></label>
			<select name='APP_HEIPREF'>";
			
			$kuery=mysql_query("select * from hei_tbl a, heitype_tbl b where a.HEITYPE_ID=b.HEITYPE_ID ORDER BY HEI_ID");
			$kadamo=mysql_num_rows($kuery);
			$kawnt=1;
			while($kawnt<=$kadamo){
					$row=mysql_fetch_array($kuery);
					$HEI_ID=$row["HEI_ID"];
					$HEI_NAM=$row["HEI_NAM"];
					$kawnt++;

			echo"<option value=".$HEI_ID.">".$HEI_NAM."</option>";	
			}
			
			
			echo"</select></div>
			<div>
			<label for='APP_COURSEFACTOR'>Factor(s) that motivated to you to choose your course:</b></label>
			<textarea name='APP_COURSEFACTOR' cols='3' rows='4'></textarea>
			</div>

			<input type='submit' name='fw' value='Submit' />

			</form>
			*<i> fields are required</i>
			";
		}// end full merit form.
		
		
		
	}//end class
	

if($_GET["formno"]==1){
$PREREG_ID=$_GET["PREREG_ID"];
			$sulod=new ossforms();
			$butang=new paragLayOut();
			$butang->butangSulod($sulod->ossformfullmerit($PREREG_ID));
}

else if($_GET["formno"]==2){
$PREREG_ID=$_GET["PREREG_ID"];
			$sulod=new ossforms();
			$butang=new paragLayOut();
			$butang->butangSulod($sulod->ossformhalfmerit($PREREG_ID));
}
else if($_GET["formno"]==3){
$PREREG_ID=$_GET["PREREG_ID"];
			$sulod=new ossforms();
			$butang=new paragLayOut();
			$butang->butangSulod($sulod->ossformsnpl($PREREG_ID));
}

require_once("footer.php");

?>