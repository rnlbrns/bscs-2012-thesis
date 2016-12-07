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
	echo "<form method='POST' action='gradesView.php'>";
									
echo "<center>
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
</br>
<b>Select a School Year :</b>

<select name='schoolyr_yr'>";
$SYPagawasQry=mysql_query("select * from schoolyr_tbl");
$SYKawnt=mysql_num_rows($SYPagawasQry);
$SYIhap=0;
while($SYIhap<$SYKawnt){
	$SYIhap++;
	$SYDisp=mysql_fetch_array($SYPagawasQry);
	$schoolyr_yr=$SYDisp["schoolyr_yr"];
	echo "<option value='".$schoolyr_yr."'>".$schoolyr_yr."</option>	";
	}
echo "</select>&nbsp;&nbsp;<b>Sem:</b>
<select name='GRADE_SEM'>
<option value=1>1</option>
<option value=2>2</option>
</select>
<br />
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
