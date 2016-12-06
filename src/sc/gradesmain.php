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
	echo "<form method='POST' action='gradesView.php'>";
									
echo "<center><h3>Generate Grade Reports for ".$_SESSION["HEI_NAM"]."</h3>
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
echo "</select><b>Sem:</b>
<select name='GRADE_SEM'>
<option value=1>1</option>
<option value=2>2</option>
</select><br />
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
