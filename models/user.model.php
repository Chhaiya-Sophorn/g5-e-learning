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