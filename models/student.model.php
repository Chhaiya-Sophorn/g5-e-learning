<?php

function accountExist(string $email): array{
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM users WHERE email = :email');
    $statement->execute([
        ':email' => $email
    ]);

    //jenh 0 ber ot mean jenh 1
    if($statement->rowCount()>0){
        return $statement->fetch();
    }else{
        return [];
    }
}


function payments(int $user_id,int $course_id){
    global $connection;
    $statement = $connection->prepare("INSERT INTO payments(user_id, course_id) VALUES (:user_id, :course_id)");
    $statement->execute([
        ':user_id' => $user_id,
        ':course_id' => $course_id
    ]);
}

function getStudent(int $id){
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM users WHERE user_id = :id');
    $statement->execute([
        ':id' => $id
    ]);

    return $statement->fetch();
}


function createStudent(string $name,string $email,string $phone,string $gender, string $password, string $image){
    global $connection;

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

}




function requireInformation(string $name, string $email, string $password, string $phone, string $comfirm_password){

    $information = [
    "name" => "",
    "email" => "",
    "password" => "",
    "password_comfirm" => "",
    "phone" => ""
    ];
    
    if($name==""){
        $information['name'] = 'Name is required';
    }
    if($email==""){
        $information['email'] = 'Email is required';
    }
    if($password==""){
        $information['password'] = 'Password is required';
    }
    if($phone==""){
        $information['phone'] = 'phone is required';
    }
    if($comfirm_password==""){
        $information['password_comfirm'] = 'Comfirm your password';
    }

    if($password !='' && $comfirm_password != '' && $password !=$comfirm_password){
        $information['password_comfirm'] = 'Your password is not feed!';
    }

    if($name !='' && $email != '' && $password !='' && $phone !='' && $comfirm_password !=''){
        $information['email'] = 'This email already exist!';
    }
    
    return $information;
    }