<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
require_once("header.php");

$fw=$_POST["fw"];
echo "<br /><br />";
class grantsUpdatePage{
		function showAddForm(){	
		echo "	<center><form method='post' action='GRANTS_UPDATE.php?nagAno=4'>
						<table border='1'>
							<tr>
								<td align='right'><b>Grant Code :</b></td>
								<td><input type='text' name='GRANT_CODE' id='GRANT_CODE'></td>
							</tr>
							<tr>
								<td align='right'><b>Category :</b></td>
								<td>
								<select name='GRANT_CAT' id='GRANT_CAT'>
								<option value='SCHOLARSHIP'>SCHOLARSHIP</option>
								<option value='GRANT-IN-AID'>GRANT-IN-AID</option>
								<option value='STUDENT LOAN'>STUDENT LOAN</option>
								</select>
								</td>
							</tr>
							<tr>
								<td align='right'><b>Grant Full Name :</b></td>
								<td><input type='text' name='GRANT_FULLNAM' id='GRANT_FULLNAM'></td>
							</tr>
							<tr>
								<td align='right'><b>Grant Short Name :</b></td>
								<td><input type='text' name='GRANT_SHORTNAM' id='GRANT_SHORTNAM'></td>
							</tr>
							<tr>
								<td align='right'><b>Description :</b></td>
								<td><input type='text' name='GRANT_DESCRIPTION' id='GRANT_DESCRIPTION'></td>
							</tr>
							<tr>
								<td align='right'><b>Merit :</b></td>
								<td><input type='text' name='GRANT_MERITDESCINT' id='GRANT_MERITDESCINT' onKeyPress='return numbersonly(event, false)' maxlength=8></td>
							</tr>
		
							";
		   echo " </table>
			 			<input type='submit' value='Save'>
						<input type='button' value='Cancel' onClick='history.back();'>
						</form></center>";
			}
		   
	function showEditGrant($GRANT_ID,$GRANT_CODE,$GRANT_FULLNAM,$GRANT_SHORTNAM,$GRANT_DESCRIPTION,$GRANT_MERITDESCINT,$nagAno,$asya)
		{
			echo "	<center><form method='POST' action='GRANTS_UPDATE.php?nagAno=".$nagAno."'>
				<input type='hidden' name='GRANT_ID' value='".$GRANT_ID."'>
				<table border='0'>
				<tr>
								<td align='right'><b>Grant Code :</b></td>
								<td><input type='text' name='GRANT_CODE' id='GRANT_CODE' value='".$GRANT_CODE."'></td>
							</tr>
							<tr>
								<td align='right'><b>Category :</b></td>
								<td>
								<select name='GRANT_CAT' id='GRANT_CAT'>
								<option value='SCHOLARSHIP'>SCHOLARSHIP</option>
								<option value='GRANT-IN-AID'>GRANT-IN-AID</option>
								<option value='STUDENT LOAN'>STUDENT LOAN/option>
								</select>
								</td>
							</tr>
							<tr>
								<td align='right'><b>Grant Full Name :</b></td>
								<td><input type='text' name='GRANT_FULLNAM' id='GRANT_FULLNAM' value='".$GRANT_FULLNAM."'></td>
							</tr>
							<tr>
								<td align='right'><b>Grant Short Name :</b></td>
								<td><input type='text' name='GRANT_SHORTNAM' id='GRANT_SHORTNAM' value='".$GRANT_SHORTNAM."'></td>
							</tr>
							<tr>
								<td align='right'><b>Description :</b></td>
								<td><input type='text' name='GRANT_DESCRIPTION' id='GRANT_DESCRIPTION' value='".$GRANT_DESCRIPTION."'></td>
							</tr>
							<tr>
								<td align='right'><b>Merit :</b></td>
								<td><input type='text' name='GRANT_MERITDESCINT' id='GRANT_MERITDESCINT' value='".$GRANT_MERITDESCINT."'></td>
							</tr>";
			echo " </table>
					<input type='submit' value='".$asya."'>
					<input type='button' value='Cancel' onClick='history.back();'>
					</form></center>";
		}
	
	}
	
