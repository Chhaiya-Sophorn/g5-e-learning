<?php 
require "layouts/header.php";
require 'models/trainer.info.model.php';
?>

<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- =======================
Inner part START -->
<section style='height: 200px;background-image: url("assets/images/bg/pastel-2571378_1280.jpg");'>
<div class="mt-0">
		<form class="container-fluid justify-content-start" action='<?php if(isset($_POST['admin'])){echo '/list_trainer';}?>' <?php if(!isset($_POST['admin'])){ echo 'hidden';}?> method='post'>
			<button type="submit" class="btn btn-orange btn-sm">
				<i class="bi bi-arrow-left-circle-fill"></i> Back
			</button>
		</form>
	</div>

	<div class="row mb-4">
		<div class="col-lg-8 text-center mx-auto">
			<h2 class="fs-1">Welcom <?php if(getTrainersInfo($_POST['email'])['gender'] == 'Male'){echo 'Mr.';}else{echo 'Ms.';} ?> <span class='text-orange'><?=getTrainersInfo($_POST['email'])['name']?> </span>To E-learning </h2>
			<p class="mb-0">Information Technology Courses to expand your skills and boost your career & salary</p>
		</div>
		<div class=' d-flex justify-content-end p-5'>	
       		<a href="/trainer" style="<?php if(isset($_POST['admin'])){ echo 'display: none;';}else{ echo '';}?>"><button class="btn btn-danger mb-0"><i class="fas fa-sign-in-alt me-2"></i>Log Out</button></a> 
    	</div>
	</div>
</section>
<div style="margin-left: -207px;">
<section class="pt-4">
	<div class="container">
		<div class="mt-4">
			<button type="button" id='personal' class="btn btn-outline-orange"><i class="bi bi-info-circle"></i> My Personal Information</button>
			<button type="button" id='respone' class="btn btn-outline-orange"><i class="bi bi-person-check-fill"></i> My Courses</button>
			<button type="button" id='courses' class="btn btn-outline-orange"><i class="bi bi-briefcase-fill"></i> All the Courses</button>
		</div>

	</div>
</section>
</div>
	

<div class="d-flex justify-content-center">
    <section class="" id="personals">
        <div class="container">
            <div class="row shadow align-items-center border rounded p-4 bg-" style="width:600px;margin-top: -57px;height:450px">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-3" src="uploading/<?= getTrainersInfo($_POST['email'])['profile_image'] ?>" alt="" style="width: 150px; height: 150px; object-fit: cover;margin-top: -100px; ">
                    <h4 class="m-1"><span class=""><?= getTrainersInfo($_POST['email'])['name'] ?></span></h4>
                </div>
                <div class="col-lg-7 py-5 px-3">
                    <div class="py-2">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-4 gap-2">
                                <i class="flaticon-cat font-weight-normal text-feet m-0 mr-3 animated infinite heartBeat delay-1s"></i>
                                <span class="">Phone:</span>
                                <h6 class="m-0"> <?= getTrainersInfo($_POST['email'])['phone'] ?></h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-4 gap-2">
                                <i class="flaticon-doctor font-weight-normal text-feet m-0 mr-3 animated infinite tada delay-2s"></i>
                                <span class="text-">Email:</span>
                                <h6 class=" m-0"> <?= getTrainersInfo($_POST['email'])['email'] ?></h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-4 gap-2">
                                <i class="flaticon-doctor font-weight-normal text-feet m-0 mr-3 animated infinite tada delay-2s"></i>
                                <span class="text-">Courses:</span>
                                <h6 class=" m-0"><?=count(getCourseRespone(getTrainersInfo($_POST['email'])['user_id']))?> Courses</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-4 gap-2">
                                <i class="flaticon-doctor font-weight-normal text-feet m-0 mr-3 animated infinite tada delay-2s"></i>
                                <span>Experiences:</span>
                                <h6 class=" m-0"> 1 year</h6>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="d-flex justify-content-end" style="margin-top: -57px;">
				<form action="/trainer_password" method='post'>
					<input type="text" name='email' value='<?=$_POST['email']?>' hidden>
					<input type="text" name='user_id' value='<?= getTrainersInfo($_POST['email'])['user_id'] ?>' hidden>
					<button type="sumit" class="btn btn-0"><i class="fas fa-key me-2 text-orange"></i>Change Password</button>
				</form>
				<button type="button" class="btn border-0 show-edit" data-bs-toggle="modal" data-bs-target="#editPersonalModal" data-image="<?= getTrainersInfo($_POST['email'])['profile_image'] ?>" data-name="<?= getTrainersInfo($_POST['email'])['name'] ?>" data-phone="<?= getTrainersInfo($_POST['email'])['phone'] ?>" data-email="<?= $_POST['email'] ?>">
					<i class="fas fa-edit m-0 mr-3 fs-5 text-orange"></i> 
					<span class="text-black">Edit profile</span>
				</button>
			</div>
            </div>
        </div>
    </section>
