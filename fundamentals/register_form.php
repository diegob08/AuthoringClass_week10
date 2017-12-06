<html>
<head>
	<title>Register Form</title>

	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200" rel="stylesheet">
</head>
<body>

	<form method="post" action="register.php" enctype='multipart/form-data'>

	<h1>Sign Up</h1>

	<label for="fname">First Name: </label>
	<input type="text" id="fname" name="fname"><br>

	<label for="lname">Last Name: </label>
	<input type="text" id="lname" name="lname"><br>

	<label for="photo">Avatar: </label>
	<input type="file" id="photo" name="photo"><br>

	<label for="email">Email: </label>
	<input type="text" id="email" name="email"><br>

	<label for="user">Username: </label>
	<input type="text" id="user" name="user"><br>

	<label for="pass">Password: </label>
	<input type="text" id="pass" name="pass"><br>

	<label for="pass2">Retype Password: </label>
	<input type="text" id="pass2" name="pass2"><br><br>

	<input type="submit" value="Submit">

	</form>

</body>
</html>