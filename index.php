<?php
require 'utils/url.php';
require 'database/database.php';
if (urlIs("/admin") || urlIs('/courses_as_admin') || urlIs('/courseEdit') || urlIs('/createCourse') || urlIs('/categories') || urlIs('/viewCourse') || urlIs('/updateCourse')){ 
    require "admin_router.php";
}
 else if (urlIs('/signin') || urlIs('/signup') || urlIs('/student') || urlIs('/student_profile') || urlIs('/edit') || urlIs('/create_student') || urlIs('/access') || urlIs('/get_edit')) {
    require "authentication_router.php";
} else if (urlIs('/start_admin')) {
    require "start_admin.php";
}else{
    require 'router.php';
}


