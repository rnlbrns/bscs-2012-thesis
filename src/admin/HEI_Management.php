<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
require_once("a-connection.php");
	class sulodHiniNgaPage extends konekServer
	{	
		function showTable()
		{	
			require_once("header.php");
			$this->abriDB();
			konekServer::abriDB();
			$qry="select * from hei_tbl a, heitype_tbl b where a.HEITYPE_ID=b.HEITYPE_ID ORDER BY HEI_ID";
			$kuery=mysql_query($qry);
			$kadamo=mysql_num_rows($kuery);
			$ihap=0;
			echo "	<br /> <center><h3>List of Region-8 HEIs</h3><br /><form method='post' action='HEI_UPDATERECORD.php'>
						<table class='tableView' cellspacing=4  border=1>
							<tr bgcolor='#a6bdfa'>
								<td></td>
								<td align='center'><b>HEI Name</td>
								<td align='center'><b>Category</td>
								<td align='center'><b>Location</td>
								<td align='center'><b>Tel. No.</td>
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
					$HEI_ID=$row["HEI_ID"];
					$HEI_NAM=$row["HEI_NAM"];
					$HEI_ACRONAM=$row["HEI_ACRONAM"];
					$HEITYPE_NAM=$row["HEITYPE_NAM"];
					$HEI_MUN=$row["HEI_MUN"];
					$HEI_PROV=$row["HEI_PROV"];
					$HEI_TELNUM=$row["HEI_TELNUM"];
					echo "	<tr bgcolor='".$kolor."'>
										<td align='center'>
										<input type='radio' name='HEI_ID' id='HEI_ID' value=".$HEI_ID." /></td>
										<td align='center'>".$HEI_ACRONAM." </td>
										<td align='center'>".$HEITYPE_NAM." </td>
										<td align='center'>".$HEI_MUN.", ".$HEI_PROV." </td>
										<td align='center'>".$HEI_TELNUM."</td>
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
								<input type='button' value='Add' onClick='window.location.href=\"HEI_addVIEW.php\"'>&nbsp;&nbsp;
								<input type='submit' value='View Info' name='HEI_fw'>&nbsp;&nbsp;
								<input type='submit' value='Update' name='HEI_fw'>&nbsp;&nbsp;
								<input type='submit' value='Scholarship Coordinator' name='HEI_fw'>
								</tr></table>
								</form>";
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