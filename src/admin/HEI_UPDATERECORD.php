<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
require_once("header.php");
konekServer::abriDB();
if(!(empty($_POST["HEI_ID"])))
{
class classShowHeiUpdateRecord{
   		function functionShowHeiUpdateRecord($HEI_ID,$HEI_NAM,$HEITYPE_ID,$HEI_MUN,$HEI_PROV,$HEI_TELNUM,$HEI_ACRONAM,$nagAno,$asya){
			echo "<form method='POST' action='HEI_UPDATERECORD.php?nagAno=".$nagAno."'>
				<input type='hidden' name='HEI_ID' id='HEI_ID' value='".$HEI_ID."'>
				<br><br><table>
				<tr>
					<td align='right'><b>HEI NAME :</td>
					<td><input type='text' name='HEI_NAM' id='HEI_NAM' value='".$HEI_NAM."' style='width:300px'></td>
				</tr>
				<tr>
					<td align='right'><b>Short Name :</td>
					<td>
					<input type='text' name='HEI_ACRONAM' id='HEI_ACRONAM' value='".$HEI_ACRONAM."'>
					</td>
				</tr>
				<tr>
							<td align='right'><b>HEI Category :</td>	
							<td>
								<select name='HEITYPE_ID' id='HEITYPE_ID' onChange='showHEITypes(this.value)'>";
								$HEI="select * from heitype_tbl";
								$HEI_kuery=mysql_query($HEI);
								$HEI_list=mysql_num_rows($HEI_kuery);														
								$ihap=0;
								while($HEI_list>$ihap)
								{
								$ihap++;
								$row=mysql_fetch_array($HEI_kuery);
								$HEITYPE_ID=$row["HEITYPE_ID"];
								$HEITYPE_NAM=$row["HEITYPE_NAM"];
								echo"<option value=".$HEITYPE_ID.">".$HEITYPE_NAM."</option>";
								}
								echo"</select>
								<td id='txtHint'>
								</td>
							</tr>
							<tr>
								<td align='right'><b>Municipality:</td>
								<td>
								<input type='text' name='HEI_MUN' id='HEI_MUN' value='".$HEI_MUN."'>
								</td>
							</tr>
							<tr>
								<td align='right'><b>Province:</td>
								<td>
								<input type='text' name='HEI_PROV' id='HEI_PROV' value='".$HEI_PROV."'>
								</td>
							</tr>
							<tr>
								<td align='right'><b>Tel. No.:</td>
								<td>
								<input type='text' name='HEI_TELNUM' id='HEI_TELNUM' value='".$HEI_TELNUM."'>
								</td>
							</tr>";
			echo " 
			<tr><td colspan='2'><input type='submit' value='".$asya."'>
			<input type='button' value='Cancel' onClick='history.back();'>
			</td></tr></table></form>";
		}//end functionShowHeiUpdateRecord()
		
		function functionShowCourses($HEI_ID,$HEI_NAM,$HEITYPE_ID,$PROG_ID,$PROGCLASS_ID,$HEI_PROGRAM_ID,$PROG_YRS,$PROG_NAM,$PROG_CODE,$PROG_ID,$HEI_PROG_TUITION,$HEI_PROG_STAT,$numRowsHEIPROG,$nagAno)
		{
			echo "<form method='POST' action='HEI_UPDATERECORD.php?nagAno=".$nagAno."&HEI_ID=".$HEI_ID."'>
						<input type='hidden' name='HEI_ID' value=".$HEI_ID." />
						<input type='hidden' name='HEI_NAM' value=".$HEI_NAM." />
						<h3>Courses offered for ".$HEI_NAM."</h3>
						<table class='tableView' cellspacing=0>
							<tr>
								<td></td>
								<td align='center' style='border-left:solid;border-right:solid; border-bottom:solid;'>Course Code</td>
								<td align='center' style='border-right:solid; border-bottom:solid;'>No. of Years</td>
								<td align='center' style='border-right:solid; border-bottom:solid;'>Tuition</td>
								<td align='center' style='border-bottom:solid;'>Status</td>
								</tr>
				";
				if($numRowsHEIPROG>0)
				{
				while($numRowsHEIPROG>0)
				{
					echo"
					<tr>
					<td><input type='radio' name='' value=".$HEI_PROGRAM_ID." /></td>
					<td>".$PROG_CODE."</td>
					<td>".$PROG_YRS."</td>
					<td>".$HEI_PROG_TUITION."</td>
					<td>".$HEI_PROG_STAT."</td>
					</tr>
					";
					$numRowsHEIPROG--;	
				}
				}
				else
				{
					echo"<tr><td colspan=50 align='center'>No Records Found!</td></tr>";
				}
			echo " 
			<tr><td colspan='2'>
			<input type='submit' value='Add New Course for this HEI'>
			<input type='button' value='Back' onClick='history.back();'>
			</td></tr></table></form>";
		}//end functionShowCourses
		
		function functionShowHeiInfoRecord($HEI_ID,$HEI_NAM,$HEITYPE_ID,$HEI_MUN,$HEI_PROV,$HEI_TELNUM,$HEI_ACRONAM,$HEITYPE_NAM,$nagAno,$asya){
			echo "<form method='POST' action='HEI_UPDATERECORD.php?nagAno=".$nagAno."'>
				<input type='hidden' name='HEITYPE_NAM' id='HEITYPE_NAM' value='".$HEITYPE_NAM."'>
				<input type='hidden' name='HEI_ID' id='HEI_ID' value='".$HEI_ID."'>
				<center>
				<br><h3>
				Information for:".$HEI_NAM."</h3><table class='tableView' cellspacing =10 border=1>
				<br />
				<tr>
					<td align='right'><b>Short Name :</td>
					<td>".$HEI_ACRONAM."
					</td>
				</tr>
				<tr>
							<td align='right'><b>HEI Category :</td>	
							<td>".$HEITYPE_NAM."</td>
							</tr>
							<tr>
								<td align='right'><b>Municipality:</td>
								<td>".$HEI_MUN."
								</td>
							</tr>
							<tr>
								<td align='right'><b>Province:</td>
								<td>".$HEI_PROV."
								</td>
							</tr>
							<tr>
								<td align='right'><b>Tel. No.:</td>
								<td>".$HEI_TELNUM."
								</td>
							</tr></center>";
			echo " 
			<tr><td colspan='2' align='center'>
			<input type='button' value='Back' onClick='history.back();'>
			</td></tr></table></center></form>";
		}//end functionShowHeiInfoRecord
		
		function functionShowHeiScholarshipCoordinator($HEI_ID,$HEI_NAM,$SC_ID,$SC_USERNAM,$SC_NAM3,$SC_NAM2,$SC_NAM1,$HEI_ID){
			echo "<form method='POST' action='HEI_UPDATERECORD.php?nagAno=".$nagAno."'>
				<center><input type='hidden' name='HEITYPE_NAM' id='HEITYPE_NAM' value='".$HEITYPE_NAM."'>
				<input type='hidden' name='HEI_ID' id='HEI_ID' value='".$HEI_ID."'>
				<input type='hidden' name='SC_ID' id='SC_ID' value='".$SC_ID."'>
				<br><h3>Scholarship Coordinator for HEI: ".$HEI_NAM."
				</h3><br /><table class='tableView' cellspacing =10>
				<tr>
					<td align='right'>Scholarship Coordinator Username :</td><td><b>".$SC_USERNAM."</b></td>
				</tr>
				<tr>
					<td align='right'>Scholarship Coordinator Name :</td>
					<td><b>".$SC_NAM3.", ".$SC_NAM1." ".$SC_NAM2."</b>
					</td>
				</tr>";
			echo " 
			</table><br />
			<input type='button' value='Back' onClick='history.back();'>
			</form>";
		}//end functionShowHeiScholarshipCoordinator
		
		
		
		}//classShowHeiUpdateRecord
	 $HEI_ID=$_POST['HEI_ID'];
	 $HEI_fw=$_POST['HEI_fw'];
		
		if ($HEI_fw=='Update'){
		$UpdateHEIkuery=mysql_query("select * from hei_tbl a, heitype_tbl b where a.HEITYPE_ID=b.HEITYPE_ID and HEI_ID='".$HEI_ID."';");
		if (mysql_num_rows($UpdateHEIkuery)>0){	
		$row=mysql_fetch_array($UpdateHEIkuery);
				$HEI_ID=$row["HEI_ID"];
				$HEI_NAM=$row["HEI_NAM"];
				$HEITYPE_ID=$row["HEITYPE_ID"];
				$HEI_MUN=$row["HEI_MUN"];
				$HEI_PROV=$row["HEI_PROV"];
				$HEI_TELNUM=$row["HEI_TELNUM"];
				$HEI_ACRONAM=$row["HEI_ACRONAM"];
		}		
			$sulod=new classShowHeiUpdateRecord();
			$butnga=new paragLayOut();
			$butnga->butngaSulod($sulod->functionShowHeiUpdateRecord($HEI_ID,$HEI_NAM,$HEITYPE_ID,$HEI_MUN,$HEI_PROV,$HEI_TELNUM,$HEI_ACRONAM,'1', 'Update'));
		}
		if ($_GET["nagAno"]==1)
		{	
			$HEI_ID=$_POST["HEI_ID"];
			$HEI_NAM=$_POST["HEI_NAM"];
			$HEITYPE_ID=$_POST["HEITYPE_ID"];
			$HEI_MUN=$_POST["HEI_MUN"];
			$HEI_PROV=$_POST["HEI_PROV"];
			$HEI_ACRONAM=$_POST["HEI_ACRONAM"];
			$HEI_TELNUM=$_POST["HEI_TELNUM"];
			
			$qry="update hei_tbl set HEI_NAM='".$HEI_NAM."',  HEITYPE_ID='".$HEITYPE_ID."',  HEI_MUN='".$HEI_MUN."',  HEI_PROV='".$HEI_PROV."', 
			HEI_ACRONAM='".$HEI_ACRONAM."', HEI_TELNUM='".$HEI_TELNUM."'
			 where HEI_ID=".$HEI_ID;
			paragUpdateDB::updateTable($qry);
			echo "<script language='javascript'>
					alert('Record for HEI ".$HEI_ACRONAM." Successfully updated!!!');
					window.location.href='HEI_Management.php';</script>";
		}//Update HEIs
		else if($_GET["nagAno"]==2)
		{
			echo"<h6>Add New Program for HEI</h6>";
			$progListQuery=mysql_query("select * from program_tbl a, progclass_tbl b where a.PROGCLASS_ID=b.PROGCLASS_ID;") or die(mysql_error());
			echo "SH";
		}
		
		/*else if ($HEI_fw=='View Programs Offered'){
			$UpdateHEIkuery=mysql_query("select * from hei_tbl a, heitype_tbl b, program_tbl c, HEI_program_tbl d where a.HEITYPE_ID=b.HEITYPE_ID and a.HEI_ID=".$HEI_ID." 
		and d.HEI_ID=".$HEI_ID.";") or die(mysql_error());
		if (mysql_num_rows($UpdateHEIkuery)>0){	
		$row=mysql_fetch_array($UpdateHEIkuery);
				$HEI_ID=$row["HEI_ID"];
				$HEI_NAM=$row["HEI_NAM"];
				$HEITYPE_ID=$row["HEITYPE_ID"];
				$PROG_ID=$row["PROG_ID"];
				$PROGCLASS_ID=$row["PROGCLASS_ID"];
				$HEI_PROGRAM_ID=$row["HEI_PROGRAM_ID"];
				$PROG_YRS =$row["PROG_YRS"];
				$PROG_NAM=$row["PROG_NAM"];
				$PROG_CODE=$row["PROG_CODE"];
				$PROG_ID=$row["PROG_ID"];
				$HEI_PROG_TUITION=$row["HEI_PROG_TUITION"];
				$HEI_PROG_STAT=$row["HEI_PROG_STAT"];
				$numRowsHEIPROG=mysql_num_rows($UpdateHEIkuery);
				}		
			$sulod=new classShowHeiUpdateRecord();
			$butnga=new paragLayOut();
			$butnga->butngaSulod($sulod->functionShowCourses($HEI_ID,$HEI_NAM,$HEITYPE_ID,$PROG_ID,$PROGCLASS_ID,$HEI_PROGRAM_ID,$PROG_YRS,$PROG_NAM,$PROG_CODE,$PROG_ID,$HEI_PROG_TUITION,$HEI_PROG_STAT,$numRowsHEIPROG,'2'));
		}
	if ($_GET["nagAno"]==2)
		{	
			$HEI_ID=$_POST["HEI_ID"];
			$HEI_NAM=$_POST["HEI_NAM"];
			
			$qry="delete from hei_tbl where HEI_ID=".$HEI_ID;
			paragUpdateDB::updateTable($qry);
			echo "<script language='javascript'>
					alert('Record for HEI ".$HEI_NAM." Successfully updated!!!');
					window.location.href='HEI_Management.php';</script>";
		}//Delete HEI*/
		
		else if ($HEI_fw=='View Info'){
		$UpdateHEIkuery=mysql_query("select * from hei_tbl a, heitype_tbl b where a.HEITYPE_ID=b.HEITYPE_ID and HEI_ID=".$HEI_ID.";") or die(mysql_error());
		if (mysql_num_rows($UpdateHEIkuery)>0){	
		$row=mysql_fetch_array($UpdateHEIkuery);
				$HEI_ID=$row["HEI_ID"];
				$HEI_NAM=$row["HEI_NAM"];
				$HEITYPE_ID=$row["HEITYPE_ID"];
				$HEI_MUN=$row["HEI_MUN"];
				$HEI_PROV=$row["HEI_PROV"];
				$HEI_TELNUM=$row["HEI_TELNUM"];
				$HEITYPE_NAM=$row["HEITYPE_NAM"];
				$HEI_ACRONAM=$row["HEI_ACRONAM"];
		}		
			$sulod=new classShowHeiUpdateRecord();
			$butnga=new paragLayOut();
			$butnga->butngaSulod($sulod->functionShowHeiInfoRecord($HEI_ID,$HEI_NAM,$HEITYPE_ID,$HEI_MUN,$HEI_PROV,$HEI_TELNUM,$HEI_ACRONAM,$HEITYPE_NAM,'3', 'Update'));
		}//View HEI Info


		else if ($HEI_fw=='Scholarship Coordinator'){
		$UpdateHEIkuery=mysql_query("select * from coordinator_tbl a, hei_tbl b where a.HEI_ID=".$HEI_ID." and b.HEI_ID=".$HEI_ID.";") or die(mysql_error());
		if (mysql_num_rows($UpdateHEIkuery)>0){	
		$row=mysql_fetch_array($UpdateHEIkuery);
				$SC_ID=$row["SC_ID"];
				$SC_USERNAM=$row["SC_USERNAM"];
				$SC_PASS=$row["SC_PASS"];
				$SC_NAM3=$row["SC_NAM3"];
				$SC_NAM2=$row["SC_NAM2"];
				$SC_NAM1=$row["SC_NAM1"];
				$HEI_ID=$row["HEI_ID"];
				$HEI_NAM=$row["HEI_NAM"];
		}		
			$sulod=new classShowHeiUpdateRecord();
			$butnga=new paragLayOut();
			$butnga->butngaSulod($sulod->functionShowHeiScholarshipCoordinator($HEI_ID,$HEI_NAM,$SC_ID,$SC_USERNAM,$SC_NAM3,$SC_NAM2,$SC_NAM1,$HEI_ID));
		}//View Scholarship Coordinator
}

else
{
	echo "<script>alert('PLease select a HEI!');</script>";
	echo "<script>window.location = 'HEI_Management.php'</script>";
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
