<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
if(
$_POST["changeUsername"]=="Confirm")
{
		$newUserName=$_POST["newUserName"];
		if(empty($newUserName))
		{
			echo "<script>alert('Please select a user name');
				window.location.href='ADMIN_CHANGEUSERNAME.php';
			</script>";
		}
		else{
		$adminChangeUsernameQry="update sysadmin set adminUsername='".$newUserName."';";
		paragUpdateDB::updateTable($adminChangeUsernameQry);
		echo "<script>alert('USERNAME CONFIRMED! You will now be logged-out');
				window.location.href='a-logout.php';
			</script>";
		}
}
require_once("header.php");
echo"<br>
<br>";
echo "<center>Change your Current Username Here:<br><br>
";

echo "<form method='POST' action='ADMIN_CHANGEUSERNAME.php'>
New Username:  <input type='text' name='newUserName' id='newUserName' onKeyPress='return usernameUgPassword(event, false)'>
<br>
<br><input type='Submit' name='changeUsername' value='Confirm'> 
</form></center>";
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
