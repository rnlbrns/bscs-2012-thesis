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
			$qry="select * from program_tbl a, progclass_tbl b where a.PROGCLASS_ID=b.PROGCLASS_ID";
			$kuery=mysql_query($qry);
			$kadamo=mysql_num_rows($kuery);
			$ihap=0;
			echo "	<br /><center>
			<h3>List of Programs Sanctioned by CHED</h3>
			<form method='post' action='COURSES_UPDATE.php'>
						<table class='tableView' border=1>
							<tr bgcolor='#a6bdfa'>
								<td></td>
								<td align='center'>Program Code</td>
								<td align='center'>Category</td>
								<td align='center'>Short Name</td>
								<td align='center'>No. of Yrs</td>
								<td align='center'>Discipline</td>
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
					$PROG_ID=$row["PROG_ID"];
					$PROG_CODE=$row["PROG_CODE"];
					$PROGCLASS_NAM=$row["PROGCLASS_NAM"];
					$PROG_NAM=$row["PROG_NAM"];
					$PROG_YRS=$row["PROG_YRS"];
					$PROG_DISC=$row["PROG_DISC"];
					echo "	<tr bgcolor='".$kolor."'>
										<td><input type='radio' name='PROG_ID' id='PROG_ID' value='".$PROG_ID."'></td>
										<td align='center'>".$PROG_CODE."</td>
										<td>".$PROGCLASS_NAM."</td>
										<td>".$PROG_NAM."</td>
										<td align='center'>".$PROG_YRS."</td>
										<td align='center'>".$PROG_DISC."</td>
										
										</tr>";
				}
			}
			else
			{	
			echo "	<tr>
								<td colspan='7' align='center'>No records found!</td></tr>";
				}
				
				echo "	</table>
								<table><tr><td align='center'>
								<input type='button' value='Add' onClick='window.location.href=\"COURSES_ADD.php\"'>
								&nbsp;
								<input type='submit' value='Edit' name='fw'>
								&nbsp;&nbsp;
								</form></td></tr></table>";
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
