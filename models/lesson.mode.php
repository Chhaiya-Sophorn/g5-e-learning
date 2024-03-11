<?php

function lessonExist(string $title): array{
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM lessons WHERE title = :title');
    $statement->execute([
        ':title' => $title
    ]);

    //jenh 0 ber ot mean jenh 1
    if($statement->rowCount()>0){
        return $statement->fetch();
    }else{
        return [];
    }
}

function getTheLessons(int $id){
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM lessons WHERE course_id =:id');
    $statement->execute([':id' => $id]);
    return $statement->fetchAll();
}


function addLesson(string $title, string $description, string $video, int $course_id){
    global $connection;
    $statement = $connection->prepare("INSERT INTO lessons (title, description, course_id, video) VALUES (:title, :description, :course_id, :video)");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':course_id' => $course_id,
        ':video' => $video,
    ]);
}

function editLesson(int $id,string $title, string $description, string $video)
{
    global $connection;
    $statement = $connection->prepare("update lessons set title = :title, description = :description,video= :video where lesson_id =:id");
    $statement->execute([
        ':id' => $id,
        ':title' => $title,
        ':description' => $description,
        ':video' => $video

    ]);
}

function deleteLesson(int $id) 
{
    global $connection;
    $statement = $connection->prepare("delete from lessons where lesson_id = :id");
    $statement->execute([':id' => $id]);
}


function getQuizzes(){
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM quizzes');
    $statement->execute();
    return $statement->fetchAll();
}

function getLessonById(int $id){
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM lessons where lesson_id =:id');
    $statement->execute([':id' => $id]);
    return $statement->fetch();
}
function getLessonByTitle(string $title){
    global $connection;
    $statement =  $connection->prepare('SELECT *FROM lessons where title =:title');
    $statement->execute([':title' => $title]);
    return $statement->fetch();
}

function addQuizzes(int $lesson_id, string $content){
    global $connection;
    $statement = $connection->prepare("INSERT INTO quizzes (lesson_id, content) VALUES (:id, :content)");
    $statement->execute([
        ':id' => $lesson_id,
        ':content' => $content
    ]);
}

function deleteQuiz(int $id) 
{
    global $connection;
    $statement = $connection->prepare("delete from quizzes where quiz_id = :id");
    $statement->execute([':id' => $id]);
}


function editQuiz(int $quiz_id, int $lesson_id, string $content)
{
    global $connection;
    $statement = $connection->prepare("update quizzes set lesson_id = :lesson_id, content = :content where quiz_id =:quiz_id");
    $statement->execute([
        ':lesson_id' => $lesson_id,
        ':content' => $content,
        ':quiz_id' => $quiz_id

    ]);
}
