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
			$qry="select * from grant_tbl";
			$kuery=mysql_query($qry);
			$kadamo=mysql_num_rows($kuery);
			$ihap=0;
			echo "	<center><br><h3>Student Financial Assistance Programs</h3>
						<form method='post' action='GRANTS_UPDATE.php'>
						<table class='tableView' border=1>
							<tr bgcolor='#a6bdfa'>
								<td></td>
								<td align='center'><b>Code</td>
								<td align='center'><b>Name</td>
								<td align='center'><b>Short Name</td>
								<td align='center'><b>Description</td>
								<td align='center'><b>Merit (per sem)</td>
								
								</tr>";
								
			if ($kadamo>0)
			{	
			$marka=0;
			
				while ($ihap<$kadamo)
				{	
					$ihap++;
					
					if ($marka==1)
					{ 
					$marka=0; 
					$kolor="#ffff99"; 
					}
					else {
					$marka=1; $kolor="#ffffff"; 
					}	
					$row=mysql_fetch_array($kuery);
					
					$GRANT_ID=$row["GRANT_ID"];
					$GRANT_CODE=$row["GRANT_CODE"];
					$GRANT_FULLNAM=$row["GRANT_FULLNAM"];
					$GRANT_SHORTNAM=$row["GRANT_SHORTNAM"];
					$GRANT_DESCRIPTION=$row["GRANT_DESCRIPTION"];
					$GRANT_MERITDESCINT=$row["GRANT_MERITDESCINT"];
					
					echo "	<tr bgcolor='".$kolor."'>
										<td><input type='radio' name='GRANT_ID' id='GRANT_ID' value=".$GRANT_ID."></td>
							
							
										<td align='center'>".$GRANT_CODE."</td>
										<td align='center'>".$GRANT_FULLNAM."</td>
										<td align='center'>".$GRANT_SHORTNAM."</td>
										<td align='center'>".$GRANT_DESCRIPTION."</td>
										<td align='center'>".$GRANT_MERITDESCINT."</td>
										</tr>";				
										}
			}
				else
				{	
			echo "	<tr>
								<td colspan='7' align='center'>No records found!</td></tr>";
				}
				
				echo "	</table>
								<table><tr>
								<td align='center'>
								<input type='submit' value='Update Selected Grant' name='fw'>
								<input type='submit' value='New Grant' name='fw'>
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
