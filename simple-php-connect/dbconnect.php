<?php
$dbhost = "aws-db.XXXXXX.ap-south-1.rds.amazonaws.com:3306";
$dbuser = "admin";
$dbpass = "12345678";
$db = "aws_test_db";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	echo "Successfully Connected to DB";
}
?>
