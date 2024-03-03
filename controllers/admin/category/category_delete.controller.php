<?php
require "../../../database/database.php";
$id = $_POST['id'] ? $_POST['id'] : null;
if (isset($id))
{
    require '../../../models/category.model.php';
    $isDelete = deleteCategory($id);
    if ($isDelete) {
          header('Location: /categories');
    }
}