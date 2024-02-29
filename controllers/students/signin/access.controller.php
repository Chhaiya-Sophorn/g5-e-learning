<?php
require_once 'database/database.php';
require_once 'models/user.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = accountExist($email);

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
}
?>