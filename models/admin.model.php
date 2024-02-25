<?php

function create_course(string $title, string $description,int $category, string $fileImg,string $price) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into courses (title, description, category_id, image_courses, price) values (:title, :description, :category, :fileImg, :price)");
    $statement->execute ([
        ':title' => $title,
        ':description' => $description,
        ':category' => $category,
        ':fileImg' => $fileImg,
        ':price' => $price,
    ]);

    return $statement->rowCount() > 0;
}

function getPost(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from posts where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}

function get_courses() : array
{
    global $connection;
    $statement = $connection->prepare("select * from courses");
    $statement->execute();
    return $statement->fetchAll();
}

function updatePost(string $title, string $description, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("update posts set title = :title, description = :description where id = :id");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':id' => $id

    ]);

    return $statement->rowCount() > 0;
}

function deleteCourse(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from course where course_id = :course_id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}