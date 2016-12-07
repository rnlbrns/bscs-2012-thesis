<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('edusupervisorUsername')&&session_is_registered('edusupervisorPassword'))
{
?>
<?php
			require_once("header.php");
			konekServer::abriDB();
			$qry="select * from awardno_tbl a, grant_tbl b where a.AWARDNO_AWARD=0 and a.GRANT_ID=b.GRANT_ID order by a.GRANT_ID ASC";
			$kuery=mysql_query($qry);
			$kadamo=mysql_num_rows($kuery);
			$ihap=0;
			echo "	<br /> <center><h3>List of Available Award Numbers</h3><br /><form method='post' action='awardNoAdd.php'>
						<table class='tableView' cellspacing=4  border=1>
							<tr bgcolor='#a6bdfa'>
								<td align='center'><b>Grant Type</td>
								<td align='center'><b>Award No.</td>
								</tr>";
			if ($kadamo>0)
			{	
			$marka=0;
				while ($ihap<$kadamo)
				{	$ihap++;
					if ($marka==1)
					{ 
					$marka=0; 
					$kolor="#ffff99"; 
					}
					else {
					$marka=1; $kolor="#ffffff"; 
					}	
					$row=mysql_fetch_array($kuery);
					$AWARDNO_AWARD=$row["AWARDNO_AWARD"];
					$GRANT_CODE=$row["GRANT_CODE"];
					echo "	<tr bgcolor='".$kolor."'>
										<td align='center'>".$GRANT_CODE." </td>
										<td align='center'>".$AWARDNO_AWARD." </td>
										</tr>";
				}
			}
			else
			{	
			echo "	<tr>
								<td colspan='3' align='center'>No records found!</td></tr>";
				}
				
				echo "	</table><br />
								<table><tr><td align='center'>
								<input type='button' value='Add' onClick='window.location.href=\"awardNoAdd.php\"'>&nbsp;&nbsp;
								</tr></table>
								</form>";
								
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
