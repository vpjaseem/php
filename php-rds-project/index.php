<!DOCTYPE html>
<!--DB must have name, gender, mail, phone columns-->
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form action="dbconnect.php" method="POST">
		<table>
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name"></td>
			</tr>

			<tr>
				<td>Gender:</td>
				<td>
					<input type="radio" name="gender" value="M">Male
					<input type="radio" name="gender" value="F">Female
				</td>
			</tr>

			<tr>
				<td>Email: </td>
				<td><input type="mail" name="mail"></td>
			</tr>

			<tr>
				<td>Phone: </td>
				<td><input type="phone" name="phone"></td>
			</tr>

			<tr>
				<td><input type="Submit" value="Submit" name=""></td>
			</tr>
		</table>
	</form>
</body>
</html>