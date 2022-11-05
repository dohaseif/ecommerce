<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

	<title>register</title>
</head>
<body>
	<form method="post" action="functions/registerControl.php">
		<label>username</label>
	    <input type="text" name="username"><br>
	    <label>email</label>
	    <input type="text" name="email"><br>
	    <label>password</label>
	    <input type="text" name="password"><br>
	    <label>address</label>
	    <input type="text" name="address"><br>
	    <label>phone</label>
	    <input type="text" name="phone"><br>
	    <input type="submit" class="btn btn-primary" value="register">

	</form>
	

</body>
</html>