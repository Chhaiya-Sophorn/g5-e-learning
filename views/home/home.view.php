<?php
require 'database/database.php';
require 'models/admin.model.php';
require 'models/category.model.php';
require 'models/payment.model.php';

?>
<section class="bg-light">
	<div class="container p-6 mt-0 mt-lg-5">

		<!-- Title and SVG START -->
		<div class="row position-relative mb-0 mb-sm-2 pb-0 pb-lg-5">
			<div class="col-lg-10 text-center mx-auto position-relative">

				<!-- SVG decoration -->
				<figure class="position-absolute top-100 start-30 translate-middle mt-1 ms-n15 pe-5 d-none d-lg-block">
					<svg>
						<path class="fill-success" d="m181.6 6.7c-0.1 0-0.2-0.1-0.3 0-2.5-0.3-4.9-1-7.3-1.4-2.7-0.4-5.5-0.7-8.2-0.8-1.4-0.1-2.8-0.1-4.1-0.1-0.5 0-0.9-0.1-1.4-0.2-0.9-0.3-1.9-0.1-2.8-0.1-5.4 0.2-10.8 0.6-16.1 1.4-2.7 0.3-5.3 0.8-7.9 1.3-0.6 0.1-1.1 0.3-1.8 0.3-0.4 0-0.7-0.1-1.1-0.1-1.5 0-3 0.7-4.3 1.2-3 1-6 2.4-8.8 3.9-2.1 1.1-4 2.4-5.9 3.9-1 0.7-1.8 1.5-2.7 2.2-0.5 0.4-1.1 0.5-1.5 0.9s-0.7 0.8-1.1 1.2c-1 1-1.9 2-2.9 2.9-0.4 0.3-0.8 0.5-1.2 0.5-1.3-0.1-2.7-0.4-3.9-0.6-0.7-0.1-1.2 0-1.8 0-3.1 0-6.4-0.1-9.5 0.4-1.7 0.3-3.4 0.5-5.1 0.7-5.3 0.7-10.7 1.4-15.8 3.1-4.6 1.6-8.9 3.8-13.1 6.3-2.1 1.2-4.2 2.5-6.2 3.9-0.9 0.6-1.7 0.9-2.6 1.2s-1.7 1-2.5 1.6c-1.5 1.1-3 2.1-4.6 3.2-1.2 0.9-2.7 1.7-3.9 2.7-1 0.8-2.2 1.5-3.2 2.2-1.1 0.7-2.2 1.5-3.3 2.3-0.8 0.5-1.7 0.9-2.5 1.5-0.9 0.8-1.9 1.5-2.9 2.2 0.1-0.6 0.3-1.2 0.4-1.9 0.3-1.7 0.2-3.6 0-5.3-0.1-0.9-0.3-1.7-0.8-2.4s-1.5-1.1-2.3-0.8c-0.2 0-0.3 0.1-0.4 0.3s-0.1 0.4-0.1 0.6c0.3 3.6 0.2 7.2-0.7 10.7-0.5 2.2-1.5 4.5-2.7 6.4-0.6 0.9-1.4 1.7-2 2.6s-1.5 1.6-2.3 2.3c-0.2 0.2-0.5 0.4-0.6 0.7s0 0.7 0.1 1.1c0.2 0.8 0.6 1.6 1.3 1.8 0.5 0.1 0.9-0.1 1.3-0.3 0.9-0.4 1.8-0.8 2.7-1.2 0.4-0.2 0.7-0.3 1.1-0.6 1.8-1 3.8-1.7 5.8-2.3 4.3-1.1 9-1.1 13.3 0.1 0.2 0.1 0.4 0.1 0.6 0.1 0.7-0.1 0.9-1 0.6-1.6-0.4-0.6-1-0.9-1.7-1.2-2.5-1.1-4.9-2.1-7.5-2.7-0.6-0.2-1.3-0.3-2-0.4-0.3-0.1-0.5 0-0.8-0.1s-0.9 0-1.1-0.1-0.3 0-0.3-0.2c0-0.4 0.7-0.7 1-0.8 0.5-0.3 1-0.7 1.5-1l5.4-3.6c0.4-0.2 0.6-0.6 1-0.9 1.2-0.9 2.8-1.3 4-2.2 0.4-0.3 0.9-0.6 1.3-0.9l2.7-1.8c1-0.6 2.2-1.2 3.2-1.8 0.9-0.5 1.9-0.8 2.7-1.6 0.9-0.8 2.2-1.4 3.2-2 1.2-0.7 2.3-1.4 3.5-2.1 4.1-2.5 8.2-4.9 12.7-6.6 5.2-1.9 10.6-3.4 16.2-4 5.4-0.6 10.8-0.3 16.2-0.5h0.5c1.4-0.1 2.3-0.1 1.7 1.7-1.4 4.5 1.3 7.5 4.3 10 3.4 2.9 7 5.7 11.3 7.1 4.8 1.6 9.6 3.8 14.9 2.7 3-0.6 6.5-4 6.8-6.4 0.2-1.7 0.1-3.3-0.3-4.9-0.4-1.4-1-3-2.2-3.9-0.9-0.6-1.6-1.6-2.4-2.4-0.9-0.8-1.9-1.7-2.9-2.3-2.1-1.4-4.2-2.6-6.5-3.5-3.2-1.3-6.6-2.2-10-3-0.8-0.2-1.6-0.4-2.5-0.5-0.2 0-1.3-0.1-1.3-0.3-0.1-0.2 0.3-0.4 0.5-0.6 0.9-0.8 1.8-1.5 2.7-2.2 1.9-1.4 3.8-2.8 5.8-3.9 2.1-1.2 4.3-2.3 6.6-3.2 1.2-0.4 2.3-0.8 3.6-1 0.6-0.2 1.2-0.2 1.8-0.4 0.4-0.1 0.7-0.3 1.1-0.5 1.2-0.5 2.7-0.5 3.9-0.8 1.3-0.2 2.7-0.4 4.1-0.7 2.7-0.4 5.5-0.8 8.2-1.1 3.3-0.4 6.7-0.7 10-1 7.7-0.6 15.3-0.3 23 1.3 4.2 0.9 8.3 1.9 12.3 3.6 1.2 0.5 2.3 1.1 3.5 1.5 0.7 0.2 1.3 0.7 1.8 1.1 0.7 0.6 1.5 1.1 2.3 1.7 0.2 0.2 0.6 0.3 0.8 0.2 0.1-0.1 0.1-0.2 0.2-0.4 0.1-0.9-0.2-1.7-0.7-2.4-0.4-0.6-1-1.4-1.6-1.9-0.8-0.7-2-1.1-2.9-1.6-1-0.5-2-0.9-3.1-1.3-2.5-1.1-5.2-2-7.8-2.8-1-0.8-2.4-1.2-3.7-1.4zm-64.4 25.8c4.7 1.3 10.3 3.3 14.6 7.9 0.9 1 2.4 1.8 1.8 3.5-0.6 1.6-2.2 1.5-3.6 1.7-4.9 0.8-9.4-1.2-13.6-2.9-4.5-1.7-8.8-4.3-11.9-8.3-0.5-0.6-1-1.4-1.1-2.2 0-0.3 0-0.6-0.1-0.9s-0.2-0.6 0.1-0.9c0.2-0.2 0.5-0.2 0.8-0.2 2.3-0.1 4.7 0 7.1 0.4 0.9 0.1 1.6 0.6 2.5 0.8 1.1 0.4 2.3 0.8 3.4 1.1z"></path>
					</svg>
				</figure>
				<!-- SVG decoration -->
				<figure class="position-absolute top-0 start-0 ms-n9">
					<svg width="22px" height="22px" viewBox="0 0 22 22">
						<polygon class="fill-orange" points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 "></polygon>
					</svg>
				</figure>
				<!-- SVG decoration -->
				<figure class="position-absolute top-100 start-100 translate-middle ms-5 d-none d-lg-block">
					<svg width="21.5px" height="21.5px" viewBox="0 0 21.5 21.5">
						<polygon class="fill-danger" points="21.5,14.3 14.4,9.9 18.9,2.8 14.3,0 9.9,7.1 2.8,2.6 0,7.2 7.1,11.6 2.6,18.7 7.2,21.5 11.6,14.4 18.7,18.9 "></polygon>
					</svg>
				</figure>
				<!-- SVG decoration -->
				<figure class="position-absolute top-0 start-100 translate-middle d-none d-md-block">
					<svg width="27px" height="27px">
						<path class="fill-purple" d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z"></path>
					</svg>
				</figure>

				<!-- Title -->
				<div class="tx m-0 mb-2"></div>
				<h2>Education, talents, and career opportunities. <br>All in one place.</h2>
				<div class="text mb-5">
					<p>Get inspired and discover something new today. Grow your skill with the most reliable online courses and certifications in marketing, information technology, programming, and data science. </p>
				</div>
			</div>
			<!-- Title and SVG END -->
		</div>
