<html>
<body>
<?php include ("mathfunctions.php");
	$num = (int)$_GET["number"];
	if ($num > 0) {
		echo factorial($num); 
	} else {
		echo "<p>Number is not valid</p>";
	}
?>
</body>
</html>