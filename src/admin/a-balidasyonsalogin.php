<?php
require_once('a-connection.php');
$adminUsername = $_POST['adminUsername'];
$adminPassword = $_POST['adminPassword'];
konekServer::abriDB();
if(!empty($adminUsername)&&!empty($adminPassword))
{ 
	

	$adminLoginQuery = "Select * from sysadmin where adminUsername='".$adminUsername."' and adminPassword='".$adminPassword."';";
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
	
	/*konekServer::abriDB();
	$adminLoginAuditTrailQuery="insert audittrailtable set username='".$username."', ginHimo='Log-in',userTypeNaGinamit='Administrator';";
	$kuery=mysql_query($adminLoginAuditTrailQuery);
	paragUpdateDB::updateTable($kweryKo);*/
		
	echo "<script>alert('Welcome Administrator');
				window.location.href='home.php';
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
else if (empty($adminUserName) || empty($adminPassword))
{
	
		echo "<script>alert('Pag-Input oi!');
				window.location.href='index.php';
			</script>";
}		
?> 
