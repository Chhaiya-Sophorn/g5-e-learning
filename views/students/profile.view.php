<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="views/student/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link href='https://unpkg.com/boxicons@2.1.4/dist/boxicons.js' rel='stylesheet'>
  
  <title>Student Profile</title>
</head>
<body>
<?php
require "layouts/header.php";
require 'database/database.php';
require 'models/student.model.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $student = getStudent($_POST['id']);
}
 ?>
<!-- student_profile -->
<form action="/student" method="post">
    <input type="text" name="email" value="<?= $student['email'] ?>" hidden>
    <div class="pl-5 mt-5">
        <button type="submit" class="btn btn-link" style="border: none; outline: none;">
            <i class="bx bx-arrow-back" style="font-size: 40px;"></i>
        </button>
    </div>
</form>

<div class="container p-2 shadow-lg" style="width:730px; height: 550px;margin-top: -40px;" >

<!-- start_top -->
  <div class="top-form border " >
    <div class="gd-profile text-center p-2 d-flex" style="background-color: rgba(0, 0, 255, 0.3);">
      <div class="p-1 bg-info text-dark rounded-circle ml-3" style="width: 160px; height: 160px;">
        <img src="../uploading/<?= $student['profile_image']?>" alt="Profile Image" class="rounded-circle mb-2" style="width: 150px; height: 150px;">
      </div>
      <div class=""></div>
    </div>
    <div class="form-student p-2 ">
      <div class="d-flex align-items-center">
         <h3><?= $student['name']?></h3>
        <form action="/edit" method='post'>
			      <input type="hidden" name="id" value=<?=$student['user_id'] ?>>
            <button type='submit' class='btn border-0'>
              <i class='bx bxs-edit ml-2 text-orange' style="font-size:40px;"></i>
            </button>
        </form>
      </div>
      <div class="row  ">
        <div class="col-6">
        <label for="fname">Role:</label><br>  
          <div class="p-1 border bg-light">Student</div>
        </div>
        <div class="col-6">
        <label for="fname">Phone:</label><br>  
          <div class="p-1 border bg-light"><?= $student['phone']?></div>
        </div>
        <div class="col-6 mt-2">
        <label for="fname">Email Address:</label><br>  
        <div class="p-1  border bg-light" style="width: 210%;"><?= $student['email']?></div>
      </div>
    </div>
  </div>
</div>
<!-- end  -->

<!-- start_bottom -->
<!-- <div class="bottom-form ">
    <button type="button" class="btn btn-danger " style="width: 90px;">Cancle</button>
    <button type="button" class="btn btn-success" style="width: 90px;">Save</button>
</div>
</div> -->
<!-- end -->

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- ends -->
</body>
</html>
