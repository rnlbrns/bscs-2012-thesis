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
echo "<center><h2>List of Scholars Due For Waiving</h2>";
echo"<table border=1 class='tableView'>
<tr bgcolor='#a6bdfa'>
	<td align='center'><b>Award No.</b></td>
	<td align='center'><b>Name</b></td>
	<td align='center'><b>Gender</b></td>
	<td align='center'><b>Prog-Yr Lvl</b></td>
	<td align='center'><b>HEI</b></td>
	<td align='center'><b>Action</b></td>
</tr>

";
$querydueforwaivescholars=mysql_query("select * from beneficiary_tbl a, program_tbl b, hei_tbl c where a.PROG_ID=b.PROG_ID and a.HEI_ID=c.HEI_ID and a.BENEFICIARY_STAT='Recommended for Waive'");
$querydueforwaivescholarscount=mysql_num_rows($querydueforwaivescholars);
$querydueforwaivescholarscountihap=0;
	$marka=0;
if($querydueforwaivescholarscount>0){
while($querydueforwaivescholarscountihap<$querydueforwaivescholarscount){
$querydueforwaivescholarscountihap++;
				
					$ihap++;
					if ($marka==1)
					{ 
					$marka=0; 
					$kolor="#ffff99"; 
					}
					else {
					$marka=1; $kolor="#ffffff"; 
					}
	$disp=mysql_fetch_array($querydueforwaivescholars);
	echo "<tr bgcolor='".$kolor."'>
	<td align='center'>".mb_strtoupper($disp["BENEFICIARY_AWARDNO"])." </td>
	<td align='center'>".mb_strtoupper($disp["BENEFICIARY_nam3"]).", ".mb_strtoupper($disp["BENEFICIARY_nam1"])." ".mb_strtoupper($disp["BENEFICIARY_nam2"])." </td>
	<td align='center'>".mb_strtoupper($disp["BENEFICIARY_GENDER"])." </td>
	<td align='center'>".mb_strtoupper($disp["PROG_CODE"])."-".mb_strtoupper($disp["BENEFICIARY_YRLVL"])." </td>
	<td align='center'>".mb_strtoupper($disp["HEI_ACRONAM"])." </td>
	<td align='center'><a href='waiveview.php?BENEFICIARY_ID=".$disp["BENEFICIARY_ID"]."'>Waive</a></td>
	</tr>";
	}
}
else{
	echo "<tr><td colspan=6><center>NO RECORDS FOUND</center></td></tr>";
	}
echo"</table></center>";
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
