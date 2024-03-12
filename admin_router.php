<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/admin' => 'controllers/admin/admin.controller.php',

    // This is for Courses page
    '/courses_as_admin' => 'controllers/admin/courses/course.controller.php',
    '/courseEdit' => 'controllers/admin/courses/course_edit.controller.php',
    // '/trainer-review' => 'controllers/reviews/review.controller.php',
    '/createCourse' => 'controllers/admin/courses/create_course.controller.php',
    '/viewCourse' => 'controllers/admin/courses/course.controller.php',
    '/updateCourse' => 'controllers/admin/courses/update_course.controller.php',
    // '/trainer-classroom' => 'controllers/classroom/classroom.controller.php',

    //This is for category page
    '/categories' => 'controllers/admin/category/category.controller.php',
    '/editCategory' => 'controllers/admin/category/category_edit.controller.php',
    '/deleteCategory' => 'controllers/admin/category/category_delete.controller.php',


    '/list_trainer' => 'controllers/admin/trainer/trainer.controller.php',
    '/add_trainer' => 'controllers/admin/trainer/add.controller.php',
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
}
 else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}
require "layouts/admin/header.php";
require "layouts/admin/navbar.php";
require $page;
require "layouts/admin/footer.php";