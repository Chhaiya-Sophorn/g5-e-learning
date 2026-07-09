<?php
require_once 'database/database.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $user_id = $_POST['user_id'];

    if(isset($_FILES['image']) && $_FILES['image']['name']) {
        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_size = $_FILES['image']['size'];
        $image_folder = 'uploading' . DIRECTORY_SEPARATOR . $image; // Added DIRECTORY_SEPARATOR
        move_uploaded_file($image_tmp_name, $image_folder);

        $statement = $connection->prepare('UPDATE users SET name = :name, phone = :phone, email = :email,profile_image = :image WHERE user_id = :id and roles_id = 2');
        $statement->execute([
            ':id' => $user_id,
            ':name' => $name,
            ':phone' => $phone,
            ':email' => $email,
            ':image' => $image,
        ]);
    } else {
        $statement = $connection->prepare('UPDATE users SET name = :name, phone = :phone, email = :email WHERE user_id = :id and roles_id = 2');
        $statement->execute([
            ':id' => $user_id,
            ':name' => $name,
            ':phone' => $phone,
            ':email' => $email,
        ]);
    }
    require 'views/trainers/home.view.php';
}