<?php
require_once('a-connection.php');
$edusupervisorUsername = $_POST['edusupervisorUsername'];
$edusupervisorPassword = $_POST['edusupervisorPassword'];
konekServer::abriDB();
if(!empty($edusupervisorUsername)&&!empty($edusupervisorPassword))
{ 
	

	$adminLoginQuery = "Select * from edusupervisor where edusupervisorUsername='".$edusupervisorUsername."' and edusupervisorPassword='".$edusupervisorPassword."';";
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
	
	/*konekServer::abriDB();
	$adminLoginAuditTrailQuery="insert audittrailtable set username='".$username."', ginHimo='Log-in',userTypeNaGinamit='Administrator';";
	$kuery=mysql_query($adminLoginAuditTrailQuery);
	paragUpdateDB::updateTable($kweryKo);*/
		
	echo "<script>alert('Welcome Education Supervisor ".$logIn['edusupervisorNAM1']." ".$logIn['edusupervisorNAM3']."');
				window.location.href='HOME.php';
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



}
else if (empty($edusupervisorUsername) || empty($edusupervisorUsername))
{
	
		echo "<script>alert('Pag-Input oi!');
				window.location.href='index.php';
			</script>";
}		
?> 
