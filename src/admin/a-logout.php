<?php
require_once("a-connection.php");
/*
$userID=$_SESSION['adminID'];
$username=$_SESSION['adminUsername'];
$adminPassword=$_SESSION['adminPassword'];

$auditTrailKwery="insert into auditTrailTable set username='".$username."',ginHimo='Log-out',userTypeNaGinamit='".$userTypeNaGinamit."',userFullName='".$_SESSION['userFullName']."'";

paragUpdateDB::updateTable($auditTrailKwery);
session_unregister(username);*/	
session_start();
konekServer::abriDB();

	$audittrailquery=mysql_query("insert into audittrail_tbl set audittrail_username='admin',  audittrail_activity='Log-Out', audittrail_time=now() ") or die(mysql_error());	

	
session_destroy(); 

echo "<script language='JavaScript'>
		alert('You Are now Logged-Out');
		window.location.href='../index.php';
		</script>";

?>
