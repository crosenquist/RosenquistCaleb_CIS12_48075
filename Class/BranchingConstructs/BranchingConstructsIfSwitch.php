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
	//Initialize the input and declare variables
	$score = rand(0,100);
	$grade = '';
	
	//Determine the grade
	//Nested Switch Statements
	switch($score>=90){
		case true: $grade = 'A';
		default: 
	}
	switch($score>=80&&$score<90){
		case true: $grade = 'B';
		default:
	}
	switch($score>=70&&$score<80){
		case true: $grade = 'C';
		default:
	}
	switch($score>=60&&$score<70){
		case true: $grade = 'D';
		default:
	}
	switch($score<60){
		case true: $grade = 'F';
		default:
	}
	
	/*if($score>=80&&$score<90) $grade = 'B';
	if($score>=70&&$score<80) $grade = 'C';
	if($score>=60&&$score<70) $grade = 'D';
	if($score<60) $grade = 'F';
	*/
	
	//Output the results
	echo "<h1>A score of $score = $grade</h1>";
?>
</body>
</html>