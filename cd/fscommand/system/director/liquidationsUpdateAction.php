<?php
		require_once("a-connection.php");
		konekServer::abriDB();
		if ($_GET["updateBenefactor"]==1)
		{	
			//if(!empty($PROG_NAM) && !empty($PROG_STAT) & !empty($PROGCLASS_ID) && !empty($PROG_YRS) && !empty($PROG_FEECHAR) && !empty($PROG_FEEINT) && !empty($HEI_ID))
			//{
					
					$BENEFICIARY_ID=$_POST["BENEFICIARY_ID"];
					$BENEFICIARY_nam1=$_POST["BENEFICIARY_nam1"];
					$BENEFICIARY_nam3=$_POST["BENEFICIARY_nam3"];
					$BENEFICIARY_nam2=$_POST["BENEFICIARY_nam2"];
					$HEI_ID=$_POST["HEI_ID"];
					$PROG_ID=$_POST["PROG_ID"];
					$BENEFICIARY_YRLVL=$_POST["BENEFICIARY_YRLVL"];
					$GRANT_ID=$_POST["GRANT_ID"];
					$BENEFICIARY_AWARDNO=$_POST["BENEFICIARY_AWARDNO"];
					$BENEFICIARY_GRANTEFFECTIVITY=$_POST["BENEFICIARY_GRANTEFFECTIVITY"];
					$BENEFICIARY_MAILADD=$_POST["BENEFICIARY_MAILADD"];
					$BENEFICIARY_CONTACTNO=$_POST["BENEFICIARY_CONTACTNO"];
					$BENEFICIARY_STAT=$_POST["BENEFICIARY_STAT"];
					
					if(!empty($BENEFICIARY_nam1)&&!empty($BENEFICIARY_nam3)&&!empty($BENEFICIARY_nam2)&&!empty($HEI_ID)&&!empty($PROG_ID)&&!empty($BENEFICIARY_GRANTEFFECTIVITY)&&!empty($BENEFICIARY_MAILADD)&&!empty($BENEFICIARY_CONTACTNO)&&!empty($BENEFICIARY_STAT))
			{		
			/*$updataBeneficiartyQuery="INSERT INTO beneficiary_tbl (BENEFICIARY_ID , BENEFICIARY_nam1 , BENEFICIARY_nam3 , BENEFICIARY_nam2 , HEI_ID, PROG_ID, BENEFICIARY_YRLVL, GRANT_ID, BENEFICIARY_GRANTEFFECTIVITY, BENEFICIARY_AWARDNO,  BENEFICIARY_ADDRESS_STRNUM, BENEFICIARY_ADDRESS_DIST, BENEFICIARY_ADDRESS_MUN, BENEFICIARY_ADDRESS_PROV, BENEFICIARY_CONTACTNO, BENEFICIARY_STAT) 
			values(null,
			'".$BENEFICIARY_nam1."',  
			'".$BENEFICIARY_nam3."',  
			'".$BENEFICIARY_nam2."',  
			'".$HEI_ID."',  
			'".$PROG_ID."',  
			".$BENEFICIARY_YRLVL.",
			'".$GRANT_ID."',    
			'".$BENEFICIARY_GRANTEFFECTIVITY."',
			'".$BENEFICIARY_AWARDNO."',  
			'".$BENEFICIARY_ADDRESS_STRNUM."',  
			'".$BENEFICIARY_ADDRESS_DIST."',  
			'".$BENEFICIARY_ADDRESS_MUN."',  
			'".$BENEFICIARY_ADDRESS_PROV."',  
			'".$BENEFICIARY_CONTACTNO."', 
			'".$BENEFICIARY_STAT."' )";*/
			
			
			$updataBeneficiartyQuery="UPDATE beneficiary_tbl set 
			BENEFICIARY_nam1='".$BENEFICIARY_nam1."',  
			BENEFICIARY_nam3='".$BENEFICIARY_nam3."',  
			BENEFICIARY_nam2='".$BENEFICIARY_nam2."',  
			HEI_ID='".$HEI_ID."',  
			PROG_ID='".$PROG_ID."',  
			BENEFICIARY_YRLVL=".$BENEFICIARY_YRLVL.",
			GRANT_ID='".$GRANT_ID."',    
			BENEFICIARY_GRANTEFFECTIVITY='".$BENEFICIARY_GRANTEFFECTIVITY."',
			BENEFICIARY_AWARDNO='".$BENEFICIARY_AWARDNO."',  
			BENEFICIARY_MAILADD='".$BENEFICIARY_MAILADD."',  
			BENEFICIARY_CONTACTNO='".$BENEFICIARY_CONTACTNO."', 
			BENEFICIARY_STAT='".$BENEFICIARY_STAT."'
			where BENEFICIARY_ID=".$BENEFICIARY_ID.";";
			
			
			paragUpdateDB::updateTable($updataBeneficiartyQuery);
			echo "<script>alert('Info Beneficiary ".$BENEFICIARY_nam1." ".$BENEFICIARY_nam3." ADDED!')</script>";
			echo "<script>window.location.href='liquidationsMain.php'</script>";
			}
			else{
					
				echo "<script>alert('Fill all fields!')</script>";
				echo "<script>window.location.href='liquidationsMain.php'</script>";
			
				}
		}
		else
		{
		echo "<script>alert('Invalid Address!')</script>";
		echo "<script>window.location.href='index.php'</script>";
		
		}
?>