<?php
#DB must have name, gender, mail, phone columns
$dbhost = "aws-db.czqzf9anxac9.ap-south-1.rds.amazonaws.com:3306";
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

$name = $_POST[name];
$gender = $_POST[gender];
$mail = $_POST[mail];
$phone = $_POST[phone];

$conn->query("insert into aws_test_table values('$name', '$gender', '$mail', '$phone')");
echo nl2br("\nSuccessfully Updated DB\n");
echo  nl2br("<a href='/dbcheck.php'>Click here to check DB Values\n</a>"); 
?>