<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('directorUsername'))
{
?>
<?php
require('html_table.php');
require_once("a-connection.php");
class reports extends konekServer{
function reportsByDiscplinePDF($HEI_ID){
$this->abriDB();
$today = date("F j, Y");

$pdf=new PDF_HTML_Table();
$pdf->AddPage();
$pdf->SetFont('Arial','',6);

$heinamqry=mysql_query("select * from hei_tbl where HEI_ID=".$_POST["HEI_ID"]);
$dispThis=mysql_fetch_array($heinamqry);
$HEI_NAM=$dispThis["HEI_NAM"];

$pdf->WriteHTML("
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>Republic of the Philippines</h2><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>Commission on Higher Education (CHED)</h2><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>Region VIII</h2><br /><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>CURRENT STATUS OF BENEFICIARIES BY DISCIPLINE<b></h2>
<br />
School/HEI :&nbsp; ".$HEI_NAM."
<br>
Date:&nbsp; ".$today."
<table border=1>
<tr>
<td>Program Category</td>
<td>Business</td>
<td>Engineering</td>
<td>Education</td>
<td>Science and Health Related</td>
<td>Legal and Criminology</td>
<td>IT</td>
<td>HUSUCOM</td>
<td>Maritime</td>
<td>Total</td>
</tr>


<tr>
<td>Full Merit</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='BUSINESS' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='ENGINEERING' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='EDUCATION' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='SCIENCE AND HEALTH RELATED' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='LEGAL AND CRIMINOLOGY' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='IT' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='HUSOCOM' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='MARITIME' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>


<tr>
<td>Half Merit</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='BUSINESS' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='ENGINEERING' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='EDUCATION' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='SCIENCE AND HEALTH RELATED' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='LEGAL AND CRIMINOLOGY' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='IT' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='HUSOCOM' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='MARITIME' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>SNPLP</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='BUSINESS' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='ENGINEERING' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='EDUCATION' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='SCIENCE AND HEALTH RELATED' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='LEGAL AND CRIMINOLOGY' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='IT' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='HUSOCOM' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='MARITIME' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>DND-CHED PASUC</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='BUSINESS' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='ENGINEERING' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='EDUCATION' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='SCIENCE AND HEALTH RELATED' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='LEGAL AND CRIMINOLOGY' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='IT' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='HUSOCOM' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='MARITIME' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>OPAPP</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='BUSINESS' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='ENGINEERING' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='EDUCATION' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='SCIENCE AND HEALTH RELATED' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='LEGAL AND CRIMINOLOGY' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='IT' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='HUSOCOM' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='MARITIME' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>CHED- STGPFCDS</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='BUSINESS' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='ENGINEERING' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='EDUCATION' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='SCIENCE AND HEALTH RELATED' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='LEGAL AND CRIMINOLOGY' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='IT' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='HUSOCOM' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='MARITIME' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>Grant-in-Aid</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='BUSINESS' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='ENGINEERING' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='EDUCATION' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='SCIENCE AND HEALTH RELATED' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='LEGAL AND CRIMINOLOGY' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='IT' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='HUSOCOM' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='MARITIME' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>


<tr>
<td>Total</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='BUSINESS' and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='ENGINEERING'  and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='EDUCATION' and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='SCIENCE AND HEALTH RELATED' and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='LEGAL AND CRIMINOLOGY' and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='IT' and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='HUSOCOM'  and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where b.PROG_DISC='MARITIME' and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>



</table><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Total Number of Scholars:</b>".$_POST["heicountscholarsinsqlqry"]."
<br />
<br /><br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Prepared By: <br />		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<u>".$_SESSION["directorFullname"]."</u><br />	
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
CHED Region-VIII Director");

$pdf->Output();
}// end reportsByDiscplinePDF


function reportsByGenderPDF($HEI_ID){
$this->abriDB();
$today = date("F j, Y");

$pdf=new PDF_HTML_Table();
$pdf->AddPage();
$pdf->SetFont('Arial','',6);

$heinamqry=mysql_query("select * from hei_tbl where HEI_ID=".$_POST["HEI_ID"]);
$dispThis=mysql_fetch_array($heinamqry);
$HEI_NAM=$dispThis["HEI_NAM"];

$pdf->WriteHTML("
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>Republic of the Philippines</h2><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>Commission on Higher Education (CHED)</h2><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>Region VIII</h2><br /><br />


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CURRENT STATUS OF BENEFICIARIES BY GENDER</b>
<br><br>
School/HEI :&nbsp; ".$HEI_NAM."
<br>
Date:&nbsp; ".$today."
<table border=1>
<tr>
<td>Program Category</td>
<td>Male</td>
<td>Female</td>
<td>Total</td>
</tr>


<tr>
<td>Full Merit</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='MALE' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='FEMALE' and c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>


<tr>
<td>Half Merit</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='MALE' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='FEMALE' and c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>SNPLP</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='MALE' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='FEMALE' and c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>DND-CHED PASUC</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='MALE' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='FEMALE' and c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>OPAPP</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='MALE' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='FEMALE' and c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>CHED- STGPFCDS</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='MALE' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='FEMALE' and c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>Grant-in-Aid</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='MALE' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='FEMALE' and c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>



<tr>
<td>Total</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='MALE'  and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.BENEFICIARY_GENDER='FEMALE' and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>



</table><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Total Number of Scholars:</b>".$_POST["heicountscholarsinsqlqry"]."
<br />
<br /><br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Prepared By: <br />		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<u>".$_SESSION["directorFullname"]."</u><br />	
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
CHED Region-VIII Director");
$pdf->Output();
}// end reportsByGenderPDF
/*


function reportByYrLvlPDF($HEI_ID){
$this->abriDB();
$today = date("F j, Y");

$pdf=new PDF_HTML_Table();
$pdf->AddPage();
$pdf->SetFont('Arial','',6);

$heinamqry=mysql_query("select * from hei_tbl where HEI_ID=".$_POST["HEI_ID"]);
$dispThis=mysql_fetch_array($heinamqry);
$HEI_NAM=$dispThis["HEI_NAM"];

$pdf->WriteHTML("
<h2>COMMISSION ON HIGHER EDUCATION</h2>
<br>
Date: ".$today."
<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>CURRENT STATUS OF BENEFICIARIES BY CURRICULUM YEAR LEVEL</h2>
<br />
HEI :".$HEI_NAM."
<table border=1>
<tr>
<td>Program Category</td>
<td>First</td>
<td>Second</td>
<td>Third</td>
<td>Fourth</td>
<td>Fifth</td>
<td>Total</td>
</tr>


<tr>
<td>Full Merit</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>Half Merit</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>SNPLP</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>






<tr>
<td>DND-CHED-PASUC</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>









<tr>
<td>OPAPP</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>










<tr>
<td>CHED- STGPFCD/S	</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>








<tr>
<td>Grant-in-aid</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>








<tr>
<td>OPAPP</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>



</table>
");
$pdf->Output();
}// end reportsByDiscplinePDF


*/


function reportByYrLvlPDF($HEI_ID){
$this->abriDB();
$today = date("F j, Y");

$pdf=new PDF_HTML_Table();
$pdf->AddPage();
$pdf->SetFont('Arial','',6);

$heinamqry=mysql_query("select * from hei_tbl where HEI_ID=".$_POST["HEI_ID"]);
$dispThis=mysql_fetch_array($heinamqry);
$HEI_NAM=$dispThis["HEI_NAM"];

$pdf->WriteHTML("
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>Republic of the Philippines</h2><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>Commission on Higher Education (CHED)</h2><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>Region VIII</h2><br /><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><h2>CURRENT STATUS OF BENEFICIARIES BY CURRICULUM YEAR LEVEL</b></h2>
<br><br>
<b>Date:</b> ".$today."
<br />
<b>School/HEI:</b> ".$HEI_NAM."
<table border=1>
<tr>
<td>Program Category</td>
<td>First</td>
<td>Second</td>
<td>Third</td>
<td>Fourth</td>
<td>Fifth</td>
<td>Total</td>
</tr>


<tr>
<td>Full Merit</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>Half Merit</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>SNPLP</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>






<tr>
<td>DND-CHED-PASUC</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>









<tr>
<td>OPAPP</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>










<tr>
<td>CHED- STGPFCD/S	</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>








<tr>
<td>Grant-in-Aid</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>








<tr>
<td>Total</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENEFICIARY_YRLVL=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>





</table><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Total Number of Scholars:</b>".$_POST["heicountscholarsinsqlqry"]."
<br />
<br /><br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Prepared By: <br />		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<u>".$_SESSION["directorFullname"]."</u><br />	
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
CHED Region-VIII Director");

$pdf->Output();
}// end reportsByDiscplinePDF


	

function reportByCongressionalDistrictPDF($HEI_ID){
$this->abriDB();
$today = date("F j, Y");

$pdf=new PDF_HTML_Table();
$pdf->AddPage();
$pdf->SetFont('Arial','',6);

$heinamqry=mysql_query("select * from hei_tbl where HEI_ID=".$_POST["HEI_ID"]);
$dispThis=mysql_fetch_array($heinamqry);
$HEI_NAM=$dispThis["HEI_NAM"];

$pdf->WriteHTML("
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>Republic of the Philippines</h2><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>Commission on Higher Education (CHED)</h2><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>Region VIII</h2><br /><br />

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>CURRENT STATUS OF BENEFICIARIES BY CONGRESSIONAL DISTRICT</b></h2>
<br><br>
<b>Date: </b>".$today."<br>
<b>School/HEI :</b>".$HEI_NAM."
<table border=1>
<tr>
<td>Program Category</td>
<td>District I</td>
<td>District II</td>
<td>District III</td>
<td>District IV</td>
<td>District V</td>
<td>District VI</td>
<td>Total</td>
</tr>


<tr>
<td>Full Merit</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=1 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=2 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=3 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=4 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=5 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=6 and b.GRANT_ID=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=1 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>Half Merit</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=1 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=2 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=3 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=4 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=5 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=6 and b.GRANT_ID=2 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=2 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>




<tr>
<td>SNPLP</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=1 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=2 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=3 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=4 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=5 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=6 and b.GRANT_ID=3 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=3 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>






<tr>
<td>DND-CHED-PASUC</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=1 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=2 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=3 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=4 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=5 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=6 and b.GRANT_ID=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>

<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=4 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>









<tr>
<td>OPAPP</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=1 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=2 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=3 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=4 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=5 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=6 and b.GRANT_ID=5 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=5 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>










<tr>
<td>CHED- STGPFCD/S	</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=1 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=2 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=3 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=4 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=5 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=6 and b.GRANT_ID=6 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=6 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>








<tr>
<td>Grant-in-Aid</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=1 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=2 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=3 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=4 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=5 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=6 and b.GRANT_ID=7 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where  c.GRANT_ID=7 and a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>


<tr>
<td>Total</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=1 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=2  and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=3  and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=4 and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=5  and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, grant_tbl b where a.BENE_CONGDIST=6  and a.GRANT_ID=b.GRANT_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."</td>
<td>".
$countBusinessFullMeri=mysql_num_rows(mysql_query("select * from beneficiary_tbl a, program_tbl b, grant_tbl c where a.GRANT_ID=c.GRANT_ID and a.PROG_ID=b.PROG_ID and a.HEI_ID=".$_POST["HEI_ID"]." and !(a.BENEFICIARY_STAT='WAIVED')"))."
</td>
</tr>








</table><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Total Number of Scholars:</b>".$_POST["heicountscholarsinsqlqry"]."
<br />
<br /><br /><br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Prepared By: <br />		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<u>".$_SESSION["directorFullname"]."</u><br />	
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
CHED Region-VIII Director");
$pdf->Output();
}// end reportByCongressionalDistrictPDF


	


}// end class

						if($_POST["REPORT_SELECT"]=="ByDiscipline"){
								$sulod=new reports();
								$butang=new paragLayOut();
								$butang->butangSulod($sulod->reportsByDiscplinePDF($_POST["HEI_ID"]));
						}

						else	if($_POST["REPORT_SELECT"]=="ByGender"){
								$sulod=new reports();
								$butang=new paragLayOut();
								$butang->butangSulod($sulod->reportsByGenderPDF($_POST["HEI_ID"]));
						}
						
						else	if($_POST["REPORT_SELECT"]=="ByYrLvl"){
								$sulod=new reports();
								$butang=new paragLayOut();
								$butang->butangSulod($sulod->reportByYrLvlPDF($_POST["HEI_ID"]));
						}
						
						else	if($_POST["REPORT_SELECT"]=="ByCongressionalDistrict"){
								$sulod=new reports();
								$butang=new paragLayOut();
								$butang->butangSulod($sulod->reportByCongressionalDistrictPDF($_POST["HEI_ID"]));
						}
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
