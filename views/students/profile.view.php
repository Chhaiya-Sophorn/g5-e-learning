<?php 
require "layouts/header.php";
require 'models/student.model.php';

?>

<section id="cover" style=' height: 250px; background-size:cover; background-image: url("assets/images/bg/composition-3288397_1280.jpg");' >
<div class="" >
            <form class="container-fluid justify-content-start" action="<?php if(isset($_POST['admin'])){echo '/list_student';}else { echo '/student';}?>" method='post'>
			    <input type="text" name='email' value='<?=getStudent($_POST['id'])['email']?>' hidden>
                <button type="submit" class="btn btn-orange btn-sm">
                <i class=" bi bi-arrow-left-circle-fill"></i> Back
                </button>
            </form>
    </div>
	<div class="row mb-4">
		<div class="col-lg-8 text-center mx-auto">
		</div>
		<div class=' d-flex justify-content-end p-5'>
    </div>
	</div>
</section>
<div style="background-color: rgba(0, 0, 0,0.05);">
<div class="d-flex justify-content-center">
    <section class="bg-white" id="personals">
        <div class="container">
            <div class="row shadow align-items-center border rounded p-4 bg-" style="width:600px;margin-top: -57px;height:450px">
                <div class="text-center">
                    <img class="img-fluid rounded-circle mb-3" src="uploading/<?=getStudent($_POST['id'])['profile_image']?>" alt="" style="width: 200px; height: 200px; object-fit: cover;margin-top: -150px; ">
                    <h4 class="m-1"><span class=""><?=getStudent($_POST['id'])['name']?></span></h4>
                </div>
                <div class="col-lg-7 py-5 px-3">
                    <div class="py-2 text-">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-4 gap-2">
                                <i class="flaticon-cat font-weight-normal text-feet m-0 mr-3 animated infinite heartBeat delay-1s"></i>
                                <span class="">Phone:</span>
                                <h6 class="m-0"> <?=getStudent($_POST['id'])['phone']?></h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-4 gap-2">
                                <i class="flaticon-doctor font-weight-normal text-feet m-0 mr-3 animated infinite tada delay-2s"></i>
                                <span class="text-">Email:</span>
                                <h6 class=" m-0"> <?=getStudent($_POST['id'])['email']?></h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-4 gap-2">
                                <i class="flaticon-doctor font-weight-normal text-feet m-0 mr-3 animated infinite tada delay-2s"></i>
                                <span class="text-">Courses:</span>
                                <h6 class=" m-0"> <?=count(getCoursePaid(($_POST['id'])))?> Courses</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-4 gap-2">
                                <i class="flaticon-doctor font-weight-normal text-feet m-0 mr-3 animated infinite tada delay-2s"></i>
                                <span>Joined:</span>
                                <h6 class=" m-0"> 2024-3-22</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end" style="margin-top: -57px;">
                    <form action="/student_password" method='post'>
                        <?php if(isset($_POST['admin'])){ echo "<input type='text' name='admin' value=''hidden >";}?>
                        <input type="text" name='id' value='<?=$_POST['id']?>' hidden>
                        <input type="text" class="form-control" id="email" name="email" value="<?=getStudent($_POST['id'])['email']?>" hidden>
                        <button type="sumit" class="btn btn-0"><i class="fas fa-key me-2 text-orange"></i>Change Password</button>
                    </form>
                    <button type="button" class="btn border-0 show-edit" data-bs-toggle="modal" data-bs-target="#editPersonalModal" data-image="<?=getStudent($_POST['id'])['profile_image']?>" data-name="<?=getStudent($_POST['id'])['name']?>" data-phone="<?=getStudent($_POST['id'])['phone']?>" data-email='<?=getStudent($_POST['id'])['email']?>'>
                        <i class="fas fa-edit text-orange m-0 mr-3 fs-5"></i>
                        <span class="text-black">Edit profile</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>
