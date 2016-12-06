<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('SC_USERNAM')&&session_is_registered('SC_USERNAM'))
{
?>
<?php
require_once("header.php");
konekServer::abriDB();
$kG="select * from grade_tbl a, beneficiary_tbl b where a.BENEFICIARY_ID=b.BENEFICIARY_ID and a.schoolyr_yr='".$_POST["schoolyr_yr"]."' and b.HEI_ID=".$_SESSION["HEI_ID"]."  and a.GRADE_SEM=".$_POST["GRADE_SEM"]." order by BENEFICIARY_nam3 ASC";
$gradeReport_query=mysql_query($kG);
$gradeReport_queryKawnt=mysql_num_rows($gradeReport_query);
$gradeReport_queryIhap=0;
echo "<center>
<h3>School Year : ".$_POST["schoolyr_yr"]."</h3>
</br>
<h3>Sem : ".$_POST["GRADE_SEM"]."</h3>
</br>
<table border=1>
<tr>
<td align='center'><b>Name</td>
<td align='center'><b>Gender</td>
<td align='center'><b>Subject</td>
<td align='center'><b>Unit</td>
<td align='center'><b>Grade</td>
</tr>
";
while($gradeReport_queryIhap<$gradeReport_queryKawnt){
$gradeReport_queryIhap++;
$gradeFetch=mysql_fetch_array($gradeReport_query);

$BENEFICIARY_nam1=$gradeFetch["BENEFICIARY_nam1"];
$BENEFICIARY_nam2=$gradeFetch["BENEFICIARY_nam2"];
$BENEFICIARY_nam3=$gradeFetch["BENEFICIARY_nam3"];
$BENEFICIARY_GENDER=$gradeFetch["BENEFICIARY_GENDER"];
$GRADE_SUBJ=$gradeFetch["GRADE_SUBJ"];
$GRADE_UNIT=$gradeFetch["GRADE_UNIT"];
$GRADE_GRADE=$gradeFetch["GRADE_GRADE"];
echo"<tr>
			<td>".$BENEFICIARY_nam3.", ".$BENEFICIARY_nam1." ".$BENEFICIARY_nam2."</td>
			<td>".$BENEFICIARY_GENDER."</td>
			<td>".$GRADE_SUBJ."</td>
			<td>".$GRADE_UNIT."</td>
			<td>".$GRADE_GRADE."</td>
</tr>";
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
