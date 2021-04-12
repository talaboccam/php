<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Using string functions</title>
</head>
<body>
	<h1>Web Development – Lab 3</h1>
	<?php
		if (isset($_POST["string"])) {
			$str = $_POST["string"];
			$pattern = "/^[A-Za-z ]+$/";
			if (preg_match ($pattern, $str)) {
				$ans = "";
				$len = strlen ($str);
				for ($i = 0; $i < $len; $i++) {
					$letter = substr ($str, $i, 1); //extract 1 char using substr
					// check using strpos, is_numeric is used as strpos returns a number
					// (position) if found, and false otherwise
					if (! is_numeric (strpos ("AEIOUaeiou", $letter))) {
						$ans = $ans . $letter;
					}
				}
				// generate answer after all letters are checked
				echo "<p>The word with no vowels is ", $ans, ".</p>";
			} else { // string contains invalid characters
				echo "<p>Please enter a string containing only letters or space.</p>";
			}
		} else { //no input
			echo "<p>Please enter string from the input form.</p>";
		}
	?>
</body>
</html> 