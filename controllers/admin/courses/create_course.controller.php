<?php 
     require '../../../models/admin.model.php';
     require '../../../database/database.php';
     require '../../../models/category.model.php';
     if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $title = htmlspecialchars($_POST["title"]);
          $description = htmlspecialchars($_POST["description"]);
          $category = getIdCategory($_POST["category_id"])['category_id'];
          $user_id = getIdTrainer($_POST['user_id'])['user_id'];
          $price = htmlspecialchars($_POST['price']);


          if (isset($_FILES['image']) && $_FILES['image']['name']) {
               $image = $_FILES['image']['name'];
               $image_tmp_name = $_FILES['image']['tmp_name'];
               $image_folder = '../../../uploading' . DIRECTORY_SEPARATOR . $image; // Added DIRECTORY_SEPARATOR
               $image_size = $_FILES['image']['size'];
       
               // Move the uploaded image to the destination folder
               move_uploaded_file($image_tmp_name, $image_folder);
               createCourse($title, $description, $category, $image, $user_id, $price);
               header("Location:/viewCourse");
           } else {
               // No image file uploaded, use a default image
               $image = "non.webp";
               createCourse($title, $description, $category, $image, $user_id, $price);
               header("Location:/viewCourse");
           }

     }
     