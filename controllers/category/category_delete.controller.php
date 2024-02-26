<?php
require "../../database/database.php";
$id = $_GET['id'] ? $_GET['id'] : null;
if (isset($id))
{
    require '../../models/category.model.php';
    $isDelete = deleteCategory($id);
    if ($isDelete) {
          header('Location: /categories');
    }
}