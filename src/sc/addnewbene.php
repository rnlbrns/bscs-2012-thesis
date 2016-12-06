<?php
		require_once("a-connection.php");
		konekServer::abriDB();
		
		if(!empty($_POST["HEI_ID"]) && !empty($_POST["BENEFICIARY_ID"]) ){
		
		$kq=mysql_query("UPDATE beneficiary_tbl SET HEI_ID=".$_POST["HEI_ID"].",  PROG_ID=".$_POST["PROG_ID"].", BENEFICIARY_YRLVL=1, BENEFICIARY_STAT='ENROLLED'  WHERE BENEFICIARY_ID=".$_POST["BENEFICIARY_ID"]);	
		echo "<script>alert('Scholar Added to yout HEI!')</script>";
		echo "<script>window.location.href='liquidationsMain.php'</script>";
	
		}
		else
		{
		echo "<script>alert('Please Select a beneficiary!')</script>";
		echo "<script>window.location.href='liquidationsMain.php'</script>";
	
		}		
?>