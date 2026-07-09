<?php

function accountAdminExist(string $name): array{
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM users WHERE name = :name and roles_id =1');
    $statement->execute([
        ':name' => $name
    ]);

    //jenh 0 ber ot mean jenh 1
    if($statement->rowCount()>0){
        return $statement->fetch();
    }else{
        return [];
    }
}

function getAdmin(){
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM users WHERE roles_id =1');
    $statement->execute();
        return $statement->fetch();
}

function applySigninAdmin(string $name ,string $password){
    $applys = [
        "name" => "",
        "password" => ""
    ];
    global $connection;

    if($name==""){
        $applys['name'] = 'Input name !';
    }
    if($password==""){
        $applys['password'] = 'Input password !';
    }

    if($name !='' && $password !=''){
        if(count(accountAdminExist($name))>0){
            $hashedPassword = password_hash(accountAdminExist($name)['password'], PASSWORD_DEFAULT);
            if (!password_verify($password, $hashedPassword)) {
                $applys['password'] = 'Password incorrect !';  
            }
        }else{
            $applys['name'] = 'No account feet this name';
        }
    }

    return $applys;
}
