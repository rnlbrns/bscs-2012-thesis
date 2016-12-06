<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('directorUsername'))
{
?>
<?php
require_once("header.php");
konekServer::abriDB();
	$qry=$_GET["qry"];
$qryBusinessFullMerit=mysql_query($_GET["qry"]) or die(mysql_error());
$countBusinessFullMerit=mysql_num_rows($qryBusinessFullMerit);
$ihapBusinessFullMerit=0;

	echo "<center><table border=1 class='tableView'>
	<tr bgcolor='#a6bdfa'>
	<td align='center'><b>Award No.</b></td>
	<td align='center'><b>Name</b></td>
	<td align='center'><b>Gender</b></td>
	<td align='center'><b>Course-Year Level</b></td>
	</tr>
	";
if($countBusinessFullMerit>0){
while($ihapBusinessFullMerit<$countBusinessFullMerit){
$ihapBusinessFullMerit++;

					if ($marka==1)
					{ 
					$marka=0; 
					$kolor="#ffff99"; 
					}
					else {
					$marka=1; $kolor="#ffffff"; 
					}
	$disp=mysql_fetch_array($qryBusinessFullMerit);
	echo "<tr bgcolor='".$kolor."'>
	<td align='center'>".mb_strtoupper($disp["BENEFICIARY_AWARDNO"])." </td>
	<td align='center'>".mb_strtoupper($disp["BENEFICIARY_nam3"]).", ".mb_strtoupper($disp["BENEFICIARY_nam1"])." ".mb_strtoupper($disp["BENEFICIARY_nam2"])." </td>
	<td align='center'>".mb_strtoupper($disp["BENEFICIARY_GENDER"])." </td>
	<td align='center'>".mb_strtoupper($disp["PROG_CODE"])."-".mb_strtoupper($disp["BENEFICIARY_YRLVL"])." </td>
	
	</tr>";
	}
}
else{
	echo "<tr><td>NO RECORDS FOUND</td></tr>";
	}
	echo"</table>
	<br>

		<input type='button' value='Back To Reports' onClick='history.back();'>
		</center>";
require_once("footer.php");
/*	
<form method='post' action='reportsViewByNamePDF.php'>
<input type='image' width='100 height='50' src='pdf-file.jpg' name='pdfw'
<input type='hidden' name='REPORT_SELECT' value='ByDiscipline'>
<input type='hidden' name='HEI_ID' value=".$_POST["HEI_ID"].">
<input type='hidden' name='qry' value='".$qry."'>
</td></tr></table>
</form>
*/
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
