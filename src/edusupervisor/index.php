
<?php
session_start();
 if(session_is_registered('adminUserName')&&session_is_registered('adminPassword'))
{
	echo "<script>
				window.location.href='HOME.php';
			</script>";
}
else {

		echo "<script>alert('Access Denied! You Must be logged-in first!');
				window.location.href='../index.php';
			</script>";
}
?>