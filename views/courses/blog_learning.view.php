<?php 
require "layouts/header.php";
require 'models/category.model.php';
require 'models/admin.model.php';
require 'models/lesson.mode.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(isset($_POST['lesson_select']) && $_POST['lesson_select']!='Select the lesson' && isset($_FILES['image'])){
		$image = $_FILES['image']['name'];
		if($image && count(quizResultSumitExist($image))<1 ){
			$image_tmp_name = $_FILES['image']['tmp_name'];
			$image_size = $_FILES['image']['size'];
			$image_folder = 'uploading' . DIRECTORY_SEPARATOR . $image; // Added DIRECTORY_SEPARATOR
			move_uploaded_file($image_tmp_name, $image_folder);
			addsumit(getStudent($_POST['email'])['user_id'],getTheLessonsbyname($_POST['lesson_select'])['lesson_id'] , $image);
	}
}
}

?>
<!-- **************** MAIN CONTENT START **************** -->
<main>
<section style='height: 300px;background-image: url("assets/images/bg/composition-3288397_1280.jpg");'>
	<div class="mt-0">
		<form class="container-fluid justify-content-start" action='<?php if(isset($_POST['home'])){echo '/student';}else{echo '/course';}; ?>' method='post'>
			<input type="text" name='email' value='<?=$_POST['email']?>' hidden>
			<input type="text" name='id' value='<?=$_POST['id']?>' hidden>
			<button type="submit" class="btn btn-orange btn-sm">
				<i class="bi bi-arrow-left-circle-fill"></i> Back
			</button>
		</form>
	</div>
	<div class="row mb-4">
		<div class="col-lg-8 text-center mx-auto">
			<h2 class="fs-1">Welcom to the <span class='text-orange'><?=getCourse($_POST['course_id'])['title']?> </span>Courses</h2>
			<p class="mb-0">Information Technology Courses to expand your skills and boost your career & salary</p>
		</div>
	</div>
</section>	

<section>

		<div class="container mt-5 border-info" style="height: 200px;">
			<div class="row justify-content-center"> <!-- Center the row -->
			<?php
			$trainers =getCourse($_POST['course_id']);
			$train = getTeacher($trainers['user_id']);
			foreach ($train as $trainer):
			?>
				<div class="col-sm-6 col-lg-4 col-xl-3">
					<div class="card card-body shadow rounded-3 text-center">
						<img class="rounded-circle mx-auto d-block" src="uploading/<?=$trainer['profile_image']?>" alt="" style="width: 170px; height: 170px;margin-top: -100px;">
						<h5 class='m-1'><?=$trainer['name']?></h5>
						<span>I am here to develop you</span>
					</div>
				</div>
				<?php endforeach ?>
			</div>
			<!-- <a href="#blog_study"><button class="btn btn-sm btn-orange mb-0" class="text-white">Let's study</button></a> -->
		</div>	
	</section>
