<?php 
require '../../../database/database.php';
require '../../../models/user.model.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    deleteTrainer($_POST['id']);
    header("Location:/list_trainer");

}
