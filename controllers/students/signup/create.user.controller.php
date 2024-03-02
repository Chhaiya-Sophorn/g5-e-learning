<?php
require_once 'database/database.php';
require_once 'models/student.model.php';



if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']) ;
    $phone = htmlspecialchars($_POST['phone']);
    $password = htmlspecialchars( $_POST['password']);
    $passwor_comfirm= htmlspecialchars( $_POST['password_comfirm']);
    $gender = 'Female';

    $user = accountExist($email);

    if($name==""){
        require 'views/students/signup.view.php';
    }
    else if($email==""){
        require 'views/students/signup.view.php';
    }
    else if($password==""){
        require 'views/students/signup.view.php';
    }
    else if($phone==""){
        require 'views/students/signup.view.php';
    }else if($passwor_comfirm==''){
        require 'views/students/signup.view.php';
    }else if($passwor_comfirm != $password){
        require 'views/students/signup.view.php';
    }else{

        if($_POST['gender'] == 'Male'){
                $gender = 'Male';
            };

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

                    createStudent($name, $email, $phone, $gender, $password, $image,$passwor_comfirm);
                    require 'views/students/home.view.php';
                    
                }else{
                    $image ='non.webp';
                    createStudent($name, $email, $phone, $gender, $password, $image,$passwor_comfirm);
                    require 'views/students/home.view.php';
                }
                }
                
            }
    }
}
