<?php

function dateFrom($fromBulanName="bulanFrom",$fromPitsaName="pitsaFrom",$fromTuigName="tuigFrom",$dateFromMonth,$dateFromDate,$dateFromYear,$siyahanTuig=1972)
{	
	$dFrom="	<select id='".$fromBulanName."' name='".$fromBulanName."' class='piliFont' >";
	$bulan=array('','January','February','March','April','May','June','July','August','September','October','November','December');
	for ($bulanIhap=1; $bulanIhap<=12; $bulanIhap++)
	{	
		if ($dateFromMonth==$bulanIhap+1)
		{	
			$dFrom.="<option value='".$bulanIhap."' selected>".$bulan[$bulanIhap]; 
		}
		else
		{	
			$dFrom.="<option value='".$bulanIhap."'>".$bulan[$bulanIhap]; 
		}
	}
	$dFrom.="	</select>";
	$dFrom.="	<select id='".$fromPitsaName."' name='".$fromPitsaName."' class='piliFont'>";
	
	for ($pitsaIhap=1; $pitsaIhap<=31; $pitsaIhap++)
	{	
		if ($dateFromDate==$pitsaIhap) $dFrom.="<option value='".$pitsaIhap."' selected>".$pitsaIhap;
		else $dFrom.="<option value='".$pitsaIhap."'>".$pitsaIhap;
	}
	$dFrom.="	</select>";
	$dFrom.="	<select id='".$fromTuigName."' name='".$fromTuigName."' class='piliFont'>";
	$yanaTuig=date("Y"); $tikangTuigFrom=(empty($siyahanTuig) ? date("Y") : $siyahanTuig);
	
	for ($tuigIhap=$yanaTuig; $tuigIhap>=$tikangTuigFrom; $tuigIhap--)
	{	
		if ($dateFromYear==$tuigIhap) $dFrom.="<option value='".$tuigIhap."' selected>".$tuigIhap;
		else $dFrom.="<option value='".$tuigIhap."'>".$tuigIhap;
	}
	$dFrom.="	</select>";
	return $dFrom;
}

?>