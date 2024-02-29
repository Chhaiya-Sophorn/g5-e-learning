<?php
require_once 'database/database.php';
require_once 'models/user.model.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']) ;
    $phone = htmlspecialchars($_POST['phone']);
    $password = htmlspecialchars( $_POST['password']);
    $gender = 'Female';

    if($_POST['gender'] == 'Male'){
        $gender = 'Male';
    };

    $user = accountExist($email);
    if(count($user)>0){

        require 'views/students/signup.view.php';


    }else{ 
        
        if(isset($_FILES['image'])) {
            $image = $_FILES['image']['name'];
            if($image){
                $image_tmp_name = $_FILES['image']['tmp_name'];
                $image_size = $_FILES['image']['size'];
                $image_folder = 'uploading' . DIRECTORY_SEPARATOR . $image; // Added DIRECTORY_SEPARATOR
                move_uploaded_file($image_tmp_name, $image_folder);

                $statement = $connection->prepare('INSERT INTO users (name,email,password, gender , roles_id,phone,profile_image) VALUES (:name, :email,:password,:gender,:role_id, :phone, :image)');
                $statement->execute([
                    ':name' => $name,
                    ':email' => $email,
                    ':phone' => $phone,
                    ':gender' => $gender,
                    ':password' => $password,
                    ':role_id' => '3',
                    ':image' => $image
                ]);
                require 'views/students/home.view.php';
                echo 'suceess';
                
            }else{
                $statement = $connection->prepare('INSERT INTO users (name,email,password, gender , roles_id,phone) VALUES (:name, :email,:password,:gender,:role_id, :phone,)');
                $statement->execute([
                    ':name' => $name,
                    ':email' => $email,
                    ':phone' => $phone,
                    ':gender' => $gender,
                    ':password' => $password,
                    ':role_id' => '3',
                    ':profile_image' => 'non.webp'
                ]);
                require 'views/students/home.view.php';
            }
            }
            
        }

    }

