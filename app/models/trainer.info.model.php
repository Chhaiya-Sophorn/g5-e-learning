<?php

function getCourseed() : array
{
    global $connection;
    $statement = $connection->prepare("select * from courses");
    $statement->execute();
    return $statement->fetchAll();
}

function getCourseRespone(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from courses where user_id =:id");
    $statement->execute([':id' => $id]);
    return $statement->fetchAll();
}

function selectTrainers(int $id){
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM users where user_id = :id and roles_id = 2');
    $statement->execute([
        ':id' => $id
    ]);
    return $statement->fetch();
}

function getTrainersInfo(string $email): array
{
    global $connection;
    $statement =  $connection->prepare('SELECT * FROM users WHERE email = :email and roles_id=2');
    $statement->execute([
        ':email' => $email
    ]);
    return $statement->fetch();
}
