<!DOCTYPE html>
<html>
<head>
	<title>RDS Test</title>
</head>
<body>
	<?php
		include 'dbconnect.php';
		$result = $conn->query("select * from aws_test_table");
		$results = $result->fetch_all(MYSQLI_ASSOC);
		print_r($results);
		$conn->close();
	?>
</body>
</html>