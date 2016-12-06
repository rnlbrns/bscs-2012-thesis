
<?php
session_start();
 if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
	echo "<script>
				window.location.href='HOME.php';
			</script>";
}
else {
?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        <head><script type="text/javascript" src="JS_Scripts/balidasyonSaForm.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>SysAdmin Log-in</title>
		</head>
		<body style="background:url(images/bg.jpg) no-repeat; ">
		<br /><br />
		<center>
		<table border=1>
		<tr><td bgcolor='#0000FF'><img src='images/180px-Ched_logo.png'/></td></tr></table><br>
		<form method='POST' action='a-balidasyonsalogin.php'><table>
        <tr>
		<td>User Name:</td><td><input type='text' name='username' maxlength=30 onKeyPress='return usernameUgPassword(event, false)'>
        </td><tr>
        </tr>
        <td>Password:</td><td><input type='password' name='userpassword' maxlength=30 onKeyPress='return usernameUgPassword(event, false)'></td>        
        </tr>
        <tr>
        <td>Usertype:</td>
        <td><select name='usertype'>
        <option value='1'>Administrator</option>
        <option value='2'>Education Supervisor</option>
        <option value='3'>HEI Scholarship Coordinator</option>
        <option value='4'>CHED-R08 Director</option>
        </select>
        </td>
        </tr>
        <tr>
				<tr>	
  			<td colspan ='2' align='center'><input type='image' src='images/login_icon.png' height = '60' width ='120' value='Log In'></td>
            </tr>
            </table>            </form></center>
			</body></html>";	
<?php 
}
?>