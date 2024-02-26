<?php 
require "layouts/header.php";
?>

<!-- **************** MAIN CONTENT START **************** -->
<main>
<!-- =======================



Inner part START -->
<!-- Payment Modal -->
<div class="container mt-5">
     <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body">
					<form action="#" method="post" enctype="multipart/form-data" class="border border-success p-4">
						<div class="text-center"> 
							<img src="studentprofile/download.png" alt="Profile Image" class="rounded-circle mb-3" style="width: 130px; height: 130px; object-fit: cover;">
						</div>
						<input type="text" name='email' value='<?=$_POST['email']?>' hidden>
						<h5 class="text-center">Course payment</h5>
						<div class="text-center">Course:<h5 class="text-info">HTML</h5></div>
						<div class="text-center">Price:<h5 class="text-success">9000$</h5></div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmationModal">Pay</button>
						</div>
					</form>
                    </div>
               </div>
          </div>
     </div>
</div>

<!-- Confirmation Modal -->
<div class="container mt-5">
     <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
          <div class="modal-dialog">
               <div class="modal-content">
                    <div class="modal-body">
					<form action="#" method="post" enctype="multipart/form-data" class="border border-success p-4">
						<div class="text-center"> 
						<img src="studentprofile/check.png" alt="Profile Image" class="rounded-circle mb-3" style="width: 130px; height: 130px; object-fit: cover;">
							<box-icon name='check-circle' animation='tada' color='rgba(18,154,232,0.55)'></box-icon>	
						</div>
						<input type="text" name='email' value='<?=$_POST['email']?>' hidden>
						<h5 class="text-center">Your payment success!</h5>
						<p class="text-center">Injoy your learning </p>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Join course</button>
						</div>
					</form>
                    </div>
               </div>
          </div>
     </div>
</div>


<section class="pt-4">
	<div class="container">
	<form class="container-fluid justify-content-start" action='/student' method='post'>
		<input type="text" name='email' value='<?=$_POST['email']?>' hidden>
		<button type="summit" class="btn btn-primary btn-sm">Back</button>
  	</form>
		<!-- Search option START -->
		<div class="row mb-4 align-items-center">
			<!-- Search bar -->
			<div class="col-sm-6 col-xl-4">
				<form class="bg-body shadow rounded p-2">
					<div class="input-group input-borderless">
						<input class="form-control me-1" type="search" placeholder="Search instructor">
						<button type="button" class="btn btn-primary mb-0 rounded"><i class="fas fa-search"></i></button>
					</div>
				</form>
			</div>

			<!-- Select option -->
			<div class="col-sm-6 col-xl-3 mt-3 mt-lg-0">
				<form class="bg-body shadow rounded p-2 input-borderless">
					<select class="form-select form-select-sm js-choice" aria-label=".form-select-sm">
						<option value="">Category</option>
						<option><a href="/admin">All</a></option>
						<option>Development</option>
						<option>Design</option>
						<option>Accounting</option>
						<option>Translation</option>
						<option>Finance</option>
						<option>Legal</option>
						<option>Photography</option>
						<option>Writing</option>
						<option>Marketing</option>
					</select>
				</form>
			</div>

			<!-- Select option -->
			<div class="col-sm-6 col-xl-3 mt-3 mt-xl-0">
				<form class="bg-body shadow rounded p-2 input-borderless">
					<select class="form-select form-select-sm js-choice" aria-label=".form-select-sm">
						<option value="">Sort by</option>
						<option>Most popular</option>
						<option>Most viewed</option>
						<option>Top rated</option>
					</select>
				</form>
			</div>

			<!-- Button -->
			<div class="col-sm-6 col-xl-2 mt-3 mt-xl-0 d-grid">
				<a href="#" class="btn btn-lg btn-primary mb-0">Filter Results</a>
			</div>
		</div>
		<!-- Search option END -->

		<!-- Instructor list START -->
		<div class="row g-4 justify-content-center">
		<?php 
		require 'models/admin.model.php';
		$get_courses = get_courses();?>
		<?php foreach($get_courses as  $course): ?>
			<!-- Card item START -->
			<div class="col-lg-10 col-xl-6">
				<div class="card shadow p-2">
					<div class="row g-0">
						<!-- Image -->

						<div class="col-md-4" style="background-image: url('uploading/<?=$course['image_courses']?>'); background-size: cover;">
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
									<h5 class="text-success mb-0"><?=$course['price']?></h5>
									
								</div>
								<!-- Content -->
								<p class="text-truncate-2 mb-3"><?=  $course['description'] ?></p>
								<!-- Info -->

								<div class="d-sm-flex justify-content-sm-between align-items-center">
									<!-- Title -->
									<h6 class="text-info mb-0">Digital Marketing</h6>
									<li class="list-inline-item d-flex justify-content-center align-items-center">
										<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
										<span class="h6 fw-light mb-0 ms-2">9.1k</span>
									</li>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">Join coures</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Card item END -->
			<?php endforeach; ?>
			
		<!-- Instructor list END -->

		<!-- Pagination START -->
		<nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
			<ul class="pagination pagination-primary-soft rounded mb-0">
				<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a></li>
				<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
				<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
				<li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
				<li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
				<li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
			</ul>
		</nav>
		<!-- Pagination END -->

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
				<path d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z" fill="#fff" fill-rule="evenodd" opacity=".502"></path>
				<path d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z" fill="#fff" fill-rule="evenodd" opacity=".102"></path>
				<path d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z" fill="#fff" fill-rule="evenodd" opacity=".2"></path>
				<path d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z" fill="#fff" fill-rule="evenodd" opacity=".2"></path>
			</svg>
		</figure>
		
		<div class="bg-success p-4 p-sm-5 rounded-3">
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
							<a href="#" class="btn btn-dark mb-0">Start Teaching today</a>
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
<!-- **************** MAIN CONTENT END **************** -->


<?php require "layouts/footer.php";?>

<!-- Back to up -->