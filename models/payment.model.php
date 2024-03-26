<?php

function orderExist(int $user_id,int $id): array{
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM orders WHERE course_id = :id and user_id=:user');
    $statement->execute([
        ':id' => $id,
        ':user' => $user_id
    ]);

    //jenh 0 ber ot mean jenh 1
    if($statement->rowCount()>0){
        return $statement->fetch();
    }else{
        return [];
    }
}

function getTheorder(int $id){
    global $connection;
    $statement =  $connection->prepare('SELECT * FROM orders WHERE user_id = :id AND action = :action');
    $statement->execute([
        ':id' => $id,
        ':action' => 'No'
    ]);
    return $statement->fetchAll();
}


function addLesson(int $course_id, int $user_id){
    global $connection;
    $statement = $connection->prepare("INSERT INTO orders (course_id,user_id,action) VALUES (:id,:user_id,:action)");
    $statement->execute([
        ':id' => $course_id,
        ':user_id' => $user_id,
        ':action' => 'No',
    ]);
}

function courses(int $id)
{
    global $connection;
    $statement = $connection->prepare("select * from courses where course_id = :course_id");
    $statement->execute([':course_id' => $id]);
    return $statement->fetch();
}

function students(string $email)
{
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM users WHERE email = :email and roles_id =3');
    $statement->execute([
        ':email' => $email
    ]);

    return $statement->fetch();
}

function deleteOrders(int $id) 
{
    global $connection;
    $statement = $connection->prepare("delete from orders where course_id = :id");
    $statement->execute([':id' => $id]);
}

function getPaid(int $id){
    global $connection;
    $statement = $connection->prepare("UPDATE orders SET action = 'Yes' WHERE course_id = :id");
    $statement->execute([':id' => $id]);
}

function addPayments(int $course_id, int $user_id, string $date, string $total) {
    global $connection;
    $statement = $connection->prepare("INSERT INTO payments (user_id,course_id,total,date) VALUES (:user_id,:course_id,:total,:date)");
    $statement->execute([
        ':course_id' => $course_id,
        ':user_id' => $user_id,
        ':date' => $date,
        ':total' => $total
    ]);
    getPaid($course_id);
}

function getPaymentExist(int $id, int $course_id):array{
    global $connection;
    $statement =  $connection->prepare('select*from payments where user_id =:id and course_id =:course_id');
    $statement->execute([
        ':id' => $id,
        ':course_id' => $course_id
    ]);
    if($statement->rowCount()>0){
        return $statement->fetch();
    }else{
        return [];
    }
}

function getAddOrderExist(int $id, int $course_id):array{
    global $connection;
    $statement =  $connection->prepare('select*from orders where user_id =:id and course_id =:course_id and action= :action');
    $statement->execute([
        ':id' => $id,
        ':course_id' => $course_id,
        ':action' => 'No'
    ]);
    if($statement->rowCount()>0){
        return $statement->fetch();
    }else{
        return [];
    }
}

function getTheJoinercourse(int $id): int {
    global $connection;
    $statement =  $connection->prepare('SELECT COUNT(*) FROM orders WHERE course_id = :course_id AND action = :action');
    $statement->execute([
        ':course_id' => $id,
        ':action' => 'Yes'
    ]);
    return $statement->fetchColumn();
}



function getRevenuese() : array
{
    global $connection;
    $statement = $connection->prepare("select * from payments");
    $statement->execute();
    return $statement->fetchAll();
}

function getCousesSolds(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from courses where course_id =$id");
    $statement->execute();
    return $statement->fetch();
}