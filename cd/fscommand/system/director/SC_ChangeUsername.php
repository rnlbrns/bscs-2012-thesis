<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('SC_USERNAM')&&session_is_registered('SC_USERNAM'))
{
?>
<?php
if(
$_POST["changeUsername"]=="Confirm")
{
		$newUserName=$_POST["newUserName"];
		if(empty($newUserName))
		{
			echo "<script>alert('Please input a user name');
				window.location.href='SC_ChangeUsername.php';
			</script>";
		}
		else{
		
		$adminChangeUsernameQry="update coordinator_tbl set SC_USERNAM='".$newUserName."' where SC_ID=".$_SESSION['SC_ID'];
		paragUpdateDB::updateTable($adminChangeUsernameQry);
		echo "<script>alert('USERNAME CONFIRMED! You will now be logged-out');
				window.location.href='a-logout.php';
			</script>";
		}
}
require_once("header.php");
echo"<br>
<br>";
echo "Change your Current Username Here:<br><br>
";

echo "<form method='POST' action='SC_ChangeUsername.php'>
New Username:  <input type='text' name='newUserName' id='newUserName' onKeyPress='return usernameUgPassword(event, false)'>
<br>
<br><input type='Submit' name='changeUsername' value='Confirm'> 
</form>";
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
