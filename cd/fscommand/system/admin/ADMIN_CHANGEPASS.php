<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
?>
<?php
if(
$_POST["changePass"]=="Confirm")
{
		$newPass1=$_POST["newPass1"];
		$newPass2=$_POST["newPass2"];
		if(empty($newPass2)||empty($newPass1))
		{
		echo "<script>alert('Password CONFIRMED! You will now be logged-out');
				window.location.href='a-logout.php';
			</script>";
		}
		else if(!($newPass1==$newPass2))
		{
			echo "<script>alert('Passwords Do Not Match');
				window.location.href='a-logout.php';
			</script>";
		
		}
		$adminChangePassQry="update sysadmin set adminPassword='".$newPass1."';";
		paragUpdateDB::updateTable($adminChangePassQry);
		echo "<script>alert('Password CONFIRMED! You will now be logged-out');
				window.location.href='a-logout.php';
			</script>";
	
}
require_once("header.php");
echo"<br>
<br><center>";
echo "Change your Current Username Here:<br><br>
";

echo "<form method='POST' action='ADMIN_CHANGEPASS.php'><center>
<table><tr>

<td>New password:</td>
<td><input type='text' name='newPass1' id='newPass1' onKeyPress='return usernameUgPassword(event, false)'></td>
</tr>
<tr>
<td>Confirm Password: </td><td> <input type='text' name='newPass2' id='newPass2' onKeyPress='return usernameUgPassword(event, false)'></td>
<tr>
<td><input type='Submit' name='changePass' value='Confirm'></td> </tr>
</table>
</center></form>";
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
