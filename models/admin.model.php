<?php

function createCourse(string $title, string $description, int $categories, string $fileImg, int $user_id, string $price) 
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO courses (title, description, user_id, category_id, price, image_courses) VALUES (:title, :description, :user_id, :category, :price, :fileImg)");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':user_id' => $user_id,
        ':category' => $categories,
        ':price' => $price,
        ':fileImg' => $fileImg,
    ]);
}

// function getTrainerWithUserName () {
//     global $connection;
//     $sql = "SELECT users. name
//     FROM users INNER JOIN trainers ON users.id=trainers.user_id";
//     $result = $connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
//     return $result;
    
// }


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

function updateCourseNoImg(int $id, string $title, string $description, int $user_id, int $category, string $price ) : bool
{
    global $connection;
    $statement = $connection->prepare("update courses set title = :title, description = :description,user_id= :user_id, category_id= :category_id, price= :price  where course_id = :course_id");
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

    // $stmt = $con->prepare("");
// $stmt->execute();
// $CoursDdetails = $stmt->fetchAll(PDO::FETCH_ASSOC);

}






// function getTrainerNames(int $id){
//     global $connection;
//     $statement = $connection->prepare("SELECT name FROM users WHERE  user_id= 2");
//     $statement->execute([2 => $id]);
//     return $statement-> fetch();
// }

// function getIdTrainers(): array 
// { 
//     global $connection; 
//     try { 
//         $statement = $connection->prepare("SELECT users.title, users.description,
//         FROM items 
//         INNER JOIN categories ON items.category_id = categories.category_id 
//         INNER JOIN users ON items.user_id = users.user_id; 
//         "); 
//         $statement->execute(); 
//         return $statement->fetchAll(); 
//     } catch (PDOException $e) { 
//         echo "Error: " . $e->getMessage(); 
 
//         return []; 
//     } 
// }
// $statement = $connection->prepare("update courses set title = :title, description = :description,user_id= :user_id, category_id= :category_id, price= :price, image_courses= :image_course  where course_id = :course_id");


function getTeacher(int $id){
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM users WHERE user_id = :id');
    $statement->execute([':id' => $id]);

    return $statement->fetchAll();
}