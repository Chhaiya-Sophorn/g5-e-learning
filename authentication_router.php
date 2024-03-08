<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/signin' => 'controllers/students/signin/signin.controller.php',
    '/signup' => 'controllers/students/signup/signup.controller.php',
    '/student' => 'controllers/students/home.controller.php',
    '/student_profile' => 'controllers/students/profile.controller.php',
    '/edit' => 'controllers/students/edit/edit.controller.php',
    '/get_edit' => 'controllers/students/edit/get.edit.controller.php',
    '/create_student' => 'controllers/students/signup/create.user.controller.php',
    '/access' => 'controllers/students/signin/access.controller.php',
    '/course' => 'controllers/courses/course.controller.php',
    '/trainerLogin' => 'controllers/trainer/trainerLogin.controller.php',
    '/trainerAccess' => 'controllers/trainer/trainerLoginProcess.controller.php',
    '/formChangeNumber' => 'controllers/students/forgetPassword/formChangePassword.controller.php',

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
