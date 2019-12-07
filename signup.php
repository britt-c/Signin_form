<html>
	<body>
		<form action="./process.php" method="POST">
		<label>Username: </label><br/>
		<input type="text" value="" name="username">
		<label>Email Address: </label><br/>
		<input type="email" value="" name="email">
		<label>First Name: </label>
		<input type="text" value="" name="firstname" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
		<label>Last Name: </label>
		<input type="text" value="" name="lastname">
		<label>Password: </label>
		<input type="password" value="" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
		<label>Confirm Password: </label>
		<input type="password" value="" name="confpwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
		<label>Age: </label>
		<input type="number" value="" name="age" min="18" max="150">
		</form>
	</body>
</html>
