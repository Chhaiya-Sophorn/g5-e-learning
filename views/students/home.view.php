
<?php 
	require 'layouts/header.php' ;
    require 'database/database.php';
    // require 'models/user.model.php';
?>

<!-- Header START -->
<header class="navbar-light navbar-sticky navbar-transparent">
  <!-- Logo Nav START -->
  <nav class="navbar navbar-expand-xl">
    <div class="container">
      <!-- Logo START -->
      <a class="navbar-brand" href="index.html">
        <img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
        <img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
      </a>
      <!-- Logo END -->
  
      <!-- Responsive navbar toggler -->
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
        <span class="me-2"><i class="fas fa-search fs-5"></i></span>
      </button>
  
      <!-- Category menu START -->
      <ul class="navbar-nav navbar-nav-scroll dropdown-clickable">
        <li class="nav-item dropdown dropdown-menu-shadow-stacked">
          <a class="nav-link" href="#" id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-grid-3x3-gap-fill me-3 fs-5 me-xl-1 d-xl-none"></i>
            <i class="bi bi-grid-3x3-gap-fill me-1 d-none d-xl-inline-block"></i>
            <span class="d-none d-xl-inline-block">Category</span>
          </a>
		
          <ul class="dropdown-menu z-index-unset" aria-labelledby="categoryMenu">
				<?php 
					require 'database/database.php';
					require 'models/category.model.php';
					$categories = getCategories();
					
					foreach ($categories as $category):	
				?>		
            <!-- Dropdown submenu -->
            <li class="dropdown-submenu dropend">
				<form action="/course" method='post'>
					<input type="text" name='id' value='<?=$category['category_id']?>' hidden>
					<input type="text" name='email' value='<?= $_POST['email']?>' hidden>
						
					<button class='btn bd-0'><img class="rounded-circle me-lg-2" src="uploading/<?=$category['image']?>" alt="" style="width: 30px; height: 30px;"><?=$category['title']?></button>
				</form>
				<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
	
					<?php 
					$courses= getCoursesOnCategory($category['category_id']);
					foreach ($courses as $course):
					?>
					<li><a class="dropdown-item" href="#"><?=$course['title']?></a></li>
					<?php endforeach ?>
				</ul>
            </li>
			<?php endforeach ?>
            <li><a class="dropdown-item bg-primary text-primary bg-opacity-10 rounded-2 mb-0" href="#categories_blog">View all categories</a></li>
          </ul>
        </li>
      </ul>
      <!-- Category menu END -->
  
      <!-- Main navbar START -->
      <div class="navbar-collapse collapse" id="navbarCollapse">
        <!-- Nav Search START -->
        <div class="col-xl-8">
          <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
          </div>
        </div>
        <!-- Nav Search END -->
      </div>
      <!-- Main navbar END -->
  
      <!-- Right header content START -->
      <!-- Add to cart -->
      <div class="navbar-nav position-relative overflow-visible me-3">
        <a href="#" class="nav-link">	<i class="fas fa-shopping-cart fs-5"></i></a>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-success mt-xl-2 ms-n1">5 
          <span class="visually-hidden">unread messages</span>
        </span>
      </div>
  
      <!-- Language -->
      <!-- <div class="dropdown ms-1 ms-lg-0">
        <a class="nav-link" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
          aria-expanded="true">
          <i class="fas fa-globe me-2"></i>
            <span class="d-none d-lg-inline-block">Language</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end min-w-auto shadow pt-3" aria-labelledby="profileDropdown">
          <li> <a class="dropdown-item" href="#"><img class="fa-fw me-2" src="assets/images/flags/uk.svg" alt="">English</a></li>
          <li> <a class="dropdown-item" href="#"><img class="fa-fw me-2" src="assets/images/flags/gr.svg" alt="">German</a></li>
          <li> <a class="dropdown-item" href="#"><img class="fa-fw me-2" src="assets/images/flags/sp.svg" alt="">French</a></li>
        </ul>
      </div> -->
  
      <!-- Language -->
      <ul class="navbar-nav navbar-nav-scroll me-3 d-none d-xl-block">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="language" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-globe me-2"></i>
            <span class="d-none d-lg-inline-block">Language</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end min-w-auto" aria-labelledby="language">
            <li> <a class="dropdown-item" href="#"><img class="fa-fw me-2" src="assets/images/flags/uk.svg" alt="">English</a></li>
            <li> <a class="dropdown-item" href="#"><img class="fa-fw me-2" src="assets/images/flags/gr.svg" alt="">German</a></li>
            <li> <a class="dropdown-item" href="#"><img class="fa-fw me-2" src="assets/images/flags/sp.svg" alt="">French</a></li>
          </ul>
        </li>
      </ul>
      <?php 
		
		  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$email = $_POST['email'];

			$statement = $connection->prepare("SELECT* FROM users WHERE email LIKE :email");
			$statement->execute([
				':email' => $email
			]);
			$users = $statement->fetchAll();
		}
		foreach ($users as $user):
		?>
      <div class="nav-item dropdown ">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <img class="rounded-circle me-lg-2" src="../../uploading/<?=$user['profile_image']?>" alt="" style="width: 50px; height:50px;">
        <span class="d-none d-lg-inline-flex"><?=$user['name']?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
		<form action="/student_profile" method="post">  
			<input type="hidden" name="id" value=<?=$user['user_id'] ?>>
			<button type="submit" class="btn btn-primary py-1 w-100 mb-4"> View Profile</button>                                                                
		</form>
		<div class=' d-flex justify-content-center'>
       		 <a href="/"><button class="btn btn-danger-soft mb-0"><i class="fas fa-sign-in-alt me-2"></i>Log Out</button></a> 
      	</div>
   		 </div>
    	</div>
    </div>
    </div>
  </nav>
  <!-- Logo Nav END -->
  </header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<!-- =======================
