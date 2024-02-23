
<?php require 'layouts/header.php' ?>
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
  
            <!-- Dropdown submenu -->
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-toggle" href="#">Development</a>
              <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
                <!-- dropdown submenu open right -->
                <li class="dropdown-submenu dropend z-index-unset">
                  <a class="dropdown-item dropdown-toggle" href="#">Web development</a>
                  <ul class="dropdown-menu" data-bs-popper="none">
                    <li> <a class="dropdown-item" href="#">Css</a> </li>
                    <li> <a class="dropdown-item" href="#">Java script</a> </li>
                    <li> <a class="dropdown-item" href="#">Angular</a> </li>
                    <li> <a class="dropdown-item" href="#">Php</a> </li>
                    <li> <a class="dropdown-item" href="#">HTML</a> </li>
                    <li> <a class="dropdown-item" href="#">React</a> </li>
                  </ul>
                </li>
                <li> <a class="dropdown-item" href="#">Data science</a> </li>
                <li> <a class="dropdown-item" href="#">Mobile development</a> </li>
                <li> <a class="dropdown-item" href="#">Programing language</a> </li>
                <li> <a class="dropdown-item" href="#">Software testing</a> </li>
                <li> <a class="dropdown-item" href="#">Software engineering</a> </li>
                <li> <a class="dropdown-item" href="#">Software development tools</a> </li>
              </ul>
            </li>
            <li> <a class="dropdown-item" href="#">Design</a></li>
            <!-- Dropdown submenu -->
            <li class="dropdown-submenu dropend">
              <a class="dropdown-item dropdown-toggle" href="#">Marketing</a>
              <div class="dropdown-menu dropdown-menu-start dropdown-width-lg" data-bs-popper="none">
                <div class="row p-4">
                  <!-- Dropdown column item -->
                  <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                    <h6 class="mb-0">Get started</h6>
                    <hr> <!-- Divider -->
                    <ul class="list-unstyled">
                      <li> <a class="dropdown-item" href="#">Market research</a> </li>
                      <li> <a class="dropdown-item" href="#">Advertising</a> </li>
                      <li> <a class="dropdown-item" href="#">Consumer behavior</a> </li>
                      <li> <a class="dropdown-item" href="#">Digital marketing</a> </li>
                      <li> <a class="dropdown-item" href="#">Marketing ethics</a> </li>
                      <li> <a class="dropdown-item" href="#">Social media marketing</a> </li>
                      <li> <a class="dropdown-item" href="#">Public relations</a> </li>
                      <li> <a class="dropdown-item" href="#">Advertising</a> </li>
                      <li> <a class="dropdown-item" href="#">Decision science</a> </li>
                      <li> <a class="dropdown-item" href="#">SEO</a> </li>
                      <li> <a class="dropdown-item" href="#">Business marketing</a> </li>
                    </ul>
                  </div>
  
                  <!-- Dropdown column item -->
                  <div class="col-xl-6 col-xxl-4 mb-4 mb-xl-0">
                    <h6 class="mb-0">Degree</h6>
                    <hr> <!-- Divider -->
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <img src="assets/images/client/uni-logo-01.svg" class="icon-md" alt="">
                      <div class="ms-3">
                        <h6 class="mb-0"><a class="stretched-link" href="#">American Century University, New Mexico</a></h6>
                        <p class="mb-0 small">Bachelor of computer science</p>
                      </div>
                    </div>
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <img src="assets/images/client/uni-logo-02.svg" class="icon-md" alt="">
                      <div class="ms-3">
                        <h6 class="mb-0"><a class="stretched-link" href="#">Indiana College of - Bloomington</a></h6>
                        <p class="mb-0 small">Masters of computer science</p>
                      </div>
                    </div>
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <img src="assets/images/client/uni-logo-03.svg" class="icon-md" alt="">
                      <div class="ms-3">
                        <h6 class="mb-0"><a class="stretched-link" href="#">College of South Florida</a></h6>
                        <p class="mb-0 small">Medical science college</p>
                      </div>
                    </div>
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <img src="assets/images/client/uni-logo-01.svg" class="icon-md" alt="">
                      <div class="ms-3">
                        <h6 class="mb-0"><a class="stretched-link" href="#">Andeerson Campus</a></h6>
                        <p class="mb-0 small">Bachelor of computer science</p>
                      </div>
                    </div>
                    <!-- Dropdown item -->
                    <div class="d-flex position-relative">
                      <img src="assets/images/client/uni-logo-04.svg" class="icon-md" alt="">
                      <div class="ms-3">
                        <h6 class="mb-0"><a class="stretched-link" href="#">University of South California</a></h6>
                        <p class="mb-0 small">Masters of business development</p>
                      </div>
                    </div>
                  </div>
  
                  <!-- Dropdown column item -->
                  <div class="col-xl-6 col-xxl-4">
                    <h6 class="mb-0">Certificate</h6>
                    <hr> <!-- Divider -->
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <h2 class="mb-0"><i class="fab fa-fw fa-google text-google-icon"></i></h2>
                      <div class="ms-2">
                        <h6 class="mb-0"><a class="stretched-link" href="#">Google SEO certificate</a></h6>
                        <p class="mb-0 small">No prerequisites</p>
                      </div>
                    </div>
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <h2 class="mb-0"><i class="fab fa-fw fa-linkedin-in text-linkedin"></i></h2>
                      <div class="ms-2">
                        <h6 class="mb-0"><a class="stretched-link" href="#">Business Development Executive(BDE)</a></h6>
                        <p class="mb-0 small">No prerequisites</p>
                      </div>
                    </div>
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <h2 class="mb-0"><i class="fab fa-fw fa-facebook text-facebook"></i></h2>
                      <div class="ms-2">
                        <h6 class="mb-0"><a class="stretched-link" href="#">Facebook social media marketing</a></h6>
                        <p class="mb-0 small">Expert advice</p>
                      </div>
                    </div>
                    <!-- Dropdown item -->
                    <div class="d-flex mb-4 position-relative">
                      <h2 class="mb-0"><i class="fas fa-fw fa-basketball-ball text-dribbble"></i></h2>
                      <div class="ms-2">
                        <h6 class="mb-0"><a class="stretched-link" href="#">Creative graphics design</a></h6>
                        <p class="mb-0 small">No prerequisites</p>
                      </div>
                    </div>
                  </div>
  
                  <div class="col-12">
                    <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                      <!-- SVG decoration -->
                      <figure class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                        <svg width="92.6px" height="135.2px">	
                          <path class="fill-white" d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z"></path>
                          <path class="fill-white" d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z"></path>
                          <path class="fill-white" d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z"></path>
                          <path class="fill-warning" d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z"></path>
                          <polygon class="fill-warning opacity-6" points="31.2,12.3 4.7,5.4 25.1,17.2"></polygon>
                          <polygon class="fill-warning opacity-6" points="21.5,19.5 15,24.8 4.7,5.4 "></polygon>
                        </svg>
                      </figure>
                      <!-- Body -->
                      <div class="card-body">
                        <!-- Title -->
                        <h5 class="card-title text-white mb-2">Access 25K Online courses from 120 institutions, Start today!</h5>
                        <p class="text-white text-opacity-75">Here is the description of premium features which will allow users to get benefits and save a lot of money</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-sm btn-dark mb-0">Purchase Premium</a>
                      </div>
                    </div>
                  </div>
  
  
                </div>
  
                <!-- Advertisement -->
                <div class="row d-none">
                  <div class="col-12">
                    <div class="card bg-blue rounded-0 rounded-bottom p-3 position-relative overflow-hidden" style="background:url(assets/images/pattern/05.png) no-repeat center center; background-size:cover;">
                      <!-- SVG decoration -->
                      <figure class="position-absolute bottom-0 end-0 mb-n4 d-none d-md-block">
                        <svg width="92.6px" height="135.2px">	
                          <path class="fill-white" d="M71.5,131.4c0.2,0.1,0.4,0.1,0.6-0.1c0,0,0.6-0.7,1.6-1.9c0.2-0.2,0.1-0.5-0.1-0.7c-0.2-0.2-0.5-0.1-0.7,0.1 c-1,1.2-1.6,1.8-1.6,1.8c-0.2,0.2-0.2,0.5,0,0.7C71.4,131.3,71.4,131.4,71.5,131.4z"></path>
                          <path class="fill-white" d="M76,125.5c-0.2-0.2-0.3-0.5-0.1-0.7c1-1.4,1.9-2.8,2.8-4.2c0.1-0.2,0.4-0.3,0.7-0.2c0.2,0.1,0.3,0.4,0.2,0.7 c-0.9,1.4-1.8,2.9-2.8,4.2C76.6,125.6,76.3,125.6,76,125.5C76.1,125.5,76.1,125.5,76,125.5z M81.4,116.9 c-0.2-0.1-0.3-0.4-0.2-0.7c0.2-0.5,0.5-0.9,0.7-1.4c0.5-1.1,1-2.1,1.5-3.2c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6 c-0.5,1.1-1,2.1-1.5,3.2c-0.2,0.5-0.5,0.9-0.7,1.4C81.9,117,81.6,117,81.4,116.9C81.4,116.9,81.4,116.9,81.4,116.9z M85.1,107.1 c0.5-1.6,1-3.2,1.3-4.8c0.1-0.3,0.3-0.4,0.6-0.4c0.3,0.1,0.4,0.3,0.4,0.6c-0.4,1.6-0.8,3.3-1.3,4.9c-0.1,0.3-0.4,0.4-0.6,0.3 c0,0,0,0-0.1,0C85.1,107.6,85,107.3,85.1,107.1z M47.3,83c-1.5-1.1-2.5-2.5-3.1-4.2c-0.1-0.3,0-0.5,0.3-0.6 c0.3-0.1,0.5,0,0.6,0.3c0.5,1.5,1.5,2.7,2.8,3.7c0.2,0.2,0.3,0.5,0.1,0.7C47.9,83.1,47.6,83.1,47.3,83C47.4,83,47.4,83,47.3,83z  M51.7,84.6c0-0.3,0.3-0.5,0.5-0.4c1.4,0.2,2.9-0.3,4.3-1.4c0.2-0.2,0.5-0.1,0.7,0.1c0.2,0.2,0.1,0.5-0.1,0.7 c-1.6,1.2-3.4,1.8-5,1.6c-0.1,0-0.1,0-0.2,0C51.8,85,51.7,84.8,51.7,84.6z M87.2,97.4c0.2-1.7,0.2-3.3,0.2-5 c0-0.3,0.2-0.5,0.5-0.5c0.3,0,0.5,0.2,0.5,0.5c0.1,1.7,0,3.4-0.2,5.1c0,0.3-0.3,0.5-0.5,0.4c-0.1,0-0.1,0-0.2,0 C87.3,97.8,87.1,97.6,87.2,97.4z M43.7,73.6c0.2-1.6,0.7-3.2,1.5-4.8l0.1-0.1c0.1-0.2,0.4-0.3,0.7-0.2c0,0,0,0,0,0 c0.2,0.1,0.3,0.4,0.2,0.7l-0.1,0.1c-0.7,1.5-1.2,3-1.4,4.5c0,0.3-0.3,0.5-0.6,0.4c-0.1,0-0.1,0-0.2,0 C43.8,74,43.7,73.8,43.7,73.6z M60,79.8c-0.2-0.1-0.3-0.5-0.1-0.7c0.4-0.6,0.8-1.3,1.1-2c0.4-0.8,0.7-1.6,1-2.4 c0.1-0.3,0.4-0.4,0.6-0.3c0.3,0.1,0.4,0.4,0.3,0.6c-0.3,0.9-0.7,1.7-1.1,2.5c-0.4,0.7-0.8,1.4-1.2,2.1C60.5,79.9,60.2,80,60,79.8 C60,79.9,60,79.8,60,79.8z M86.8,87.5c-0.3-1.6-0.7-3.2-1.2-4.8c-0.1-0.3,0.1-0.5,0.3-0.6c0.3-0.1,0.5,0.1,0.6,0.3 c0.5,1.6,1,3.3,1.2,4.9c0,0.3-0.1,0.5-0.4,0.6c-0.1,0-0.2,0-0.3,0C87,87.7,86.9,87.6,86.8,87.5z M48.2,65.1 c-0.2-0.2-0.2-0.5,0-0.7c1.2-1.3,2.5-2.4,3.9-3.4c0.2-0.1,0.5-0.1,0.7,0.1c0.1,0.2,0.1,0.5-0.1,0.7c-1.4,0.9-2.6,2-3.7,3.2 c-0.2,0.2-0.4,0.2-0.6,0.1C48.3,65.2,48.3,65.1,48.2,65.1z M63.3,70c0.3-1.6,0.5-3.3,0.5-4.9c0-0.3,0.2-0.5,0.5-0.5 c0.3,0,0.5,0.2,0.5,0.5c-0.1,1.7-0.2,3.4-0.5,5.1c0,0.3-0.3,0.4-0.6,0.4c0,0-0.1,0-0.1,0C63.3,70.4,63.2,70.2,63.3,70z M83.8,78 c-0.7-1.5-1.5-3-2.4-4.3c-0.1-0.2-0.1-0.5,0.1-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.4,1.7,2.9,2.5,4.4c0.1,0.2,0,0.5-0.2,0.7 c-0.1,0.1-0.3,0.1-0.4,0C83.9,78.2,83.8,78.1,83.8,78z M56.5,59.6c-0.1-0.3,0.1-0.5,0.4-0.6c1.7-0.4,3.4-0.5,5.2-0.3 c0.3,0,0.5,0.3,0.4,0.5c0,0.3-0.3,0.5-0.5,0.4c-1.7-0.2-3.3-0.1-4.8,0.3c-0.1,0-0.2,0-0.3,0C56.6,59.8,56.5,59.7,56.5,59.6z  M78.4,69.7c-1.1-1.3-2.2-2.5-3.4-3.6c-0.2-0.2-0.2-0.5,0-0.7c0.2-0.2,0.5-0.2,0.7,0c1.2,1.1,2.4,2.4,3.5,3.7 c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0.1C78.5,69.8,78.4,69.7,78.4,69.7z M63.6,60.1c-0.2-1.6-0.4-3.3-0.8-4.9 c-0.1-0.3,0.1-0.5,0.4-0.6c0.3-0.1,0.5,0.1,0.6,0.4c0.4,1.7,0.7,3.4,0.8,5c0,0.3-0.2,0.5-0.4,0.5c-0.1,0-0.2,0-0.3,0 C63.7,60.4,63.6,60.2,63.6,60.1z M71,63.1c-1.4-0.9-2.9-1.7-4.4-2.3c-0.3-0.1-0.4-0.4-0.3-0.6c0.1-0.3,0.4-0.4,0.6-0.3 c1.5,0.6,3.1,1.4,4.6,2.3c0.2,0.1,0.3,0.5,0.1,0.7C71.6,63.1,71.3,63.2,71,63.1C71.1,63.1,71.1,63.1,71,63.1z M61.3,50.4 c-0.6-1.5-1.3-3-2.1-4.5c-0.1-0.2-0.1-0.5,0.2-0.7c0.2-0.1,0.5-0.1,0.7,0.2c0.9,1.5,1.6,3.1,2.2,4.6c0.1,0.3,0,0.5-0.3,0.6 c-0.1,0.1-0.3,0-0.4,0C61.5,50.6,61.4,50.5,61.3,50.4z M56.5,41.8c-1-1.3-2.1-2.6-3.2-3.8c-0.2-0.2-0.2-0.5,0-0.7 c0.2-0.2,0.5-0.2,0.7,0c1.2,1.3,2.3,2.6,3.3,3.9c0.2,0.2,0.1,0.5-0.1,0.7c-0.2,0.1-0.4,0.1-0.5,0C56.6,41.9,56.5,41.8,56.5,41.8z  M49.7,34.5c-1.2-1.1-2.5-2.1-3.9-3.2c-0.2-0.2-0.3-0.5-0.1-0.7c0.2-0.2,0.5-0.3,0.7-0.1c1.4,1,2.7,2.1,3.9,3.2 c0.2,0.2,0.2,0.5,0,0.7c-0.2,0.2-0.4,0.2-0.6,0.1C49.7,34.6,49.7,34.5,49.7,34.5z M41.7,28.5c-1.4-0.9-2.8-1.8-4.3-2.6 c-0.2-0.1-0.3-0.4-0.2-0.7c0.1-0.2,0.4-0.3,0.7-0.2c1.5,0.8,2.9,1.7,4.3,2.6c0.2,0.1,0.3,0.5,0.1,0.7 C42.2,28.6,42,28.6,41.7,28.5C41.7,28.5,41.7,28.5,41.7,28.5z"></path>
                          <path class="fill-white" d="M30.7,22.6C30.7,22.6,30.7,22.6,30.7,22.6c0,0,0.9,0.4,2.3,1c0.2,0.1,0.5,0,0.7-0.2c0.1-0.2,0-0.5-0.2-0.7 c0,0,0,0,0,0c-1.4-0.7-2.2-1-2.3-1c-0.3-0.1-0.5,0-0.6,0.3C30.3,22.2,30.4,22.5,30.7,22.6z"></path>
                          <path class="fill-warning" d="M22.6,23.6l-1.1-4.1c0,0-11.7-7.5-11.9-7.6c-0.1-0.2-4.9-6.5-4.9-6.5l8.2,3.5l12.2,8.4L22.6,23.6z"></path>
                          <polygon class="fill-warning opacity-6" points="31.2,12.3 4.7,5.4 25.1,17.2"></polygon>
                          <polygon class="fill-warning opacity-6" points="21.5,19.5 15,24.8 4.7,5.4 "></polygon>
                        </svg>
                      </figure>
                      <!-- Body -->
                      <div class="card-body">
                        <!-- Title -->
                        <h5 class="card-title text-white mb-2">Access 25K Online courses from 120 institutions, Start today!</h5>
                        <p class="text-white text-opacity-75">Here is the description of premium features which will allow users to get benefits and save a lot of money</p>
                        <!-- Button -->
                        <a href="#" class="btn btn-sm btn-dark mb-0">Purchase Premium</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li> <a class="dropdown-item" href="#">Music</a></li>
            <li> <a class="dropdown-item" href="#">Lifestyle</a></li>
            <li> <a class="dropdown-item" href="#">IT & software</a></li>
            <li> <a class="dropdown-item" href="#">Personal development</a></li>
            <li> <a class="dropdown-item" href="#">Health & fitness</a></li>
            <li> <a class="dropdown-item" href="#">Teaching</a></li>
            <li> <a class="dropdown-item" href="#">Social science</a></li>
            <li> <a class="dropdown-item" href="#">Math & logic</a></li>
            <li> <hr class="dropdown-divider"></li>
            <li> <a class="dropdown-item bg-primary text-primary bg-opacity-10 rounded-2 mb-0" href="#">View all categories</a></li>
          </ul>
        </li>
      </ul>
      <!-- Category menu END -->
  
      <!-- Main navbar START -->
      <div class="navbar-collapse collapse" id="navbarCollapse">
        <!-- Nav Search START -->
        <div class="col-xl-8">
          <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
            <div class="nav-item w-100">
              <form class="rounded position-relative">
                <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search" placeholder="Search" aria-label="Search">
                <button class="btn bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
                  type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
              </form>
            </div>
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
	  	require 'database/database.php';
	  
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
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        <img class="rounded-circle me-lg-2" src="../../uploading/<?=$user['profile_image']?>" alt="" style="width: 50px; height:50px;">
        <span class="d-none d-lg-inline-flex"><?=$user['name']?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-end border-0 rounded-0 rounded-bottom m-0">
		<form action="#" method="post">  
			<input type="hidden" name="id" value=<?=$user['user_id'] ?>>
			<button type="submit" class="btn btn-primary py-1 w-100 mb-4">My Profile</button>                                                                
		</form>
		<form action="#" method="post">  
			<input type="hidden" name="id" value=<?=$user['user_id'] ?>>
			<button type="submit" class="btn btn-primary py-1 w-100 mb-4">Edit Profile</button>                                                                
		</form>
        <a href="#" class="dropdown-item">Log Out</a>
        </div>
        </div>
		<?php endforeach ?>
    </div>
    </div>
  </nav>
  <!-- Logo Nav END -->
  </header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<!-- =======================
