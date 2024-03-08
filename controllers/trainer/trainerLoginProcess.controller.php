<?php
require_once 'database/database.php';
require_once 'models/user.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $roles_id = $_GET[2];
    // $ids = $_POST[3];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = accountTrainer($email);

    // if (isset($id)) {
        if (count($user) > 0) {
            $hashedPassword = password_hash($user['password'], PASSWORD_DEFAULT);
            if (password_verify($password, $hashedPassword)) {
                require 'views/students/home.view.php';
            } else {
                require 'views/students/signin.view.php';
            }
        } else {
            require 'views/students/signin.view.php';
        }
    
    // else {
    //     echo "please into again";
    // }

    // if (count($user) > 0) {
    //     $hashedPassword = password_hash($user['password'], PASSWORD_DEFAULT);
    //     if (password_verify($password, $hashedPassword)) {
    //         require 'views/students/home.view.php';
    //     } else {
    //         require 'views/students/signin.view.php';
    //     }
    // } else {
    //     require 'views/students/signin.view.php';
    // }
}
?>