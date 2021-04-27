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
		echo "<p>Connection failed</p>";
	} else { 
		//successful connection
		//check for data in search
		if (isset($_GET["Search"])) {
            $keyword = $_GET["Search"];
            $sql = "SELECT * FROM statusdb WHERE status LIKE '%$keyword%'";
            $result = mysqli_query($conn, $sql);
            //checking for words in status row of statusdb
            if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<p>Status: " . $row["status"] . "<br>" . "Status Code: " . $row["statusCode"] . "<br>" . "Share: " . $row["share"] . "<br>" . "Date Posted: " . $row["date"] . "<br>" . "Permission:  ". $row["permission"] . "</p>";
					mysqli_close($conn);
				}
            } else {
                echo "<p>0 results</p>";
            }
        } else 
        echo "<p>No valid data searched</p>";
    }
			
			//check for data in status

	?>
    <button type="button" class="button"><a href = "http://pqh3376.cmslamp14.aut.ac.nz/assign1/searchstatusform.html">Search another status</a></button> &ensp;
	<button type="button" class="button"><a href = "http://pqh3376.cmslamp14.aut.ac.nz/assign1/index.html">Return to Home Page</a></button>
</div>
</body>
</html>