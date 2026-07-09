<?php
require '../../../database/database.php';
require '../../../models/category.model.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
   $image = $_FILES['image']['name'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = '../../../uploading' . DIRECTORY_SEPARATOR . $image; // Added DIRECTORY_SEPARATOR
   $image_size = $_FILES['image']['size'];

   // Move the uploaded image to the destination folder
   move_uploaded_file($image_tmp_name, $image_folder);


   $isset = updateCategory($_POST['title'],$_POST['description'],$image ,$_POST['id']) ;
   if($isset){
      header("location:/categories");
   }else{
      header("location:/categories");
   }
};