if($fw=="New Grant")
{
	grantsUpdatePage::showAddForm();
}
else if($fw=="Update Selected Grant")
{

$GRANT_ID=$_POST["GRANT_ID"];
if(empty($GRANT_ID))
{
			echo "<script>alert('Select a Grant!')</script>";
			echo "<script>window.location.href='GRANTS_MANAGEMENT.php'</script>";
}			konekServer::abriDB();
			$qry="select * from grant_tbl where GRANT_ID=".$GRANT_ID;
			$kuery=mysql_query($qry);
			if (mysql_num_rows($kuery)>0)
			{	
				$row=mysql_fetch_array($kuery);
				$GRANT_ID=$row["GRANT_ID"];
				$GRANT_CODE=$row["GRANT_CODE"];
				$GRANT_FULLNAM=$row["GRANT_FULLNAM"];
				$GRANT_SHORTNAM=$row["GRANT_SHORTNAM"];
				$GRANT_DESCRIPTION=$row["GRANT_DESCRIPTION"];
				$GRANT_MERITDESCINT=$row["GRANT_MERITDESCINT"];
			}
			$sulod=new grantsUpdatePage();
			$butang=new paragLayOut();
			$butang->butngaSulod($sulod->showEditGrant($GRANT_ID,$GRANT_CODE,$GRANT_FULLNAM,$GRANT_SHORTNAM,$GRANT_DESCRIPTION,$GRANT_MERITDESCINT, '1', 'Update'));
			
}
if($_GET["nagAno"]==4)
{
				$GRANT_CODE=$_POST["GRANT_CODE"];
					$GRANT_CAT=$_POST["GRANT_CAT"];
					$GRANT_FULLNAM=$_POST["GRANT_FULLNAM"];
					$GRANT_SHORTNAM=$_POST["GRANT_SHORTNAM"];
					$GRANT_DESCRIPTION=$_POST["GRANT_DESCRIPTION"];
					$GRANT_MERITDESCINT=$_POST["GRANT_MERITDESCINT"];
			
			$addNewCOURSEquery="INSERT INTO grant_tbl (GRANT_ID ,GRANT_CODE , GRANT_CAT, GRANT_FULLNAM , GRANT_SHORTNAM , GRANT_DESCRIPTION ,GRANT_MERITDESCINT) 
			values(null,'".$GRANT_CODE."','".$GRANT_CAT."','".$GRANT_FULLNAM."','".$GRANT_SHORTNAM."','".$GRANT_DESCRIPTION."','".$GRANT_MERITDESCINT."')";
					
			paragUpdateDB::updateTable($addNewCOURSEquery);
			echo "<script>alert('Grant ".$GRANT_CODE." added to Grant List')</script>";
			echo "<script>window.location.href='index.php'</script>";
		
}
else if($_GET["nagAno"]==1)
{
					$GRANT_ID=$_POST["GRANT_ID"];
					$GRANT_CODE=$_POST["GRANT_CODE"];
					$GRANT_FULLNAM=$_POST["GRANT_FULLNAM"];
					$GRANT_SHORTNAM=$_POST["GRANT_SHORTNAM"];
					$GRANT_DESCRIPTION=$_POST["GRANT_DESCRIPTION"];
					$GRANT_MERITDESCINT=$_POST["GRANT_MERITDESCINT"];
					
			$qry="update grant_tbl set GRANT_CODE='".$GRANT_CODE."', GRANT_FULLNAM='".$GRANT_FULLNAM."',GRANT_SHORTNAM='".$GRANT_SHORTNAM."',GRANT_DESCRIPTION='".$GRANT_DESCRIPTION."',GRANT_MERITDESCINT='".$GRANT_MERITDESCINT."' where GRANT_ID=".$GRANT_ID;
			paragUpdateDB::updateTable($qry);
			echo "<script>alert('Grant ".$GRANT_CODE."Updated')</script>";
			echo "<script>window.location.href='GRANTS_MANAGEMENT.php'</script>";

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
