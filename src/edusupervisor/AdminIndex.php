<?php
session_start();
if (session_is_registered(UserName))
{
	require_once("universalclass.php");
	require_once("DBConnection.php");
	$abri=new CommandDB;
	
	require_once("dateFrom.php");
	require_once("dateTo.php");
	$middle="
	<table  width='100%'>
	<tr>
		<td width='40%'><img src='image/admin.png' width='350' height='300'><td>
		<td>
			<table style='background-repeat:no-repeat; border:solid; border-color:#f3f3f3; border-width: 2px;-moz-border-radius-topleft: 5px; -moz-border-radius-topright: 5px; -moz-border-radius-bottomleft: 5px; -moz-border-radius-bottomright: 5px; background-color:#FFFFFF;width:100%; height:auto;  '>";
								
	$bulanFrom=$_POST["bulanFrom"];
		if ($bulanFrom=="") $dateFromMonth=date("m");
		else
		{
			$bulanFrom++;
			if (strlen($bulanFrom)==1) $dateFromMonth="0".$bulanFrom;
			else $dateFromMonth=$bulanFrom;
		}
		
		$pitsaFrom=$_POST["pitsaFrom"];
		if (empty($pitsaFrom)) $dateFromDate=date("d");
		else
		{	
			if (strlen($pitsaFrom)==1) $dateFromDate="0".$pitsaFrom;
			else $dateFromDate=$pitsaFrom;
		}
			
		$tuigFrom=$_POST["tuigFrom"];
		if (empty($tuigFrom)) $dateFromYear=date("Y");
		else $dateFromYear=$tuigFrom;
					
		$bulanTo=$_POST["bulanTo"];
		if ($bulanTo=="") $dateToMonth=date("m");
		else
		{	
			$bulanTo++;
			if (strlen($bulanTo)==1) $dateToMonth="0".$bulanTo;
			else $dateToMonth=$bulanTo;
		}
				
		$pitsaTo=$_POST["pitsaTo"];
		if (empty($pitsaTo)) $dateToDate=date("d");
		else
		{
			if (strlen($pitsaTo)==1) $dateToDate="0".$pitsaTo;
			else $dateToDate=$pitsaTo;
		}
					
		$tuigTo=$_POST["tuigTo"];
		if (empty($tuigTo)) $dateToYear=date("Y");
		else $dateToYear=$tuigTo;
									
		$fromPitsa=$dateFromYear."-".$dateFromMonth."-".$dateFromDate;
		$toPitsa=$dateToYear."-".$dateToMonth."-".$dateToDate;
						
$middle.="<form action='AdminIndex.php' method='POST' name='ViewAuditTrail'>																
  			<tr>
    			<td colspan='3'><font size='2'>Date Range:
    			<font size='2'>From:
   				".dateFrom("bulanFrom","pitsaFrom","tuigFrom",$dateFromMonth,$dateFromDate,$dateFromYear,2008)."
  				To:
   				".dateTo("bulanTo","pitsaTo","tuigTo",$dateToMonth,$dateToDate,$dateToYear,2008)."</td>
  			</tr>";
		if(!empty($_POST["sysUserID"]) && $_POST["sysUserID"]!='0')
		{
			$ListAuditTrail="select sysUserID, LogActivity, date_format(transdate, '%M %d %Y') as dtransdates from audittrail where sysUserID=".$_POST["sysUserID"]." and date_format(transdate, '%Y %m %d') >=  date_format('".$fromPitsa."', '%Y %m %d') and date_format(transdate, '%Y %m %d') <=  date_format('".$toPitsa."', '%Y %m %d') order by AuditID DESC;";
		}
		else
		{
			$ListAuditTrail="select sysUserID, LogActivity, date_format(transdate, '%M %d %Y') as dtransdates from audittrail where date_format(transdate, '%Y %m %d') >=  date_format('".$fromPitsa."', '%Y %m %d') and date_format(transdate, '%Y %m %d') <=  date_format('".$toPitsa."', '%Y %m %d') order by AuditID DESC;";
		}
			$ListAuditTrailQuery=mysql_query($ListAuditTrail);
			$ihap=mysql_num_rows($ListAuditTrailQuery); 
  $middle.="</tr>
  			<tr>
    			<td colspan='2'><font size='2'>Records Found: <font size='2'>".$ihap."</td>
  			</tr>
  			<tr>
    			<td colspan='3'>
					<style type='text/css'>
						<!--
						.style3 {font-size: 12px; font-weight: bold; color: #FFFFFF;}
						-->
					</style>
					<table width='100%' id = 'display' border='1'  style = 'border-collapse:collapse;' class='sortable display'>
  					<tr >
    					<td width='109' align='center' bgcolor='#f3f3f3' class='style13' style='font:Arial;'><font color='#0099ff'>User Name</font></td>
    					<td width='148' align='center' bgcolor='#f3f3f3' class='style13' style='font:Arial;'><font color='#0099ff'>User</font></td>
    					<td width='107' align='center' bgcolor='#f3f3f3' class='style13' style='font:Arial;'><font color='#0099ff'>Date</font></td>
    					<td width='10' align='center' bgcolor='#f3f3f3' class='style13' style='font:Arial;'><font color='#0099ff'>Activity</font></td>";
									
		if($ihap>0)
		{
			$changeColor="ListOfUserRow2";
			while($AuditRecords=mysql_fetch_array($ListAuditTrailQuery))
			{
				$AuditUser="";
					if(!empty($AuditRecords["sysUserID"]))
					{
						$getUser=mysql_fetch_array(mysql_query("select FirstName, MiddleName, LastName from systemuser where sysUserID=".$AuditRecords["sysUserID"]));
						$getAccount=mysql_fetch_array(mysql_query("select UserName from systemaccount where sysUserID=".$AuditRecords["sysUserID"]));
						$AuditUser=ucwords($getUser["FirstName"])." ".ucwords($getUser["MiddleName"])." ".ucwords($getUser["LastName"]);
						$Username=ucwords($getAccount["UserName"]);
					}
					else
					{
						$AuditUser="UNKNOWN";
					}
											
					if($changeColor=="ListOfUserRow2")
					{
						$changeColor="ListOfUserRow1";
					}
					else
					{
						$changeColor="ListOfUserRow2";
					}
	$middle.="		<tr class='".$changeColor."'>
						<td align='center'>".$Username."</td>
						<td align='center'>".$AuditUser."</td>
						<td align='center'>".$AuditRecords["dtransdates"]."</td>
						<td align='center'>".ucwords($AuditRecords["LogActivity"])."</td>
					</tr>";
				}
			}
			else
			{
	$middle.="		<tr>
						<td class='ListOfUserRow1' align='center' colspan='5'>****** No record found ******</td>
					</tr>";
			}									
	$middle.="	</table>			
				<div align='center' id='pageNavPosition'></div>
				<script type='text/javascript'>
				 	var pager = new Pager('display', 15);
        			pager.init(); 
        			pager.showPageNav('pager', 'pageNavPosition'); 
        			pager.showPage(1);
				</script>
			</form>
		</td>
  	</tr>
</table>
</td>
</tr>
</table>";
	echo SystemClass::Template($middle);
}
else
{	
	$url="index.php";
	mysql_query("insert audittrail set LogActivity='System Error.', transdate=now(), machineAddress='".$_SERVER['REMOTE_ADDR']."';");
	
	$watToDo="Please Log-in to gain access";
	echo "	<script>alert('".$watToDo."');</script>
			<meta http-equiv='refresh' content='0; URL=".$url."'>";
	session_unregister($_POST["UserName"]);
	session_destroy();
}
?>
