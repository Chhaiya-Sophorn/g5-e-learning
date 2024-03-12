<?php 
     require '../../../models/admin.model.php';
     require '../../../database/database.php';
     require '../../../models/category.model.php';
     if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $title = htmlspecialchars($_POST["title"]);
          $description = htmlspecialchars($_POST["description"]);
          $category = getIdCategory($_POST["category_id"])['category_id'];

          $user_id = getIdTrainer($_POST['user_id'])['user_id'];
          $price = htmlspecialchars($_POST['price']);
          $gender = 'Male';
          if (isset($_POST['gender']) && $_POST['gender'] == 'Female') {
              $gender = 'Female';
          }

          if (isset($_FILES['image']) && $_FILES['image']['name']) {
               $image = $_FILES['image']['name'];
               $image_tmp_name = $_FILES['image']['tmp_name'];
               $image_folder = '../../../uploading' . DIRECTORY_SEPARATOR . $image; // Added DIRECTORY_SEPARATOR
               $image_size = $_FILES['image']['size'];
       
               // Move the uploaded image to the destination folder
               move_uploaded_file($image_tmp_name, $image_folder);
               createCourse($title, $description, $category, $image, $user_id, $price);
               header("Location:/viewCourse");
           } else {
               // No image file uploaded, use a default image
               $image = "non.webp";
               createCourse($title, $description, $category, $image, $user_id, $price);
               header("Location:/viewCourse");
           }

     }
     





//     // Display the search results
//     echo "<h2>Search Results for '$searchCourse':</h2>";
//     if (empty($results)) {
//         echo "No results found.";
//     } else {
//         echo "<ul>";
//         foreach ($results as $result) {
//             echo "<li>$result</li>";
//         }
//         echo "</ul>";
//     }
// } else {
//     // If no search term is provided, redirect back to the search form
//     header("Location:/viewCourse ");
//     exit();
// }
// ?>
