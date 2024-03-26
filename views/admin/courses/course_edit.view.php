<div class="card mt-5 d-sm-flex bg-dark">
     <div class="card-body  gap-5 w-75 align-self-center bg-white p-4  rounded-3 ">
          <!-- <div class="modal-header mt-0 "> -->
               <h5 class="modal-title text-primary" id="exampleModalLabel">Create Course</h5>
               <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
          <!-- </div> -->
          <form action="controllers/admin/courses/update_course.controller.php" method="post" class="g-5 p-2" enctype="multipart/form-data">
               <?php

               require 'database/database.php';
               require 'models/admin.model.php';
               require 'models/category.model.php';
               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $course = getCourse($_POST['id']);
               }
               ?>
               <input type="number" placeholder="course_id" class="form-control w-100 bg-white  p-2  " name="course_id" value="<?= $course['course_id'] ?>" hidden>
               <div class="form-group mt-2">
                    <label for="#">Course </label>
                    <input type="text " placeholder="course" class="form-control w-100 bg-white  p-2" name="title" value="<?= $course['title'] ?>">
               </div>
               <div class="form-group mt-2">
                    <label for="#">Description</label>
                    <textarea name="description" placeholder="description" id="description" class="w-100"><?= $course['description'] ?></textarea>
               </div>
               <div class="form-group mt-2">
                    <label for="#">Category </label>
                    <select class="form-select bg-white" id="sell1" name="category_id" aria-label="Default select example">
                         <?php
                         $categories = getCategories();
                         foreach ($categories as $categiry) :
                         ?>
                              <option><?= getCategoryName($categiry['category_id'])['title'] ?></option>
                         <?php endforeach ?>
                    </select>
               </div>
               <div class="form-group mt-2">
                    <label for="#">Trainer </label>
                    <select class="form-select bg-white" id="sell1" name="user_id" aria-label="Default select example">
                         <?php
                         require 'models/user.model.php';
                         $trainers = getTrainer();
                         // $trainers = getTrainerWithUserName(); 
                         foreach ($trainers as $trainer) :
                         ?>
                              <!-- $displayValue = isset($connection) ? $trainer['user_id'] : $trainer['name']; -->
                              <option><?= getTrainerName($trainer['user_id'])['name'] ?></option>
                         <?php endforeach ?>
                    </select>
               </div>
               <div class="form-group mt-2">
                    <label for="#">Price </label>
                    <input type="text" placeholder="price" class="form-control w-100 bg-white  p-2" name="price" value="<?= $course['price'] ?>">
               </div>
               <div class="form-group mt-2">
                    <label for="#">Image </label>
                    <input type="file" placeholder="input file" class="form-control w-100 bg-white  p-2" name="image" value="<?= $course['image_courses'] ?>">
               </div>
               <div class="form-group mt-2">
                    <!-- <button type="/viewCourse" class="btn btn-block btn-primary">Cancle </button> -->
                    <a href="/viewCourse" class="btn btn-block btn-primary">Cancel</a>
                    <button type="submit" class="btn btn-block btn-success">Update </button>
               </div>
          </form>
     </div>
</div>