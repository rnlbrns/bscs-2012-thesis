<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('SC_USERNAM')&&session_is_registered('SC_USERNAM'))
{
?>
<?php
		require_once("a-connection.php");
		require_once("header.php");
		konekServer::abriDB();
		if ($_POST["fw"]=="Add Beneficiary to HEI" && !empty($_POST["BENEFICIARY_ID"]))
		{	
		$heiq=mysql_query("select * from hei_tbl where HEI_ID=".$_POST["HEI_ID"]);
		$heiqrow=mysql_fetch_array($heiq);
		
		$beneq=mysql_query("select * from beneficiary_tbl where BENEFICIARY_ID=".$_POST["BENEFICIARY_ID"]);
		$beneqrow=mysql_fetch_array($beneq);
		
					$HEI_ACRONAM=$heiqrow["HEI_ACRONAM"];
		
					$BENEFICIARY_nam1=$beneqrow["BENEFICIARY_nam1"];
					$BENEFICIARY_nam2=$beneqrow["BENEFICIARY_nam2"];
					$BENEFICIARY_nam3=$beneqrow["BENEFICIARY_nam3"];
					
		echo "Add ".$BENEFICIARY_nam3.",  ".$BENEFICIARY_nam1."  ".$BENEFICIARY_nam2." to ".$HEI_ACRONAM."<br />";
		echo"
		<form method='post' action='addnewbene.php'>
		Program:&nbsp;<select name='PROG_ID'>";
		
								
		
								$HEI="select * from program_tbl";
								$HEI_kuery=mysql_query($HEI) or die(mysql_error());
								$HEI_list=mysql_num_rows($HEI_kuery);														
								$ihap=0;
								while($HEI_list>$ihap)
								{
								$ihap++;
								$row=mysql_fetch_array($HEI_kuery);
								$PROG_ID=$row["PROG_ID"];
								$PROG_NAM=$row["PROG_NAM"];
								echo"<option value=".$PROG_ID.">".$PROG_NAM."</option>";
								}						
		echo"</select>
		<br />
		<input type='hidden' name='HEI_ID' value=".$_POST["HEI_ID"].">
		<input type='hidden' name='BENEFICIARY_ID' value=".$_POST["BENEFICIARY_ID"].">
		<input type='submit' value='Add' name='fw' >
		<input type='button' value='Cancel' onClick='history.back();'>
		</form>
		";
		}
		else
		{
		echo "<script>alert('Please Select a beneficiary!')</script>";
		echo "<script>window.location.href='liquidationsMain.php'</script>";
		
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