<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
require_once("header.php");
			
	class sulodHiniNgaPage
	{	function showTable()
		{	echo "	
		<center><h3>Add new Program</h3><br /><form method='post' action='COURSES_ADD.php?nagAno=1'>
						<table border='0'>
							<tr>
								<td align='right'><b>PROGRAM Code :</b></td>
								<td><input type='text' name='PROG_CODE' id='PROG_CODE'></td>
							</tr>
							<tr>
								<td align='right'><b>Category :</b></td>
								<td>
								<select name='PROGCLASS_ID' id='PROGCLASS_ID'>
								";
								//$connect = mysql_connect("localhost","root","") or die ("IG-ON AN WAMPSERVER!");
								//mysql_select_db("ched", $connect) or die("dre ak maaram magconect"); 
								konekServer::abriDB();
								$HEI="select * from progclass_tbl";
								$HEI_kuery=mysql_query($HEI) or die(mysql_error());
								$HEI_list=mysql_num_rows($HEI_kuery);														
								$ihap=0;
								while($HEI_list>$ihap)
								{
								$ihap++;
								$row=mysql_fetch_array($HEI_kuery);
								$PROGCLASS_ID=$row["PROGCLASS_ID"];
								$PROGCLASS_NAM=$row["PROGCLASS_NAM"];
								echo"<option value=".$PROGCLASS_ID.">".$PROGCLASS_NAM."</option>";
								}
								echo"</select></td>
							</tr>
							<tr>
								<td align='right'><b>Program Name:</b></td>
								<td><input type='text' name='PROG_NAM' id='PROG_NAM'></td>
							</tr>
							<tr>
								<td align='right'><b>Years :</b></td>
								<td><input type='text' name='PROG_YRS' id='PROG_YRS'></td>
							</tr>
							
							<tr align='right'>
								<td><b>Discipline :</b></td>
								<td>
								<select name='PROG_DISC'>
								<option value='BUSINESS'>BUSINESS</option>
								<option value='ENGINEERING'>ENGINEERING</option>
								<option value='EDUCATION'>EDUCATION</option>
								<option value='SCIENCE AND HEALTH RELATED'>SCIENCE AND HEALTH RELATED</option>
								<option value='LEGAL AND CRIMINILOGY'>LEGAL AND CRIMINILOGY</option>
								<option value='IT'>IT</option>
								<option value='HUSOCOM'>HUSOCOM</option>
								<option value='MARITIME'>MARITIME</option>
								</select>
								</td>
								</tr>
							";
		     echo " </table><br>
			 			<input type='submit' value='Save'>
						<input type='button' value='Cancel' onClick='history.back();'>
						</form></center>";
			}
		}
		if ($_GET["nagAno"]==1)
		{	
			//if(!empty($PROG_NAM) && !empty($PROG_STAT) & !empty($PROGCLASS_ID) && !empty($PROG_YRS) && !empty($PROG_FEECHAR) && !empty($PROG_FEEINT) && !empty($HEI_ID))
			//{
			
					$PROG_CODE=$_POST["PROG_CODE"];
					$PROGCLASS_ID=$_POST["PROGCLASS_ID"];
					$PROG_NAM=$_POST["PROG_NAM"];
					$PROG_YRS=$_POST["PROG_YRS"];
					$PROG_STAT=$_POST["PROG_STAT"];
					$PROG_DISC=$_POST["PROG_DISC"];
					
			$addnewProgramquery="INSERT INTO program_tbl (PROG_ID , PROG_CODE , PROG_NAM , PROGCLASS_ID ,PROG_YRS, PROG_DISC) 
			values(null,
			'".$PROG_CODE."',  
			'".$PROG_NAM."', 
			".$PROGCLASS_ID." 
			,".$PROG_YRS."
			,'".$PROG_DISC."'
			)";
			paragUpdateDB::updateTable($addnewProgramquery);
			echo "<script>alert('PROGRAM ".$PROG_NAM." ADDED!')</script>";
			echo "<script>window.location.href='COURSES_MANAGEMENT.php'</script>";
			/*}*/
		}
		else
		{	$sulod=new sulodHiniNgaPage();
			$butnga=new paragLayOut();
			$butnga->butngaSulod($sulod->showTable());
		}
require_once("footer.php");
?>
<?php
}
else
{
		echo "<script>
				window.location.href='index.php';
			</script>";
}
?>
