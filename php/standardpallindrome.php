<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Standard Pallindrome</title>
</head>
<body>
	<h1>Lab03 Task 3 - Standard Pallindrome</h1>
	<?php
		if (isset ($_POST["string"])) {
			$str = $_POST["string"];
			$purestr = preg_replace("([^A-Za-z0-9])", "", $str);
			$strlower = strtolower($purestr);
			$strrev = strrev($strlower);
			if (strcmp($strlower, $strrev) == 0) {
				echo "<p>The word you entered: ", $str, " is a standard pallindrome</p>";
			} else {
				echo "<p>The word you entered: ", $str, " is not a standard pallindrome</p>";
			}
		} else {
			echo "<p>Enter a valid string</p>";
		}
	?>
</body>
</html>