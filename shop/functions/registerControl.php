<?php
session_start();
require_once "connect.php";

$username =$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$address=$_POST['address'];
$phone=$_POST['phone'];


$addUser="INSERT INTO users( username, email, address,password, phone) VALUES ('$username','$email','$address','$password','$phone')";

$query =$conn->query($addUser);
if($query){
	$_SESSION['login_id']=$user['id'];
	header("location:../index.php");
}




?>