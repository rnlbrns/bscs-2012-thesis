<?php	

require_once("a-connection.php");

			//if(!empty($PROG_NAM) && !empty($PROG_STAT) & !empty($PROGCLASS_ID) && !empty($PROG_YRS) && !empty($PROG_FEECHAR) && !empty($PROG_FEEINT) && !empty($HEI_ID))
			//{
			
			konekServer::abriDB();
				$GRANT_ID=$_POST["GRANT_ID"];
				$GRANT_CODE=$_POST["GRANT_CODE"];
				$AWARDNO_AWARD=$_POST["AWARDNO_AWARD"];

			$checkIfawardnoexitscountqry=mysql_query("select * from awardno_tbl where AWARDNO_AWARD='".$AWARDNO_AWARD."' ");
			
			 $checkIfawardnoexitscount=mysql_num_rows($checkIfawardnoexitscountqry);
			$checkIfawardnoexitscount;
			if($checkIfawardnoexitscount>0){
				
				
			echo"<script>alert('Award Number already exists')</script>";
			echo "<script>window.location.href='awardNoMain.php'</script>";
				}
			
			else{
				
			$addnewProgramquery="INSERT INTO awardno_tbl (AWARDNO_ID , GRANT_ID , AWARDNO_AWARD , AWARDNO_AVAILABILITY) 
			values(null,
			
			".$GRANT_ID." 
			,'".$AWARDNO_AWARD."'
			,0
			)";
			paragUpdateDB::updateTable($addnewProgramquery);
	
	
	$audittrailquery=mysql_query("insert into audittrail_tbl set audittrail_username='".$_SESSION["edusupervisorUsername"]."',  audittrail_activity='Add an Award No', audittrail_time=now() ") or die(mysql_error());	
			echo "<script>alert('AWARD NUMBER ADDED!')</script>";
			echo "<script>window.location.href='awardNoAdd.php'</script>";

			}
				
		
				?>