Main Banner START -->
<!-- ......................................................................... -->
<section class="bg-light">
	<div class="container pt-5 mt-0 mt-lg-5">

		<!-- Title and SVG START -->
		<div class="row position-relative mb-0 mb-sm-5 pb-0 pb-lg-5">
			<div class="col-lg-8 text-center mx-auto position-relative">
				<!-- SVG decoration -->
				<figure class="position-absolute top-100 start-100 translate-middle ms-5 d-none d-lg-block">
					<svg width="21.5px" height="21.5px" viewBox="0 0 21.5 21.5">
						<polygon class="fill-danger" points="21.5,14.3 14.4,9.9 18.9,2.8 14.3,0 9.9,7.1 2.8,2.6 0,7.2 7.1,11.6 2.6,18.7 7.2,21.5 11.6,14.4 18.7,18.9 "></polygon>
					</svg>
				</figure>
				<!-- SVG decoration -->
				<figure class="position-absolute top-0 start-100 translate-middle d-none d-md-block">
					<svg width="27px" height="27px" ml-5>
						<path class="fill-purple" d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z"></path>
					</svg>
				</figure>
				
				<!-- Title -->
				<h1>Education, talents, and career opportunities. All in one place.</h1>
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
<section class="pb-0 py-sm-0 mt-n8">
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
<section id='categories_blog'>
	<div class="container">
		<div class="row mb-4">
			<div class="col-lg-8 text-center mx-auto">
				<p class="mb-0">All the Categories </p>
			</div>
		</div>
		<div class="row g-4">
		<?php 

			$categorys = getCategories();

			foreach ($categorys as $cate):

			?>
			<!-- Category item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card card-body shadow rounded-3">
					<div class="d-flex align-items-center">
						<img class="rounded-circle me-lg-2" src="uploading/<?=$cate['image']?>" alt="" style="width: 70px; height: 70px;">

						<div class="ms-3">
							<form action="/course" method="post">
								<button type='sumit' class="btn btn-outline-none">
									<input type="text" name='email' value='<?=$user['email']?>' hidden>
									<input type="text" name='id' value='<?=$cate['category_id']?>' hidden>
									<h5 class="mb-0"><a class="stretched-link"><?=$cate['title']?></a></h5>
									<span><?=getNumberOfCourseInCategory($cate['category_id'])?> Courses</span>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach ?>
			<!-- Category item -->
</section>
<!-- =======================
Category END -->

