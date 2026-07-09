<?php
require '../../../database/database.php';
require '../../../models/admin.model.php';
require '../../../models/category.model.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
   $id = htmlspecialchars($_POST["course_id"]);
   $title = htmlspecialchars($_POST["title"]);
   $description = htmlspecialchars($_POST["description"]);
   $category = getIdCategory($_POST['category_id'])['category_id'];
   $user_id = getIdTrainer($_POST['user_id'])['user_id'];
   $date = htmlspecialchars(date('Y-m-d'));
   $price = htmlspecialchars($_POST['price']);
   $image = $_POST['image'];

      if ($image !='') {
         $image_tmp_name = $image;
         $image_folder = '../../../uploading' . $image; // Use correct file path
         move_uploaded_file($image_tmp_name, $image_folder);

         $isset = updateCourse( $id,  $title,  $description,  $user_id,  $category,$price ,  $image );
      }else{
         $isset = updateCourseNoImg( $id,  $title,  $description,  $user_id,  $category,  $price );
      }

   if($isset){
      header('Location:/viewCourse');
   }
   else{
      header('Location:/viewCourse');
   }


}

