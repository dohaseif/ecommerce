<?php

require_once "connect.php";

$username =$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$address=$_POST['address'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];

$addAdmin="INSERT INTO admins( username, email, address,password, gender, phone,priv_id) VALUES ('$username','$email','$address','$password','$gender','$phone','1')";

$query =$conn->query($addAdmin);
if($query){
	header("location:../admins.php");
}




?>