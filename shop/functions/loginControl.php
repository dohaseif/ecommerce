<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$hashpass =md5($password);
// exit();
require_once "connect.php";
$select_admin ="SELECT * FROM users WHERE  email = '$email'  AND password='$hashpass'";

$query= $conn->query($select_admin);
$user=$query->fetch_assoc();
$priv_id= $user['priv_id'];
$num=$query->num_rows;



if($num>0){
	header("location:../index.php") ;
	$_SESSION['login_id']=$user['id'];
}else{
	header(	"location:../login.php") ;
	print_r($query);


}
?>