Main Banner START -->
<section class="bg-light">
	<div class="container pt-5 mt-0 mt-lg-5">

		<!-- Title and SVG START -->
		<div class="row position-relative mb-0 mb-sm-5 pb-0 pb-lg-5">
			<div class="col-lg-8 text-center mx-auto position-relative">

				<!-- SVG decoration -->
				<figure class="position-absolute top-100 start-50 translate-middle mt-4 ms-n9 pe-5 d-none d-lg-block">
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
				<h1>Education, talents, and career opportunities. All in one place.</h1>
				<p>Get inspired and discover something new today. Grow your skill with the most reliable online courses and certifications in marketing, information technology, programming, and data science. </p>
				
				<!-- Search course -->
				<div class="col-md-8 text-center mx-auto pb-5">
					<form class="bg-body shadow rounded p-2">
						<div class="input-group">
							<input class="form-control border-0 me-1" type="search" placeholder="Find your course">
							<button type="button" class="btn btn-primary mb-0 rounded z-index-1"><i class="fas fa-search"></i></button>
						</div>
					</form>
				</div>
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
<section>
	<div class="container">
		<div class="row g-4">

			<!-- Category item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card card-body shadow rounded-3">
					<div class="d-flex align-items-center">
						<!-- Icon -->
						<div class="icon-lg bg-purple bg-opacity-10 rounded-circle text-purple"><i class="fas fa-tools"></i></div>
						<div class="ms-3">
							<h5 class="mb-0"><a href="#" class="stretched-link">Math &amp; Logic</a></h5>
							<span>89 Courses</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Category item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card card-body shadow rounded-3">
					<div class="d-flex align-items-center">
						<!-- Icon -->
						<div class="icon-lg bg-danger bg-opacity-10 rounded-circle text-danger"><i class="fas fa-heartbeat"></i></div>
						<div class="ms-3">
							<h5 class="mb-0"><a href="#" class="stretched-link">Health &amp; Fitness</a></h5>
							<span>95 Courses</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Category item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card card-body shadow rounded-3">
					<div class="d-flex align-items-center">
						<!-- Icon -->
						<div class="icon-lg bg-blue bg-opacity-10 rounded-circle text-blue"><i class="fas fa-photo-video"></i></div>
						<div class="ms-3">
							<h5 class="mb-0"><a href="#" class="stretched-link">Photography</a></h5>
							<span>38 Courses</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Category item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card card-body shadow rounded-3">
					<div class="d-flex align-items-center">
						<!-- Icon -->
						<div class="icon-lg bg-success bg-opacity-10 rounded-circle text-success"><i class="fas fa-laptop-code"></i></div>
						<div class="ms-3">
							<h5 class="mb-0"><a href="#" class="stretched-link">Development</a></h5>
							<span>105 Courses</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Category item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card card-body shadow rounded-3">
					<div class="d-flex align-items-center">
						<!-- Icon -->
						<div class="icon-lg bg-orange bg-opacity-10 rounded-circle text-orange"><i class="fas fa-crop-alt"></i></div>
						<div class="ms-3">
							<h5 class="mb-0"><a href="#" class="stretched-link">Design</a></h5>
							<span>72 Courses</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Category item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card card-body shadow rounded-3">
					<div class="d-flex align-items-center">
						<!-- Icon -->
						<div class="icon-lg bg-primary bg-opacity-10 rounded-circle text-primary"><i class="fas fa-business-time"></i></div>
						<div class="ms-3">
							<h5 class="mb-0"><a href="#" class="stretched-link">Business</a></h5>
							<span>68 Courses</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Category item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card card-body shadow rounded-3">
					<div class="d-flex align-items-center">
						<!-- Icon -->
						<div class="icon-lg bg-info bg-opacity-10 rounded-circle text-info"><i class="fas fa-music"></i></div>
						<div class="ms-3">
							<h5 class="mb-0"><a href="#" class="stretched-link">Music</a></h5>
							<span>51 Courses</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Category item -->
			<div class="col-sm-6 col-lg-4 col-xl-3">
				<div class="card card-body shadow rounded-3">
					<div class="d-flex align-items-center">
						<!-- Icon -->
						<div class="icon-lg bg-warning bg-opacity-15 rounded-circle text-warning"><i class="fas fa-palette"></i></div>
						<div class="ms-3">
							<h5 class="mb-0"><a href="#" class="stretched-link">Painting</a></h5>
							<span>69 Courses</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
			<!-- Card Item START -->
			<div class="col-md-6 col-lg-4 col-xxl-3">
				<div class="card p-2 shadow h-100">
					<div class="rounded-top overflow-hidden">
						<div class="card-overlay-hover">
							<!-- Image -->
							<img src="assets/images/courses/4by3/17.jpg" class="card-img-top" alt="course image">
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
								<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Title -->
						<h6 class="card-title"><a href="#">The Complete Digital Marketing Course - 12 Courses in 1</a></h6>
						<!-- Badge and Price -->
						<div class="d-flex justify-content-between align-items-center mb-0">
							<div><a href="#" class="badge bg-info bg-opacity-10 text-info me-2"><i class="fas fa-circle small fw-bold"></i> Personal Development </a></div>
							<!-- Price -->
							<h5 class="text-success mb-0">$140</h5>
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

	<div class="container">
		<!-- Live course START -->
		<div class="row g-4 align-items-center justify-content-between">
			<!-- Content -->
			<div class="col-md-6 col-xl-4">
				<h2 class="fs-1">Today's Top Free Live Courses</h2>
				<p>How promotion excellent curiosity yet attempted happiness prosperous impression had conviction For every delay death ask to style Me mean able my by in they Extremity now strangers contained.</p>
				<a href="#" class="btn btn-orange mb-0">Get premium courses</a>
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
										<h5><a href="#">Learn the French Language: Complete Course</a></h5>
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
										<h5><a href="#">Time Management Mastery: Do More, Stress Less</a></h5>
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
										<h5><a href="#">English for Beginners: Intensive Spoken English Course</a></h5>
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

				<div class="bg-dark p-4 p-sm-5 rounded-3">
					<div class="row justify-content-center position-relative">
						<!-- Svg decoration START -->
						<figure class="fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y">
							<svg width="141px" height="141px">
								<path d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z"/>
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
									<a href="#" class="btn btn-warning mb-0">Sign Up for Free</a>
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
<?php require 'layouts/footer.php' ?>
</body>
</html>



