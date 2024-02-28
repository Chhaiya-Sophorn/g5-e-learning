
<?php 
     require '../../models/admin.model.php';
     require '../../database/database.php';
     if($_SERVER['REQUEST_METHOD'] == 'POST')
     if (isset($_POST['course_id']))  {

          $id = $_POST['course_id'];
          $statement = $connection->prepare("DELETE FROM courses WHERE course_id = :id;");
          $statement->execute(['id' => $id]);

          header("Location:/viewCourse");

     }

