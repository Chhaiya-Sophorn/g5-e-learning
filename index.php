<?php
require 'utils/url.php';
require 'database/database.php';
if (urlIs("/admin") || urlIs('/courses_as_admin') || urlIs('/courseEdit') || urlIs('/createCourse') || urlIs('/categories') || urlIs('/viewCourse') || urlIs('/updateCourse')|| urlIs("/admin") || urlIs('/addCourse') || urlIs('/categories') || urlIs('/list_trainer') ) { 
    require "admin_router.php";
} else if (urlIs('/signin') || urlIs('/signup') || urlIs('/student') || urlIs('/student_profile') || urlIs('/edit') || urlIs('/create_student') || urlIs('/access') || urlIs('/get_edit') || urlIs('/course') || urlIs('/blog_learning')|| urlIs('/trainer_detail') || urlIs('/trainer') || urLIs('/trainer_access')) {
    require "authentication_router.php";
} else if (urlIs('/start_admin')) {
    require "start_admin.php";
}else{
    require 'router.php';
}


