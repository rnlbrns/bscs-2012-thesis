<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
require_once("header.php");
	class sulodHiniNgaPage extends konekServer
	{	function showTable()
		{	$this->abriDB();
			$qry="select * from audittrail_tbl order by audittrail_id desc";
			$kuery=mysql_query($qry);
			$kadamo=mysql_num_rows($kuery);
			$ihap=0;
			echo "	<center><h3>Audit Trail</h3>
						<table class='tableView' border=1>
							<tr bgcolor='#a6bdfa'>
								<td align='center'><b>User</td>
								<td align='center'><b>Activity</td>
								<td align='center'><b>Time</td>
								<td align='center'><b>Date</td>
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
					$audittrail_username=$row["audittrail_username"];
					$audittrail_activity=$row["audittrail_activity"];
					$audittrail_time=$row["audittrail_time"];
					$date=date("F j, Y", strtotime($audittrail_time));
					$time=date("g:i a", strtotime($audittrail_time));
					echo "	<tr bgcolor='".$kolor."'>
										<td>".$audittrail_username."</td>
										<td>".$audittrail_activity."</td>
										<td>".$time ."</td>
										<td>".$date."</td></tr>";
				}
			}
			else
			{	
			echo "	<tr>
								<td colspan='3' align='center'>No records found!</td></tr>";
				}
				
				echo "	</table>
								</form></td></tr></table></center>";
								}}
								$sulod=new sulodHiniNgaPage();
								$butnga=new paragLayOut();
								$butnga->butngaSulod($sulod->showTable());
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