<!-- =======================
Live courses START -->
<section class="bg-light position-relative" id='blog_study'>

	<!-- SVG decoration -->
	<figure class="position-absolute top-50 start-0 translate-middle-y ms-5 d-none d-xxl-block">
		<svg width="29px" height="29px">
			<path class="fill-orange" d="M29.004,14.502 C29.004,22.512 22.511,29.004 14.502,29.004 C6.492,29.004 -0.001,22.512 -0.001,14.502 C-0.001,6.492 6.492,-0.001 14.502,-0.001 C22.511,-0.001 29.004,6.492 29.004,14.502 Z"></path>
			</svg>
	</figure>

	<!-- SVG decoration -->
	<figure class="position-absolute bottom-0 start-50 translate-middle-x">
		<svg width="23px" height="23px">
		<path class="fill-primary" d="M23.003,11.501 C23.003,17.854 17.853,23.003 11.501,23.003 C5.149,23.003 -0.001,17.854 -0.001,11.501 C-0.001,5.149 5.149,-0.000 11.501,-0.000 C17.853,-0.000 23.003,5.149 23.003,11.501 Z"></path>
		</svg>
	</figure>

	<!-- SVG decoration -->
	<figure class="position-absolute top-50 end-0 translate-middle-y ms-5">
		<svg width="22px" height="22px">
			<path class="fill-warning" d="M22.003,11.001 C22.003,17.078 17.077,22.003 11.001,22.003 C4.925,22.003 -0.001,17.078 -0.001,11.001 C-0.001,4.925 4.925,-0.000 11.001,-0.000 C17.077,-0.000 22.003,4.925 22.003,11.001 Z"></path>
		</svg>
	</figure>

	<div class="container">
		<!-- Live course START -->
		<div class="row g-4 align-items-center justify-content-between">
			<!-- Content -->
			<div class="col-md-6 col-xl-4">
				<h2 class="fs-1">Here are The Lessons</h2>
				<p>How promotion excellent curiosity yet attempted happiness prosperous impression had conviction For every delay death ask to style Me mean able my by in they Extremity now strangers contained.</p>
				<a href="#testing_blog" class="btn btn-orange mb-0">Test your understanding</a>
			</div>
			<!-- Course video START -->
			<div class="col-md-6 col-xl-8">
				<div class="row">
					<!-- Slider START -->
					<div class="tiny-slider arrow-round arrow-blur">
						<div class="tiny-slider-inner" data-autoplay="false" data-edge="2" data-arrow="true" data-dots="false" data-items-lg="1" data-items-xl="2">
						<?php 
						$lessons =getTheLessons($_POST['course_id']);
						foreach ($lessons as $lesson):	
						?>
						<!-- Card START -->
								<div class="card p-2">
									<div class="position-relative">
										<iframe width="340" height="250" src="<?=$lesson['video']?>">"></iframe>	
										<div class="card-img-overlay">
											<div class="position-absolute top-50 start-50 translate-middle">
												<a href="<?=$lesson['video']?>" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
													<i class="fas fa-play"></i>
												</a>
											</div>
										</div>
									</div>

									<!-- Card body -->
									<div class="card-body">
										<!-- Title -->
										<h5><?=$lesson['title']?></h5>
										<!-- Avatar group and button -->
										<div class="d-sm-flex justify-content-sm-between align-items-center mt-3">
											<!-- Avatar Group -->
											<div>
												<h6 class="mb-1 fw-normal"><i class="fas fa-circle fw-bold text-success small me-2"></i>Students attend</h6>
												<ul class="avatar-group mb-2 mb-sm-0">
													<li class="avatar avatar-xs">
														<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
													</li>
													<li class="avatar avatar-xs">
														<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
													</li>
													<li class="avatar avatar-xs">
														<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
													</li>
													<li class="avatar avatar-xs">
														<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
													</li>
													<li class="avatar avatar-xs">
														<div class="avatar-img rounded-circle bg-primary">
															<span class="text-white position-absolute top-50 start-50 translate-middle small">1K+</span>
														</div>
													</li>
												</ul>
											</div>
											<!-- Button -->
											<button type='button' class="btn btn-sm btn-success mb-0 vdo text-white" data-bs-toggle="modal" data-bs-target="#videoModel" data-videos="<?=$lesson['video']?>" data-lessontitle="<?=$lesson['title']?>">Let's study</button>
										</div>
									</div>
								</div>
							<!-- Card END -->
							<?php endforeach  ?>
						</div>
					</div>		
					<!-- Slider END -->
				</div>
			</div>
			<!-- Course video END -->
		</div>
		<!-- Live course END -->
	</div>
</section>
<!-- =======================
Action box END -->

