<?php
require_once("a-connection.php");
$URL_ADDRESS=$_SESSION['URL_ADDRESS'];
session_start();
if(session_is_registered('edusupervisorUsername')&&session_is_registered('edusupervisorPassword'))
{
?>
<?php
require_once("header.php");
echo "<center><h2>Update Profile</h2></center><br /><div id='example-two'>
					
    		<ul class='nav'>
                <li class='nav-one'><a href='#webmg1' class='current'>Username</a></li>
                <li class='nav-two'><a href='#webmg2'>Password</a></li>
                <li class='nav-three'><a href='#webmg3'>Profile</a></li>
            </ul>
    		
    		<div class='list-wrap'>
    		
    			<ul id='webmg1'>";
if(
$_POST["changeUsername"]=="Confirm")
{
		$newUserName=$_POST["newUserName"];
		if(empty($newUserName))
		{
			echo "<script>alert('Please select a user name');
				window.location.href='adminupdateprofile.php';
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
echo"<br>
<br>";
echo "<center>Change your Current Username Here:<br><br>
";

echo "<form method='POST' action='adminupdateprofile.php'>
New Username:  <input type='text' name='newUserName' id='newUserName' onKeyPress='return usernameUgPassword(event, false)'>
<br>
<br><input type='Submit' name='changeUsername' value='Confirm'> 
</form></center>";
    		echo"	</ul>
        		 
        		 <ul id='webmg2' class='hide'>
                   ";
				   
			
if(
$_POST["changePass"]=="Confirm")
{
		$newPass1=$_POST["newPass1"];
		$newPass2=$_POST["newPass2"];
		if(empty($newPass2)||empty($newPass1))
		{
		echo "<script>alert('Password empty! You will now be logged-out');
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
echo"<br>
<br><center>";
echo "Change your Current Password Here:<br><br>
";

echo "<form method='POST' action='adminupdateprofile.php'><center>
<table><tr>

<td>New password:</td>
<td><input type='password' name='newPass1' id='newPass1' onKeyPress='return usernameUgPassword(event, false)'></td>
</tr>
<tr>
<td>Confirm Password: </td><td> <input type='password' name='newPass2' id='newPass2' onKeyPress='return usernameUgPassword(event, false)'></td>
<tr>
<td><input type='Submit' name='changePass' value='Confirm'></td> </tr>
</table>
</center></form>";
				   echo" </ul>
        		  <ul id='webmg3' class='hide'>
                   ";
				   
			
if(
$_POST["changeadminFullname"]=="Confirm")
{
		$adminFullname=$_POST["adminFullname"];
		if(empty($adminFullname))
		{
		echo "<script>alert('Name CONFIRMED! You will now be logged-out');
				window.location.href='a-logout.php';
			</script>";
		}
		$adminChangePassQry="update sysadmin set adminFullname='".$adminFullname."';";
		paragUpdateDB::updateTable($adminChangePassQry);
		echo "<script>alert('Password CONFIRMED! You will now be logged-out');
				window.location.href='a-logout.php';
			</script>";
	
}
echo"<br>
<br><center>";
echo "Change your Full Name:<br><br>
";

echo "<form method='POST' action='adminupdateprofile.php'><center>
<table><tr>

<td>New Fullname:</td>
<td><input type='text' name='adminFullname' id='adminFullname' onKeyPress='return usernameUgPassword(event, false)'></td>
</tr>
<tr>
<td><input type='Submit' name='changeadminFullname' value='Confirm'></td> </tr>
</table>
</center></form>";
				   echo" </ul>
        		 
    		 </div> <!-- END List Wrap -->
		 
		 </div> <!-- END Organic Tabs (Example One) -->";
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
