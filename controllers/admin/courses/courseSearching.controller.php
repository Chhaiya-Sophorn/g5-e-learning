

<?php
//  search Course

require '../../../models/admin.model.php';
require '../../../database/database.php';
require '../../../models/category.model.php';
    
// Assuming you have some data to search through, like an array or database

// // include 'connect_test_db.php';
// $searchErr = '';
// $CoursDdetails='';
// if(isset($_POST['search']))
// {
// 	if(!empty($_POST['searchCourse']))
// 	{
// 		$search = $_POST['searchCourse'];
// 		$stmt = $con->prepare("select * from courses where title like '%$search%' or name like '%$search%'");
// 		$stmt->execute();
// 		$CoursDdetails = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
// 	}
// 	else
// 	{
// 		$searchErr = "Please enter the information";
// 	}
   
// }
$search = $_POST['title'];
echo $search;