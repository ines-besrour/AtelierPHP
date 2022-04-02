<?php
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $tmp=explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($tmp));

    $extensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions)===false){
        $errors[]="Vous devez choisir un fichier JPEG ou PNG .";
    }

//    if($file_size > 2097152){
//        $errors[]='File size must be excately 2 MB';
//    }

    if(empty($errors)==true){
        $filename = uniqid(rand(), true) ;
        move_uploaded_file($file_tmp,"images/cin/".$filename.".".$file_ext);
        echo "Image Uploaded successfully";
    }else{
        print_r($errors);
    }
}