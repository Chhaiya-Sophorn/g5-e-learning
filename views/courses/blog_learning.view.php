<?php 
require "layouts/header.php";
require 'models/category.model.php';
require 'models/admin.model.php';
?>
<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- Payment Modal -->
<div class="container mt-5">
     <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body border border-success p-4 m-4">
					<div class="text-center"> 
						<img src="assets/images/quiz.png" alt="Profile Image" class="mb-3" style="width: 180px; height: 70px; object-fit: cover;">
					</div>	
					<span class='d-flex justify-content-center'>Screenshort your result and sumit</span>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						<a href="https://docs.google.com/forms/d/e/1FAIpQLSe0vD9TC7s3laObBxrdYh7UvoLUeL2spHHkl3P4D-pe8o9H-Q/viewform?usp=sf_link"><button id='pay' class="btn btn-primary success-popup">Start Quiz</button></a>
					</div>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- ------------------------------ -->
<div class="container mt-1">
     <div class="modal fade" id="lesson" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg"> <!-- Changed modal-dialog class to modal-lg for a wider modal -->
               <div class="modal-content">
                    <div class="modal-body border border-success p-2 m-4">
						<iframe width="730" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">"></iframe>	
						<h5 class='m-1'>Lesson1: What is the love ?</h5>		
						<span class='d-flex justify-content-center'>I love this lesson so much</span>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
						</div>
                    </div>
               </div>
          </div>
     </div>
</div>

<div class="container mt-5">
	<form class="container-fluid justify-content-start" action='<?php if(isset($_POST['home'])){echo '/student';}else{echo '/course';}; ?>' method='post'>
		<input type="text" name='email' value='<?=$_POST['email']?>' hidden>
		<input type="text" name='id' value='<?=$_POST['id']?>' hidden>
		<button type="summit" class="btn btn-primary btn-sm">Back</button>
  	</form>
        <div class="row mb-4">
			<div class="col-lg-8 text-center mx-auto">
				<h2 class="fs-1">Welcom to the <span class='text-orange'><?=getCourse($_POST['course_id'])['title']?> </span>Courses</h2>
				<p class="mb-0">Information Technology Courses to expand your skills and boost your career & salary</p>
			</div>
		</div>
