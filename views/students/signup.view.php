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

    <!-- Sign In Start -->
    <div class="container-fluid ">
        <div class="row h-100 align-items-center justify-content-center " style="min-height: 90vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-lg-4 ">
                <div class="rounded p-2 p-sm-5 my-4 mx-3 shadhow-lgbd" style="background-color: rgba(255, 255, 255,0.1);">
                    <div class="d-flex align-items-center justify-content-between mb-1">
                        <h3 class="text-info">Create Account</h3>
                    </div>
                    <?php

                    $input =false;
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $input = true;
                        $require = requireInformation($_POST['name'], $_POST['email'], $_POST['password'], $_POST['phone'],$_POST['password_comfirm']);  
                    }
                    ?>
                    <form action="/create_student" method="post" class='bd bd-info' enctype="multipart/form-data">                          
                        <div class="form-floating mb-2 border-info rounded">
                            <input type="text" name='refrash' hidden>
                            <small class="form-text text-danger">
                                <?php if($input==true){echo $require['name'];} ?>
                            </small>
                            <input type="name" class="form-control bd-primary form-control-sm" id="floatingInput" placeholder="Name" style="background-color: rgba(0,0,0,0.3); <?php if($input==true){if(strlen($require['name'])>0){echo 'border: 1px solid lightcoral;'; }}?>" name='name' value='<?php if($input==true){echo $_POST['name'];} ?>'>
                            <label for="floatingInput" class="text-info" <?php if($input){if(strlen($require['name'])>0){echo 'hidden';}}?>>Name</label>
                        </div>
                        <div class="form-floating mb-2 border-info rounded">
                            <small class="form-text text-danger">
                                <?php if($input){echo $require['phone'];} ?>
                            </small>
                            <input type="text" class="form-control form-control-sm" id="floatingInput" placeholder="Phone" style="background-color: rgba(0, 0, 0, 0.3);<?php if($input){ if(strlen($require['phone'])>0){echo 'border: 1px solid lightcoral;';}}?>" name='phone' value="<?php if($input){echo $_POST['phone'];} ?>">
                            <label for="floatingInput" class="text-info" <?php if($input){if(strlen($require['phone'])>0){echo 'hidden';}}?>>Phone</label>
                        </div>
                        <div class="form-floating mb-2 border-info rounded">
                            <small class="form-text text-danger">
                                <?php if($input){echo $require['email'];} ?>
                            </small>
                            <input type="email" class="form-control form-control-sm" id="floatingInput" placeholder="name@example.com" style="background-color: rgba(0, 0, 0, 0.3);<?php if($input){if(strlen($require['email'])>0){echo 'border: 1px solid lightcoral;';}}?>" name='email' value=' <?php if($input){echo $_POST['email'];} ?>'>
                            <label for="floatingInput" class="text-info" <?php if($input){if(strlen($require['email'])>0){echo 'hidden';}}?>>Email address</label>
                        </div>
                        <div class="form-floating mb-2 border-info rounded">
                            <small class="form-text text-danger">
                                <?php if($input){echo $require['password'];} ?>
                            </small>
                            <input type="password" class="form-control form-control-sm" id="floatingPassword" placeholder="Password" style="background-color: rgba(0, 0, 0, 0.3);<?php if($input){if(strlen($require['password'])>0){echo 'border: 1px solid lightcoral;';}}?>" name='password' value='<?php if($input){echo $_POST['password'];} ?>'> 
                            <label for="floatingPassword" class="text-info" <?php if($input){if(strlen($require['password'])>0){echo 'hidden'; } }?>>Password</label>
                        </div>
                        <div class="form-floating mb-2 border-info rounded">
                            <small class="form-text text-danger">
                                <?php if($input){echo $require['password_comfirm'];} ?>
                            </small>
                            <input type="password" class="form-control form-control-sm " id="floatingPassword" placeholder="password_comfirm" style="background-color: rgba(0, 0, 0, 0.3);<?php if($input){if(strlen($require['password_comfirm'])>0){echo 'border: 1px solid lightcoral;';}}?>" name='password_comfirm' value='<?php if($input){echo $_POST['password_comfirm'];} ?>'> 
                            <label for="floatingPassword" class="text-info" <?php if($input){if(strlen($require['password_comfirm'])>0){echo 'hidden'; } }?>>ComfirmPassword</label>
                        </div>
                        <div class="d-flex align-items-center mb-2 gab-1">
                            <div class="form-check me-4">
                                <input type="radio" class="form-check-input border-info" id="maleRadio" name='gender' value='Male' style="background-color: rgba(0, 0, 0, 0.3);" <?php if($input){if(isset($_POST['gender']) && $_POST['gender']=='Male'){echo 'checked';}} ?>>
                                <label class="form-check-label text-info" for="maleRadio">Male</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input border-info" id="femaleRadio" name='gender' value='Female' style="background-color: rgba(0, 0, 0, 0.3);" <?php if($input){if(isset($_POST['gender']) && $_POST['gender']=='Female'){echo 'checked';}} ?>>
                                <label class="form-check-label text-info" for="femaleRadio">Female</label>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-check-label text-info " for="exampleCheck1">Add profile image</label>
                            <input type="file" name='image' class="form-control form-control-sm" aria-label="file example" style="background-color: rgba(0, 0, 0, 0.1);">
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class='btn h-10 w-20 mb-2 border-info' style="background-color: rgba(0, 0, 0, 0.5);"><a href="/signin" style="color: blue;" >Sign in Account</a></div>
                            <button type="submit" class="btn h-10 w-20 mb-2 border-info text-info" style="background-color: rgba(0, 0, 0, 0.5);color: orange;">Create Account</button>
                        </div>
                    </form>

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