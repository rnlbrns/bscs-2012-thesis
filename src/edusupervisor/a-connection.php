<?php

 class konekServer
 {	function abriDB()
 	{	@$dServer=mysql_connect("localhost", "root","");
	if (!$dServer)
	{	echo "Connection attempt to server failed. Immediately inform the System Admin please!";
		exit;
	}
	@$dBase=mysql_select_db("ched");
	if (!$dBase)
	{	echo "Connection attempt to database failed. Immediately inform the System Admin please!";
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
	{	function _construct()
		{	$hdr="STI College Tacloban<hr>";
		echo $hdr;
	}
	
		function _destruct()
	{	$ftr="<hr>&copy; Copyright 2008. Allrights reserved.";
		echo $ftr;
	}
	function butangSulod($sulod)
	{ echo  $sulod; }
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
class Common
{		
	// Mysql Variables
	var $mysqlUser = 'root';
	var $mysqlDb = 'ched';
	var $mysqlHost = 'localhost';
	var $mysqlDbPass = '';
	
	var $langVars;
	var $dbc;
	
	function mysqlConnect()
	{
		if($this->dbc = mysql_connect($this->mysqlHost, $this->mysqlUser, $this->mysqlDbPass)) 
		{	
			if(!mysql_select_db ($this->mysqlDb))
			{
				$this->logError(sprintf($this->langVars->errNoSelect,$this->mysqlDb),__FILE__, __LINE__);
			}
		}
		else
		{
			$this->logError($this->langVars->errNoConnect,__FILE__, __LINE__);
		}
	}
	
	function logError($message, $file, $line)
	{
		$message = sprintf($this->langVars->errInScript,$file,$line,$message);
		var_dump($message);
		die;
	}


	function displayHeaderHtml()
	{
		?>
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
		"http://www.w3.org/TR/html4/loose.dtd">
		<html>
		<head>
		<title>Comission on Higher Education Region VIII: Student Financial Assistance Program</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<link href="css/table_styles.css" rel="stylesheet" type="text/css" />
			<link href="css/icon_styles.css" rel="stylesheet" type="text/css" />
			
			<script type="text/javascript" src="js/prototype.js"></script>
			<script type="text/javascript" src="js/scriptaculous-js/scriptaculous.js"></script>
			<script type="text/javascript" src="js/lang/lang_vars-en.js"></script>
			<script type="text/javascript" src="js/ajax_table_editor.js"></script>
			
			<!-- calendar files -->
			<link rel="stylesheet" type="text/css" media="all" href="js/jscalendar/skins/aqua/theme.css" title="win2k-cold-1" /> 
			<script type="text/javascript" src="js/jscalendar/calendar.js"></script>
			<script type="text/javascript" src="js/jscalendar/lang/calendar-es.js"></script>
			<script type="text/javascript" src="js/jscalendar/calendar-setup.js"></script>

		</head>	
		<body>
		<?php
	}	
	
	function displayFooterHtml()
	{
		?>
		</body>
		</html>
		<?php
	}	

}
?>
	

	 

	
 