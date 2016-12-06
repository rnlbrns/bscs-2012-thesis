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
	$audittrailquery=mysql_query("insert into audittrail_tbl set audittrail_username='".$_SESSION["directorUsername"]."',  audittrail_activity='Viewed Reports', audittrail_time=now() ") or die(mysql_error());	
	
	
class reports extends konekServer{
function reportsByDiscpline(){
	$this->abriDB();
$heinamqry=mysql_query("select * from hei_tbl where HEI_ID=".$_POST["HEI_ID"]);
$dispThis=mysql_fetch_array($heinamqry);
$HEI_NAM=$dispThis["HEI_NAM"];
$today = date("F j, Y");

$heicountscholarsinsqlqry=mysql_num_rows(mysql_query("select * from beneficiary_tbl where HEI_ID=".$_POST["HEI_ID"]." and !(BENEFICIARY_STAT='WAIVED') "));
echo"

<center>
<h2>CHED STUDENT FINANCIAL ASSITANCE PROGRAMS (StuFAPs)</h2>
As of ".$today."
<br />
<br />
<h2>CURRENT STATUS OF BENEFICIARIES BY DISCIPLINE</h2>
<br /></center>
HEI: <b>".$HEI_NAM."</b><br />
Number of Scholars: <b>".$heicountscholarsinsqlqry."</b><br />
<center>
<table border=1 class='tableView'>
<tr bgcolor='#a6bdfa'>
<td align='center'><b>PROGRAM CATEGORY</b></td>
<td align='center'><b>BUSINESS</b></td>
<td align='center'><b>ENGINEERING</b></td>
<td align='center'><b>EDUCATION</b></td>
<td align='center'><b>SCIENCE AND HEALTH RELATED</b></td>
<td align='center'><b>LEGAL AND CRIMINOLOGY</b></td>
<td align='center'><b>IT</b></td>
<td align='center'><b>HUSOCOM</b></td>
<td align='center'><b>MARITIME</b></td>
<td align='center'><b>Total</b></td>
</tr>";

echo "<tr>";
echo"<td  align='center'>FULL MERIT</td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d where b.PROG_DISC=&#39;BUSINESS&#39; and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryBusinessFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='BUSINESS' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countBusinessFullMerit=mysql_num_rows($qryBusinessFullMerit);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countBusinessFullMerit."</a></td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;ENGINEERING&#39; and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryEngineeringFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='ENGINEERING' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countEngineeringFullMerit=mysql_num_rows($qryEngineeringFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countEngineeringFullMerit."</a></td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;EDUCATION&#39; and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryEducationFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='EDUCATION' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countEducationFullMerit=mysql_num_rows($qryEducationFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countEducationFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;SCIENCE AND HEALTH RELATED&#39; and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryScienceFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='SCIENCE AND HEALTH RELATED' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countScienceFullMerit=mysql_num_rows($qryScienceFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countScienceFullMerit."</a></td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;LEGAL AND CRIMINOLOGY&#39; and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryCrimFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='LEGAL AND CRIMINOLOGY' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countCrimFullMerit=mysql_num_rows($qryCrimFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countCrimFullMerit."</a></td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;IT&#39; and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryItFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='IT' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countITFullMerit=mysql_num_rows($qryItFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countITFullMerit."</a></td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;HUSOCOM&#39; and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryHusocomFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='HUSOCOM' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countHusocomFullMerit=mysql_num_rows($qryHusocomFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countHusocomFullMerit."</a></td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;MARITIME&#39; and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryMaritimeFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='MARITIME' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countMaritimeFullMerit=mysql_num_rows($qryMaritimeFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countMaritimeFullMerit."</a></td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryMaritimeFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID  and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countMaritimeFullMerit=mysql_num_rows($qryMaritimeFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countMaritimeFullMerit."</a></td>";

echo "</tr>";
//end full merit count per discipline

echo "<tr bgcolor='#ffff99'>";
echo"<td  align='center'>HALF MERIT</td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;BUSINESS&#39; and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryBusinessFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='BUSINESS' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countBusinessFullMerit=mysql_num_rows($qryBusinessFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countBusinessFullMerit."</a></td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;ENGINEERING&#39; and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryEngineeringFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='ENGINEERING' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countEngineeringFullMerit=mysql_num_rows($qryEngineeringFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countEngineeringFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;EDUCATION&#39; and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryEducationFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='EDUCATION' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countEducationFullMerit=mysql_num_rows($qryEducationFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countEducationFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;SCIENCE AND HEALTH RELATED&#39; and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryScienceFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='SCIENCE AND HEALTH RELATED' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countScienceFullMerit=mysql_num_rows($qryScienceFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countScienceFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;LEGAL AND CRIMINOLOGY&#39; and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryCrimFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='LEGAL AND CRIMINOLOGY' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countCrimFullMerit=mysql_num_rows($qryCrimFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countCrimFullMerit."</a></td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;IT&#39; and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryItFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='IT' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countITFullMerit=mysql_num_rows($qryItFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countITFullMerit."</a></td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;HUSOCOM&#39; and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryHusocomFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='HUSOCOM' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countHusocomFullMerit=mysql_num_rows($qryHusocomFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countHusocomFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;MARITIME&#39; and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryMaritimeFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='MARITIME' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countMaritimeFullMerit=mysql_num_rows($qryMaritimeFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countMaritimeFullMerit."</a></td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryMaritimeFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countMaritimeFullMerit=mysql_num_rows($qryMaritimeFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countMaritimeFullMerit."</a></td>";

echo "</tr>";
//end half merit count per discipline
echo "<tr>";
echo"<td  align='center'>SNPLP</td>";
$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;BUSINESS&#39; and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryBusinessFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='BUSINESS' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countBusinessFullMerit=mysql_num_rows($qryBusinessFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countBusinessFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;ENGINEERING&#39; and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryEngineeringFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='ENGINEERING' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countEngineeringFullMerit=mysql_num_rows($qryEngineeringFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countEngineeringFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;EDUCATION&#39; and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryEducationFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='EDUCATION' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countEducationFullMerit=mysql_num_rows($qryEducationFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countEducationFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;SCIENCE AND HEALTH RELATED&#39; and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryScienceFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='SCIENCE AND HEALTH RELATED' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countScienceFullMerit=mysql_num_rows($qryScienceFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countScienceFullMerit."</a></td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;LEGAL AND CRIMINOLOGY&#39; and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryCrimFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='LEGAL AND CRIMINOLOGY' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countCrimFullMerit=mysql_num_rows($qryCrimFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countCrimFullMerit."</a></td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;IT&#39; and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryItFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='IT' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countITFullMerit=mysql_num_rows($qryItFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countITFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;HUSOCOM&#39; and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryHusocomFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='HUSOCOM' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countHusocomFullMerit=mysql_num_rows($qryHusocomFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countHusocomFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;MARITIME&#39; and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryMaritimeFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='MARITIME' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countMaritimeFullMerit=mysql_num_rows($qryMaritimeFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countMaritimeFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryMaritimeFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countMaritimeFullMerit=mysql_num_rows($qryMaritimeFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countMaritimeFullMerit."</a></td>";

echo "</tr>";
//end SNPLP count per discipline

echo "<tr bgcolor='#ffff99'>";
echo"<td  align='center'>DND-CHED-PASUC</td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;BUSINESS&#39; and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryBusinessFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='BUSINESS' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countBusinessFullMerit=mysql_num_rows($qryBusinessFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countBusinessFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;ENGINEERING&#39; and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryEngineeringFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='ENGINEERING' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countEngineeringFullMerit=mysql_num_rows($qryEngineeringFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countEngineeringFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;EDUCATION&#39; and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryEducationFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='EDUCATION' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countEducationFullMerit=mysql_num_rows($qryEducationFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countEducationFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;SCIENCE AND HEALTH RELATED&#39; and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryScienceFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='SCIENCE AND HEALTH RELATED' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countScienceFullMerit=mysql_num_rows($qryScienceFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countScienceFullMerit."</a></td>";

$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;LEGAL AND CRIMINOLOGY&#39; and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryCrimFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='LEGAL AND CRIMINOLOGY' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countCrimFullMerit=mysql_num_rows($qryCrimFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countCrimFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;IT&#39; and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryItFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='IT' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countITFullMerit=mysql_num_rows($qryItFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countITFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;HUSOCOM&#39; and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryHusocomFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='HUSOCOM' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countHusocomFullMerit=mysql_num_rows($qryHusocomFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countHusocomFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;MARITIME&#39; and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryMaritimeFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='MARITIME' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countMaritimeFullMerit=mysql_num_rows($qryMaritimeFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countMaritimeFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryMaritimeFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countMaritimeFullMerit=mysql_num_rows($qryMaritimeFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countMaritimeFullMerit."</a></td>";

echo "</tr>";
//end DND-CHED-PASUC count per discipline
echo "<tr>";
echo"<td  align='center'>OPAPP</td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;BUSINESS&#39; and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryBusinessFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='BUSINESS' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countBusinessFullMerit=mysql_num_rows($qryBusinessFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countBusinessFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;ENGINEERING&#39; and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryEngineeringFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='ENGINEERING' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countEngineeringFullMerit=mysql_num_rows($qryEngineeringFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countEngineeringFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;ENGINEERING&#39; and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryEducationFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='EDUCATION' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countEducationFullMerit=mysql_num_rows($qryEducationFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countEducationFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;SCIENCE AND HEALTH RELATED&#39; and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryScienceFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='SCIENCE AND HEALTH RELATED' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countScienceFullMerit=mysql_num_rows($qryScienceFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countScienceFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;LEGAL AND CRIMINOLOGY&#39; and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryCrimFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='LEGAL AND CRIMINOLOGY' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countCrimFullMerit=mysql_num_rows($qryCrimFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countCrimFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;IT&#39; and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryItFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='IT' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countITFullMerit=mysql_num_rows($qryItFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countITFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;ITHUSOCOM#39; and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryHusocomFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='HUSOCOM' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countHusocomFullMerit=mysql_num_rows($qryHusocomFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countHusocomFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;MARITIME#39; and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryMaritimeFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='MARITIME' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countMaritimeFullMerit=mysql_num_rows($qryMaritimeFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countMaritimeFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryMaritimeFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countMaritimeFullMerit=mysql_num_rows($qryMaritimeFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countMaritimeFullMerit."</a></td>";

echo "</tr>";
//end OPAPP count per discipline

echo "<tr bgcolor='#ffff99'>";
echo"<td  align='center'>CHED- STGPFCDS</td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;BUSINESS#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryBusinessFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='BUSINESS' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countBusinessFullMerit=mysql_num_rows($qryBusinessFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countBusinessFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;ENGINEERING#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryEngineeringFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='ENGINEERING' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countEngineeringFullMerit=mysql_num_rows($qryEngineeringFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countEngineeringFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;EDUCATION#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryEducationFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='EDUCATION' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countEducationFullMerit=mysql_num_rows($qryEducationFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countEducationFullMerit."</a></td>";




$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;SCIENCE AND HEALTH RELATED#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryScienceFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='SCIENCE AND HEALTH RELATED' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countScienceFullMerit=mysql_num_rows($qryScienceFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countScienceFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;LEGAL AND CRIMINOLOGY#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryCrimFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='LEGAL AND CRIMINOLOGY' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countCrimFullMerit=mysql_num_rows($qryCrimFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countCrimFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;IT#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryItFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='IT' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countITFullMerit=mysql_num_rows($qryItFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countITFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;HUSOCOM#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryHusocomFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='HUSOCOM' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countHusocomFullMerit=mysql_num_rows($qryHusocomFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countHusocomFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;MARITIME#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryMaritimeFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='MARITIME' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countMaritimeFullMerit=mysql_num_rows($qryMaritimeFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countMaritimeFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryMaritimeFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countMaritimeFullMerit=mysql_num_rows($qryMaritimeFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countMaritimeFullMerit."</a></td>";

echo "</tr>";
//end CHED- STGPFCD count per discipline

echo "<tr>";
echo"<td  align='center'>GRANT IN AID</td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;MARITIME#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryBusinessFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='BUSINESS' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countBusinessFullMerit=mysql_num_rows($qryBusinessFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countBusinessFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;ENGINEERING#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryEngineeringFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='ENGINEERING' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countEngineeringFullMerit=mysql_num_rows($qryEngineeringFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countEngineeringFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;EDUCATION#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryEducationFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='EDUCATION' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countEducationFullMerit=mysql_num_rows($qryEducationFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countEducationFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;SCIENCE AND HEALTH RELATED#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryScienceFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='SCIENCE AND HEALTH RELATED' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countScienceFullMerit=mysql_num_rows($qryScienceFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countScienceFullMerit."</a></td>";


$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;LEGAL AND CRIMINOLOGY#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryCrimFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='LEGAL AND CRIMINOLOGY' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countCrimFullMerit=mysql_num_rows($qryCrimFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countCrimFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;IT#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryItFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='IT' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countITFullMerit=mysql_num_rows($qryItFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countITFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;HUSOCOM#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryHusocomFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='HUSOCOM' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countHusocomFullMerit=mysql_num_rows($qryHusocomFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countHusocomFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where b.PROG_DISC=&#39;MARITIME#39; and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryMaritimeFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='MARITIME' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countMaritimeFullMerit=mysql_num_rows($qryMaritimeFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countMaritimeFullMerit."</a></td>";



$qry="select * from beneficiary_tbl a, program_tbl b, grant_tbl c, hei_tbl d  where c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=d.HEI_ID";
$qryMaritimeFullMerit=mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countMaritimeFullMerit=mysql_num_rows($qryMaritimeFullMerit);
echo"<td  align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countMaritimeFullMerit."</a></td>";



echo "</tr>";
//end grant in aid per discipline

echo"</table></center>
<table width='100%'>
<tr><td align='right'>
<form method='post' action='reportsPDF.php'>
<input type='image' src='pdf.gif' name='pdfw' >
<input type='hidden' name='REPORT_SELECT' value='ByDiscipline'>
<input type='hidden' name='HEI_ID' value=".$_POST["HEI_ID"].">
<input type='hidden' name='heicountscholarsinsqlqry' value=".$heicountscholarsinsqlqry.">
</td></tr></table>
</form>	";

}//end function discipline reports

function reportsByGender(){
	$this->abriDB();
$heinamqry=mysql_query("select * from hei_tbl where HEI_ID=".$_POST["HEI_ID"]);
$dispThis=mysql_fetch_array($heinamqry);
$HEI_NAM=$dispThis["HEI_NAM"];
$today = date("F j, Y");
$heicountscholarsinsqlqry=mysql_num_rows(mysql_query("select * from beneficiary_tbl where HEI_ID=".$_POST["HEI_ID"]." and !(BENEFICIARY_STAT='WAIVED') "));
	echo "<center>
<h2>CHED STUDENT FINANCIAL ASSITANCE PROGRAMS (StuFAPs)</h2>
As of ".$today."
<br />
<br />
<h2>CURRENT STATUS OF BENEFICIARIES BY GENDER</h2>
<br />
HEI: <b>".$HEI_NAM."</b>
<br />
Number of Scholars: ".$heicountscholarsinsqlqry."

<table border=1 class='tableView' cellspacing=3>";
	echo "
	<tr bgcolor='#a6bdfa'>
	<td rowspan=2 align='center'><b>PROGRAM CATEGORY</b></td>
	<td colspan=3 align='center'><b>GENDER</b></td>
	</tr>
	<tr bgcolor='#ffff99'>
	<td align='center'><b>MALE</b></td>
	<td align='center'><b>FEMALE</b></td>
	<td align='center'><b>TOTAL</b></td>
	</tr>
	";
	echo "<tr>";
	echo "<td  align='center'>Full-Merit</td>";
	

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and a.BENEFICIARY_GENDER=&#39;MALE&#39; and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";
$qryBoys=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_GENDER='MALE' and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countBoys=mysql_num_rows($qryBoys);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countBoys."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and a.BENEFICIARY_GENDER=&#39;FEMALE&#39; and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";
$qryGirls=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_GENDER='FEMALE' and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countGirls=mysql_num_rows($qryGirls);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countGirls."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";
$qryAll=mysql_query("select * from beneficiary_tbl a, grant_tbl b where b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countAll=mysql_num_rows($qryAll);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countAll."</a></td>";

	echo "</tr>";//end full merir
	
	echo "
	
	<tr bgcolor='#ffff99'> 
	<td align='center'>Half-Merit</td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and a.BENEFICIARY_GENDER=&#39;MALE&#39; and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryBoys=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_GENDER='MALE' and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countBoys=mysql_num_rows($qryBoys);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countBoys."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and a.BENEFICIARY_GENDER=&#39;FEMALE&#39; and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryGirls=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_GENDER='FEMALE' and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countGirls=mysql_num_rows($qryGirls);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countGirls."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryAll=mysql_query("select * from beneficiary_tbl a, grant_tbl b where b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countAll=mysql_num_rows($qryAll);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countAll."</a></td>";

	echo "</tr>";//end half merir
	
	echo "<td align='center'>SNPLP</td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and a.BENEFICIARY_GENDER=&#39;MALE&#39; and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";		
$qryBoys=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_GENDER='MALE' and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countBoys=mysql_num_rows($qryBoys);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'> ".$countBoys."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and a.BENEFICIARY_GENDER=&#39;FEMALE&#39; and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";		
$qryGirls=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_GENDER='FEMALE' and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countGirls=mysql_num_rows($qryGirls);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countGirls."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";		
$qryAll=mysql_query("select * from beneficiary_tbl a, grant_tbl b where b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countAll=mysql_num_rows($qryAll);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countAll."</a></td>";

	echo "</tr>";//end SNLP
	
	
	echo "
	
	<tr bgcolor='#ffff99'> <td align='center'>DND-CHED-PASUC</td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and a.BENEFICIARY_GENDER=&#39;MALE&#39; and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";			
$qryBoys=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_GENDER='MALE' and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countBoys=mysql_num_rows($qryBoys);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countBoys."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and a.BENEFICIARY_GENDER=&#39;FEMALE&#39; and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";			
$qryGirls=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_GENDER='FEMALE' and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countGirls=mysql_num_rows($qryGirls);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countGirls."</a></td>";

$qryAll=mysql_query("select * from beneficiary_tbl a, grant_tbl b where b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countAll=mysql_num_rows($qryAll);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countAll."</a></td>";

	echo "</tr>";//end DND
	
	
	echo "<td align='center'>OPAPP</td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and a.BENEFICIARY_GENDER=&#39;MALE&#39; and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";		
$qryBoys=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_GENDER='MALE' and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countBoys=mysql_num_rows($qryBoys);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countBoys."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and a.BENEFICIARY_GENDER=&#39;FEMALE&#39; and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";		
$qryGirls=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_GENDER='FEMALE' and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countGirls=mysql_num_rows($qryGirls);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countGirls."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryAll=mysql_query("select * from beneficiary_tbl a, grant_tbl b where b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countAll=mysql_num_rows($qryAll);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countAll."</a></td>";

	echo "</tr>";//end OPAPP

	echo "
	
	<tr bgcolor='#ffff99'> <td align='center'>CHED STGPFCD/S</td>";



$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and a.BENEFICIARY_GENDER=&#39;MALE&#39; and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";			
$qryBoys=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_GENDER='MALE' and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countBoys=mysql_num_rows($qryBoys);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countBoys."</a></td>";



$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and a.BENEFICIARY_GENDER=&#39;FEMALE&#39; and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryGirls=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_GENDER='FEMALE' and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countGirls=mysql_num_rows($qryGirls);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countGirls."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryAll=mysql_query("select * from beneficiary_tbl a, grant_tbl b where b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countAll=mysql_num_rows($qryAll);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countAll."</a></td>";

	echo "</tr>";//end CHED STGPFCD/S
	
	echo "<td align='center'>Grant in Aid</td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and a.BENEFICIARY_GENDER=&#39;MALE&#39; and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryBoys=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_GENDER='MALE' and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countBoys=mysql_num_rows($qryBoys);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countBoys."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and a.BENEFICIARY_GENDER=&#39;FEMALE&#39; and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryGirls=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_GENDER='FEMALE' and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countGirls=mysql_num_rows($qryGirls);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countGirls."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID  and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryAll=mysql_query("select * from beneficiary_tbl a, grant_tbl b where b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countAll=mysql_num_rows($qryAll);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countAll."</a></td>";

	echo "</tr>";//end grant in aid
	echo"</table></center><table width='100%'>
<tr><td align='right'>
<form method='post' action='reportsPDF.php'>
<input type='image' src='pdf.gif' name='pdfw' >
<input type='hidden' name='REPORT_SELECT' value='ByGender'>
<input type='hidden' name='HEI_ID' value=".$_POST["HEI_ID"].">
<input type='hidden' name='heicountscholarsinsqlqry' value=".$heicountscholarsinsqlqry.">
</td></tr></table>
</form>";
	}//end by dender


function reportsByCurriculumYearLevel(){
	
	$this->abriDB();
	
$heinamqry=mysql_query("select * from hei_tbl where HEI_ID=".$_POST["HEI_ID"]);
$dispThis=mysql_fetch_array($heinamqry);
$HEI_NAM=$dispThis["HEI_NAM"];
$today = date("F j, Y");

$heicountscholarsinsqlqry=mysql_num_rows(mysql_query("select * from beneficiary_tbl where HEI_ID=".$_POST["HEI_ID"]." and !(BENEFICIARY_STAT='WAIVED') "));
echo"<center>
<h2>CHED STUDENT FINANCIAL ASSITANCE PROGRAMS (StuFAPs)</h2>
As of ".$today."
<br />
<br />
<h2>CURRENT STATUS OF BENEFICIARIES BY CURRICULUM YEAR LEVEL</h2>
<br />
HEI: <b>".$HEI_NAM."</b><br />
Number of Scholars: <b>".$heicountscholarsinsqlqry."</b><br />
<table border=1 class='tableView' cellspacing=2>
	<tr bgcolor='#a6bdfa'>
	<td rowspan=2 align='center'><b>PROGRAM CATEGORY</td>
	<td colspan=7 align='center'><b>YEAR LEVEL</b></td>
	</tr>
	<tr bgcolor='#ffff99'>
	<td align='center'><b>First</b></td>
	<td align='center'><b>Second</b></td>
	<td align='center'><b>Third</b></td>
	<td align='center'><b>Fourth</b></td>
	<td align='center'><b>Fifth</b></td>
	<td align='center'><b>TOTAL</b></td>
	</tr>";
	
echo "<tr><td  align='center'>Full-Merit</td>";	

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr1=mysql_num_rows($qryYr1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr2=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr2=mysql_num_rows($qryYr2);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr2."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr3=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr3=mysql_num_rows($qryYr3);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr3."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr4=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr4=mysql_num_rows($qryYr4);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr4."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr5=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr5=mysql_num_rows($qryYr5);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr5."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryAll=mysql_query("select * from beneficiary_tbl a, grant_tbl b where b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countAll=mysql_num_rows($qryAll);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countAll."</a></td>";

	echo "</tr>";//end full merir
	
echo "<tr bgcolor='#ffff99'><td align='center'>Half-Merit</td>";	


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr1=mysql_num_rows($qryYr1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr2=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr2=mysql_num_rows($qryYr2);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr2."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr3=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr3=mysql_num_rows($qryYr3);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr3."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr4=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr4=mysql_num_rows($qryYr4);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr4."</a></td>";



$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr5=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr5=mysql_num_rows($qryYr5);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr5."</a></td>";



$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c whereb.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryAll=mysql_query("select * from beneficiary_tbl a, grant_tbl b where b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countAll=mysql_num_rows($qryAll);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countAll."</a></td>";

	echo "</tr>";//end half merir
	
	echo "<tr><td align='center'>Study Now-Pay Later</td>";	

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr1=mysql_num_rows($qryYr1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr2=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr2=mysql_num_rows($qryYr2);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr2."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr3=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr3=mysql_num_rows($qryYr3);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr3."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr4=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr4=mysql_num_rows($qryYr4);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr4."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr5=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr5=mysql_num_rows($qryYr5);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr5."</a></td>";




$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryAll=mysql_query("select * from beneficiary_tbl a, grant_tbl b where b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countAll=mysql_num_rows($qryAll);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countAll."</a></td>";

	echo "</tr>";//end SNPLP


	
	echo "<tr bgcolor='#ffff99'><td align='center'>DND-CHED-PASUC</td>";	
	

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr1=mysql_num_rows($qryYr1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr1."</a></td>";



$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr2=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr2=mysql_num_rows($qryYr2);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr2."</a></td>";



$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr3=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr3=mysql_num_rows($qryYr3);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr3."</a></td>";



$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr4=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr4=mysql_num_rows($qryYr4);


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr4."</a></td>";
$qryYr5=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr5=mysql_num_rows($qryYr5);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr5."</a></td>";



$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryAll=mysql_query("select * from beneficiary_tbl a, grant_tbl b where b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countAll=mysql_num_rows($qryAll);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countAll."</a></td>";

	echo "</tr>";//end DND CHED PASUC
	
	
	
	echo "<tr><td align='center'>OPAPP</td>";	


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr1=mysql_num_rows($qryYr1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr2=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr2=mysql_num_rows($qryYr2);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr2."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr3=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr3=mysql_num_rows($qryYr3);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr3."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr4=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr4=mysql_num_rows($qryYr4);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr4."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr5=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr5=mysql_num_rows($qryYr5);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr5."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryAll=mysql_query("select * from beneficiary_tbl a, grant_tbl b where b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countAll=mysql_num_rows($qryAll);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countAll."</a></td>";

	echo "</tr>";//end OPAPP
	
	
	
	
	echo "<tr bgcolor='#ffff99'><td align='center'>CHED- STGPFCD/S</td>";	

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr1=mysql_num_rows($qryYr1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr2=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr2=mysql_num_rows($qryYr2);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr2."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr3=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr3=mysql_num_rows($qryYr3);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr3."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr4=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr4=mysql_num_rows($qryYr4);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr4."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=0 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYrUnenrolled=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=0 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYrUnenrolled=mysql_num_rows($qryYrUnenrolled);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYrUnenrolled."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryAll=mysql_query("select * from beneficiary_tbl a, grant_tbl b where b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countAll=mysql_num_rows($qryAll);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countAll."</a></td>";

	echo "</tr>";//end CHED- STGPFCD/S
	
	echo "<tr><td align='center'>Grand in aid</td>";	

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr1=mysql_num_rows($qryYr1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr2=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr2=mysql_num_rows($qryYr2);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr2."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr3=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr3=mysql_num_rows($qryYr3);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr3."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr4=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr4=mysql_num_rows($qryYr4);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr4."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryYr4=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countYr4=mysql_num_rows($qryYr4);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countYr4."</a></td>";



$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryAll=mysql_query("select * from beneficiary_tbl a, grant_tbl b where b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countAll=mysql_num_rows($qryAll);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countAll."</a></td>";

	echo "</tr>";//endGrand in aid
echo"</table></center>
<form method='post' action='reportsPDF.php'>
	<table width='100%'><tr><td align='right'>
<input type='image' src='pdf.gif' name='pdfw' >
<input type='hidden' name='REPORT_SELECT' value='ByYrLvl'>
<input type='hidden' name='HEI_ID' value=".$_POST["HEI_ID"].">
<input type='hidden' name='heicountscholarsinsqlqry' value=".$heicountscholarsinsqlqry.">
</td></tr></table>
</form>";
	}//end by year level
	
	function	reportsByCongressionalDistrict(){
	$this->abriDB();	
$heinamqry=mysql_query("select * from hei_tbl where HEI_ID=".$_POST["HEI_ID"]);
$dispThis=mysql_fetch_array($heinamqry);
$HEI_NAM=$dispThis["HEI_NAM"];
$today = date("F j, Y");
$heicountscholarsinsqlqry=mysql_num_rows(mysql_query("select * from beneficiary_tbl where HEI_ID=".$_POST["HEI_ID"]." and !(BENEFICIARY_STAT='WAIVED') "));
	echo "<center>
<h2>CURRENT STATUS OF BENEFICIARIES BY CONGRESSIONAL DISTRICT</h2>
As of ".$today."
<br />
<br />
HEI: <b>".$HEI_NAM."</b>
<br />
Number of Scholars: <b>".$heicountscholarsinsqlqry."</b>
<table border=1 class='tableView' cellspacing=3>";
	echo "
	<tr bgcolor='#a6bdfa'>
	<td rowspan=2 align='center'><b>PROGRAM CATEGORY</b></td>
	<td colspan=8 align='center'><b>Congressional District</b></td>
	</tr>
	<tr bgcolor='#ffff99'>
	<td align='center'><b>District I</b></td>
	<td align='center'><b>District II</b></td>
	<td align='center'><b>District III</b></td>
	<td align='center'><b>District IV</b></td>
	<td align='center'><b>District V</b></td>
	<td align='center'><b>District VI</b></td>
	<td align='center'><b>TOTAL</b></td>
	</tr>
	";
	
	
echo "<tr><td  align='center'>Full-Merit</td>";	

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=1 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=1 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=2 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=2 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=3 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=3 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");

$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=4 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=4 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=5 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=5 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=6 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=6 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where  b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";
echo"</tr>";
	
	
echo "<tr bgcolor='#ffff99'><td  align='center'>Half-Merit</td>";	

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=1 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=1 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=2 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=2 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=3 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=3 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=4 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=4 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=5 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=5 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=6 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=6 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where  b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

echo"</tr>";
	
	
echo "<tr><td  align='center'>SNPLP</td>";	
$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=1 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=1 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=2 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=2 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=3 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=3 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=4 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=4 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=5 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=5 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=6 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=6 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where  b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

echo"</tr>";
	
	
echo "<tr bgcolor='#ffff99'><td  align='center'>DND-CHED-PASUC</td>";	

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=1 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=1 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=2 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=2 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=3 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=3 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=4 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=4 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";



$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=5 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=5 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=6 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=6 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where  b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

echo"</tr>";
	
	
echo "<tr><td  align='center'>OPAPP</td>";	
$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=1 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=1 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=2 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=2 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=3 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=3 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=4 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=4 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=5 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=5 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=6 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=6 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where  b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

echo"</tr>";
	
	
echo "<tr bgcolor='#ffff99'><td  align='center'>CHED- STGPFCD/S</td>";	
$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=1 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=1 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=2 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=2 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=3 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=3 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=4 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=4 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=5 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=5 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=6 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=6 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where  b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";
echo"</tr>";
	
	
echo "<tr><td  align='center'>Grand in aid</td>";	
$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=1 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=1 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=2 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=2 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";

$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=3 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=3 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=4 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=4 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=5 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=5 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and a.BENE_CONGDIST=6 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=6 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";


$qry="select * from beneficiary_tbl a, grant_tbl b, hei_tbl c, program_tbl d where a.PROG_ID=d.PROG_ID and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and  a.HEI_ID=".$_POST["HEI_ID"]." and a.HEI_ID=c.HEI_ID and  !(a.BENEFICIARY_STAT=&#39;WAIVED&#39;)";	
$qryD1=mysql_query("select * from beneficiary_tbl a, grant_tbl b where  b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')");
$countD1=mysql_num_rows($qryD1);
echo"<td align='center'><a href='reportsViewByName.php?qry=".$qry."'>".$countD1."</a></td>";
echo"</tr>";
		echo"</table></center>
		<form method='post' action='reportsPDF.php'>
	<table width='100%'><tr><td align='right'>
<input type='image' src='pdf.gif' name='pdfw' >
<input type='hidden' name='REPORT_SELECT' value='ByCongressionalDistrict'>
<input type='hidden' name='HEI_ID' value=".$_POST["HEI_ID"].">
<input type='hidden' name='heicountscholarsinsqlqry' value=".$heicountscholarsinsqlqry.">
</td></tr></table>
</form>";
		}//end by congressioanal district
}//end class reports

						if($_POST["REPORT_SELECT"]=="ByDiscipline"){
								$sulod=new reports();
								$butang=new paragLayOut();
								$butang->butangSulod($sulod->reportsByDiscpline());
						}


						else if($_POST["REPORT_SELECT"]=="ByGender"){
								$sulod=new reports();
								$butang=new paragLayOut();
								$butang->butangSulod($sulod->reportsByGender());
						}

						else if($_POST["REPORT_SELECT"]=="ByYrLvl"){
								$sulod=new reports();
								$butang=new paragLayOut();
								$butang->butangSulod($sulod->reportsByCurriculumYearLevel());
						}
						else if($_POST["REPORT_SELECT"]=="ByCongressionalDistrict"){
								$sulod=new reports();
								$butang=new paragLayOut();
								$butang->butangSulod($sulod->reportsByCongressionalDistrict());
						}

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
