<?php
require_once('a-connection.php');
$username = $_POST['username'];
$userpassword = $_POST['userpassword'];
$usertype = $_POST['usertype'];
konekServer::abriDB();
if(!empty($username)&&!empty($userpassword))
{ 
	
if($usertype=='1'){
	

	$adminLoginQuery = "Select * from sysadmin where adminUsername='".$username."' and adminPassword='".$userpassword."';";
	$deputa=mysql_query($adminLoginQuery) or die(mysql_error());	
	$isItTrue=mysql_num_rows($deputa);
	if($isItTrue>0){
	$logIn= mysql_fetch_array($deputa);
	session_start();
	session_register($_POST['adminUsername']);
	$_SESSION['adminID']=$logIn['adminID'];
	$_SESSION['URL_ADDRESS']="http://ronielbernas.6te.net/System/Admin/";
	$_SESSION['adminUserName']=$logIn['adminUserName'];
	$_SESSION['adminPassword']=$logIn['adminPassword'];
	$_SESSION['adminFullname']=$logIn['adminFullname'];
	
	$audittrailquery=mysql_query("insert into audittrail_tbl set audittrail_username='".$username."',  audittrail_activity='Log-In', audittrail_time=now() ") or die(mysql_error());	
	
	
	/*konekServer::abriDB();
	$adminLoginAuditTrailQuery="insert audittrailtable set username='".$username."', ginHimo='Log-in',userTypeNaGinamit='Administrator';";
	$kuery=mysql_query($adminLoginAuditTrailQuery);
	paragUpdateDB::updateTable($kweryKo);*/
		
	echo "<script>alert('Welcome Administrator');
				window.location.href='../system/admin/home.php';
			</script>";
	
	/*$auditTrailKwery="insert into auditTrailTable set adminUserName='".$_POST['username']."',ginHimo='Log-in',userTypeNaGinamit='".$userTypeNaGinamit."',userFullName='".$_SESSION['userFullName']."'";
	
	$query=mysql_query($auditTrailKwery);*/
	}
	
	else
	{
	echo "<script>alert('Incorrect username or password!!!');
				window.location.href='index.php';
			</script>";
	}
}//end usertype login admin


else if($usertype=='2'){
	$adminLoginQuery = "Select * from edusupervisor where edusupervisorUsername='".$username."' and edusupervisorPassword='".$userpassword."';";
	$deputa=mysql_query($adminLoginQuery) or die(mysql_error());	
	$isItTrue=mysql_num_rows($deputa);
	if($isItTrue>0){
	$logIn= mysql_fetch_array($deputa);
	session_start();
	session_register($_POST['edusupervisorUsername']);
	//$_SESSION['URL_ADDRESS']="http://localhost/system/system.admin/";
	$_SESSION['edusupervisorID']=$logIn['edusupervisorID'];
	$_SESSION['edusupervisorUsername']=$logIn['edusupervisorUsername'];
	$_SESSION['edusupervisorPassword']=$logIn['edusupervisorPassword'];
	$_SESSION['edusupervisorNAM3']=$logIn['edusupervisorNAM3'];
	$_SESSION['edusupervisorNAM2']=$logIn['edusupervisorNAM2'];
	$_SESSION['edusupervisorNAM1']=$logIn['edusupervisorNAM1'];
	
	$audittrailquery=mysql_query("insert into audittrail_tbl set audittrail_username='".$username."',  audittrail_activity='Log-In', audittrail_time=now() ") or die(mysql_error());	
	
	/*konekServer::abriDB();
	$adminLoginAuditTrailQuery="insert audittrailtable set username='".$username."', ginHimo='Log-in',userTypeNaGinamit='Administrator';";
	$kuery=mysql_query($adminLoginAuditTrailQuery);
	paragUpdateDB::updateTable($kweryKo);*/
		
	echo "<script>alert('Welcome Education Supervisor ".$logIn['edusupervisorNAM1']." ".$logIn['edusupervisorNAM3']."');
				window.location.href='../system/edusupervisor/home.php';
			</script>";
	
	/*$auditTrailKwery="insert into auditTrailTable set adminUserName='".$_POST['username']."',ginHimo='Log-in',userTypeNaGinamit='".$userTypeNaGinamit."',userFullName='".$_SESSION['userFullName']."'";
	
	$query=mysql_query($auditTrailKwery);*/
	}
	
	else
	{
	echo "<script>alert('Incorrect username or password!!!');
				window.location.href='index.php';
			</script>";
	}
}//end user education supervisor log-in
else if($usertype=='3'){
	

	$adminLoginQuery = "Select * from coordinator_tbl a, hei_tbl b where a.HEI_ID=b.HEI_ID and a.SC_USERNAM='".$username."' and a.SC_PASS='".$userpassword."';";
	$deputa=mysql_query($adminLoginQuery) or die(mysql_error());	
	$isItTrue=mysql_num_rows($deputa);
	if($isItTrue>0){
	$logIn= mysql_fetch_array($deputa);
	
	session_start();
	session_register($_POST['SC_USERNAM']);
	$_SESSION['URL_ADDRESS']="http://localhost/system/system.admin/";
	$_SESSION['SC_USERNAM']=$logIn['SC_USERNAM'];
	$_SESSION['HEI_NAM']=$logIn['HEI_NAM'];
	$_SESSION['HEI_MUN']=$logIn['HEI_MUN'];
	$_SESSION['HEI_PROV']=$logIn['HEI_PROV'];
	$_SESSION['SC_PASS']=$logIn['SC_PASS'];
	$_SESSION['SC_NAM3']=$logIn['SC_NAM3'];
	$_SESSION['SC_NAM2']=$logIn['SC_NAM2'];
	$_SESSION['SC_NAM1']=$logIn['SC_NAM1'];
	$_SESSION['HEI_ID']=$logIn['HEI_ID'];
	
	
	/*konekServer::abriDB();
	$adminLoginAuditTrailQuery="insert audittrailtable set username='".$username."', ginHimo='Log-in',userTypeNaGinamit='Administrator';";
	$kuery=mysql_query($adminLoginAuditTrailQuery);
	paragUpdateDB::updateTable($kweryKo);*/
		
	$audittrailquery=mysql_query("insert into audittrail_tbl set audittrail_username='".$username."',  audittrail_activity='Log-In', audittrail_time=now() ") or die(mysql_error());	
	
	echo "<script>alert('Welcome Scholarship Coordinator ".$logIn['SC_NAM3'].", ".$logIn['SC_NAM1']." ".$logIn['SC_NAM2']." ');
				window.location.href='../system/sc/home.php';
			</script>";
	
	/*$auditTrailKwery="insert into auditTrailTable set adminUserName='".$_POST['username']."',ginHimo='Log-in',userTypeNaGinamit='".$userTypeNaGinamit."',userFullName='".$_SESSION['userFullName']."'";
	
	$query=mysql_query($auditTrailKwery);*/
	}
	
	else
	{
	echo "<script>alert('Incorrect username or password!!!');
				window.location.href='index.php';
			</script>";
	}
}//end user scholarship coordinator log-in
else if($usertype=='4'){
	

	$adminLoginQuery = "Select * from director_tbl";
	$deputa=mysql_query($adminLoginQuery) or die(mysql_error());	
	$isItTrue=mysql_num_rows($deputa);
	if($isItTrue>0){
	$logIn= mysql_fetch_array($deputa);
	
	session_start();
	session_register($_POST['SC_USERNAM']);
	$_SESSION['URL_ADDRESS']="http://localhost/system/system.admin/";
	$_SESSION['directorID']=$logIn['directorID'];
	$_SESSION['directorUsername']=$logIn['directorUsername'];
	$_SESSION['HEI_MUN']=$logIn['directorPassword`'];
	$_SESSION['directorFullname']=$logIn['directorFullname'];
	
	$audittrailquery=mysql_query("insert into audittrail_tbl set audittrail_username='".$username."',  audittrail_activity='Log-In', audittrail_time=now() ") or die(mysql_error());	
	
	/*konekServer::abriDB();
	$adminLoginAuditTrailQuery="insert audittrailtable set username='".$username."', ginHimo='Log-in',userTypeNaGinamit='Administrator';";
	$kuery=mysql_query($adminLoginAuditTrailQuery);
	paragUpdateDB::updateTable($kweryKo);*/
		
	echo "<script>alert('Welcome CHED REGION-8 Director ".$logIn['directorFullname']." ');
				window.location.href='../system/director/home.php';
			</script>";
	
	/*$auditTrailKwery="insert into auditTrailTable set adminUserName='".$_POST['username']."',ginHimo='Log-in',userTypeNaGinamit='".$userTypeNaGinamit."',userFullName='".$_SESSION['userFullName']."'";
	
	$query=mysql_query($auditTrailKwery);*/
	}
	
	else
	{
	echo "<script>alert('Incorrect username or password!!!');
				window.location.href='index.php';
			</script>";
	}
}//end user scholarship coordinator log-in
}
else if (empty($username) || empty($userpassword))
{
	echo "<script>alert('Please Input all Fields!');
		window.location.href='index.php';
			</script>";
}		
?> 
