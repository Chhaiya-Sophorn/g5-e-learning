<?php

function createCategory(string $title, string $description, string $image) : bool
// it will return true or false
{
    global $connection;
    $statement = $connection->prepare("insert into categories (title, description, image) values (:title, :description, :image)");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':image' => $image

    ]);

    return $statement->rowCount() > 0;
}

function getCategory(int $id) : array
{
    global $connection;
    $statement = $connection->prepare("select * from categories where category_id = :category_id");
    $statement->execute([':category_id' => $id]);
    return $statement->fetch();
}

function getCategories() : array
{
    global $connection;
    $statement = $connection->prepare("select * from categories");
    $statement->execute();
    return $statement->fetchAll();
}

function updateCategory(string $title, string $description, string $image, int $id) :bool
{
    global $connection;
    $statement = $connection->prepare("update categories set title = :title, description = :description, image = :image where category_id = :category_id");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':image' => $image,
        ':category_id' => $id

    ]);

    return $statement->rowCount() > 0;
}

function deleteCategory(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from categories where category_id = :category_id");
    $statement->execute([':category_id' => $id]);
    return $statement->rowCount() > 0;
}

// modify  data in database from integer to  string for display on web page.
function getCategoryName(int $id){
    global $connection;
    $statement = $connection->prepare("SELECT*FROM categories WHERE  category_id=:id");
    $statement->execute([':id' => $id]);
    return $statement-> fetch();
}


function getIdCategory(string $title){
    global $connection;
    $statement = $connection->prepare("SELECT*FROM categories WHERE title=:title ");
    $statement->execute([':title' => $title]);
    return $statement-> fetch();
}

function getNumberOfCourseInCategory(int $id){
    global $connection;
    $statement = $connection->prepare("SELECT COUNT(*) FROM courses WHERE category_id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetchColumn();
}

function getCoursesOnCategory(int $id){
    global $connection;
    $statement = $connection->prepare("SELECT* FROM courses WHERE category_id = :id");
    $statement->execute([':id' => $id]);
    return $statement->fetchAll();
}

