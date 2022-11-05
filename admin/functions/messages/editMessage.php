<?php

require_once "../connect.php";
$id=$_POST['id'];
$update ="UPDATE massage SET view = 1 WHERE id =$id";
$query = $conn->query($update);



if($query){
	 $Select_Message ="SELECT count(*) as counter FROM massage WHERE view = 0";
     $query_m = $conn->query($Select_Message);
     $count =$query_m->fetch_assoc();
     echo $count['counter'];
}