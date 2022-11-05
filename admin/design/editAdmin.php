

<?php
require_once "functions/connect.php";
$id =$_GET['id'];
$select_admin ="SELECT * FROM admins WHERE id =$id";
$query=$conn->query($select_admin);
$admin=$query->fetch_assoc();


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post" action="functions/adminEdit.php">
		<label>username</label>
		<input type="text" name="username" placeholder="username" class="form-control" value="<?= $admin["username"] ?>"><br>

		<label>email</label>
		<input type="text" name="email" placeholder="email" class="form-control" value="<?= $admin["email"] ?>"><br>

		
		<label>password</label>
		<input type="password" name="password" placeholder="password" class="form-control" ><br>

		<label>address</label>
		<input type="text" name="address" placeholder="address" class="form-control" value="<?= $admin["address"] ?>"><br>


		<label>phone</label>
		<input type="text" name="phone" placeholder="phone" class="form-control"  value="<?= $admin["phone"] ?>"><br>

		<input type="radio" name="gender" value="0" <?=$admin['gender']==0?"checked":""?> > male
		<input type="radio" name="gender" value="1" <?=$admin['gender']==1?"checked":""?> > female<br><br>

		<input type="hidden" name="id" value="<?= $admin['id'] ?>">
		<input type="submit" value="edit" class="btn btn-primary">


	</form>

</body>
</html>