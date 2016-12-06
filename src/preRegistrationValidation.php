<?php
require_once("a-connection.php");
konekServer::abriDB();

$PREREG_LASTNAME=$_POST["PREREG_LASTNAME"];
$PREREG_FIRSTNAME=$_POST["PREREG_FIRSTNAME"];
$PREREG_MIDNAME=$_POST["PREREG_MIDNAME"];
$PREREG_GWA=$_POST["PREREG_GWA"];
$PREREG_NCAE=$_POST["PREREG_NCAE"];
$PREREG_BDAY=$_POST["PREREG_BDAY"];
$PREREG_AITR=$_POST["PREREG_AITR"];
$PREREG_Q1=$_POST["PREREG_Q1"];
$PREREG_Q2=$_POST["PREREG_Q2"];
$PREREG_Q3=$_POST["PREREG_Q3"];
$PREREG_CONTACT=$_POST["PREREG_CONTACT"];
$PREREG_EMAILADD=$_POST["PREREG_EMAILADD"];

$PREREG_AGE = floor((time() - strtotime($PREREG_BDAY))/(60*60*24*365.2425));

if(!empty($PREREG_LASTNAME)&&!empty($PREREG_FIRSTNAME)&&!empty($PREREG_MIDNAME)&&!empty($PREREG_GWA)&&!empty($PREREG_NCAE)&&!empty($PREREG_AITR)&&!empty($PREREG_Q1)&&!empty($PREREG_Q2)&&!empty($PREREG_Q3)&&!empty($PREREG_CONTACT)&&!empty($PREREG_EMAILADD))
{
	if($PREREG_AGE<=30&&$PREREG_AGE>=13)
	{
		
		if($PREREG_Q2==1){
			
			echo"";
			$to = $PREREG_EMAILADD;
			$subject = "StuFAP Pre-Registration";
			$message = "We are sorry ".$PREREG_LASTNAME.",  ".$PREREG_FIRSTNAME." ".$PREREG_MIDNAME.", but you cannot register to any Student Financial Assistance Program if you have availed any other scholarship programs/grant.";
			$from = " roniel44.6te.net@6te.net";
			$headers = "From:" . $from;
			//mail($to,$subject,$message,$headers);
//			echo $message;
	//		echo "<br />Mail Sent.";
			
			echo"	<script>alert('".$message."')</script>";
			echo "<script>history.back();</script>";
			}
		else if($PREREG_NCAE<80){
			
			$to = $PREREG_EMAILADD;
			$subject = "StuFAP Pre-Registration";
			$message = "We are sorry ".$PREREG_LASTNAME.",  ".$PREREG_FIRSTNAME." ".$PREREG_MIDNAME.", but your NCAE is too low for our scholarship programs/grant.";
			$from = " roniel44.6te.net@6te.net";
			$headers = "From:" . $from;
			echo"	<script>alert('".$message."')</script>";
			echo "<script>history.back();</script>";

			//mail($to,$subject,$message,$headers);
//			echo $message;
	//		echo "<br />Mail Sent.";
			
			}	
		else if($PREREG_GWA<80){
			
			$to = $PREREG_EMAILADD;
			$subject = "StuFAP Pre-Registration";
			$message = "We are sorry ".$PREREG_LASTNAME.",  ".$PREREG_FIRSTNAME." ".$PREREG_FIRSTNAME.", but your GWA is too low for our scholarship programs/grant.";
			$from = " roniel44.6te.net@6te.net";
			$headers = "From:" . $from;
			//mail($to,$subject,$message,$headers);
			//echo $message;
			//echo "<br />Mail Sent.";
			
			echo"	<script>alert('".$message."')</script>";
			echo "<script>history.back();</script>";
			}	
		else if($PREREG_Q3==2){
			
			$to = $PREREG_EMAILADD;
			$subject = "StuFAP Pre-Registration";
			$message = "We are sorry ".$PREREG_LASTNAME.",  ".$PREREG_FIRSTNAME." ".$PREREG_MIDNAME.", but we only accept Filipino Students with good moral character. your preregistration has been denied.";
			$from = " roniel44.6te.net@6te.net";
			$headers = "From:" . $from;
			//mail($to,$subject,$message,$headers);
	//		echo $message;
//			echo "<br />Mail Sent.";
		
			echo"	<script>alert('".$message."')</script>";
			echo "<script>history.back();</script>";	
			}	
		else if($PREREG_AITR>300000){
			
			$to = $PREREG_EMAILADD;
			$subject = "StuFAP Pre-Registration";
			$message = "We are sorry ".$PREREG_LASTNAME.",  ".$PREREG_FIRSTNAME." ".$PREREG_MIDNAME.", but we only accept Filipino Students with parents that has income lower than 300000. your preregistration has been denied.";
			$from = " roniel44.6te.net@6te.net";
			$headers = "From:" . $from;
			//mail($to,$subject,$message,$headers);
	//		echo $message;
//			echo "<br />Mail Sent.";
		
			echo"	<script>alert('".$message."')</script>";
			echo "<script>history.back();</script>";	
			}	
		else if(($PREREG_Q1==1)&&($PREREG_Q2==2)&&($PREREG_Q3==1)&&($PREREG_NCAE>=90)&&($PREREG_GWA>=90)&&($PREREG_AITR<=300000))
		{
		$preregqry="insert into prereg_tbl set PREREG_FIRSTNAME='".$PREREG_FIRSTNAME."',  PREREG_MIDNAME='".$PREREG_MIDNAME."',  PREREG_LASTNAME='".$PREREG_LASTNAME."', PREREG_BDAY='".$PREREG_BDAY."' , PREREG_NCAE='".$PREREG_NCAE."', PREREG_GWA='".$PREREG_GWA."', PREREG_AITR='".$PREREG_AITR."', PREREG_CONTACT='".$PREREG_CONTACT."', PREREG_EMAILADD='".$PREREG_EMAILADD."', GRANT_ID=1, PREREG_DBLCHCK=0";
			
			paragUpdateDB::updateTable($preregqry);
			
			$showlinkqry=mysql_query("select * from prereg_tbl ORDER BY PREREG_ID DESC LIMIT 1");
			$row=mysql_fetch_array($showlinkqry);		
			$PREREG_ID=$row["PREREG_ID"];
			$to = $PREREG_EMAILADD;
			$subject = "StuFAP Pre-Registration";
			$message = " 
			Commision on Higher Education Region-VIII			<br />
			Cor. Rea Street and Calanipawan Road,			<br />
			Sagkahan, Tacloban City
			<br /><br />Dear ".mb_strtoupper($PREREG_LASTNAME).", ".mb_strtoupper($PREREG_FIRSTNAME)." ".mb_strtoupper($PREREG_MIDNAME)."
			<br /><br />
			Based On The Following Data:
			<br /><br />
			<table>
			<tr><td>GWA:</td><td>".$PREREG_GWA."</td></tr>
			<tr><td>NCAE:</td><td>".$PREREG_NCAE."</td></tr>
			<tr><td>Annual ITR:</td><td>".$PREREG_AITR."</td></tr>
			</table>
			<br /><br />
			Commission on Higher Education Region-VIII has suggested you to apply for the Full Merit Scholarship. This program is for bright Filipinos students who got the highest score in the NCAE and must belong to the top ten of the graduating class. Scholars under this program can enroll in any government or private college/university HEIs with parent whose Annual Income Tax Return of not less than P300,000.00. 
				<br /><br />
			 Please submit the hard copy of your requirements to CHED R08 before the deadline date. Fill up your complete Registration in the Oss Form. Click the link below or copy paste it into the url of your browser.
		<br /><br />
			
			<a href='ossform.php?formno=1&PREREG_ID=".$PREREG_ID."'  target='_blank'>ossform.php?formno=1&PREREG_ID=".$PREREG_ID."</a>
		<br /><br />
			You can view other Student Financial Assistance Program Here:
	<br /><br />
			<a href='stufap.php' target='_blank'>stufap.php</a> 
	<br /><br />
	Sincerely Yours.
	<br />
	Antonio M. Lim
	<br />
	Education Supervisor, CHED Region-VIII
	";
			$from = " roniel44.6te.net@6te.net";
			$headers = "From:" . $from;
			//mail($to,$subject,$message,$headers);
			echo $message;
			
		}//end full merit
		else if(($PREREG_Q1==1)&&($PREREG_Q2==2)&&($PREREG_Q3==1)&&($PREREG_NCAE<90&&$PREREG_NCAE>=85||$PREREG_NCAE>=90)&&($PREREG_GWA<90&&$PREREG_GWA>=85||$PREREG_GWA>=90)&&($PREREG_AITR<=300000))
		{
			
			$preregqry="insert into prereg_tbl set PREREG_FIRSTNAME='".$PREREG_FIRSTNAME."',  PREREG_MIDNAME='".$PREREG_MIDNAME."',  PREREG_LASTNAME='".$PREREG_LASTNAME."', PREREG_BDAY='".$PREREG_BDAY."' , PREREG_NCAE='".$PREREG_NCAE."', PREREG_GWA='".$PREREG_GWA."', PREREG_AITR='".$PREREG_AITR."', PREREG_CONTACT='".$PREREG_CONTACT."', PREREG_EMAILADD='".$PREREG_EMAILADD."', GRANT_ID=2, PREREG_DBLCHCK=0";
			
			paragUpdateDB::updateTable($preregqry);
			
			$showlinkqry=mysql_query("select * from prereg_tbl ORDER BY PREREG_ID DESC LIMIT 1");
			$row=mysql_fetch_array($showlinkqry);		
			$PREREG_ID=$row["PREREG_ID"];
			$subject = "StuFAP Pre-Registration";
			$to = $PREREG_EMAILADD;
			$message = " 
			Commision on Higher Education Region-VIII			<br />
			Cor. Rea Street and Calanipawan Road,			<br />
			Sagkahan, Tacloban City
			<br /><br />Dear ".mb_strtoupper($PREREG_LASTNAME).", ".mb_strtoupper($PREREG_FIRSTNAME)." ".mb_strtoupper($PREREG_MIDNAME)."
			<br /><br />
			Based On The Following Data:
			<br /><br />
			<table>
			<tr><td>GWA:</td><td>".$PREREG_GWA."</td></tr>
			<tr><td>NCAE:</td><td>".$PREREG_NCAE."</td></tr>
			<tr><td>Annual ITR:</td><td>".$PREREG_AITR."</td></tr>
			</table>
			<br /><br />
			Commission on Higher Education Region-VIII has suggested you to apply for the Half Merit Scholarship. For bright Filipino students who got a percentile NCAE rating score of 85 to 89. Scholars under this program shall enroll in any government or private HEIs. It also includes Persons With Disabilities (PWDS).
				<br /><br />
			 Please submit the hard copy of your requirements to CHED R08 before the deadline date. Fill up your complete Registration in the Oss Form. Click the link below or copy paste it into the url of your browser.
		<br /><br />
			
			<a href='ossform.php?formno=1&PREREG_ID=".$PREREG_ID."'  target='_blank'>ossform.php?formno=1&PREREG_ID=".$PREREG_ID."</a>
		<br /><br />
			You can view other Student Financial Assistance Program Here:
	<br /><br />
			<a href='stufap.php' target='_blank'>stufap.php</a> 
	<br /><br />
	Sincerely Yours.
	<br />
	Antonio M. Lim
	<br />
	Education Supervisor, CHED Region-VIII
	";
			$from = " roniel44.6te.net@6te.net";
			$headers = "From:" . $from;
			//mail($to,$subject,$message,$headers);
			echo $message;
		}//end half merit
		
		
		else if(($PREREG_Q1==1)||($PREREG_Q1==2)&&($PREREG_Q2==2)&&($PREREG_Q3==1)&&($PREREG_NCAE<85&&$PREREG_NCAE>=80||$PREREG_NCAE>=85)&&($PREREG_GWA<85&&$PREREG_GWA>=80||$PREREG_GWA>=85)&&($PREREG_AITR<=300000))
		{
			
			
		$preregqry="insert into prereg_tbl set PREREG_FIRSTNAME='".$PREREG_FIRSTNAME."',  PREREG_MIDNAME='".$PREREG_MIDNAME."',  PREREG_LASTNAME='".$PREREG_LASTNAME."', PREREG_BDAY='".$PREREG_BDAY."' , PREREG_NCAE='".$PREREG_NCAE."', PREREG_GWA='".$PREREG_GWA."', PREREG_AITR='".$PREREG_AITR."', PREREG_CONTACT='".$PREREG_CONTACT."', PREREG_EMAILADD='".$PREREG_EMAILADD."', GRANT_ID=3, PREREG_DBLCHCK=0";
			
			paragUpdateDB::updateTable($preregqry);
			
			$showlinkqry=mysql_query("select * from prereg_tbl ORDER BY PREREG_ID DESC LIMIT 1");
			$row=mysql_fetch_array($showlinkqry);		
			$PREREG_ID=$row["PREREG_ID"];
			
			$to = $PREREG_EMAILADD;
			$subject = "StuFAP Pre-Registration";
			
			$message = " 
			Commision on Higher Education Region-VIII			<br />
			Cor. Rea Street and Calanipawan Road,			<br />
			Sagkahan, Tacloban City
			<br /><br /> Dear ".mb_strtoupper($PREREG_LASTNAME).", ".mb_strtoupper($PREREG_FIRSTNAME)." ".mb_strtoupper($PREREG_MIDNAME)."
			<br /><br />
			Based On The Following Data:
			<br /><br />
			<table>
			<tr><td>GWA:</td><td>".$PREREG_GWA."</td></tr>
			<tr><td>NCAE:</td><td>".$PREREG_NCAE."</td></tr>
			<tr><td>Annual ITR:</td><td>".$PREREG_AITR."</td></tr>
			</table>
			<br /><br />
			Commission on Higher Education Region-VIII has suggested you to apply for the Grant In Aid/Student Loan Programs.
			<br /><br />
			 The Following Are the Student Financial Assistance Programs you can apply for
			 <table border=1>
			 <tr>
			 <td>STUDY GRANT PROGRAM FOR SOLO PARENTS AND THEIR DEPENDENTS</td><td>This program is intended for all solo parents and their children.</td>
			 </tr>
			 <tr>
			 <td>DND-CHED-PASUC STUDY GRANT PROGRAM</td><td>This grant-program is intended for dependents of killed-in-action (KIA), battle related, Complete Disability Discharged (CDD-Combat) and active Military Personnel of the Armed Forces of the Philippines. Educational benefit given to children of KIA-CDD Combat in order to contribute to the enhancement of our soldiers to fight by ensuring their children's education.</td>
			 </tr>
			 <tr>
			 <td>OPAPP-CHED STUDY GRANT PROGRAM FOR REBEL RETURNEES</td><td>This grant-program is intended for former rebels and the legitimate/legitimized dependents which  expands the access to college education opportunities.</td>
			 </tr>
			 <tr>
			 <td>CHED SPECIAL STUDY GRANT PROGRAM FOR CONGRESSIONAL DISTRICT/SENATE</td><td>This grant-program is intended for the constituents for Congressmen, Party List Representatives, and Senators.</td>
			 </tr>
			 <tr>
			 <td>Study Now Pay Later Plan (SNPLP)</td><td>Study Now Pay Later Plan (SNPLP) - This program is designed to promote democratization of access to educational opportunities in the tertiary level to poor but deserving students through financial assistance in the form of an educational loan. It is a scheme that extends loan or credit to poor but deserving students who are entering freshman college or tertiary students with college units earned .</td>
			 </tr>
			 </table>
			 <br /><br />
			 Please submit the hard copy of your requirements to CHED R08 before the deadline date. Fill up your complete Registration in the Oss Form. Click the link below or copy paste it into the url of your browser.
		<br /><br />
			
			<a href='ossform.php?formno=1&PREREG_ID=".$PREREG_ID."' target='_blank'>ossform.php?formno=1&PREREG_ID=".$PREREG_ID."</a>
		<br /><br />
			You can view other Student Financial Assistance Program Here:
	<br /><br />
			<a href='stufap.php' target='_blank'>stufap.php</a> 
	<br /><br />
	Sincerely Yours.
	<br />
	Antonio M. Lim
	<br />
	Education Supervisor, CHED Region-VIII
	";
	$from = " roniel44.6te.net@6te.net";
			$headers = "From:" . $from;
			//mail($to,$subject,$message,$headers);
			echo $message;
			echo "<br />Mail Sent.";
		}//end suggested student loan
	}
	else if($PREREG_AGE>30)
	{
		echo"";
		$to = $PREREG_EMAILADD;
		$subject = "StuFAP Pre-Registration Denied.";
		$message = "We are sorry ".$PREREG_LASTNAME.", ".$PREREG_FIRSTNAME." ".$PREREG_MIDNAME." . You have surpassed to the maximum age limit being ".$PREREG_AGE.". Your Preregistration for Commission on region 8 Student Financial Application has been denied.".$PREREG_BDAY;
		$from = " roniel44.6te.net@6te.net";
		$headers = "From:" . $from;
		//mail($to,$subject,$message,$headers);
	//	echo $message;
	echo"	<script>alert('".$message."')</script>";
			echo "<script>history.back();</script>";
//		echo "<br />Mail Sent.";
	}
	else if($PREREG_AGE<13)
	{
		echo"";
		$to = $PREREG_EMAILADD;
		$subject = "StuFAP Pre-Registration";
		$message = "We are sorry ".$PREREG_LASTNAME.", ".$PREREG_FIRSTNAME." ".$PREREG_MIDNAME.".  You have entered an illegal age ".$PREREG_AGE.". Your Pre-Registration for Commission on Region-VIII Student Financial Application has been denied.";
		$from = " roniel44.6te.net@6te.net";
		$headers = "From:" . $from;
		//mail($to,$subject,$message,$headers);
	//	echo $message;
	echo"	<script>alert('".$message."')</script>";
			echo "<script>history.back();</script>";
//		echo "<br />Mail Sent.";
	}
}
else
{
	echo"	<script>alert('PLEASE FILL ALL FIELDS')</script>";
			echo "<script>history.back();</script>";
}

?>