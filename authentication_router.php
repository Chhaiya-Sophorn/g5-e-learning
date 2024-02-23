<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/signin' => 'controllers/signin/signin.controller.php',
    '/signup' => 'controllers/signup/signup.controller.php',
    '/student' => 'controllers/student/student.controller.php',
    '/student_profile' => 'controllers/student/profile.controller.php',
    '/' => 'controllers/home/home.controller.php',
    '/edit' => 'controllers/edit.view.php/edit.controller.php',
    '/create_student' => 'controllers/signup/create.user.controller.php',

    // '/trainer-review' => 'controllers/reviews/review.controller.php',
    // '/trainer-classroom' => 'controllers/classroom/classroom.controller.php',
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}
require $page;
