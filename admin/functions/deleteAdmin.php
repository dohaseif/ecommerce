<?php
require_once "connect.php";
$id = $_GET['id'];
$delete="DELETE FROM admins WHERE id =$id";
$query=$conn->query($delete);

if($query){
	header("location:../admins.php");
}