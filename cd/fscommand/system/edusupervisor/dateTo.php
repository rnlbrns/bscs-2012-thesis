<?php	

function dateTo($toBulanName="bulanTo",$toPitsaName="pitsaTo",$toTuigName="tuigTo",$dateToMonth,$dateToDate,$dateToYear,$siyahanTuig=1972)
{	
	$dTo="	<select id='".$toBulanName."' name='".$toBulanName."' class='piliFont'>";
	$bulan=array('','January','February','March','April','May','June','July','August','September','October','November','December');
	for ($bulanIhap=1; $bulanIhap<=12; $bulanIhap++)
	{	
		if ($dateToMonth==$bulanIhap+1)
		{
			$dTo.="<option value='".$bulanIhap."' selected>".$bulan[$bulanIhap]; 
		}
		else
		{	
			$dTo.="<option value='".$bulanIhap."'>".$bulan[$bulanIhap]; 
		}
	}
	$dTo.="	</select>";
	$dTo.="	<select id='".$toPitsaName."' name='".$toPitsaName."' class='piliFont'>";
	for ($pitsaIhap=1; $pitsaIhap<=31; $pitsaIhap++)
	{	
		if ($dateToDate==$pitsaIhap) $dTo.="<option value='".$pitsaIhap."' selected>".$pitsaIhap;
		else $dTo.="<option value='".$pitsaIhap."'>".$pitsaIhap;
	}
	$dTo.="	</select>";
	$dTo.="	<select id='".$toTuigName."' name='".$toTuigName."' class='piliFont'>";
	$yanaTuig=date("Y"); $tikangTuigTo=(empty($siyahanTuig) ? date("Y") : $siyahanTuig);
	
	for ($tuigIhap=$yanaTuig; $tuigIhap>=$tikangTuigTo; $tuigIhap--)
	{
		if ($dateToYear==$tuigIhap) $dTo.="<option value='".$tuigIhap."' selected>".$tuigIhap;
		else $dTo.="<option value='".$tuigIhap."'>".$tuigIhap;
	}
	$dTo.="	</select>";
	return $dTo;
}

?>