<section id='testing_blog'>
	<div class="row mb-4">
			<div class="col-lg-8 text-center mx-auto">
				<h2 class="fs-1">Test your understanding</h2>
				<p class="mb-0">Information Technology Courses to expand your skills and boost your career & salary</p>
				<span class='text-orange'>Screenshort your result and upload here</span>
				<form action="#testing_blog" method='post' enctype="multipart/form-data">
					<div class='d-flex gap-2'>
					<input type="file" name='image' class="form-control" aria-label="file example" style="background-color: rgba(0, 0, 0, 0.1);">
						<select class="form-select form-select-lg text-center" aria-label=".form-select-lg example" style="width: 150px; font-size: smaller;" name='lesson_select'>
							<option selected>Select the lesson</option>
							<?php 
							$lessons =getTheLessons($_POST['course_id']);
							foreach ($lessons as $lesson):	
							?>
							<option value="<?=$lesson['title']?>"><?php
										$les = $lesson['title'];
										$title = '';
										for ($i = 0; $i < 8; $i++) {
											$title .= $les[$i];
										}
										echo $title;
										?></option>
								<?php endforeach ?>
							</select>
						<input type="text" value='<?=$_POST['email']?>' name='email' hidden>
						<input type="text" id="modalcourse" value='<?=$_POST['course_id']?>' name='course_id' hidden>
						<input type="text" id="modalcategory" value='<?=$_POST['id']?>' name='id' hidden>
						<button type="sumite" class="btn btn-orange d-flex justify-content-center " data-bs-dismiss="modal">sumite</button>	
					</div>		
				</form>

			</div>
		</div>	
	<div class="container">
		<div class="row g-4">
		<?php 
			$lessons =getTheLessons($_POST['course_id']);
			foreach ($lessons as $lesson):
				foreach (getQuizzesbylessonId($lesson['lesson_id']) as $quiz):
		?>
			<!-- Category item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card card-body shadow rounded-3">
					<div class="d-flex align-items-center">
						<img class="rounded-circle me-lg-2" src="assets/images/test.png" alt="" style="width: 70px; height: 70px;">
						<div class="ms-3">
								<button type='sumit' class="btn btn-outline-none show-quiz" data-bs-toggle="modal" data-bs-target="#paymentModal" data-contents='<?=$quiz['content']?>'>
									<input type="text" name='email' value='' hidden>
									<input type="text" name='id' value='' hidden>
									<h5 class="mb-0">
									<?php
										$les = $lesson['title'];
										$title = '';
										for ($i = 0; $i < 8; $i++) {
											$title .= $les[$i];
										}
										echo $title;
										?>	
								</h5>
								<span>Courses</span>
								</button>
						</div>
					</div>
				</div>
			</div>
			<?php  
				endforeach;
			endforeach;
			
			?>
		</div>
</section>

<!-- Payment Modal -->
<div class="container mt-5">
     <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body p-4 m-4">
					<div class="text-center"> 
						<img src="assets/images/quiz.png" alt="Profile Image" class="mb-3" style="width: 180px; height: 70px; object-fit: cover;">
					</div>	
					<span class='d-flex justify-content-center'>Screenshort your result and sumit</span>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						<button id='startquiz' class="btn btn-primary success-popup">Start Quiz</button>
					</div>
                    </div>
               </div>
          </div>
     </div>
</div>

<!-- ------------------video showing popup------------ -->
<div class="container mt-1">
     <div class="modal fade" id="videoModel" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content">
                    <div class="modal-body p-2 m-4">
						<iframe width="730" height="345" id="vid" src=""></iframe>	
						<h5 id='lessontitle' class='m-2'></h5>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						</div>
                    </div>
               </div>
          </div>
     </div>
</div>

<!-- ------------------quiz showing popup------------ -->
<div class="container mt-1 lg-8">
     <div class="modal fade" id="quizModel" tabindex="-1" aria-labelledby="quizModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
               <div class="modal-content">
                    <div class="modal-body p-2 m-4">
						<iframe width="730" height="345" id="quizz" src=""></iframe>	
						<h5 id='lessontitle' class='m-2'></h5>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						</div>
                    </div>
               </div>
          </div>
     </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

	$(document).ready(function() {
		$('.vdo').click(function() {
			var video = $(this).data('videos');
			var lessontitle = $(this).data('lessontitle');

			$('#vid').attr('src', video);
			$('#lessontitle').text(lessontitle);
		});
	});


	$(document).ready(function() {
 	 	$('.show-quiz').click(function() {
   			 var contents = $(this).data('contents');
    
   			 $('#paymentModal').modal('show');

    	// Function to handle the button click on the initial modal
		$('#startquiz').click(function() {
		// Show the second modal
		$('#paymentModal').modal('hide'); // Hide the initial modal
		$('#quizModel').modal('show');
		$('#quizz').attr('src', contents);
		});
  });
});

</script>
</main>
<!-- **************** MAIN CONTENT END **************** -->


<?php require "layouts/footer.php";?>

<!-- Back to up -->


