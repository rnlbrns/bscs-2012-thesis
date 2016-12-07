<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
require_once("header.php");
konekServer::abriDB();
if($_POST["fw"]=='Add'){
	$addNewQry=mysql_query("insert into schoolyr_tbl set schoolyr_yr='".$_POST["schoolyr_yr"]."'");

			echo "<script>alert('Schoolyear')</script>";
			echo "<script>window.location.href='schoolyearmanagement.php'</script>";
}

else{
echo "<center><h2>List Of School Years</h2>
<table border=1>
";
$schoolyrqry=mysql_query("select * from schoolyr_tbl");
$schoolyrkawnt=mysql_num_rows($schoolyrqry);
$schoolyrihap=0;
while($schoolyrihap<$schoolyrkawnt)
{
$schoolyrihap++;
$getsyr=mysql_fetch_array($schoolyrqry);
$schoolyr_yr=$getsyr["schoolyr_yr"]; 
echo"<tr><td>".$schoolyr_yr."</td></tr>";
}
echo "</table>
</br>
</br>

<h3>Add New Year</h3>
</br>
<form method='post' action='schoolyearmanagement.php?addYr=1'>
<input type='text' name='schoolyr_yr'> <input type='submit' value='Add' name='fw'>
</form></center>";
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