</section>
<!-- =======================
Main Banner END -->

<!-- =======================
Video START -->
<section class="pb-0 py-sm-0 mt-n9">
	<div class="container">
		<div class="row">
			<div class="col-md-8 text-center mx-auto">
				<div class="card card-body shadow p-2">
					<div class="position-relative">
						<!-- Image -->
						<img src="assets/images/about/12.jpg" class="card-img rounded-2" alt="...">
						<div class="card-img-overlay">
							<!-- Video link -->
							<div class="position-absolute top-50 start-50 translate-middle">
								<a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
									<i class="fas fa-play"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Video END -->

<!-- =======================
Category START -->
<section id="categories_blog">
	<div class="container">
		<div class="row g-4">
			<?php
			$categorys = getCategories();
			foreach ($categorys as $cate) :
			?>
				<!-- Category item -->
				<div class="col-sm-6 col-lg-4 col-xl-3 shadow" >
					<div class="card card-body shadow rounded-3">
						<div class="d-flex align-items-center">
							<img class="rounded-circle me-lg-2" src="uploading/<?= $cate['image'] ?>" alt="" style="width: 70px; height: 70px;">
							<div class="ms-3">
								<h5 class="mb-0"><a href="/signin" class="stretched-link"><?= $cate['title'] ?></a></h5>
								<span><?= getNumberOfCourseInCategory($cate['category_id']) ?> Courses</span>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</section>

