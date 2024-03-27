<?php 
require "layouts/header.php";
require 'models/category.model.php';
require 'models/payment.model.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['course_id'])){
		if($_POST['course_id']!='' && count(orderExist(students($_POST['email'])['user_id'],$_POST['course_id']))<1){
		addLesson($_POST['course_id'],students($_POST['email'])['user_id']);
	}
	}
	
}
?>

<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- =======================
Inner part START -->
<section style='height: 300px;background-image: url("assets/images/bg/abstract-1264071_1280.jpg");'>
	<div class="mt-0">
		<form class="container-fluid justify-content-start" action='/student' method='post'>
			<input type="text" name='email' value='<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>' hidden>
			<button type="submit" class="btn btn-orange btn-sm">
				<i class="bi bi-arrow-left-circle-fill"></i> Back
			</button>
		</form>
	</div>
	<div class="row mb-4">
		<div class="col-lg-8 text-center mx-auto">
			<h2 class="fs-1">Welcom to the blog <span class='text-orange'><?=getCategoryName($_POST['id'])['title']?> </span>Category</h2>
			<p class="mb-0">Information Technology Courses to expand your skills and boost your career & salary</p>
		</div>
	</div>
	
</section>	
<section class="pt-4" id='c' style="background-color: rgba(0, 0, 0,0.05);">
	<div class="container">
		<!-- Instructor list START -->
		<div class="row g-4 justify-content-center">
		<?php 
		$get_courses = isset($_POST['id']) ? getCoursesOnCategory($_POST['id']) : array();
		if(count($get_courses)<1){
			echo '<h3 class="text-center text-orange">The Course did not add yet!</h3>';
		}
		foreach($get_courses as  $course): ?>
			<!-- Card item START -->
			<div class="col-lg-10 col-xl-6">
				<div class="card shadow p-2">
					<div class="row g-0">
						<!-- Image -->

						<div class="col-md-4" style="background-image: url('uploading/<?=$course['image_courses']?>'); background-size: cover;" class='rounded-4'>
    							 <!-- Your content goes here -->
						</div>
						<!-- Card body -->
						<div class="col-md-8">
							<div class="card-body">
								<!-- Title -->
								<div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
									<div>
										<h5 class="card-title mb-0"><a href="/trainer-classroom"><?=  $course['title'] ?></a></h5>
										<p class="small mb-2 mb-sm-0">Professor at Sigma College</p>
									</div>
									<h5 class="text-orange mb-0" <?php if(count(getPaymentExist(students($_POST['email'])['user_id'], $course['course_id'] ))>0){echo 'hidden';} ?>><?=$course['price']?></h5>
									<form action="/blog_learning" method='post'  <?php if(count(getPaymentExist(students($_POST['email'])['user_id'], $course['course_id'] ))<1){echo 'hidden';} ?>>
										<input type="text" id="modaluser" value='<?=$_POST['email']?>' name='email' hidden>
										<input type="text" id="modalcourse" value='<?=$course['course_id']?>' name='course_id' hidden>
										<input type="text" id="modalcategory" value='<?=$_POST['id']?>' name='id' hidden>
										<button type="sumite" class="btn btn-primary">Join course</button>
									</form>
									
								</div>
								<!-- Content -->
								<p class="text-truncate-2 mb-3"><?=$course['description'] ?></p>
								<!-- Info -->

								<div class="d-sm-flex justify-content-sm-between align-items-center">
									<!-- Title -->
									<h6 class="text-info mb-0">Digital Marketing</h6>
									<li class="list-inline-item d-flex justify-content-center align-items-center">
										<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
										<span class="h6 fw-light mb-0 ms-2">9.1k</span>
									</li>
									<button class="icon-md bg-white rounded-circle border border-orange text-orange show-popup" data-bs-toggle="modal" data-bs-target="#paymentModal" data-user='<?=$_POST['email']?>' data-course='<?=$course['course_id']?>' data-title="<?=$course['title'] ?>" data-id="<?=$_POST['id'] ?>"  data-price="<?=$course['price'] ?>"  data-imgs='<?=$course['image_courses']?>' <?php if(count(getPaymentExist(students($_POST['email'])['user_id'], $course['course_id'] ))>0){echo 'hidden';} if(count(getAddOrderExist(students($_POST['email'])['user_id'], $course['course_id'] ))>0){echo 'hidden';} ?>><i class="fas fa-shopping-cart text-danger"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Card item END -->
			<?php endforeach; ?>
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
							<h3 class="text-white">Welcom to our best learner!</h3>
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

<!-- Payment Modal -->
<div class="container mt-5">
     <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body border border p-4 m-4">
					<div class="text-center"> 
						<img src="" alt="Profile Image" id='imgs' class="rounded-circle mb-3" style="width: 130px; height: 130px; object-fit: cover;">
					</div>
					<div class="text-center">Course:<h5 class="text-info" id="modalTitle"></h5></div>
					<div class="text-center">Price:<h5 class="text-success" id="modalPrice"></h5></div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						
						<form action='/course#c' method='post'>
							<input type="text" id="modalUser" value='' name='email' hidden>
							<input type="text" id="modalCourse" value='' name='course_id' hidden>
							<input type="text" id="modalcategory" value='<?=$_POST['id']?>' name='id' hidden>
							<button type='sumit'class="btn btn-primary succeses-popup">Add to card</button>
						</form>   
					</div>
                    </div>
               </div>
          </div>
     </div>
</div>

<!-- =======================
Action box END -->
<?php 
    require 'views/students/payments/payment.view.php';
?>
</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function() {
  $('.show-popup').click(function() {
    var title = $(this).data('title');
    var price = $(this).data('price');
    var user = $(this).data('user'); // Change to data-user
    var course = $(this).data('course'); // Change to data-course
    var category = $(this).data('id');
    var imgs = $(this).data('imgs');

    
    $('#modalTitle').text(title);
    $('#modalPrice').text(price);
    $('#modalUser').val(user);
    $('#modalCourse').val(course);
	$('#imgs').attr('src','uploading/'+imgs);
    
    $('#paymentModal').modal('show'); // Change to #paymentModal

    // Function to handle the button click on the initial modal
    $('#pay').click(function() {
      // Show the second modal
      $('#paymentModal').modal('hide'); // Hide the initial modal
      $('#confirmationModal').modal('show');
      $('#modaluser').val(user);
      $('#modalcourse').val(course);
	  $('#modalcategory').val(category);
    });
  });
});
</script>

<?php require "layouts/footer.php";?>
<!-- Back to up -->
