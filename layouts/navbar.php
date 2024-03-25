<header class="navbar-light navbar-sticky navbar-transparent">
  <nav class="navbar navbar-expand-xl">
    <div class="container">
      <!-- Logo START -->
      <a class="navbar-brand" href="#">
        <img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
        <img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
      </a>
      <!-- Responsive navbar toggler -->
      <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
        <span class="me-2"><i class="fas fa-search fs-5"></i></span>
      </button>

      <!-- Main navbar START -->
      <div class="navbar-collapse collapse" id="navbarCollapse">

      </div>

      <!-- Right header content START -->
      <!-- Add to cart -->
      <div class="navbar-nav position-relative overflow-visible me-3">
        <a href="signin" class="nav-link"> <i class="fas fa-shopping-cart fs-5"></i></a>
        <span class="position-absolute top-0 start-100  mt-xl-2 ms-n1"></span>
      </div>

      <!-- Signout button  -->
      <div class="navbar-nav d-none d-lg-inline-block">
        <a href="/signin"><button class="btn btn-danger-soft mb-0"><i class="fas fa-sign-in-alt me-2"></i>Sign Up</button></a>
      </div>

      <!-- Page menu START -->
      <ul class="navbar-nav navbar-nav-scroll dropdown-clickable">
        <li class="nav-item dropdown dropdown-menu-shadow-stacked">
          <a class="nav-link" href="#" id="categoryMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-users me-1 d-none d-xl-inline-block"></i>
            <span class="d-none d-xl-inline-block">Page</span>
          </a>
          <ul class="dropdown-menu z-index-unset" aria-labelledby="categoryMenu">
            <li> <a class="dropdown-item" href="/trainer">Trainer</a> </li>
            <li> <a class="dropdown-item" href="/admin">Admin</a> </li>
            <li> <a class="dropdown-item" href="/signin">Student</a> </li>
          </ul>
        </li>
      </ul>

    </div>
  </nav>
</header>