<!-- =======================
Featured course START -->
<section class="pt-0 pt-md-5">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-lg-8 text-center mx-auto">
				<h2 class="fs-1 mb-0">Featured Courses</h2>
				<p class="mb-0">Explore top picks of the week</p>
			</div>
		</div>
		<div class="row g-4">
			<?php
				$courses = getCourses();
				foreach ($courses as $course) :
									
			?>
			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="../uploading/<?=$course['image_courses'] ?>" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="/signin" class="icon-md bg-white rounded-circle">
									<i class="fas fa-shopping-cart text-danger"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- Card body -->
					<div class="card-body px-2">
						<!-- Badge and icon -->
						<div class="d-flex justify-content-between">
							<!-- Rating and info -->
							<ul class="list-inline hstack gap-2 mb-0">
								<!-- Info -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
								
									<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
									<span class="h6 fw-light mb-0 ms-2"><?=getTheJoinercourse($course['course_id'])?></span>
								
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="uploading/<?php $haha= getTeacher($course['user_id']);
									echo $haha['profile_image'];
								?>" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title"><a href="/signin"><?=$course['title'] ?></a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div>
								<a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> Trainer: <?php $haha= getTeacher($course['user_id']);
										echo $haha['name'];
									?>
								</a>
							</div>
							<!-- Price -->
							<h5 class="text-success mb-0"><?=$course['price'] ?></h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Card Item END -->
			<?php 
			endforeach ;			
			?>
		</div>
		<!-- Button -->
		<div class="text-center mt-5">
			<a href="/signin" class="btn btn-primary-soft">View more in detail<i class="fas fa-sync ms-2"></i></a>
		</div>
	</div>
