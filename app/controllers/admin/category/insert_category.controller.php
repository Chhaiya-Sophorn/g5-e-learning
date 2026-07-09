<?php
require '../../../models/category.model.php';
require '../../../database/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $title = htmlspecialchars($_POST["title"]);
     $description = htmlspecialchars($_POST["description"]);
     $image = htmlspecialchars($_POST["image"]);

     if (!empty($title) && !empty($description)) {
          if (isset($_FILES['image']) && $_FILES['image']['name']) {
               $image = $_FILES['image']['name'];
               $image_tmp_name = $_FILES['image']['tmp_name'];
               $image_folder = '../../../uploading' . DIRECTORY_SEPARATOR . $image; // Added DIRECTORY_SEPARATOR
               $image_size = $_FILES['image']['size'];

               // Move the uploaded image to the destination folder
               move_uploaded_file($image_tmp_name, $image_folder);
               createCategory($title, $description, $image);
               header("Location:/categories");

          } else {
               // No image file uploaded, use a default image
               $image = "non.webp";
               createCategory($title, $description, $image);
               header("Location:/categories");
          }
     } else {
          header("location: /categories");
     };
};
