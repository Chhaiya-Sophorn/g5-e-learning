<?php
require_once 'database/database.php';
require_once 'models/admin.access.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $user = accountAdminExist($name);

    if (count($user) > 0) {
        if(count(accountAdminExist($_POST['name']))>0){
            $hashedPassword = password_hash($user['password'], PASSWORD_DEFAULT);
            if (password_verify($password, $hashedPassword)) {
                header('location:/admin_home');
            } else {
                require 'views/admin/login.view.php';
            }
        }else{
            require 'views/admin/login.view.php';
        }

    } else {
        require 'views/admin/login.view.php';
    }
}

?>