</section>
<!-- =======================
Featured course END -->

<!-- =======================
Action box START -->
<section class="py-0">
	<div class="container">
		<div class="row g-4">
			<!-- Action box item -->
			<div class="col-lg-6 position-relative overflow-hidden">
				<div class="bg-primary bg-opacity-10 rounded-3 p-5 h-100">
					<!-- Image -->
					<div class="position-absolute bottom-0 end-0 me-3">
						<img src="assets/images/element/08.svg" class="h-100px h-sm-200px" alt="">
					</div>
					<!-- Content -->
					<div class="row">
						<div class="col-sm-8 position-relative">
							<h3 class="mb-1">Earn a Certificate</h3>
							<p class="mb-3 h5 fw-light lead">Get the right professional certificate program for you.</p>
							<a href="/signin" class="btn btn-primary mb-0">View Programs</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Action box item -->
			<div class="col-lg-6 position-relative overflow-hidden">
				<div class="bg-secondary rounded-3 bg-opacity-10 p-5 h-100">
					<!-- Image -->
					<div class="position-absolute bottom-0 end-0 me-3">
						<img src="assets/images/element/15.svg" class="h-100px h-sm-200px" alt="">
					</div>
					<!-- Content -->
					<div class="row">
						<div class="col-sm-8 position-relative">
							<h3 class="mb-1">Best Rated Courses</h3>
							<p class="mb-3 h5 fw-light lead">Enroll now in the most popular and best rated courses.</p>
							<a href="/signin" class="btn btn-warning mb-0">View Courses</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Action box END -->


<!-- =======================
Live courses START -->
<section class="bg-light position-relative">

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
				<h2 class="fs-1">There are the Top Free lessons</h2>
				<p>How promotion excellent curiosity yet attempted happiness prosperous impression had conviction For every delay death ask to style Me mean able my by in they Extremity now strangers contained.</p>
				<a href="/signin" class="btn btn-orange mb-0">Get premium courses</a>
			</div>

			<!-- Course video START -->
			<div class="col-md-6 col-xl-8">
				<div class="row">
					<!-- Slider START -->
					<div class="tiny-slider arrow-round arrow-blur">
						<div class="tiny-slider-inner" data-autoplay="false" data-edge="2" data-arrow="true" data-dots="false" data-items-lg="1" data-items-xl="2">
							<!-- Card START -->
							<div>
								<div class="card p-2">
									<div class="position-relative">
										<!-- Image -->
										<img src="assets/images/courses/4by3/18.jpg" class="card-img rounded-2" alt="Card image">
										<div class="card-img-overlay">
											<div class="position-absolute top-50 start-50 translate-middle">
												<!-- Video link -->
												<a href="https://www.youtube.com/embed/-7woR4auqso?si=k0ku9MBrsH3YNbhP" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
													<i class="fas fa-play"></i>
												</a>
											</div>
										</div>
									</div>

									<!-- Card body -->
									<div class="card-body">
										<!-- Title -->
										<h5><a href="/signin">Learn the French Language: Complete Course</a></h5>
										<!-- Avatar group and button -->
										<div class="d-sm-flex justify-content-sm-between align-items-center mt-3">
											<!-- Avatar Group -->
											<div>
												<h6 class="mb-1 fw-normal"><i class="fas fa-circle fw-bold text-success small me-2"></i>Live Students</h6>
											</div>
											<!-- Button -->
											<a class="btn btn-sm btn-success mb-0" href="/signin">Join now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card END -->

							<!-- Card START -->
							<div>
								<div class="card p-2">
									<div class="position-relative">
										<!-- Image -->
										<img src="assets/images/courses/4by3/22.jpg" class="card-img rounded-2" alt="Card image">
										<div class="card-img-overlay">
											<div class="position-absolute top-50 start-50 translate-middle">
												<!-- Video link -->
												<a href="https://www.youtube.com/embed/Yey59NOFNFY?si=JWVJe628WxQkv_SQ" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
													<i class="fas fa-play"></i>
												</a>
											</div>
										</div>
									</div>

									<!-- Card body -->
									<div class="card-body">
										<h5><a href="/signin">Time Management Mastery: Do More, Stress Less</a></h5>
										<div class="d-sm-flex justify-content-sm-between align-items-center mt-3">
											<div>
												<h6 class="mb-1 fw-normal"><i class="fas fa-circle fw-bold text-success small me-2"></i>Live Students</h6>
											</div>
											<a class="btn btn-sm btn-success mb-0" href="/signin">Join now</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card END -->

							<!-- Card START -->
							<div>
								<div class="card p-2">
									<div class="position-relative">
										<!-- Image -->
										<img src="assets/images/courses/4by3/21.jpg" class="card-img rounded-2" alt="Card image">
										<div class="card-img-overlay">
											<div class="position-absolute top-50 start-50 translate-middle">
												<!-- Video link -->
												<a href="https://www.youtube.com/embed/Ff5FUoo2YZA?si=rgjxFGyGJs8AMocz" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
													<i class="fas fa-play"></i>
												</a>
											</div>
										</div>
									</div>

									<!-- Card body -->
									<div class="card-body">
										<!-- Title -->
										<h5><a href="/signin">English for Beginners: Intensive Spoken English Course</a></h5>
										<!-- Avatar group and button -->
										<div class="d-sm-flex justify-content-sm-between align-items-center mt-3">
											<!-- Avatar Group -->
											<div>
												<h6 class="mb-1 fw-normal"><i class="fas fa-circle fw-bold text-success small me-2"></i>Live Students</h6>
											</div>
											<!-- Button -->
											<a class="btn btn-sm btn-success mb-0" href="/signin">Join now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Live courses END -->

