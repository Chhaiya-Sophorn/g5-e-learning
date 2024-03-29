
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>E-Learning</title>
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

<body style="background-image: url('assets/images/bg/03.jpg'); background-size: cover; background-repeat: no-repeat;">
<div class="container-fluid position-relative d-flex p-0">
    
    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-lg-4">
                <div class="rounded p-4 p-sm-5 my-4 mx-3 shadhow-lg" style="background-color: rgba(0, 0, 0,0.1);">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class ='text-white'>Sign In for trainer</h3>
                    </div>

                    <?php
                    
                    $input =false;
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $input = true;
                        $require = applySignin( $_POST['email'], $_POST['password']);  
                    }
                    
                    ?>
                    <form action="/trainer_access" method='post'>
                    <label for="floatingInput" class="text-white" <?php if($input){if(strlen($require['email'])>0){echo 'hidden';}}?>>Email</label>
                    <div class="form-floating mb-2 border-info rounded">
                        <small class="form-text text-danger">
                            <?php if($input==true){echo $require['email'];} ?>
                        </small>
                        <input type="email" class="form-control form-control-lg bd-info text-white" id="floatingInput" placeholder="name@example.com" style="background-color: rgba(0, 0, 0, 0.1);<?php if($input){ if(strlen($require['email'])>0){echo 'border: 1px solid lightcoral;';}}?>" name='email' value="<?php if($input){echo $_POST['email'];} ?>">
                    </div>
                    <label for="passwordInput" class="text-white " <?php if ($input) {if (strlen($require['password']) > 0) { echo 'hidden';}} ?>>Password</label>
                            <div class="form-floating mb-2 border-white rounded">
                                <small class="form-text text-danger">
                                    <?php if ($input == true) {
                                        echo $require['password'];
                                    } ?>
                                </small>
                                
                                <div class="input-group">
                                    <input type="Password" class="form-control form-control-lg bd-white text-white" id="passwordInput" style="background-color: rgba(0, 0, 0, 0.1);<?php if ($input) {if (strlen($require['password']) > 0) {echo 'border: 1px solid lightcoral;';}} ?>" name='password' value="<?php if ($input) {echo $_POST['password'];} ?>">
                                    <button type="button" class="btn btn-light" id="showPasswordBtn"  style="background-color: rgba(0, 0, 0, 0.1);"><i class="bi bi-eye"></i></button>
                                </div>
                        </div>
                    <button type="submit" class="btn py-3 w-100 mb-4 border-info " style="background-color: rgba(0, 0, 0, 0.5);color: orange;">Sign In</button>
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

    <script>
    $(document).ready(function() {
        $("#showPasswordBtn").click(function() {
            var passwordInput = $("#passwordInput");
            var icon = $(this).find("i");

            if (passwordInput.attr("type") === "password") {
                passwordInput.attr("type", "text");
                icon.removeClass("bi-eye").addClass("bi-eye-slash");
            } else {
                passwordInput.attr("type", "password");
                icon.removeClass("bi-eye-slash").addClass("bi-eye");
            }
        });
    });
</script>

</body>
</html>