<?php 

function getCategories() : array
{
    global $connection;
    $statement = $connection->prepare("select * from categories");
    $statement->execute();
    return $statement->fetchAll();
}

function getCouses() : array
{
    global $connection;
    $statement = $connection->prepare("select * from courses ");
    $statement->execute();
    return $statement->fetchAll();
}

function getCousesSold(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from courses where course_id =$id");
    $statement->execute();
    return $statement->fetch();
}

function getUsers(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from users where user_id =$id");
    $statement->execute();
    return $statement->fetch();
}

function getRevenues() : array
{
    global $connection;
    $statement = $connection->prepare("select * from payments");
    $statement->execute();
    return $statement->fetchAll();
}

function students() : array
{
    global $connection;
    $statement = $connection->prepare("select * from users where roles_id != 1");
    $statement->execute();
    return $statement->fetchAll();
}
