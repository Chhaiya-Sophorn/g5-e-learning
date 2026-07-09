<?php
require_once 'database/database.php';
require_once 'models/trainer.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = account($email);
    if ($email!='' && $password!=''){
        if (count($user) > 0) {
                $hashedPassword = password_hash($user['password'], PASSWORD_DEFAULT);
                if (password_verify($password, $hashedPassword)) {
                    require 'views/trainers/home.view.php';
                } else {
                    require 'views/trainers/login.view.php';
                }
        } else {
            require 'views/trainers/login.view.php';
        }
    }else{
        require 'views/trainers/login.view.php';
    }
}

?>