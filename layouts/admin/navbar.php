<!-- Sidebar Start -->

<?php require_once 'models/admin.access.php'; ?>
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 style='color:#F28500'>E-learning</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="uploading/<?=getAdmin()['profile_image']?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?=getAdmin()['name']?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/admin_home" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="/categories" class="nav-item nav-link"><i class="fa fa-th-large me-2" ></i>Categories</a>
                    <a href="/courses_as_admin" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Course</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="bi bi-people me-2"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="/list_trainer" class="dropdown-item">Trainers</a>
                            <a href="/list_student" class="dropdown-item">Students</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
<!-- Sidebar End -->
<!-- Content Start -->
  <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars "style='color:#F28500'></i>
                </a>
                <!-- <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form> -->
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="uploading/<?=getAdmin()['profile_image']?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?=getAdmin()['name']?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="admin_password" class="dropdown-item">Change password</a>
                            <a href="/admin" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->