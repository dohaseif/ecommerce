<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login page</title>
	 <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>

	<form method="post" action="functions/loginControl.php">
		<label>Email</label>
		<input type="email" name="email" >
		<label>password</label>
		<input type="password" name="password" >
		<input type="submit" value="login" class="btn btn-primary">

	</form>
	<a href="register.php">new user?</a>
</body>
</html>