<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="views/student/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <title>Student Profile</title>
</head>
<body>
<?php
require "layouts/header.php";

 ?>
<!-- student_profile -->

<div class="container mt-5 pt-2 shadow-lg  " style="width:700px; height: 500px;">

<!-- start_top -->
  <div class="top-form ">
    <div class="gd-profile mb-2 text-center mt-4 ">
      <div class="p-1 bg-secondary text-dark rounded-circle " style="width: 160px; height: 160px;">
        <img src="studentprofile/yaya.png" alt="Profile Image" class="rounded-circle mb-2" style="width: 150px; height: 152px;">
        <h6 class="h6">Poeun Sokunthea</h6>
        <button type="button" class="btn btn-secondary p-1 mt-1" style="width: 70px;"><i class='fas fa-edit'></i>Edit</button>
      </div>
    </div>
    <div class="form-student">
      <h3>My Profile</h3>
      <div class="row  ">
        <div class="col-6 gap-2">
        <label for="fname">First name:</label><br>  
          <div class="p-1 mb-2 border bg-light">Poeun </div>
        </div>
        <div class="col-6">
          <label for="fname">Last name:</label><br>  
          <div class="p-1 border bg-light">Sokunthea</div>
        </div>
      <div class="col-6">
      <label for="fname">Role:</label><br>  
        <div class="p-1 border bg-light">Student</div>
      </div>
      <div class="col-6">
      <label for="fname">Phone:</label><br>  
        <div class="p-1 border bg-light">0974367484</div>
      </div>
      <div class="col-6 mt-2">
      <label for="fname">Email Address:</label><br>  
        <div class="p-1  border bg-light" style="width: 220%;">sokunthea.poeun@student.passerellesnumeriques.org</div>
      </div>
    </div>
  </div>
</div>
<!-- end  -->

<!-- start_bottom -->
<div class="bottom-form ">
    <button type="button" class="btn btn-danger " style="width: 90px;">Cancle</button>
    <button type="button" class="btn btn-success" style="width: 90px;">Save</button>
</div>
</div>
<!-- end -->


  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- ends -->
</body>
</html>