<?php

function createCourse(string $title, string $description,int $category, string $fileImg, int $user_id, string $price):bool
{
    global $connection;
    $statement = $connection->prepare("insert into courses (title, description, category_id, image_courses, user_id, price) values (:title, :description, :category, :fileImg, :user_id, :price)");
    $statement->execute ([
        ':title' => $title,
        ':description' => $description,
        ':category' => $category,
        ':fileImg' => $fileImg,
        ':user_id' => $user_id,
        ':price' => $price,
    ]);
    return $statement->rowCount() > 0;

}

function getCourse(int $id)
{
    global $connection;
    $statement = $connection->prepare("select * from courses where course_id = :course_id");
    $statement->execute([':course_id' => $id]);
    return $statement->fetch();
}

function getCourses() : array
{
    global $connection;
    $statement = $connection->prepare("select * from courses");
    $statement->execute();
    return $statement->fetchAll();
}

function updateCourse(int $id, string $title, string $description, int $user_id, int $category, string $price, string $image_course ) : bool
{
    global $connection;
    $statement = $connection->prepare("update courses set title = :title, description = :description,user_id= :user_id, category_id= :category_id, price= :price, image_courses= :image_course  where course_id = :course_id");
    $statement->execute([
        ':course_id' => $id,
        ':title' => $title,
        ':description' => $description,
        ':user_id' => $user_id,
        ':category_id' => $category,
        ':price' => $price,
        ':image_course' => $image_course

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