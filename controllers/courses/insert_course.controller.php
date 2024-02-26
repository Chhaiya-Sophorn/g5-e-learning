<?php 
require "../../database/database.php";
require "../../models/admin.model.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = htmlspecialchars($_POST["title"]);
    $description = htmlspecialchars($_POST["description"]);
    $category = htmlspecialchars($_POST["category_id"]);
    $user_id = htmlspecialchars($_POST['user_id']);
    $price = htmlspecialchars($_POST['price']);

    if(isset($_FILES['image']) && $_FILES['image']['name']) {
        $image = $_FILES['image']['name'];
            $image_tmp_name = $_FILES['image']['tmp_name'];
            $image_size = $_FILES['image']['size'];
            $image_folder = '../../uploading' . DIRECTORY_SEPARATOR . $image; // Added DIRECTORY_SEPARATOR
            move_uploaded_file($image_tmp_name, $image_folder);
            $iscreate = createCourse($title, $description, $category, $image, $user_id, $price);
            }else{
                $image="/non.webp";
                $iscreate;

            };
            if ($iscreate) {
                header('Location: /courses');
            } else {
                // header('Location: /addCourse');
                header('Location: /courses');
            }
            
  
}
