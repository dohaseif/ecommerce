<?php

require_once "connect.php";

$id =$_POST['id'];
$username = $_POST['username'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$password=md5($_POST['password']);

if(!empty($password)){
	$hash_password=md5($password);
	$update_pass="UPDATE admins set password='$password' WHERE id= $id";
	$conn->query($update_pass);

}

$update="UPDATE admins set username ='$username' ,phone='$phone',email='$email',gender='$gender',address='$address'  WHERE id =$id";
$query =$conn->query($update);

if($query){
	header("location:../admins.php");

}else{
	echo $conn->error;
}



