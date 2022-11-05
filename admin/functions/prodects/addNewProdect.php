<?php

require_once "../connect.php";
session_start();


$name =$_POST['name'];
$price=$_POST['price'];
$description=$_POST['description'];
$cat=$_POST['cat'];
$sale=$_POST['sale'];
$img=$_FILES['img'];

//validation 

$errors=[]; 
if(empty($name)){
	$errors['name']="name is empty";
}if(empty($price)){
	$errors['price']="price is empty";
}if(empty($description)){
	$errors['description']="description is empty";
}if(empty($sale)){
	$errors['sale']="sale is empty";

}if(empty($cat)){
	$errors['cat']="cat is empty";

}


if(!empty($errors)){
	$_SESSION['errors']=$errors;
header("location:../../prodects.php?action=add");
exit();
}




//image validation

$array=[];
foreach ($img['name'] as $key => $value) {
	$tmp = $_FILES['img']['tmp_name'][$key];
	
   if($img['error'][$key]==0){

	      $extensions = ['jpg','jpeg','gif','png'];
	      $ext =pathinfo($img['name'][$key],PATHINFO_EXTENSION);
	      
	      if($img['size'][$key]<200000){
	      	
                 $newImageName = md5(uniqid()).'.'.$ext;

                 
                 // echo "$array";
                

	      array_push($array, $newImageName);
	      
	      move_uploaded_file($tmp, "../../images/".$newImageName);

	  }else{
 	      		echo "size is too big";
	      	}
   }else{
	echo"extension dosen`t allowed";
        }

}
// $all=implode(',', $array);


$addPro="INSERT INTO prodects( name, price, description,sale, cat_id) VALUES ('$name','$price','$description','$sale','$cat')";

$query =$conn->query($addPro);
if($query){
	 $last_id= $conn->insert_id;


    foreach($array as $one){

	    $image_add="INSERT INTO images(pro_id,image) VALUES ('$last_id','$one')";
        $query2=$conn->query($image_add);
}



}





if($query&&$query2)
	header("location:../../prodects.php");


// $all=implode("," , $array);
// move_uploaded_file($tmp, "../../images/".$img['name'][$key]);
// echo $all;

// if($_FILES['img']['error']==0){
// 	$extensions = ['jpg','jpeg','gif','png'];
// 	$ext =pathinfo($img_name,PATHINFO_EXTENSION);

// 	if(in_array($ext, $extensions)){

// 		if($_FILES['img']['size']<200000){
// 			foreach($img_name as $img){
//              	$img = md5(uniqid()).'.'.$ext;
//                 move_uploaded_file($tmp, "../../images/".$img);
// 			}
		
// 		}else{
// 			echo "size is too big";
// 		}

// 	}else{
// 		echo "extension dosen`t allowed";
// 	}



// }




// echo $value;
	// echo "<br>";
	// echo $img['name'][$key];
	// echo "<br>";
	// echo $img['size'][$key];
	// echo "<br>......";
?>