<section id='coursejoi' class="pt-1">
	<div class="container">
		<!-- Instructor list START -->
		<div class="row g-4 justify-content-center" >
			<div class="text-center mx-auto">
				<h4 class=" text-orange">My Courses</h4>
				<p class="mb-0">Information Technology Courses to expand your skills and boost your career & salary</p>
			</div>
			<?php 
			$studentCourse = getCoursePaid(($_POST['id']));
			foreach ($studentCourse as $course):
			?>
			<!-- Card item START -->
			<div class="col-lg-10 col-xl-7">
				<div class="card shadow p-2">
					<div class="row g-0">
						<!-- Image -->
						<div class="col-md-4 d-flex align-items-center">
							<img src="uploading/<?=getThecourseJoin($course['course_id'])['image_courses']?>" class="rounded-3" alt="...">
						</div>
						<!-- Card body -->
						<div class="col-md-8">
							<div class="card-body">
								<!-- Title -->
								<div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
									<div>
										<h5 class="card-title mb-0"><?=getThecourseJoin($course['course_id'])['title']?></a></h5>
										<p class="small mb-2 mb-sm-0">Professor at Sigma College</p>
									</div>
									<span class="h6 fw-light">4.3<i class="fas fa-star text-warning ms-1"></i></span>
								</div>
								<!-- Content -->
								<p class="-2 mb-3"><?=getThecourseJoin($course['course_id'])['description']?></p>
								<!-- Info -->
								<div class="d-sm-flex justify-content-sm-between align-items-center">
									<!-- Title -->
									<h6 class="text-orange mb-0">Digital Marketing</h6>
									<!-- Social button -->
                                <form action="/blog_learning" method='post'>
                                    <?php if(isset($_POST['admin'])){ echo "<input type='text' name='admin' value=''hidden >";}?>
                                    <input type="text" id="modaluser" value='<?=getStudent($_POST['id'])['email']?>' name='email' hidden>
                                    <input type="text" id="modaluser" value='' name='pro_id' hidden>
                                    <input type="text" id="modaluser" value='<?=$_POST['id']?>' name='id' hidden>
                                    <input type="text" id="modalcourse" value='<?=$course['course_id']?>' name='course_id' hidden>
                                    <button type="sumite" class="btn btn-primary"><?php if(isset($_POST['admin'])){ echo "<i class='fas fa-eye'></i> view";}else{echo 'Join course';}?></button>
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

<!-- Edit Personal Modal -->
<div class="modal fade" id="editPersonalModal" tabindex="-1" aria-labelledby="editPersonalModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body border border-orange p-4 m-4" style="background-color: #f8f9fa;">
                <h5 class="mb-4 text-orange">Edit Profile</h5>
                <form action="/get_edit" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="image" class="form-label">Profile Image:</label>
                        <input type="file" class="form-control" id="image" name="image" aria-label="file example" style="border-color: #ced4da;" value='<?=getStudent($_POST['id'])['profile_image']?>'>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" style="border-color: #ced4da;" value='<?=getStudent($_POST['id'])['name']?>'>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="text" class="form-control" id="phone" name="phone" style="border-color: #ced4da;" value='<?=getStudent($_POST['id'])['phone']?>'>
                        <input type="text" class="form-control" id="id" name="id" value="<?=$_POST['id']?>" hidden>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" style="border-color: #ced4da;" value='<?=getStudent($_POST['id'])['email']?>'>
                    </div>
                    <?php if(isset($_POST['admin'])){ echo "<input type='text' name='admin' value=''hidden >";}?>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-orange">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
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

document.getElementById('personal').addEventListener('click', function() {
        // Hide all sections first
        document.getElementById('coursejoi').style.display = 'none';
        document.getElementById('personals').style.display = 'block';
    });

    document.getElementById('coursejoin').addEventListener('click', function() {
        // Hide all sections first
        document.getElementById('coursejoi').style.display = 'block';
        document.getElementById('personals').style.display = 'none';

    });

</script>

<?php require "layouts/footer.php";?>


<!-- css -->

<!-- #cover{ -->
  <!-- background-image: url("img/bg_profile.jpg"); -->
  <!-- background-repeat: no-repeat;
  background-size: cover;
} -->

<!-- end css -->