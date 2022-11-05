<?php

require_once "../connect.php";


$name =$_POST['name'];
$price=$_POST['price'];

$description=$_POST['description'];
$cat=$_POST['cat'];
$sale=$_POST['sale'];
$id=$_POST['id'];

$images=$_FILES['img'];

$update="UPDATE prodects set name ='$name' ,price='$price',description='$description',cat_id='$cat',sale='$sale'  WHERE id =$id";
$query =$conn->query($update);

if($query){
	header("location:../../prodects.php");

}else{
	echo $conn->error;
}

