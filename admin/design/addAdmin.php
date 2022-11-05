

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post" action="functions/addNewAdmin.php">
		<label>username</label>
		<input type="text" name="username" placeholder="username" class="form-control"><br>

		<label>email</label>
		<input type="text" name="email" placeholder="email" class="form-control"><br>

		<label>password</label>
		<input type="password" name="password" placeholder="password" class="form-control"><br>

		<label>address</label>
		<input type="text" name="address" placeholder="address" class="form-control"><br>


		<label>phone</label>
		<input type="text" name="phone" placeholder="phone" class="form-control"><br>

		<input type="radio" name="gender" value="0"> male
		<input type="radio" name="gender" value="1"> female<br><br>

		<input type="submit" value="Add" class="btn btn-primary">


	</form>

</body>
</html>


