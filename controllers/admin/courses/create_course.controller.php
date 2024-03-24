<?php 
     require '../../../models/admin.model.php';
     require '../../../database/database.php';
     require '../../../models/category.model.php';
     if($_SERVER['REQUEST_METHOD'] == 'POST'){

          $title = htmlspecialchars($_POST["title"]);
          $description = htmlspecialchars($_POST["description"]);
          $category = getIdCategory($_POST["category_id"])['category_id'];

          $user_id = getIdTrainer($_POST['user_id'])['user_id'];
        //   $date = htmlspecialchars($_POST('date'));
          $date = htmlspecialchars(date('Y-m-d'));

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
               if (!empty($title) && !empty($description) && !empty($category) && !empty($image) && !empty($user_id) && !empty($date) && !empty($price)) {
                // Move the uploaded image to the destination folder
                move_uploaded_file($image_tmp_name, $image_folder);
               createCourse( $title,  $description,  $category,   $date,$image,  $user_id,  $price);
            }
            header("Location:/viewCourse"); // Assuming you have implemented the addTrainer() function to insert data into the database
            //    move_uploaded_file($image_tmp_name, $image_folder);
            //    createCourse($title, $description, $category, $image, $user_id, $date, $price);
            //    header("Location:/viewCourse");
           } else {
               // No image file uploaded, use a default image
               if (!empty($title) && !empty($description) && !empty($category) && !empty($image) && !empty($user_id) && !empty($date) && !empty($price)) {

               $image = "non.webp";
               createCourse($title,  $description,  $category,  $image, $date,  $user_id,  $price);
               if (!empty($title) && !empty($description) && !empty($category) && !empty($image) && !empty($user_id) && !empty($date) && !empty($price)) {
                    echo `<div class="alert alert-secondary" role="alert">
                    A simple secondary alert—check it out!
                  </div>`;
            }
        }
            header("Location:/viewCourse");
        }

     }

?>
