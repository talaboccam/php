<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Perfect Pallindrome</title>
</head>
<body>
	<h1>Lab03 Task 2 - Perfect Pallindrome</h1>
	<?php
		if (isset ($_POST["string"])) {
			$str = $_POST["string"];
			$strlower = strtolower($str);
			$strrev = strrev($strlower);
			if (strcmp($strlower, $strrev) == 0) {
				echo "<p>The word you entered: ", $str, " is a perfect pallindrome</p>";
			} else {
				echo "<p>The word you entered: ", $str, " is not a perfect pallindrome</p>";
			}
		} else {
			echo "<p>Enter a valid string</p>";
		}
	?>
</body>
</html>