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
	$audittrailquery=mysql_query("insert into audittrail_tbl set audittrail_username='".$_SESSION["directorUsername"]."',  audittrail_activity='Viewed Grades', audittrail_time=now() ") or die(mysql_error());	

$gradeReport_query=mysql_query("select * from grade_tbl a, beneficiary_tbl b where a.BENEFICIARY_ID=b.BENEFICIARY_ID and a.schoolyr_yr='".$_POST["schoolyr_yr"]."' and b.HEI_ID=".$_POST["HEI_ID"]." and a.GRADE_SEM=".$_POST["GRADE_SEM"]." order by BENEFICIARY_nam3 ASC");
$gradeReport_queryKawnt=mysql_num_rows($gradeReport_query);
$gradeReport_queryIhap=0;
echo "<center><table border=1>
<tr>
<td align='center'><b>Name</b></td>
<td align='center'><b>Subject</b></td>
<td align='center'><b>Unit</b></td>
<td align='center'><b>Grade</b></td>
</tr>
";
if($gradeReport_queryKawnt>0){
while($gradeReport_queryIhap<$gradeReport_queryKawnt){
$gradeReport_queryIhap++;
$gradeFetch=mysql_fetch_array($gradeReport_query);

$BENEFICIARY_nam1=$gradeFetch["BENEFICIARY_nam1"];
$BENEFICIARY_nam2=$gradeFetch["BENEFICIARY_nam2"];
$BENEFICIARY_nam3=$gradeFetch["BENEFICIARY_nam3"];
$GRADE_SUBJ=$gradeFetch["GRADE_SUBJ"];
$GRADE_UNIT=$gradeFetch["GRADE_UNIT"];
$GRADE_GRADE=$gradeFetch["GRADE_GRADE"];
echo"<tr>
			<td>".$BENEFICIARY_nam3.", ".$BENEFICIARY_nam1." ".$BENEFICIARY_nam2."</td>
			<td>".$GRADE_SUBJ."</td>
			<td>".$GRADE_UNIT."</td>
			<td>".$GRADE_GRADE."</td>
</tr>";
}
}
else{
	echo"<tr><td colspan='4' align='center'>****No RECORDS FOUND!****</td></tr>";
	}
echo "</table></center>";
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
