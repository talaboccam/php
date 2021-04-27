<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="styles.css" type="text/css">
	<title>Status Posting System</title>
</head>
<body>
	<div class="content">
	<?php
	//database details
	$sql_host="cmslamp14.aut.ac.nz";
	$sql_user="pqh3376";
	$sql_pass="";
	$sql_db="pqh3376";
	$sql_tble="statusdb";
	

	//Create connection
	$conn = @mysqli_connect($sql_host, $sql_user, $sql_pass)
		or die('Database not available');

	$dbconn = @mysqli_select_db($conn, 'pqh3376')
		or die('Database not available');
	
	if (!$conn) {
		//connection error display
		echo "<p>Connection to database failed</p>";
	} else { 
		//successful connection
		//check for data in statuscode and status
		if (isset($_POST["statuscode"]) && isset($_POST["status"])) {
			$patterncode = "/[S]\d\d\d\d/";
			$statuscode = $_POST["statuscode"];
			$status = $_POST["status"];
			$share = $_POST["share"];
			$date = date('Y-m-d', strtotime($_POST["date"]));
			$sqlinsert = "INSERT INTO `statusdb` (`statusCode`, `status`, `share`, `date`, `permission`) VALUES ('$statuscode', '$status', '$share', '$date', '$permission')";
			
			$tablecheck = mysqli_query($conn,'SELECT * FROM statusdb')
				or die("<p>table doesn't exist</p>");
	

			//Checking if a record exists in the table
			$recordquery = "SELECT * FROM statusdb WHERE statuscode='$statuscode'";
			$recordcheck = mysqli_query($conn, $recordquery);
			$dbmatch = mysqli_fetch_assoc($result);
			if ($dbmatch) {
				if ($dbmatch['statuscode'] === $statuscode) {
					echo "<p>Status code already exists.</p>";
				}
			}
			
			//matching entered code with pattern
			if (preg_match($patterncode, $statuscode)) {
						
				//inserting into table
				$result = mysqli_query($conn, $sqlinsert)
					or die("<p>Error adding entry</p>");
				echo "<p>Added entry into database</p>";
				mysqli_close($conn);
			} else { //status code is invalid
				echo "<p>Please enter a valid status code</p>";
			}
		} else { //string contains invalid characters
			echo "<p>Enter a valid status</p>";
		}	
	}
	?>
	<button type="button" class="button"><a href = "http://pqh3376.cmslamp14.aut.ac.nz/assign1/poststatusform.php">Post another status</a></button> &ensp;
	<button type="button" class="button"><a href = "http://pqh3376.cmslamp14.aut.ac.nz/assign1/index.html">Return to Home Page</a></button>
</div>
</body>
</html>