</div>

<section id='responsible' class="pt-1">
	<div class="container">
		<!-- Instructor list START -->
		<div class="row g-4 justify-content-center" >
			<div class="text-center mx-auto">
				<h4 class=" text-orange">My Courses</h4>
				<p class="mb-0">Information Technology Courses to expand your skills and boost your career & salary</p>
			</div>
			<?php 
			$trainerCourses = getCourseRespone(getTrainersInfo($_POST['email'])['user_id']);
			foreach ($trainerCourses as $course):
			?>
			<!-- Card item START -->
			<div class="col-lg-10 col-xl-7">
				<div class="card shadow p-2">
					<div class="row g-0">
						<!-- Image -->
						<div class="col-md-4 d-flex align-items-center">
							<img src="uploading/<?=$course['image_courses']?>" class="rounded-3" alt="...">
						</div>
						<!-- Card body -->
						<div class="col-md-8">
							<div class="card-body">
								<!-- Title -->
								<div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
									<div>
										<h5 class="card-title mb-0"><?=$course['title']?></a></h5>
										<p class="small mb-2 mb-sm-0">Professor at Sigma College</p>
									</div>
									<span class="h6 fw-light">4.3<i class="fas fa-star text-warning ms-1"></i></span>
								</div>
								<!-- Content -->
								<p class="text-truncate-2 mb-3"><?=$course['description']?></p>
								<!-- Info -->
								<div class="d-sm-flex justify-content-sm-between align-items-center">
									<!-- Title -->
									<h6 class="text-orange mb-0">Digital Marketing</h6>
									<!-- Social button -->
									<form action="/trainer_manage" method='post' >
										<input type="text" name='email' value='<?=$_POST['email']?>' hidden>
										<input type="text" name='course' value='<?=$course['course_id']?>' hidden>
										<?php if(isset($_POST['admin'])){ echo "<input type='text' name='admin' value=''hidden >";}?>
										<button type="sumite" class="btn btn-primary"><?php if(isset($_POST['admin'])){ echo '<i class="fas fa-eye"></i> View ';}else{ echo 'Join course';}?></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Card item END -->
			<?php endforeach ?>
		</div>
		<!-- Instructor list END -->

	</div>
</section>
<section id='allcourses' class="pt-1">
	<div class="container">
		<div class="text-center mx-auto">
				<h4 class=" text-orange">All the Courses</h4>
				<p class="mb-5">Information Technology Courses to expand your skills and boost your career & salary</p>
			</div>
		<!-- Instructor list START -->
		<div class="row g-4 justify-content-center" >
			<?php
			 $courses = getCourseed();
			 foreach ($courses as $course):
			?>
			<!-- Card item START -->
			<div class="col-lg-10 col-xl-6">
				<div class="card shadow p-2">
					<div class="row g-0">
						<!-- Image -->
						<div class="col-md-4">
							<img src="uploading/<?=$course['image_courses']?>" class="rounded-3" alt="...">
						</div>
						<!-- Card body -->
						<div class="col-md-8">
							<div class="card-body">
								<!-- Title -->
								<div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
									<div>
										<h5 class="card-title mb-0"><?=$course['title']?></h5>
										<p class="small mb-2 mb-sm-0">trainer : <span class='text-info'><?=selectTrainers($course['user_id'])['name']?></span></p>
									</div>
									<span class="h6 fw-light">4.3<i class="fas fa-star text-warning ms-1"></i></span>
								</div>
								<!-- Content -->
								<p class="text-truncate-2 mb-3"><?=$course['description']?></p>
								<!-- Info -->
								<div class="d-sm-flex justify-content-sm-between align-items-center">
									<!-- Title -->
									<h6 class="text-orange mb-0">Digital Marketing</h6>

									<form action="/trainer_manage" method='post' >
										<input type="text" name='email' value='<?=$_POST['email']?>' hidden>
										<input type="text" name='course' value='<?=$course['course_id']?>' hidden>
										<?php if(isset($_POST['admin'])){ echo "<input type='text' name='admin' value=''hidden >";}?>
										<button type="sumite" class="btn btn-primary"><i class="fas fa-eye"></i> View </button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Card item END -->
			<?php endforeach ?>
		</div>
		<!-- Instructor list END -->

	</div>
</section>
<!-- =======================
Inner part END -->

