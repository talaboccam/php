<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Leap Year</title>
</head>
<body>
<h1>Lab02 Task4 - Leap Year</h1>
<?php
	function is_leapyear($y) {
		$y = (int)$_GET["year"];
		if ($y % 4 == 0 and ($y % 100 > 1 or ($y % 100 == 0 and $y % 400))) {
			return true;
		} else {
			return false;
		}
	}
	if (is_leapyear() == true) {
		echo "The year you entered ", $value, " is a leap year.";
	} else {
		echo "The year you entered ", $value, " is a standard year.";
	}
?>
</body>
</html>