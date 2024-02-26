<?php
// require 'views/categories/category.view.create.php';
require "../../database/database.php";
require "../../models/category.model.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
     $title = htmlspecialchars($_POST['title']);
     $description = htmlspecialchars($_POST['description']);
     if (!empty($title) && !empty($description)){
          $isCreate = createCategory($title,$description);
          //it return true or false
          if ($isCreate){
           header ("location: /categories");
          }else{
           header ("location: /categories");
          }
     }else{
          header('location: /categories');
     }
}
