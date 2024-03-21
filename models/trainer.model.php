<?php


function account(string $email): array{
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM users WHERE email = :email and roles_id =2');
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
        if(count(account($email))>0){
            $hashedPassword = password_hash(account($email)['password'], PASSWORD_DEFAULT);
            if (!password_verify($password, $hashedPassword)) {
                $applys['password'] = 'Password incorrect !';  
            }
        }else{
            $applys['email'] = 'No account feet this email';
        }
    }

    return $applys;
}

function getTrainer(string $email){
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM users WHERE email = :email and roles_id =2');
    $statement->execute([
        ':email' => $email
    ]);
    return $statement->fetchAll();
}

function getCourse(string $email){
    global $connection;
    $statement =  $connection->prepare('SELECT c.* FROM courses c INNER JOIN users u ON c.user_id = u.user_id WHERE u.email = :email');
    $statement->execute([
        ':email' => $email
    ]);
    return $statement->fetch();
}

function courseExis(string $email):array{
    global $connection;
    $statement =  $connection->prepare('SELECT c.* FROM courses c INNER JOIN users u ON c.user_id = u.user_id WHERE u.email = :email');
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

function selectTrainer(int $id){
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM users where user_id = :id');
    $statement->execute([
        ':id' => $id
    ]);
    return $statement->fetchAll();
}

