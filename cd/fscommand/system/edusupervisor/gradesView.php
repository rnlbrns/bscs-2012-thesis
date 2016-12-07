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
$heinamqry=mysql_query("select * from hei_tbl a, coordinator_tbl b where a.HEI_ID=".$_POST["HEI_ID"]." and b.HEI_ID=a.HEI_ID");
$dispThis=mysql_fetch_array($heinamqry);
$HEI_NAM=$dispThis["HEI_NAM"];
$SC_NAM3=$dispThis["SC_NAM3"];
$SC_NAM2=$dispThis["SC_NAM2"];
$SC_NAM1=$dispThis["SC_NAM1"];

echo "<center>";
echo "
HEI: <b>".$HEI_NAM."</b><br />
Scholarship Coordinator: <i>".$SC_NAM3.", ".$SC_NAM1." ".$SC_NAM2."</i><br /><br />
<h3>Grade Reports of Scholars</h3>
School Year: <b>".$_POST["schoolyr_yr"]."</b> Sem: <b>".$_POST["GRADE_SEM"]."</b><br />";
$gradeReport_query=mysql_query("select * from grade_tbl a, beneficiary_tbl b where a.BENEFICIARY_ID=b.BENEFICIARY_ID and a.schoolyr_yr='".$_POST["schoolyr_yr"]."' and b.HEI_ID=".$_POST["HEI_ID"]." and a.GRADE_SEM=".$_POST["GRADE_SEM"]." order by BENEFICIARY_nam3 ASC");
$gradeReport_queryKawnt=mysql_num_rows($gradeReport_query);
$gradeReport_queryIhap=0;
echo "<table border=1>
<tr bgcolor='#a6bdfa'>
<td align='center'><b>Name</b></td>
<td align='center'><b>Subject</b></td>
<td align='center'><b>Unit</b></td>
<td align='center'><b>Grade</b></td>
</tr>
";
if($gradeReport_queryKawnt>0){
while($gradeReport_queryIhap<$gradeReport_queryKawnt){
$gradeReport_queryIhap++;
					if ($marka==1)
					{ 
					$marka=0; 
					$kolor="#ffff99"; 
					}
					else {
					$marka=1; $kolor="#ffffff"; 
					}
$gradeFetch=mysql_fetch_array($gradeReport_query);

$BENEFICIARY_nam1=$gradeFetch["BENEFICIARY_nam1"];
$BENEFICIARY_nam2=$gradeFetch["BENEFICIARY_nam2"];
$BENEFICIARY_nam3=$gradeFetch["BENEFICIARY_nam3"];
$GRADE_SUBJ=$gradeFetch["GRADE_SUBJ"];
$GRADE_UNIT=$gradeFetch["GRADE_UNIT"];
$GRADE_GRADE=$gradeFetch["GRADE_GRADE"];
echo"<tr bgcolor=".$kolor.">
			<td align='center'>".mb_strtoupper($BENEFICIARY_nam3).", ".mb_strtoupper($BENEFICIARY_nam1)." ".mb_strtoupper($BENEFICIARY_nam2)."</td>
			<td align='center'>".$GRADE_SUBJ."</td>
			<td align='center'>".$GRADE_UNIT."</td>
			<td align='center'>".$GRADE_GRADE."</td>
</tr>";
}
}
else{
	echo"<tr><td colspan='4' align='center'>****No RECORDS FOUND!****</td></tr>";
	}
echo "</table></center><table width='100%'>
<tr><td align='right'>
<form method='post' action='gradesViewPDF.php'>
<input type='image' width='100 height='50' src='pdf-file.jpg' name='pdfw'
<input type='hidden' name='REPORT_SELECT' value='ByDiscipline'>
<input type='hidden' name='HEI_ID' value=".$_POST["HEI_ID"].">
</td></tr></table>
</form>	";
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
