<?php
// require_once 'database/database.php';
// require_once 'models/user.model.php';

// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $name = htmlspecialchars($_POST['name']);
//     $email = htmlspecialchars($_POST['email']) ;
//     $phone = htmlspecialchars($_POST['phone']);
//     $password = htmlspecialchars( $_POST['password']);
//     $gender = 'Female';

//     if($_POST['gender'] == 'Male'){
//         $gender = 'Male';
//     };

//     $user = accountExist($email);
//     if(count($user)>0){
//        require 'views/account/account.view.php';
//     }else{ 
//         $statement = $connection->prepare('INSERT INTO users (name, email, phone, gender, password, role_id) VALUES (:name, :email, :phone, :gender, :password, :role_id)');
//         $statement->execute([
//             ':name' => $name,
//             ':email' => $email,
//             ':phone' => $phone,
//             ':gender' => $gender,
//             ':password' => $password,
//             ':role_id' => '3'
//         ]);
//         require 'views/account/account.view.php';
        

//     }

    
   

// }

