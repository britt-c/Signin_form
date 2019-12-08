<!DOCTYPE html>
<html>
	<head>
		<title>Sign up!</title>
	</head>
	<h2 style="background-color:Gray; margin: 0px;">Become a member of this super cool, super fake site!!</h2>
	<body style="background-color:LightGray;">
		<form action="./process.php" method="POST">
		<label>Username: </label><br/>
		<input type="text" value="" name="username" required/>
		<br/>
		<label>Email Address: </label><br/>
		<input type="email" value="" name="email" required/>
		<br/>
		<label>First Name: </label><br/>
		<input type="text" value="" name="firstname" required/>
		<br/>
		<label>Last Name: </label><br/>
		<input type="text" value="" name="lastname"  required/>
		<br/>
		<label>Age: </label><br/>
		<input type="number" value="" name="age" min="15" max="150" required/>
		<br/>
		<label>Password: </label><br/>
		<input type="password" value="" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/>
		<br/>
		<label>Confirm Password: </label><br/>
		<input type="password" value="" name="confpwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/>
		<sub>NOTE: Password must contain at least: one capital and lowcase, number and special character.</sub><br/>
		<br/>
		<input type="submit" value="submit"/>
		</form>
	</body>
</html>