</div>
<section class="py-2">  
     <div class="container mt-4"> <!-- Reduced margin-top -->
          <div class="col w-100">
               <div class="col-lg-6 col-xl-3 w-100"> <!-- Adjusted width -->
                    <div class="card gap-2 p-2"> <!-- Adjusted padding and gap -->
                         <div class="row g-3">
                              <!-- Image -->
                              <div class="col-md-4">
                                   <img src="assets/images/instructor/06.jpg" class="rounded-3" alt="...">
                              </div>
								<?php 
								
								?>
                              <!-- Card body -->
                              <div class="col-md-8">
                                   <div class="card-body">
                                        <!-- Title -->
                                        <div class="d-sm-flex justify-content-sm-between mb-2 mb-sm-3">
                                             <div>
                                                  <h5 class="card-title mb-0 name=''"><a href="/lesson">Amanda Reed</a></h5>
                                                  <p class="small mb-2 mb-sm-0">Professor at NIT College</p>
                                             </div>
                                             <span class="h6 fw-light">4.8<i class="fas fa-star text-warning ms-1"></i></span>
                                        </div>
                                        <!-- Content -->
                                        <p class="text-truncate-2 mb-3">Dear, I'm here for you. I'm Amanda Reed I'm from
                                             USA. I have a lot of experience to teaching online course </p>
                                        <!-- Info -->
                                        <div class="d-sm-flex justify-content-sm-between align-items-center">
                                             <!-- Title -->
                                             <h6 class="text-orange mb-0">Web Designer</h6>
                                        </div>

                                        <div class='d-sm-flex mt-3 justify-content-end'> <!-- Adjusted margin top -->
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-instagram-gradient" href="#"><i class="fab fa-fw fa-instagram"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 me-1 text-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a class="mb-0 text-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a>
                                                </li>
                                            </ul>
                                        </div>
										<a href="#blog_study" class="btn btn-info mb-0">Let start study</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
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
							<!-- Card START -->
							<div>
								<div class="card p-2">
									<div class="position-relative">
                    <!-- Image -->
										<img src="assets/images/courses/4by3/18.jpg" class="card-img rounded-2" alt="Card image">
										<div class="card-img-overlay">
											<div class="position-absolute top-50 start-50 translate-middle">
                        <!-- Video link -->
												<a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
													<i class="fas fa-play"></i>
												</a>
											</div>
										</div>
									</div>

									<!-- Card body -->
									<div class="card-body">
										<!-- Title -->
										<h5><a href="/signin">Lesson1: What is the love ?</a></h5>
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
											<button class="btn btn-sm btn-success mb-0" class="text-white" data-bs-toggle="modal" data-bs-target="#lesson">Let's study</button>
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
												<a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
													<i class="fas fa-play"></i>
												</a>
											</div>
										</div>
									</div>

									<!-- Card body -->
									<div class="card-body">
										<!-- Title -->
										<h5><a href="/signin">Time Management Mastery: Do More, Stress Less</a></h5>
										<!-- Avatar group and button -->
										<div class="d-sm-flex justify-content-sm-between align-items-center mt-3">
											<!-- Avatar Group -->
											<div>
												<h6 class="mb-1 fw-normal"><i class="fas fa-circle fw-bold text-success small me-2"></i>Live Students</h6>
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
											<button class="btn btn-sm btn-success mb-0">Join now</button>
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
												<a href="https://www.youtube.com/embed/tXHviS-4ygo" class="btn btn-lg text-danger btn-round btn-white-shadow mb-0" data-glightbox="" data-gallery="video-tour">
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
											<button class="btn btn-sm btn-success mb-0">Join now</button>
										</div>
									</div>
								</div>
							</div>	
							<!-- Card END -->
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
				<div class='d-flex gap-2'>	
					<input type="file" name='image' class="form-control" aria-label="file example" style="background-color: rgba(0, 0, 0, 0.1);">
						<select class="form-select form-select-lg text-center" aria-label=".form-select-lg example" style="width: 150px; font-size: smaller;">
							<option selected>Select the lesson</option>
							<option value="1">One</option>
							<option value="2">Two</option>
							<option value="3">Three</option>
						</select>
					<button type="sumite" class="btn btn-orange d-flex justify-content-center " data-bs-dismiss="modal">sumite</button>	
				</div>	
			</div>
		</div>	
	<div class="container">
		<div class="row g-4">
			<!-- Category item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card card-body shadow rounded-3">
					<div class="d-flex align-items-center">
						<img class="rounded-circle me-lg-2" src="assets/images/test.png" alt="" style="width: 70px; height: 70px;">
						<div class="ms-3">
								<button type='sumit' class="btn btn-outline-none show-popup" data-bs-toggle="modal" data-bs-target="#paymentModal">
									<input type="text" name='email' value='' hidden>
									<input type="text" name='id' value='' hidden>
									<h5 class="mb-0">Lesson1</h5>
									<span>Courses</span>
								</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card card-body shadow rounded-3">
					<div class="d-flex align-items-center">
						<img class="rounded-circle me-lg-2" src="assets/images/test.png" alt="" style="width: 70px; height: 70px;">
						<div class="ms-3">
								<button type='sumit' class="btn btn-outline-none">
									<input type="text" name='email' value='' hidden>
									<input type="text" name='id' value='' hidden>
									<h5 class="mb-0"><a href="https://docs.google.com/forms/d/e/1FAIpQLSe0vD9TC7s3laObBxrdYh7UvoLUeL2spHHkl3P4D-pe8o9H-Q/viewform?usp=sf_link">Lesson1</a></h5>
									<span>Courses</span>
								</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card card-body shadow rounded-3">
					<div class="d-flex align-items-center">
						<img class="rounded-circle me-lg-2" src="assets/images/test.png" alt="" style="width: 70px; height: 70px;">
						<div class="ms-3">
								<button type='sumit' class="btn btn-outline-none">
									<input type="text" name='email' value='' hidden>
									<input type="text" name='id' value='' hidden>
									<h5 class="mb-0"><a href="https://docs.google.com/forms/d/e/1FAIpQLSe0vD9TC7s3laObBxrdYh7UvoLUeL2spHHkl3P4D-pe8o9H-Q/viewform?usp=sf_link">Lesson1</a></h5>
									<span>Courses</span>
								</button>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>

</main>
<!-- **************** MAIN CONTENT END **************** -->


<?php require "layouts/footer.php";?>

<!-- Back to up -->