<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<head>
<script type="text/javascript" src="<?php echo $URL_ADDRESS?>JS_scripts/JS_showHEITYPES.js"></script>
</head>
<?php	
	class classAddHEI
	{	function functionAddHEI()
		{	
			echo "	<form method='post' action='HEI_ADD.php?nagAno=1'>
						<center>
						<br /><h3>Add new HEI</h3><br /><table>
							<tr>
								<td align='right'><b>HEI Name:</b></td>
								<td><input type='text' name='HEI_NAM' id='HEI_NAM' style='width:300px'></td>
							</tr>
							<tr>
								<td align='right'><b>HEI's Acronym:</b></td>
								<td><input type='text' name='HEI_ACRONAM' id='HEI_ACRONAM'></td>
							</tr>
							<tr>
							<td align='right'><b>HEI Category :</b></td>
								<td>
								<select name='HEITYPE_ID' id='HEITYPE_ID' onChange='showHEITypes(this.value)'>
								";
								//$connect = mysql_connect("localhost","root","") or die ("IG-ON AN WAMPSERVER!");
								//mysql_select_db("ched", $connect) or die("dre ak maaram magconect"); 
								konekServer::abriDB();
								$HEI="select * from heitype_tbl";
								$HEI_kuery=mysql_query($HEI) or die(mysql_error());
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
								<td align='right'><b>Municipality/City:</b></td>
								<td><input type='text' name='HEI_MUN' id='HEI_MUN'></td>
							</tr>
							<tr>
								<td align='right'><b>Province:</b></td>
								<td><input type='text' name='HEI_PROV' id='HEI_PROV'></td>
							</tr>
							<tr>
								<td align='right'><b>Tel. No.:</b></td>
								<td><input type='text' name='HEI_TELNUM' id='HEI_TELNUM'></td>
							</tr>";
		     echo " </table>
			 <br />
			 <h4>Scholarship Coordinator</h4>
			 <table>
			 <tr>
			 	<td align='right'><b>Last Name:</b></td>
			 	<td><input type='text' name='SC_NAM3' /></td>
			 </tr>
			 <tr>
			 	<td align='right'><b>First Name:</b></td>
			 	<td><input type='text' name='SC_NAM1' /></td>
			 </tr>
			 <tr>
			 	<td align='right'><b>Middle Name:</b></td>
			 	<td><input type='text' name='SC_NAM2' /></td>
			 </tr>
			 <tr>
			 	<td align='right'><b>Username:</b></td>
			 	<td><input type='text' name='SC_USERNAM' /></td>
			 </tr>
			 <tr>
			 	<td align='right'><b>Password*:</b></td>
			 	<td><input type='password' name='SC_PASS' value='123456' readOnly='true' /></td>
			 </tr>
			 </table>
			 <br />
			 			<input type='submit' value='Save'>
						<input type='button' value='Cancel' onClick='history.back();'>
						
			 <br />
			 <br />
			 *Default Password for Scholarship Coordinator is 123456. He will be prompted to change it on his first log-in.
			 </form>";
			}
		}
		if ($_GET["nagAno"]==1)
		{	
			$HEI_NAM=$_POST["HEI_NAM"];
			$HEI_ACRONAM=$_POST["HEI_ACRONAM"];
			$HEITYPE_ID=$_POST["HEITYPE_ID"];
			$HEI_PROV=$_POST["HEI_PROV"];
			$HEI_MUN=$_POST["HEI_MUN"];
			$HEI_TELNUM=$_POST["HEI_TELNUM"];
			
			$SC_NAM1=$_POST["SC_NAM1"];
			$SC_NAM2=$_POST["SC_NAM2"];
			$SC_NAM3=$_POST["SC_NAM3"];
			$SC_USERNAM=$_POST["SC_USERNAM"];
			$SC_PASS=$_POST["SC_PASS"];
			
			if(!empty($HEI_NAM) && !empty($HEI_ACRONAM) & !empty($HEITYPE_ID) && !empty($HEI_PROV) && !empty($HEI_MUN) && !empty($HEI_TELNUM))
			{
			$addNewHEIquery="INSERT INTO hei_tbl (HEI_ID ,HEI_NAM , HEI_ACRONAM , HEITYPE_ID ,HEI_MUN ,HEI_PROV ,HEI_TELNUM) values(null,'".$HEI_NAM."','".$HEI_ACRONAM."',".$HEITYPE_ID.",'".$HEI_MUN."','".$HEI_PROV."','".$HEI_TELNUM."') ";
			paragUpdateDB::updateTable($addNewHEIquery);
			$adddNewScholarshipCoordinatorQ="INSERT INTO coordinator_tbl (SC_USERNAM, SC_PASS, SC_NAM3, SC_NAM2, SC_NAM1, HEI_ID) values('".$SC_USERNAM."','".$SC_PASS."','".$SC_NAM3."','".$SC_NAM2."','".$SC_NAM1."',null)";
			paragUpdateDB::updateTable($adddNewScholarshipCoordinatorQ);
			
			echo "<script>alert('HEI ".$HEI_NAM." ADDED!')</script>";
			echo "<script>window.location.href='HEI_Management.php'</script>";
			}
			else
			{
			echo "<script>alert('Fill all fields!')</script>";
			echo "<script>window.location.href='HEI_ADD.php'</script>";
			}
		}
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
