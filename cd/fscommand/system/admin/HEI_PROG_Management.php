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
			$qry="select * from hei_tbl a, heitype_tbl b where a.HEITYPE_ID=b.HEITYPE_ID ORDER BY HEI_NAM";
			$kuery=mysql_query($qry);
			$kadamo=mysql_num_rows($kuery);
			$ihap=0;
			echo "	<form method='post' action='HEI_UPDATERECORD.php'>
						<table class='tableView' cellspacing=0>
							<tr>
								<td></td>
								<td align='center' style='border-left:solid;border-right:solid; border-bottom:solid;'>HEI Name</td>
								<td align='center' style='border-right:solid; border-bottom:solid;'>Category</td>
								<td align='center' style='border-right:solid; border-bottom:solid;'>Location</td>
								<td align='center' style='border-bottom:solid;'>Tel. No.</td>
								</tr>";
			if ($kadamo>0)
			{	
			$marka=0;
				while ($ihap<$kadamo)
				{	$ihap++;
					$row=mysql_fetch_array($kuery);
					$HEI_ID=$row["HEI_ID"];
					$HEI_NAM=$row["HEI_NAM"];
					$HEI_ACRONAM=$row["HEI_ACRONAM"];
					$HEITYPE_NAM=$row["HEITYPE_NAM"];
					$HEI_MUN=$row["HEI_MUN"];
					$HEI_PROV=$row["HEI_PROV"];
					$HEI_TELNUM=$row["HEI_TELNUM"];
					echo "	<tr>
										<td>
										<input type='radio' name='HEI_ID' id='HEI_ID' value=".$HEI_ID." onclick='display_HEIsShowButtons(this.value)' /></td>
										<td style='border-right:solid;border-left:solid;'>".$HEI_ACRONAM."</td>
										<td style='border-right:solid;'>".$HEITYPE_NAM."</td>
										<td style='border-right:solid;'>".$HEI_MUN.", ".$HEI_PROV."</td>
										<td>".$HEI_TELNUM."</td>
										</tr>";
				}
			}
			else
			{	
			echo "	<tr>
								<td colspan='3' align='center'>No records found!</td></tr>";
				}
				
				echo "	</table>
								<table><tr><td align='center'>
								<input type='button' value='Add' onClick='window.location.href=\"HEI_addVIEW.php\"'>&nbsp;&nbsp;
								<input type='submit' value='View Info' name='HEI_fw'>&nbsp;&nbsp;<input type='submit' value='Update' name='HEI_fw'>&nbsp;&nbsp;<input type='submit' value='Delete' name='HEI_fw'>
								</td>
								<td></td></tr></table>
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