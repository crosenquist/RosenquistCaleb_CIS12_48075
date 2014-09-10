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
	switch(true){
		case $score>=90: $grade = 'A'; break;
		case $score>=80: $grade = 'B'; break;
		case $score>=70: $grade = 'C'; break;
		case $score>=60: $grade = 'D'; break;
		default:         $grade = 'F';
	}
	
	//Output the results
	echo "<h1>A score of $score = $grade</h1>";
?>
</body>
</html>