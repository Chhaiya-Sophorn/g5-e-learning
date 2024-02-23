<?php
require 'utils/url.php';
require 'database/database.php';
if (urlIs("/admin")) { 
    require "admin_router.php";
} else if (urlIs('/signin') || urlIs('/signup') || urlIs('/student') || urlIs('/student_profile') || urlIs('/edit') || urlIs('/create_student') || urlIs('/access')) {
    require "authentication_router.php";
} else if (urlIs('/start_admin')) {
    require "start_admin.php";
}else{
    require 'router.php';
}