<!-- =======================
Featured course START -->
<section class="pt-0 pt-md-5">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-lg-8 text-center mx-auto">
				<h2 class="fs-1 mb-0">Featured Courses</h2>
				<p class="mb-0">Explore top picks of the week </p>
			</div>
		</div>

		<div class="row g-4">
			<?php
				require 'models/admin.model.php';
				// require 'models/user.model.php';
				$courses = getCourses();
				foreach ($courses as $course):

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
      							<button class="icon-md bg-white rounded-circle border border-orange text-orange show-popup" data-user='<?=$user['user_id']?>' data-course='<?=$course['course_id']?>' data-title="<?=$course['title'] ?>" data-price="<?=$course['price'] ?>"><i class="fas fa-shopping-cart text-danger"></i></button>
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
									<span class="h6 fw-light mb-0 ms-2">9.1k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">4.5</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="uploading/<?php $haha= getTeacher($course['user_id']);
								foreach ($haha as $ha){
									echo $ha['profile_image'];
								};
								?>" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title"><a href="#"><?=$course['title'] ?></a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> Personal Development </a></div>
							<!-- Price -->
							<h5 class="text-success mb-0"><?=$course['price'] ?></h5>
						</div>
					</div>
				</div>
			</div>	
			<!-- Card Item END -->
			<?php endforeach ?>

			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/18.jpg" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="#" class="icon-md bg-white rounded-circle">
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
									<span class="h6 fw-light mb-0 ms-2">2.5k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">3.6</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title"><a href="#">Fundamentals of Business Analysis</a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> Business Development </a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">$160</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Card Item END -->

			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/21.jpg" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="#" class="icon-md bg-white rounded-circle">
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
									<span class="h6 fw-light mb-0 ms-2">6k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">3.8</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title"><a href="#">Google Ads Training: Become a PPC Expert</a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> SEO </a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">$226</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Card Item END -->

			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/20.jpg" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="#" class="icon-md bg-white rounded-circle">
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
									<span class="h6 fw-light mb-0 ms-2">15k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">4.8</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title"><a href="#">Behavior, Psychology and Care Training</a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> Lifestyle </a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">$342</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Card Item END -->

			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/15.jpg" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="#" class="icon-md bg-white rounded-circle">
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
									<span class="h6 fw-light mb-0 ms-2">8k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">3.6</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/11.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title"><a href="#">Microsoft Excel - Excel from Beginner to Advanced</a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> Technology </a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">$245</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Card Item END -->

			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/14.jpg" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="#" class="icon-md bg-white rounded-circle">
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
									<span class="h6 fw-light mb-0 ms-2">4k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">4.0</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/12.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title"><a href="#">Twitter Marketing & Twitter Ads For Beginners</a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> Technology </a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">$199</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Card Item END -->

			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/19.jpg" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="#" class="icon-md bg-white rounded-circle">
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
									<span class="h6 fw-light mb-0 ms-2">6k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">4.0</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/08.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title"><a href="#">Consulting Approach to Problem Solving</a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> Psychology</a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">$215</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Card Item END -->

			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/16.jpg" class="card-img-top" alt="course image">
						</div>
						<!-- Hover element -->
						<div class="card-img-overlay">
							<div class="card-element-hover d-flex justify-content-end">
								<a href="#" class="icon-md bg-white rounded-circle">
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
									<span class="h6 fw-light mb-0 ms-2">2k</span>
								</li>
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
									<span class="h6 fw-light mb-0 ms-2">3.5</span>
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title"><a href="#">Ultimate business intelligence analyst a to Z Course(Pro)</a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> Business</a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">$112</h5>
						</div>
					</div>
				</div>
			</div>
			<!-- Card Item END -->

		</div>
		<!-- Button -->
		<div class="text-center mt-5">
			<a href="#" class="btn btn-primary-soft">View more<i class="fas fa-sync ms-2"></i></a>
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
							<a href="#" class="btn btn-primary mb-0">View Programs</a>
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
							<a href="#" class="btn btn-warning mb-0">View Courses</a>
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
IT courses START -->
<section>
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-lg-8 text-center mx-auto">
				<h2 class="fs-1">Top Courses for IT</h2>
				<p class="mb-0">Information Technology Courses to expand your skills and boost your career & salary</p>
			</div>
		</div>

		<div class="row g-4">

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="assets/images/courses/4by3/01.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">Digital Marketing</a>
							<div class="text-white">23 Courses</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="assets/images/courses/4by3/03.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">Figma</a>
							<div class="text-white">16 Courses</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="assets/images/courses/4by3/05.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">Python</a>
							<div class="text-white">32 Courses</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="assets/images/courses/4by3/06.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">Angular</a>
							<div class="text-white">48 Courses</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="assets/images/courses/4by3/07.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">React-Native</a>
							<div class="text-white">31 Courses</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="assets/images/courses/4by3/08.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">Sketch</a>
							<div class="text-white">38 Courses</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="assets/images/courses/4by3/09.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">Javascript</a>
							<div class="text-white">33 Courses</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="assets/images/courses/4by3/10.jpg" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#" class="text-white mt-auto h5 stretched-link">Bootstrap</a>
							<div class="text-white">62 Courses</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
IT courses END -->

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
						<path class="fill-white opacity-2" d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z" ></path>
						<path class="fill-white opacity-2" d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z"></path>
						<path class="fill-white opacity-2" d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z"></path>
					</svg>
				</figure>
				<!-- SVG decoration END -->
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Action box END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
<?php endforeach ?>

<!-- Bootstrap JavaScript (optional, only needed for certain features like modals) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- JavaScript to trigger modal on button click -->
<?php 
    // require 'models/user.model.php';
?>
<script>
$(document).ready(function() {
  $('.show-popup').click(function() {
    var title = $(this).data('title');
    var price = $(this).data('price');
    var user = $(this).data('user');
    var course = $(this).data('course');
    
    $('#modalTitle').text(title);
    $('#modalPrice').text(price);
    $('#modalUser').val(user);
    $('#modalCourse').val(course);
    $('#popupModal').modal('show');

    $('#paymentModal').modal('show');

	 // Speak the title and price
	//  speak('You selected course ' + title + ', price ' + price);


	// Function to handle the button click on the initial modal
	$('#pay').click(function() {
    // Show the second modal
    $('#paymentModal').modal('hide'); // Hide the initial modal
    $('#confirmationModal').modal('show');
    $('#modaluser').val(user);
    $('#modalcourse').val(course);

    // Play music for the notification
    playNotificationMusic();
  });
  });
});

function speak(text) {
  var synth = window.speechSynthesis;
  var utterThis = new SpeechSynthesisUtterance(text);
  synth.speak(utterThis);
}

// Function to play music for the notification
function playNotificationMusic() {
  var audio = new Audio('uploading/click-124467.mp3'); // Replace 'path_to_your_audio_file.mp3' with the path to your audio file
  audio.play();
}
</script>

<?php require 'layouts/footer.php' ?>
</body>
</html>


