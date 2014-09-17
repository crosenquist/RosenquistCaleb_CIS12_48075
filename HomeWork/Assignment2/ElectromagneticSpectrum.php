<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ElectromagneticSpectrum</title>
</head>

<body>
<h1>Electromagnetic Spectrum</h1>

<?php
	//Input the data from the form
	$waveLength=$_GET['waveLength'];
	
	if($waveLength<=1e-12){
            echo "That is a Gamma Ray!";
        }elseif($waveLength>1e-12&&$waveLength<=1e-10){
            echo "That is a X-Ray!";
		}elseif($waveLength>1e-10&&$waveLength<=1e-8){
            echo "That is Ultraviolet!";
		}elseif($waveLength>1e-8&&$waveLength<=1e-6){
            echo "That is Visible Light!";
		}elseif($waveLength>1e-6&&$waveLength<=1e-5){
            echo "That is Infrared!";
		}elseif($waveLength>1e-5&&$waveLength<=1e-2){
            echo "That is a Microwave!";
		}elseif($waveLength>1e-2&&$waveLength<=1e3){
            echo "That is a Radio Wave!";
        }else{
            echo "This isn't making sense...";
	}
	
?>


</body>
</html>