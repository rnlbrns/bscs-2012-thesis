<?php
require_once('a-connection.php');
$SC_USERNAM = $_POST['SC_USERNAM'];
$SC_PASS = $_POST['SC_PASS'];
konekServer::abriDB();
if(!empty($SC_USERNAM)&&!empty($SC_PASS))
{ 
	

	$adminLoginQuery = "Select * from coordinator_tbl a, hei_tbl b where a.HEI_ID=b.HEI_ID and a.SC_USERNAM='".$SC_USERNAM."' and a.SC_PASS='".$SC_PASS."';";
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
		
	echo "<script>alert('Welcome Scholarship Coordinator ".$logIn['SC_NAM3'].", ".$logIn['SC_NAM1']." ".$logIn['SC_NAM2']." ');
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
