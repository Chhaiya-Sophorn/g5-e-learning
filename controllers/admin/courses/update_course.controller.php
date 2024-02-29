<?php
require 'database/database.php';
require 'models/admin.model.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
   $id = htmlspecialchars($_POST["course_id"]);
   $title = htmlspecialchars($_POST["title"]);
   $description = htmlspecialchars($_POST["description"]);
   $category = htmlspecialchars($_POST["category_id"]);
   $user_id = htmlspecialchars($_POST['user_id']);
   $price = htmlspecialchars($_POST['price']);
   $image = $_POST['image'];

   if (isset($_FILES['image']) && $_FILES['image']['name']) {
      $image = $_FILES['image']['name'];
      $image_tmp_name = $_FILES['image']['tmp_name'];
      $image_folder = '../../../uploading' . $image; // Use correct file path
      $image_size = $_FILES['image']['size'];

      $isset = updateCourse( $id,  $title,  $description,  $user_id,  $category,  $price,  $image );

   }else{
      $isset = updateCourse( $id,  $title,  $description,  $user_id,  $category,  $price,  $image );
   }

   if($isset){
      header('Location:/viewCourse');
   }else{
      echo "haha";
   }

echo $image;
      
}

