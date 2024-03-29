<?php require_once 'models/addmin.password.model.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-Learning</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="vendor/glightbox/css/glightbox.css">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="vendor/css/style.css">

	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body style="background-image: url('assets/images/bg/books-2596809_1280.jpg'); background-size: cover; background-repeat: no-repeat;">
<?php
  $input =false;
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if(isset($_POST['currentPassword'])&& isset($_POST['newPassword'] )  && isset($_POST['confirmPassword'])){
        $input = true;
        $require = requirePasswordChanges($_POST['currentPassword'],$_POST['newPassword'],$_POST['confirmPassword']); 
      }
  }
?>
<div class="container">
<div class="container">
    <div class="row justify-content-center mt-5">
        <form class="container-fluid justify-content-start" action='/admin_home' method='post'>
            <input type="text" name='email' value='<?=$_POST['email']?>' hidden>
            <button type="submit" class="btn btn-orange btn-sm">
            <i class="bi bi-arrow-left-circle-fill"></i> Back
            </button>
        </form>  
        <div class="col-lg-5 d-flex">
            <div class="modal-body border p-4 mt-4 ml-0"  style="background-color: rgba(0, 0, 0,0.4);">
                <h5 class="mb-4 text-white text-center">👨🏼‍💻 Change password</h5>
                <form action="/admin_password_comfirm" method="post">
                    <div class="mb-3">
                        <label for="currentPassword" class="form-label text-white" <?php if($input){if(strlen($require['currentPassword'])>0){echo 'hidden';}}?>>Current Password:</label>
                        <small class="form-text text-danger">
                            <?php if($input===true){echo $require['currentPassword'];}?>
                        </small>
                        <div class="input-group">
                            <input type="password" class="form-control text-white" id="currentPassword" name="currentPassword" value='<?php if($input){if(strlen($require['currentPassword'])===0){echo $_POST['currentPassword'];}}?>' required  style="background-color: rgba(0, 0, 0,0.3);">
                            <button class="btn btn-outline-secondary" type="button" id="toggleCurrentPassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="newPassword" class="form-label text-white" <?php if($input){if(strlen($require['newPassword'])>0){echo 'hidden';}}?>>New Password:</label>
                        <small class="form-text text-danger">
                            <?php if($input===true){echo $require['newPassword'];}?>
                        </small>
                        <div class="input-group">
                            <input type="password" class="form-control text-white" id="newPassword" name="newPassword" value='<?php if($input){if(strlen($require['newPassword'])===0){echo $_POST['newPassword'];}}?>' required style="background-color: rgba(0, 0, 0,0.3);">
                            <button class="btn btn-outline-secondary" type="button" id="toggleNewPassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label text-white" <?php if($input){if(strlen($require['confirmPassword'])>0){echo 'hidden';}}?>>Confirm New Password:</label>
                        <small class="form-text text-danger">
                            <?php if($input===true){echo $require['confirmPassword'];}?>
                        </small>
                        <div class="input-group">
                            <input type="password" class="form-control text-white" id="confirmPassword" name="confirmPassword" value='<?php if($input){if(strlen($require['confirmPassword'])===0){echo $_POST['confirmPassword'];}}?>' required style="background-color: rgba(0, 0, 0,0.3);">
                            <button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <input type="text" name='email' value='<?=$_POST['email']?>' hidden>
					<input type="text" name='user_id' value='<?= $_POST['user_id'] ?>' hidden>
                    <button type="submit" class="btn btn-orange d-block mx-auto">Change Password</button>
                         
                </form>
            </div>
        </div>
    </div>
</div>

<script>

document.getElementById('toggleCurrentPassword').addEventListener('click', function() {
    var currentPasswordInput = document.getElementById('currentPassword');
    if (currentPasswordInput.type === "password") {
        currentPasswordInput.type = "text";
    } else {
        currentPasswordInput.type = "password";
    }
});

document.getElementById('toggleNewPassword').addEventListener('click', function() {
    var newPasswordInput = document.getElementById('newPassword');
    if (newPasswordInput.type === "password") {
        newPasswordInput.type = "text";
    } else {
        newPasswordInput.type = "password";
    }
});

document.getElementById('toggleConfirmPassword').addEventListener('click', function() {
    var confirmPasswordInput = document.getElementById('confirmPassword');
    if (confirmPasswordInput.type === "password") {
        confirmPasswordInput.type = "text";
    } else {
        confirmPasswordInput.type = "password";
    }
});

</script>
</body>
</html>