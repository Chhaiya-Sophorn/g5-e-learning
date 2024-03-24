<?php

function accountExist(string $email): array{
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM users WHERE email = :email and roles_id=3');
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
    "phone" => "",
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
    }else{
        if(!preg_match('/^(0|\+855)(\d{9})$/', $phone)){
            $information['phone'] = 'Invalid phone number format.';
        }
    }
    if($comfirm_password==""){
        $information['password_comfirm'] = 'Comfirm your password';
    }

    if($password !='' && $comfirm_password != '' && $password !=$comfirm_password){
        $information['password_comfirm'] = 'Your password is not feed!';
    }

    if($name !='' && $email != '' && $password !='' && $phone !='' && $comfirm_password !='' && preg_match('/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9@$!%*?&]{5,}$/i', $password) && $password ==$comfirm_password){
        $information['email'] = 'This email already exist!';
    }else{
        if (!preg_match('/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9@$!%*?&]{5,}$/i', $password) && $password !='') {
            $information['password'] = 'Password must contain at least one letter, one digit, one special character, and be 5 to 7 characters long.';
        }
    }

    
    return $information;
    }


    function applySignin(string $email ,string $password){
        $applys = [
            "email" => "",
            "password" => ""
        ];
        global $connection;

        if($email==""){
            $applys['email'] = 'Input email !';
        }
        if($password==""){
            $applys['password'] = 'Input password !';
        }

        if($email !='' && $password !=''){
            if(count(accountExist($email))>0){
                $hashedPassword = password_hash(accountExist($email)['password'], PASSWORD_DEFAULT);
                if (!password_verify($password, $hashedPassword)) {
                    $applys['password'] = 'Password incorrect !';  
                }
            }else{
                $applys['email'] = 'No account feet this email';
            }
        }

        return $applys;
    }

function strongPassword(string $password){
    $passwords = [
        "password" => ""
    ];
    if (!preg_match('/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9@$!%*?&]{5,}$/i', $password) && $password !='') {
        $passwords['password'] = 'Password must contain at least one letter, one digit, one special character, and be 5 to 7 characters long.';
    }

    return $passwords;
}

function getCoursePaid(int $user_id){
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM payments WHERE user_id = :id');
    $statement->execute([
        ':id' => $user_id
    ]);

    return $statement->fetchAll();
    
}

function getThecourseJoin(int $course_id){

    global $connection;
    $statement =  $connection->prepare('SELECT *FROM courses WHERE course_id = :id');
    $statement->execute([
        ':id' => $course_id
    ]);

    return $statement->fetch();

}