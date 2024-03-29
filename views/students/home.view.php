
<?php 
	require 'layouts/header.php' ;
    require 'database/database.php';
	require 'models/payment.model.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['course_id'])){
		if($_POST['course_id']!='' && count(orderExist(students($_POST['email'])['user_id'],$_POST['course_id']))<1){
		addLesson($_POST['course_id'],students($_POST['email'])['user_id']);
	}
	}
	
}

?>
<!-- Header START --> 
<header class="navbar-light navbar-sticky navbar-transparent">
  <!-- Logo Nav START -->
  <nav class="navbar navbar-expand-xl">
    <div class="container">
      <!-- Logo START -->
      <a class="navbar-brand" href="#">
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
	  <div class="navbar-nav position-relative overflow-visible me-3">
		<form action="/orders" method='post'>
			<input type="text" name='email' value='<?= $_POST['email']?>' hidden>	
			<button type='sumit' class='btn border-0' style='margin-top: 8px;'><i class="fas fa-shopping-cart fs-5"></i></button>
        	<span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-success mt-xl-2 ms-n1"<?php if( count(getTheorder(students($_POST['email'])['user_id'])) === 0){echo 'hidden';}?>><?php echo count(getTheorder(students($_POST['email'])['user_id']))?></span>
          	<!-- <span class="visually-hidden">unread messages</span> -->
        	
		</form>
       
      </div>
  
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
				<h1>Education empowers individuals with knowledge and skills</h1>
				<p>enabling them to unlock their full potential, pursue meaningful careers, and contribute positively to society's growth and development. </p>
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
<section id='categories_blog' style="background-color: rgba(0, 0, 0,0.05);">
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
<section id='courses' class="pt-0 pt-md-5" style="background-color: rgba(0, 0, 0,0.05);">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-lg-8 text-center mx-auto">
				<h2 class="fs-1 mb-0">Featured Courses</h2>
				<p class="mb-0 text-orange">Explore top picks of the week </p>
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
      							<button class="icon-md bg-white rounded-circle border border-orange text-orange show-popup" data-user='<?=$user['email']?>' data-course='<?=$course['course_id']?>' data-title="<?=$course['title'] ?>" data-price="<?=$course['price'] ?>" data-imgs='<?=$course['image_courses']?>' <?php if(count(getPaymentExist(students($_POST['email'])['user_id'], $course['course_id'] ))>0){echo 'hidden';}if(count(getAddOrderExist(students($_POST['email'])['user_id'], $course['course_id'] ))>0){echo 'hidden';} ?>><i class="fas fa-shopping-cart text-danger"></i></button>
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
								<!-- Rating -->
								<li class="list-inline-item d-flex justify-content-center align-items-center">
									<!-- <div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div> -->
									<!-- <span class="h6 fw-light mb-0 ms-2">4.5</span> -->
								</li>
							</ul>
							<!-- Avatar -->
							<div class="avatar avatar-sm">
								<img class="avatar-img rounded-circle" src="uploading/<?=getTeacher($course['user_id'])['profile_image']?>" alt="avatar"></div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title"><a href="#"><?=$course['title'] ?></a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"> <i class="fas fa-circle small fw-bold"></i>Trainer: <?=getTeacher($course['user_id'])['name']?> </a></div>
							<!-- Price -->
							<h5 class="text-success mb-0" <?php if(count(getPaymentExist(students($_POST['email'])['user_id'], $course['course_id'] ))>0){echo 'hidden';} ?>><?=$course['price'] ?></h5>
							<form action="/blog_learning" method='post'  <?php if(count(getPaymentExist(students($_POST['email'])['user_id'], $course['course_id'] ))<1){echo 'hidden';} ?>>
								<input type="text" id="modaluser" value='<?=$_POST['email']?>' name='email' hidden>
								<input type="text" id="modalcourse" value='<?=$course['course_id']?>' name='course_id' hidden>
								<input type="text" id="modalcourse" value='' name='home' hidden>
								<button type="sumite" class="btn btn-primary">Join course</button>
							</form>
						</div>
					</div>
				</div>
			</div>	
			<!-- Card Item END -->
			<?php endforeach ?>

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
							<a href="#courses" class="btn btn-primary mb-0">View Programs</a>
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
							<a href="#best" class="btn btn-warning mb-0">View Courses</a>
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
<section id='best' style="background-color: rgba(0, 0, 0,0.1);">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-lg-8 text-center mx-auto">
				<h2 class="fs-1">Top Courses</h2>
				<p class="mb-0">Information Technology Courses to expand your skills and boost your career & salary</p>
			</div>
		</div>

		<div class="row g-4">
			<?php 
			$courseCounts = array_count_values(array_column(getRevenuese(), 'course_id'));

			// Sort the counts in descending order
			arsort($courseCounts);
			// Print the course_ids and their counts
			foreach ($courseCounts as $courseId => $count) :

			?>
			<!-- Course item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<!-- Image -->
				<div class="card card-metro overflow-hidden rounded-3">
					<img src="uploading/<?=getCousesSolds($courseId)['image_courses']?>" alt="">
					<!-- Image overlay -->
					<div class="card-img-overlay d-flex"> 
						<!-- Info -->
						<div class="mt-auto card-text">
							<a href="#courses" class="text-white mt-auto h5 stretched-link"><?=getCousesSolds($courseId)['title']?></a>
							<div class="text-white"><?=$count?> students</div>
						</div>
					</div>
				</div>
			</div>
			<?php 
			
			endforeach;
			?>
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
    require 'views/students/payments/payment.view.php';
?>

<script>
$(document).ready(function() {
  $('.show-popup').click(function() {
    var title = $(this).data('title');
    var price = $(this).data('price');
    var user = $(this).data('user');
    var course = $(this).data('course');
    var imgs = $(this).data('imgs');
    
    $('#modalTitle').text(title);
    $('#modalPrice').text(price);
    $('#modalUser').val(user);
    $('#modalCourse').val(course);
	$('#imgs').attr('src','uploading/'+imgs);
    $('#popupModal').modal('show');

    $('#paymentModal').modal('show');

	 // Speak the title and price
	//  speak('You selected course ' + title + ', price ' + price);

	// playNotificationMusic();
	// Function to handle the button click on the initial modal
	$('#').click(function() {
    // Show the second modal
    $('#confirmationModal').modal('show');
    
  });
  });
});

$(document).ready(function() {
  $('.ssuccss-popup').click(function() {
    $('#confirmationModal').modal('show');
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



