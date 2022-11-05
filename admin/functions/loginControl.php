<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$hashpass =md5($password);
// exit();
require_once "connect.php";
$select_admin ="SELECT * FROM admins WHERE  email = '$email'  AND password='$hashpass'";

$query= $conn->query($select_admin);
$user=$query->fetch_assoc();
$priv_id= $user['priv_id'];
$num=$query->num_rows;

$select_priv ="SELECT * FROM privilage WHERE id =$priv_id";
$query = $conn->query($select_priv);
$priv= $query->fetch_assoc();


if($num>0){
	header("location:../index.php") ;
	$_SESSION['login_id']=$user['id'];
	$_SESSION['privilage']=$priv['privi'];
	
}else{
	header("location:../login.php") ;
	print_r($query);


}
?>