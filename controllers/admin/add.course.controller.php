<?php 
require "../../database/database.php";
require "../../models/admin.model.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category_id"];
    $user_id = $_POST['user_id'];
    $price = $_POST['price'];

    if(isset($_FILES['image'])) {
        $image = $_FILES['image']['name'];
        if($image){
            $image_tmp_name = $_FILES['image']['tmp_name'];
            $image_size = $_FILES['image']['size'];
            $image_folder = '../../uploading' . DIRECTORY_SEPARATOR . $image; // Added DIRECTORY_SEPARATOR
            move_uploaded_file($image_tmp_name, $image_folder);
            $iscreate = create_course($title, $description, $category, $image, $price);
                
            }else{
                $image = 'non.webp';
                $iscreate;
            }
            
        }

    if ($iscreate) {
        header('Location: /addCourse');
    } else {
        header('Location: /addCourse');
    }

}

