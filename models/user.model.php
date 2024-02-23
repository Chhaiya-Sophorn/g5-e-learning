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
