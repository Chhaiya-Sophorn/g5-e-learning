<?php 
require_once 'database/database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    // Check if image is set and has a value
    if(isset($_FILES['image']) && $_FILES['image']['name']) {
        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_size = $_FILES['image']['size'];
        $image_folder = 'uploading' . DIRECTORY_SEPARATOR . $image; // Added DIRECTORY_SEPARATOR
        move_uploaded_file($image_tmp_name, $image_folder);

        $statement = $connection->prepare('UPDATE users SET name = :name, phone = :phone, email = :email, password = :password, gender = :gender, profile_image = :image WHERE user_id = :id');
        $statement->execute([
            ':id' => $id,
            ':name' => $name,
            ':phone' => $phone,
            ':email' => $email,
            ':password' => $password,
            ':gender' => $gender,
            ':image' => $image,
        ]);
    } else {
        $statement = $connection->prepare('UPDATE users SET name = :name, phone = :phone, email = :email, password = :password, gender = :gender WHERE user_id = :id');
        $statement->execute([
            ':id' => $id,
            ':name' => $name,
            ':phone' => $phone,
            ':email' => $email,
            ':password' => $password,
            ':gender' => $gender,
        ]);
    }
    require 'views/students/profile.view.php';
}
?>
