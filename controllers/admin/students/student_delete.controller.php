

<?php 
require '../../../database/database.php';
require '../../../models/student.model.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    deleteStudent($_POST['id']);
    header("Location:/list_student");

}