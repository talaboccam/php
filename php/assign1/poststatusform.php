<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="styles.css" type="text/css">
	<title>Status Posting System</title>
</head>
<body>
	<h1>Status Posting System</h1>
	<?php 
	date_default_timezone_set('NZ');
	?>
	<form action = "poststatusprocess.php" method = "post">
		Status Code (required): <input type="text" name="statuscode"><br>
		Status (required): &ensp; <input type="text" name="status"><br>
		Share: 
		<input type="radio" name="share" value="Public">Public
		<input type="radio" name="share" value="Friends">Friends
		<input type="radio" name="share" value="Only Me">Only Me<br>
		Date: <input type="date" name="date" value= "<?php echo date('Y-m-d'); ?>"><br>
		Permission Type:
		<input type="checkbox" name="permission" value="Allow Like">Allow Like
		<input type="checkbox" name="permission" value="Allow Comments">Allow Comments
		<input type="checkbox" name="permission" value="Allow Share">Allow Share <br>
		<input type="Submit" class="button" value="Post">
	</form>
	<button type="button" class="button"><a href = "http://pqh3376.cmslamp14.aut.ac.nz/assign1/index.html">Return to Home page</a></button>
</body>
</html>