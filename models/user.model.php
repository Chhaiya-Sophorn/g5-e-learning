<?php

function accountExist(string $email): array
{
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM users WHERE email = :email');
    $statement->execute([
        ':email' => $email
    ]);

    //jenh 0 ber ot mean jenh 1
    if ($statement->rowCount() > 0) {
        return $statement->fetch();
    } else {
        return [];
    }
}


function payments(int $user_id, int $course_id)
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO payments(user_id, course_id) VALUES (:user_id, :course_id)");
    $statement->execute([
        ':user_id' => $user_id,
        ':course_id' => $course_id
    ]);
}

function getStudent(int $id)
{
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM users WHERE user_id = :id');
    $statement->execute([
        ':id' => $id
    ]);

    return $statement->fetch();
}


function addTrainer(string $name, string $email, string $password, string $phone, string $gender, string $image): bool
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO users (name, email, password, gender, roles_id, phone, profile_image) VALUES (:name, :email, :password, :gender, :role, :phone, :image)");
    $statement->execute([
        ':name' => $name,
        ':email' => $email,
        ':password' => $password,
        ':gender' => $gender,
        ':role' => 2,
        ':phone' => $phone,
        ':image' => $image,
    ]);

    return $statement->rowCount() > 0;
}


function getTrainer () :array {
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM users WHERE roles_id = 2');
    $statement->execute();
    return $statement->fetchAll();
}

function deleteTrainer(int $id)
{
    global $connection;
    $statement =  $connection->prepare('DELETE FROM users WHERE user_id =:id');
    $statement->execute([
        ':id' => $id
    ]);
}


function updateTrainer(int $trainer_id, string $name, string $email, string $password, string $phone, string $gender, string $image): bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE users SET name = :name, email = :email, password = :password, gender = :gender, phone = :phone, profile_image = :image WHERE user_id = :trainer_id");
    $statement->execute([
        ':name' => $name,
        ':email' => $email,
        ':password' => $password,
        ':gender' => $gender,
        ':phone' => $phone,
        ':image' => $image,
        ':trainer_id' => $trainer_id,
    ]);

    return $statement->rowCount() > 0;
}
// function getTrainerNames(string $name){
//     global $connection;
//     $statement = $connection->prepare("SELECT*FROM users WHERE  users = 'name'");
//     $statement->execute([':id' => $name]);
//     return $statement-> fetch();
// }