<!-- =======================
Action box START -->
<section class="py-5">
	<div class="container position-relative">
		<div class="row">
			<div class="col-12">
				<!-- SVG decoration START -->
				<figure class="position-absolute top-50 start-50 translate-middle ms-2">
					<svg>
						<path class="fill-white opacity-2" d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z"></path>
						<path class="fill-white opacity-2" d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z"></path>
						<path class="fill-white opacity-2" d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z"></path>
						<path class="fill-white opacity-2" d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z"></path>
					</svg>
				</figure>
				<!-- SVG decoration END -->

				<div class="bg-dark p-4 p-sm-5 rounded-3">
					<div class="row justify-content-center position-relative">
						<!-- Svg decoration START -->
						<figure class="fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y">
							<svg width="141px" height="141px">
								<path d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z" />
							</svg>
						</figure>
						<!-- SVG decoration END -->

						<!-- Action box -->
						<div class="col-11 position-relative">
							<div class="row align-items-center">
								<!-- Title -->
								<div class="col-lg-7">
									<h3 class="text-white mb-0">Create your first online assessment</h3>
									<p class="text-white small">Boost up your knowledge, grow your skill with the most reliable online courses and certifications</p>
									<!-- List -->
									<ul class="list-inline mb-0 justify-content-center justify-content-lg-start">
										<li class="list-inline-item text-white me-2"> <i class="bi bi-check-circle-fill text-success me-2"></i>Free registration</li>
										<li class="list-inline-item text-white me-2"> <i class="bi bi-check-circle-fill text-success me-2"></i>Powerful features</li>
									</ul>
								</div>
								<!-- Content and input -->
								<div class="col-lg-5 text-lg-end mt-3 mt-lg-0">
									<a href="/signin" class="btn btn-warning mb-0">Sign Up for Free</a>
								</div>
							</div> <!-- Row END -->
						</div>
					</div>
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Action box END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->