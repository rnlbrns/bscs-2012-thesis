<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
require_once("header.php");
$fw=$_POST['fw'];

			
   class sulodHiniNgaPage
   {
   		function showTable($PROG_ID,$PROG_CODE,$PROGCLASS_ID,$PROG_NAM,$PROG_YRS,$nagAno,$asya)
		{
			echo "	<center><form method='POST' action='COURSES_UPDATE.php?nagAno=".$nagAno."'>
				<input type='hidden' name='PROG_ID' value=".$PROG_ID.">
				<br /><h3>Update Program: ".$PROG_CODE."</h3><br />
				<table border='0'>
				<tr>
								<td align='right'><b>PROGRAM Code :</b></td>
								<td><input type='text' name='PROG_CODE' id='PROG_CODE' value=".$PROG_CODE."></td>
							</tr>
							<tr>
								<td align='right'><b>Category :</b></td>
								<td>
								<select name='PROGCLASS_ID' id='PROGCLASS_ID'>
								";
								
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
								<td><input type='text' name='PROG_NAM' id='PROG_NAM' value='".$PROG_NAM."'></td>
							</tr>
							<tr>
								<td align='right'><b>Years :</b></td>
								<td><input type='text' name='PROG_YRS' id='PROG_YRS' value=".$PROG_YRS."></td>
							</tr>
							<tr>
								<td align='right'><b>Discipline</b></td>
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
			echo " </table>
					<input type='submit' value='".$asya."'>
					<input type='button' value='Cancel' onClick='history.back();'>
					</form>";
		}
	}
		if ($_GET["nagAno"]==1)
		{	
					$PROG_ID=$_POST["PROG_ID"];			
					$PROG_CODE=$_POST["PROG_CODE"];
					$PROGCLASS_ID=$_POST["PROGCLASS_ID"];
					$PROG_NAM=$_POST["PROG_NAM"];
					$PROG_YRS=$_POST["PROG_YRS"];
					$PROG_DISC=$_POST["PROG_DISC"];

			$qry="update program_tbl set PROG_CODE='".$PROG_CODE."', PROGCLASS_ID='".$PROGCLASS_ID."' , PROG_NAM='".$PROG_NAM."' , PROG_YRS=".$PROG_YRS." , PROG_DISC='".$PROG_DISC."'  where PROG_ID=".$PROG_ID;
			paragUpdateDB::updateTable($qry);
			echo "<script>alert('PROGRAM ".$PROG_CODE." UPDATED!')</script>";
			echo "<script>window.location.href='COURSES_MANAGEMENT.php'</script>";
		}
		
		if ($fw=='Edit')
		{	$PROG_ID=$_POST["PROG_ID"];
			if(empty($PROG_ID))
			{	
			echo "<script>alert('SELECT A PROGRAM!')</script>";
			echo "<script>window.location.href='COURSES_MANAGEMENT.php'</script>";
			}
			konekServer::abriDB();
			$qry="select * from program_tbl where PROG_ID=".$PROG_ID;
			$kuery=mysql_query($qry);
			if (mysql_num_rows($kuery)>0)
			{	
			$row=mysql_fetch_array($kuery);
					$PROG_ID=$row["PROG_ID"];
					$PROG_CODE=$row["PROG_CODE"];
					$PROGCLASS_ID=$row["PROGCLASS_ID"];
					$PROG_NAM=$row["PROG_NAM"];
					$PROG_YRS=$row["PROG_YRS"];
			}
			$sulod=new sulodHiniNgaPage();
			$butnga=new paragLayOut();
			$butnga->butngaSulod($sulod->showTable($PROG_ID,$PROG_CODE,$PROGCLASS_ID,$PROG_NAM,$PROG_YRS, '1', 'Update'));
			}
		/*else if ($_GET["nagAno"]==2)
		{	$PROG_ID=$_POST["PROG_ID"];
			$userLogName=$_POST["userLogName"];
			$userFullName=$_POST["userFullName"];
			$qry="delete systemuser set userLogName='".$userLogName."', userFullName='".$userFullName."' where userId=".$userId;
			paragUpdateDB::updateTable($qry);
			echo "<script>window.location.href='index.php'</script>";
		}*/

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
