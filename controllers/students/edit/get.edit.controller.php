<?php 
require_once 'database/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!preg_match('/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[@$!%*?&])[a-zA-Z0-9@$!%*?&]{5,7}$/', $password)){
        require 'views/students/edit.view.php';
    }else{
            // Check if image is set and has a value
        if(isset($_FILES['image']) && $_FILES['image']['name']) {
            $image = $_FILES['image']['name'];
            $image_tmp_name = $_FILES['image']['tmp_name'];
            $image_size = $_FILES['image']['size'];
            $image_folder = 'uploading' . DIRECTORY_SEPARATOR . $image; // Added DIRECTORY_SEPARATOR
            move_uploaded_file($image_tmp_name, $image_folder);

            $statement = $connection->prepare('UPDATE users SET name = :name, phone = :phone, email = :email, password = :password,profile_image = :image WHERE user_id = :id');
            $statement->execute([
                ':id' => $id,
                ':name' => $name,
                ':phone' => $phone,
                ':email' => $email,
                ':password' => $password,
                ':image' => $image,
            ]);
        } else {
            $statement = $connection->prepare('UPDATE users SET name = :name, phone = :phone, email = :email, password = :password WHERE user_id = :id');
            $statement->execute([
                ':id' => $id,
                ':name' => $name,
                ':phone' => $phone,
                ':email' => $email,
                ':password' => $password,
            ]);
        }
        require 'views/students/profile.view.php';
        }

    }
?>
