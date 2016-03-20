function BeautifulMyNumber($number) {

	$number = (0 + str_replace(",","",$number));
	if(!is_numeric($number)) return false;
    if($number > pow(10, 603)) return round(($number/pow(10, 603)),1).' centilliard'; // exposant 
    elseif($number > pow(10, 600)) return round(($number/pow(10, 600)),1).' centillion'; // exposant 
    elseif($number > pow(10, 309)) return round(($number/pow(10, 309)),1).' unoquinquagintilliard'; // exposant 309
    elseif($number > pow(10, 24)) return round(($number/pow(10, 24)),1).' quadrillions'; // exposant 24
    elseif($number > pow(10, 21)) return round(($number/pow(10, 21)),1).' trilliards'; // exposant 21
    elseif($number > pow(10, 18)) return round(($number/pow(10, 18)),1).' trillions'; // exposant 18
    elseif($number > pow(10, 15)) return round(($number/pow(10, 15)),1).' billiards'; // exposant 15
	elseif($number > pow(10, 12)) return round(($number/pow(10, 12)),1).' billions'; // exposant 12
	elseif($number > pow(10, 9)) return round(($number/pow(10, 9)),1).' milliards'; // exposant 9
	elseif($number > pow(10, 6)) return round(($number/pow(10, 6)),1).' millions'; // exposant 6
	elseif($number > pow(10, 3)) return round(($number/pow(10, 3)),1).' mille'; // exposant 3
	return number_format($number);
	
}
