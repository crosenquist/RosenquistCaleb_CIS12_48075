<?php
	/*
	Caleb Patrick Rosenquist
	September 8th, 2014
	Purpose: To demonstrate branching constructs
	*/
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	//Initialize the input
	$score = rand(0,100);
	
	//Determine the grade
	$grade = $score >= 90?'A':(
			 $score >= 80?'B':(
			 $score >= 70?'C':(
			 $score >= 60?'D':
			 'F')));
	
	//The Parenthesis within the above statement are only required
	//in PHP, meaning that they are not needed within other 		    //languages. However, the parenthesis can be kept, as the 
	//implementation would still work in other languages as
	//well.
	
	//Output the results
	echo "<h1>A score of $score = $grade</h1>";
?>
</body>
</html>