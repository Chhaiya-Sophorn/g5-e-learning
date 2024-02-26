<?php
require '../../database/database.php';
require '../../models/courses.model.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

   // $isset = updateCourse ($_POST['title'],$_POST['description'] ,$_POST['id']) ;
   if($isset){
      header("location:/categories");
   }else{
      header("location:/categories");
   }
}