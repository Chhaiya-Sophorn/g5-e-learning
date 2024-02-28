<?php

function createCategory(string $title, string $description) : bool
// it will return true or false
{
    global $connection;
    $statement = $connection->prepare("insert into categories (title, description) values (:title, :description)");
    $statement->execute([
        ':title' => $title,
        ':description' => $description

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

function updateCategory(string $title, string $description, int $id) :bool
{
    global $connection;

    $statement = $connection->prepare("update categories set title = :title, description = :description where category_id = :category_id");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
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
