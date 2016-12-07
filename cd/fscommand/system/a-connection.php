<?php

 class konekServer
 {	function abriDB()
 	{	
	@$dServer=mysql_connect("localhost", "root", "");
	if (!$dServer)
	{	echo "Connection attempt to server failed. Immediately inform the System Admin please!".mysql_error();
		exit;
	}
	@$dBase=mysql_select_db("ched",$dServer);
	if (!$dBase)
	{	echo "Connection attempt to database failed. Immediately inform the System Admin please!".mysql_error();
		exit;
	}
	}
}
class paragUpdateDB
{	function updateTable($kuery)
    { konekServer::abriDB();
	  $kk=mysql_query($kuery);
    }
	function auditTrail ($nagAno, $hinoGamit)
	{	$k="insert auditTrail set userLogName='".$hinoGamit."',activity='".$nagAno."', transDate=now()";
		$this->updateTable($k);
	}
}
	class paragLayOut
	{
	function butangSulod($sulod)
	{ 
	echo  $sulod; }
}
/*
 * Mysql Ajax Table Editor
 *
 * Copyright (c) 2008 Chris Kitchen <info@mysqlajaxtableeditor.com>
 * All rights reserved.
 *
 * See COPYING file for license information.
 *
 * Download the latest version from
 * http://www.mysqlajaxtableeditor.com
 */
