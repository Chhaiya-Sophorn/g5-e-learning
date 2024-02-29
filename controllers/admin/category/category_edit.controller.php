<?php
require '../../../database/database.php';
require '../../../models/category.model.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

   $isset = updateCategory($_POST['title'],$_POST['description'] ,$_POST['id']) ;
   if($isset){
      header("location:/categories");
   }else{
      header("location:/categories");
   }
}
