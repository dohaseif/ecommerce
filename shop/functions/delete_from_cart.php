<?php
require_once 'connect.php';
$id=$_GET['id'];
echo $id;
$delete="DELETE FROM cart WHERE pro_id=$id";
$query= $conn->query($delete);
header("location:../cart.php");
