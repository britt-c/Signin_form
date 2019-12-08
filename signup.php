<!DOCTYPE html>
<html>
	<head>
		<title>Sign up for this super cool fake site!!</title>
	</head>
	<body>
		<form action="./process.php" method="POST">
		<label>Username: </label><br/>
		<input type="text" value="" name="username"/>
		<br/>
		<label>Email Address: </label><br/>
		<input type="email" value="" name="email"/>
		<br/>
		<label>First Name: </label>
		<input type="text" value="" name="firstname"/>
		<br/>
		<label>Last Name: </label>
		<input type="text" value="" name="lastname"/>
		<br/>
		<label>Password: </label>
		<input type="password" value="" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>
		<br/>
		<label>Confirm Password: </label>
		<input type="password" value="" name="confpwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>
		<p>NOTE: Password must contain at least: one capital and lowcase, number and special character.</p><br/>
		<label>Age: </label>
		<input type="number" value="" name="age" min="18" max="150"/>
		<br/>
		<input type="submit" value="submit"/>
		</form>
	</body>
</html>
