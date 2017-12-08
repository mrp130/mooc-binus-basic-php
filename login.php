<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="action/user/doLogin.php" method="POST">
	<div>
		<input type="text" name="username" placeholder="Username">
	</div>
	<div>
		<input type="password" name="password" placeholder="Password">
	</div>
	<div>
		<input type="submit" value="Login">
	</div>
</form>
<form action="action/user/doRegister.php" method="POST">
	<div>
		<input type="text" name="username" placeholder="Username">
	</div>
	<div>
		<input type="password" name="password" placeholder="Password">
	</div>
	<div>
		<input type="password" name="password_confirmation" placeholder="Password Confirmation">
	</div>
	<div>
		<input type="submit" value="Register">
	</div>
</form>
</body>
</html>