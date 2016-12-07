<?php

require_once("a-connection.php");

if($_GET["add"]=1){
$GRANT_ID=$_POST["GRANT_ID"];	
$APP_FIRSTNAME=$_POST["APP_FIRSTNAME"];	
$APP_MIDNAME=$_POST["APP_MIDNAME"];	
$APP_LASTNAME=$_POST["APP_LASTNAME"];	
$APP_BDAY=$_POST["APP_BDAY"];	
$APP_BPLACE=$_POST["APP_BPLACE"];	
$APP_CSTAT=$_POST["APP_CSTAT"];	
$APP_GENDER=$_POST["APP_GENDER"];	
$APP_CITI=$_POST["APP_CITI"];	
$APP_RELI=$_POST["APP_RELI"];	
$APP_MAILADD=$_POST["APP_MAILADD"];	
$APP_CONGDIST=$_POST["APP_CONGDIST"];	
$APP_PERMADD=$_POST["APP_PERMADD"];	
$APP_HSNAM=$_POST["APP_HSNAM"];	
$APP_HSADD=$_POST["APP_HSADD"];	
$APP_HSTYP=$_POST["APP_HSTYP"];	
$APP_HSYR=$_POST["APP_HSYR"];	
$APP_GWA=$_POST["APP_GWA"];	
$APP_HSRANK=$_POST["APP_HSRANK"];	
$APP_NCAESCR=$_POST["APP_NCAESCR"];	
$APP_NCAEDATE=$_POST["APP_NCAEDATE"];	
$APP_GRADDATE=$_POST["APP_GRADDATE"];	
$APP_FATSTAT=$_POST["APP_FATSTAT"];	
$APP_FATFIRSTNAME=$_POST["APP_FATFIRSTNAME"];	
$APP_FATMIDNAME=$_POST["APP_FATMIDNAME"];	
$APP_FATLASTNAME=$_POST["APP_FATLASTNAME"];	
$APP_FATADD=$_POST["APP_FATADD"];	
$APP_FATJOB=$_POST["APP_FATJOB"];	
$APP_MOTSTAT=$_POST["APP_MOTSTAT"];	
$APP_MOTFIRSTNAME=$_POST["APP_MOTFIRSTNAME"];	
$APP_MOTMIDNAME=$_POST["APP_MOTMIDNAME"];	
$APP_MOTLASTNAME=$_POST["APP_MOTLASTNAME"];	
$APP_MOTADD=$_POST["APP_MOTADD"];	
$APP_MOTJOB=$_POST["APP_MOTJOB"];	
$APP_COURSEFACTOR=$_POST["APP_COURSEFACTOR"];	
$APP_HEIPREF=$_POST["APP_HEIPREF"];	
$APP_SIBNO=$_POST["APP_SIBNO"];	
$APP_AITR=$_POST["APP_AITR"];		
$APP_CONTACT=$_POST["APP_CONTACT"];
$APP_EMAILADD=$_POST["APP_EMAILADD"];	

if(empty($APP_SIBNO) || empty($APP_BPLACE) || empty($APP_MAILADD) || empty($APP_PERMADD) || empty($APP_HSNAM) || empty($APP_HSADD) || empty($APP_FATFIRSTNAME) || empty($APP_FATMIDNAME) || empty($APP_FATLASTNAME) || empty($APP_FATADD) || empty($APP_FATJOB) || empty($APP_MOTFIRSTNAME) || empty($APP_MOTMIDNAME) || empty($APP_MOTLASTNAME) || empty($APP_MOTADD) || empty($APP_MOTJOB))
{

	echo"	<script>alert('PLEASE FILL ALL FIELDS')</script>";
			echo "<script>history.back();</script>";
}
else{
$newAppFullMerit="INSERT INTO `ched`.`app_tbl` (
`APP_ID` ,
`GRANT_ID` ,
`APP_FIRSTNAME` ,
`APP_MIDNAME` ,
`APP_LASTNAME` ,
`APP_BDAY` ,
`APP_BPLACE` ,
`APP_CSTAT` ,
`APP_GENDER` ,
`APP_CITI` ,
`APP_RELI` ,
`APP_MAILADD` ,
`APP_CONGDIST` ,
`APP_PERMADD` ,
`APP_HSNAM` ,
`APP_HSADD` ,
`APP_HSTYP` ,
`APP_HSYR` ,
`APP_GWA` ,
`APP_HSRANK` ,
`APP_NCAESCR` ,
`APP_NCAEDATE` ,
`APP_GRADDATE` ,
`APP_FATSTAT` ,
`APP_FATFIRSTNAME` ,
`APP_FATMIDNAME` ,
`APP_FATLASTNAME` ,
`APP_FATADD` ,
`APP_FATJOB` ,
`APP_MOTSTAT` ,
`APP_MOTFIRSTNAME` ,
`APP_MOTMIDNAME` ,
`APP_MOTLASTNAME` ,
`APP_MOTADD` ,
`APP_MOTJOB` ,
`APP_COURSEFACTOR` ,
`APP_HEIPREF` ,
`APP_SIBNO` ,
`APP_AITR` ,
`APP_CONTACT` ,
`APP_EMAILADD` ,
`APP_DATEAPP`
)
VALUES (
NULL , '".$GRANT_ID."', '".$APP_FIRSTNAME."', '".$APP_MIDNAME."', '".$APP_LASTNAME."', '".$APP_BDAY."', '".$APP_BPLACE."', '".$APP_CSTAT."', '".$APP_GENDER."', '".$APP_CITI."', '".$APP_RELI."', '".$APP_MAILADD."', ".$APP_CONGDIST.", '".$APP_PERMADD."', '".$APP_HSNAM."', '".$APP_HSADD."', '".$APP_HSTYP."', '".$APP_HSYR."', '".$APP_GWA."', '".$APP_HSRANK."', '".$APP_NCAESCR."', '".$APP_NCAEDATE."', '".$APP_GRADDATE."', '".$APP_FATSTAT."', '".$APP_FATFIRSTNAME."', '".$APP_FATMIDNAME."', '".$APP_FATLASTNAME."', '".$APP_FATADD."', '".$APP_FATJOB."', '".$APP_MOTSTAT."', '".$APP_MOTFIRSTNAME."', '".$APP_MOTMIDNAME."', '".$APP_MOTLASTNAME."', '".$APP_MOTADD."', '".$APP_MOTJOB."', '".$APP_COURSEFACTOR."', '".$APP_HEIPREF."', '".$APP_SIBNO."', '".$APP_AITR."',  '".$APP_CONTACT."',  '".$APP_EMAILADD."', CURDATE()
)";
paragUpdateDB::updateTable($newAppFullMerit);


$updateDBLCHKfullmerittbl=mysql_query("update prereg_tbl set PREREG_DBLCHCK=1 where PREREG_ID=".$_POST["PREREG_ID"]) or die(mysql_error());
}//end else
}//end add
?>
<html><head>
<script type='text/javascript'>
<!--
function delayer(){
    window.location = 'index.php'
}
//-->
</script>
</head>
<body  onLoad="setTimeout('delayer()', 2000)">
Please wait for at least 2 weeks for the confirmation of your registration. The confirmation will be sent to you via your email.
<br />
<a href='index.php'>Click here if the browser does not riderect you.</a>
</body></html>
