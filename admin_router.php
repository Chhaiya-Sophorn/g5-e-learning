<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/admin' => 'controllers/admin/admin.controller.php',

    // This is for Courses page
    '/courses_as_admin' => 'controllers/courses_as_admin/course.controller.php',
    '/courseEdit' => 'controllers/courses_as_admin/course_edit.controller.php',
    // '/trainer-review' => 'controllers/reviews/review.controller.php',
    '/createCourse' => 'controllers/courses_as_admin/create_course.controller.php',
    '/viewCourse' => 'views/courses_as_admin/course.view.php',
    '/updateCourse' => 'controllers/courses_as_admin/update_course.controller.php',
    // '/trainer-classroom' => 'controllers/classroom/classroom.controller.php',

    //This is for category page
    '/categories' => 'controllers/category/category.controller.php',
    '/editCategory' => 'controllers/category/category_edit.controller.php',
    '/deleteCategory' => 'controllers/category/category_delete.controller.php',
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