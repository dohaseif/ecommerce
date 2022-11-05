<?php
require_once 'connect.php';
session_start();
$user_id= $_SESSION['login_id'];
$pro_id=$_GET['id'];

$insert="INSERT INTO cart(user_id, pro_id, amount) VALUES ($user_id,$pro_id,1)";
$query=$conn->query($insert);

if ($query) {
	header("location:../cart.php");
} else {
	echo $conn -> error ;
}

?>