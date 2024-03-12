<?php
require_once 'database/database.php';
require_once 'models/student.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     $id = $_POST[2];
    // $ids = $_POST[3];
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