<!-- =======================
Action box START -->
<section class="pt-0">
	<div class="container position-relative">
		<!-- SVG -->
		<figure class="position-absolute top-50 start-50 translate-middle ms-2">
			<svg>
				<path d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z"></path>
			</svg>
		</figure>
		
		<div class="bg-orange p-4 p-sm-5 rounded-3">
			<div class="row justify-content-center position-relative">
				<!-- Svg -->
				<figure class="fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y">
					<svg width="141px" height="141px">
						<path d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z"></path>
					</svg>
				</figure>
				<!-- Action box -->
				<div class="col-11 position-relative">
					<div class="row align-items-center">
						<!-- Title -->
						<div class="col-lg-7">
							<h3 class="text-white">Become an Instructor!</h3>
							<p class="text-white mb-3 mb-lg-0">Speedily say has suitable disposal add boy. On forth doubt miles of child. Exercise joy man children rejoiced. Yet uncommonly his ten who diminution astonished.</p>
						</div>
						<!-- Button -->
						<div class="col-lg-5 text-lg-end">
							<a href="#" class="btn btn-dark mb-0"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- =======================
Action box END -->
</main>
<!-- -----------------edit------------------------ -->
<div class="modal fade" id="editPersonalModal" tabindex="-1" aria-labelledby="editPersonalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body border border-orange p-4 m-4" style="background-color: #f8f9fa;">
                <h5 class="mb-4 text-orange">Edit Profile</h5>
                <form action="/trainer_edits" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="image" class="form-label">Profile Image:</label>
                        <input type="file" class="form-control" id="image" name="image" aria-label="file example"  value='<?=getTrainersInfo($_POST['email'])['profile_image']?>' style="border-color: #ced4da;">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value='<?=getTrainersInfo($_POST['email'])['name']?>' style="border-color: #ced4da;">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="text" class="form-control" id="phone" name="phone" value='<?=getTrainersInfo($_POST['email'])['phone']?>' style="border-color: #ced4da;">
                        <input type="text" class="form-control" id="user_id" name="user_id" value='<?=getTrainersInfo($_POST['email'])['user_id']?>' style="border-color: #ced4da;" hidden>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" value='<?=$_POST['email']?>' style="border-color: #ced4da;">
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-orange">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- -----------------change password------------------------ -->
<div class="modal fade" id="passwrodPersonalModal" tabindex="-1" aria-labelledby="passwordPersonalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body border border-orange p-4 m-4" style="background-color: #f8f9fa;">
                <h5 class="mb-4 text-orange">Change password</h5>
                <form action="#password" method="post">
					<div class="mb-3">
						<label for="currentPassword" class="form-label">Current Password:</label>
						<div class="input-group">
							<input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
							<button class="btn btn-outline-secondary" type="button" id="toggleCurrentPassword">
								<i class="fas fa-eye"></i>
							</button>
						</div>
					</div>
					<div class="mb-3">
						<label for="newPassword" class="form-label">New Password:</label>
						<div class="input-group">
							<input type="password" class="form-control" id="newPassword" name="newPassword" required>
							<button class="btn btn-outline-secondary" type="button" id="toggleNewPassword">
								<i class="fas fa-eye"></i>
							</button>
						</div>
					</div>
					<div class="mb-3">
						<label for="confirmPassword" class="form-label">Confirm New Password:</label>
						<div class="input-group">
							<input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
							<button class="btn btn-outline-secondary" type="button" id="toggleConfirmPassword">
								<i class="fas fa-eye"></i>
							</button>
						</div>
					</div>
					<button type="submit" class="btn btn-orange">Change Password</button>
				</form>
            </div>
        </div>
    </div>
</div>

<!-- **************** MAIN CONTENT END **************** -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    document.getElementById('personal').addEventListener('click', function() {
        // Hide all sections first
        document.getElementById('responsible').style.display = 'none';
        document.getElementById('allcourses').style.display = 'none';
        document.getElementById('personals').style.display = 'block';
    });

    document.getElementById('respone').addEventListener('click', function() {
        // Hide all sections first
        document.getElementById('responsible').style.display = 'block';
        document.getElementById('allcourses').style.display = 'none';
        document.getElementById('personals').style.display = 'none';

    });

    document.getElementById('courses').addEventListener('click', function() {
        // Hide all sections first
        document.getElementById('responsible').style.display = 'none';
        document.getElementById('allcourses').style.display = 'block';
        document.getElementById('personals').style.display = 'none';

    });


$(document).ready(function() {
    $('.show-edit').click(function() {
        var image = $(this).data('image');
        var name = $(this).data('name');
        var phone = $(this).data('phone'); 
        var email = $(this).data('email'); 
        
        // Set values to modal input fields
        $('#image').val(image);
        $('#name').val(name);
        $('#phone').val(phone);
        $('#email').val(email);
    });
});


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


$(document).ready(function() {
  $('.show_changepassword').click(function() {
    $('#editPersonalModal').modal('hide');
	$('#passwrodPersonalModal').modal('show');
  });
});
</script>



<?php require "layouts/footer.php";?>
<!-- Back to up -->
