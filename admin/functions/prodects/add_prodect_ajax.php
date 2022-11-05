<?php 

require_once "connect.php";
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$sale = $_POST['sale'];
$cat = $_POST['cat']; 


$insert = "INSERT INTO prodects(name , price , description , sale , cat) VALUES ('$name' , '$price' , '$description' , '$sale', '$cat')";
$query =$conn->query($insert);

if ($query) {
	echo "<div class='alert alert-success'> add succsesfully</div>";
} else {
	echo $conn -> error ;
}