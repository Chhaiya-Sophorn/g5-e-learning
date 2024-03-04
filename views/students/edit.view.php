<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="vendor/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="vendor/css/admin.css" rel="stylesheet">
</head>

<body style="background-image: url('assets/images/bg/02.jpg'); background-size: cover; background-repeat: no-repeat;">
<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->
    


    <!-- Sign In Start -->
    <div class="container-fluid ">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-lg-4">
                <div class="rounded p-2 p-sm-5 my-4 mx-2 shadhow-lg" style="background-color: rgba(0, 0, 0,0.4);">
                    
                    <?php
                        require 'database/database.php';    
                        require 'models/student.model.php';   
                        $input =false; 
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $id = $_POST['id'];
                        $statement = $connection->prepare("SELECT* FROM users WHERE user_id LIKE :id");
                        $statement->execute([
                            ':id' => $id
                        ]);
                        $users = $statement->fetchAll();
                        }
                        if(isset($_POST['password'])){
                            $input =true;
                            $strongpassword= strongPassword($_POST['password']);
                        }
                        
                        
                        foreach ($users as $user):

                    ?>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <img class="rounded-circle me-lg-2" src="../../uploading/<?=$user['profile_image']?>" alt="" style="width: 100px; height:100px;">
                        <h3 class="text-info">Edit profile</h3>
                    </div>
                    <form action="/get_edit" method="post" enctype="multipart/form-data">
                        <div class="mb-2">
                            <label class="form-check-label" for="exampleCheck1">Choose Profile image</label>
                            <input type="file" name='image' class="form-control form-control-sm" aria-label="file example" style="background-color: rgba(0, 0, 0, 0.1);">
                        </div>
                        <div class="form-floating mb-2 border-info rounded">
                            <input type="hidden" value='<?= $user['user_id']?>' class="form-control" id="floatingInput" placeholder="id" style="background-color: rgba(0, 0, 0, 0.5);" name='id'>
                            <input type="name" class="form-control bd-primary form-control-sm text-info" value='<?= $user['name']?>' id="floatingInput" placeholder="Name" style="background-color: rgba(0,0,0,0.3);" name='name'>
                            <label for="floatingInput" class="text-info">Name</label>
                        </div>  
                        <div class="form-floating mb-2 border-info rounded">
                            <input type="name" class="form-control bd-primary form-control-sm text-info" value='<?= $user['phone']?>' id="floatingInput" placeholder="Name" style="background-color: rgba(0,0,0,0.3);" name='phone'>
                            <label for="floatingInput" class="text-info">Phone</label>
                        </div>  
                        <div class="form-floating mb-2 border-info rounded">
                            <input type="name" class="form-control bd-primary form-control-sm text-info" value='<?= $user['email']?>' id="floatingInput" placeholder="Name" style="background-color: rgba(0,0,0,0.3);" name='email'>
                            <label for="floatingInput" class="text-info">Email</label>
                        </div>  
                        <div class="form-floating mb-2 border-info rounded">
                            <small class="form-text text-danger">
                                <?php if($input){echo $strongpassword['password'];} ?>
                            </small>
                            <input type="name" class="form-control bd-primary form-control-sm text-info" value='<?= $user['password']?>' id="floatingInput" placeholder="Name" style="background-color: rgba(0,0,0,0.3);<?php if($input){if(strlen($strongpassword['password'])>0){echo 'border: 1px solid lightcoral;';}}?>" name='password' value='<?php if($input){echo $_POST['password'];} ?>'>
                            <label for="floatingInput" class="text-info" <?php if($input){if(strlen($strongpassword['password'])>0){echo 'hidden'; } }?>>Password</label>
                        </div>     
                        <button type="submit" class="btn py-2 w-100 mb-3 border-info" style="background-color: rgba(0, 0, 0, 0.5); color: orange;">Update</button>
                    </form>

                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
</div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/chart/chart.min.js"></script>
    <script src="vendor/easing/easing.min.js"></script>
    <script src="vendor/waypoints/waypoints.min.js"></script>
    <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="vendor/tempusdominus/js/moment.min.js"></script>
    <script src="vendor/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="vendor/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="vendor/js/main.js"></script>
</body>

</html>