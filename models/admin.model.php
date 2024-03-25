<?php

function createCourse(string $title, string $description, int $categories, $date, string $fileImg, int $user_id, string $price) 
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO courses (title, description, user_id, category_id, date, price, image_courses) VALUES (:title, :description, :user_id, :category,:date, :price, :fileImg)");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':user_id' => $user_id,
        ':category' => $categories,
        ':date' => $date,
        ':price' => $price,
        ':fileImg' => $fileImg,
    ]);
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

function updateCourse(int $id, string $title, string $description, int $user_id, int $category,string $price, string $image_course ) : bool
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

function updateCourseNoImg(int $id, string $title, string $description, int $user_id, int $category, string $price ) : bool
{
    global $connection;
    $statement = $connection->prepare("update courses set title = :title, description = :description,user_id= :user_id, category_id= :category_id,  price= :price  where course_id = :course_id");
    $statement->execute([
        ':course_id' => $id,
        ':title' => $title,
        ':description' => $description,
        ':user_id' => $user_id,
        ':category_id' => $category,
        ':price' => $price,
        
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

// modify  data in database from integer to  string for display on web page.
function getTrainerName($id){
    global $connection;
    $statement = $connection->prepare("SELECT*FROM users WHERE  user_id=:id");
    $statement->execute([':id' => $id]);
    return $statement-> fetch();
}

function getTitle(int $id){
    global $connection;
    $statement = $connection->prepare("SELECT*FROM users WHERE  course_id=:id");
    $statement->execute([':id' => $id]);
    return $statement-> fetch();
}


function getIdTrainer(string $name){
    global $connection;
    $statement = $connection->prepare("SELECT*FROM users WHERE name=:name AND roles_id=2");
    $statement->execute([':name' => $name]);
    return $statement-> fetch();
}

function searchCourse(string $title) {
    global $connection;

    // Use '%' around the bind value for a partial match in the LIKE clause
    $statement = $connection->prepare("select * from courses where title like '%$title%' or title like '%$title%'");
    $statement->execute([':title' => '%' . $title . '%']);

    return $statement->fetchAll(); 

}


function getTeacher(int $id){
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM users WHERE user_id = :id');
    $statement->execute([':id' => $id]);

    return $statement->fetch();
}
