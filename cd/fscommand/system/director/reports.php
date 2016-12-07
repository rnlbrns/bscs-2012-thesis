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
	echo "<form method='POST' action='reportsView.php'>";
									
echo "<center><h3>Generate Reports for Current Number of StuFAP Scholars/Grantees in Region-VIII</h3>
</br>
<b>Select a report :</b>

<select name='REPORT_SELECT'>
<option value='ByDiscipline'>BY DISCIPLINE</option>
<option value='ByGender'>BY GENDER</option>
<option value='ByYrLvl'>BY CURRICULUM YEAR LEVEL</option>
<option value='ByCongressionalDistrict'>BY CONGRESSIONAL DISTRICT</option>
</select><br /><br /><br />
<b>Select a HEI :</b>
<select name='HEI_ID'>
";
$HeiPagawasQry=mysql_query("select * from hei_tbl");
$heiKawnt=mysql_num_rows($HeiPagawasQry);
$heiIhap=0;
while($heiIhap<$heiKawnt){
	$heiIhap++;
	$heiDisp=mysql_fetch_array($HeiPagawasQry);
	$HEI_ID=$heiDisp["HEI_ID"];
	$HEI_NAM=$heiDisp["HEI_NAM"];
	echo "<option value=".$HEI_ID.">".$HEI_NAM."</option>	";
	}
echo"
</select>
<br /><br />
<input type='submit' name='grantFW' value='Generate'/>

</form>
</h4>

</center>";
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
