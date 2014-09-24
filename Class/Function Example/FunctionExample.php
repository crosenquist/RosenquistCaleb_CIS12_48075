<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<?php
//Function utilizing the power function
function fValue1($p,$i,$n){
	return $p*pow((1+$i/100), $n);
}

//Function utilizing a for-loop
function fValue2($p,$i,$n){
	$fValue = $p;
	for($year=1;$year<=$n;$year++){
		$fValue *= (1+$i/100);
	}
	return $fValue;
}

//Function utilizing the exponential and log functions
function fValue3($p,$i,$n){
	return $p*exp($n*log(1+$i/100));
}

//Function utilizing itself
function fValue4($p,$i,$n){
	if($n==0)return $p;
	else return fValue4($p,$i,$n-1)*(1+$i/100);
}

//Function utilizing a referenced parameter
function fValue5($p,$i,$n,&$fValue){
	$fValue = $p;
	for($year=1;$year<=$n;$year++){
		$fValue *= (1+$i/100);
	}
	
}

//Function utilizing a defaulted parameter
function fValue6($p,$i,$n=9){
	return $p*pow((1+$i/100), $n);
}
?>

</head>

<body>
<?php
	//Delcare and initialize variables
	$pValue   = 100; //Present value in $'s
	$iRate    = 8;   //Interest/ Investment rate % per year
	$cPeriods = 9;  //Number of compounding periods (years)
	$fValue5;
	
	//Utilize the function
	$fValue1 = number_format(fValue1($pValue,$iRate,$cPeriods),2);
	$fValue2 = number_format(fValue2($pValue,$iRate,$cPeriods),2);
	$fValue3 = number_format(fValue3($pValue,$iRate,$cPeriods),2);
	$fValue4 = number_format(fValue4($pValue,$iRate,$cPeriods),2);
	fValue5($pValue,$iRate,$cPeriods,$fValue5);
	$fValue5 = number_format($fValue5,2);
	$fValue6 = number_format(fValue6($pValue,$iRate),2);
	
	//Display the results
	echo "<p>Present Value = $$pValue</p>";
	echo "<p>Investment Rate = $iRate%</p>";
	echo "<p>Compound Periods= $$cPeriods (years)</p>";
	echo "<p>Future Value1 = $$fValue1</p>";
	echo "<p>Future Value2 = $$fValue2</p>";
	echo "<p>Future Value3 = $$fValue3</p>";
	echo "<p>Future Value4 = $$fValue4</p>";
	echo "<p>Future Value5 = $$fValue5</p>";
	echo "<p>Future Value6 = $$fValue6</p>";
	
?>

</body>
</html>