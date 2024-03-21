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
    '/blog_learning' => 'controllers/courses/blog_learning.controller.php',
    '/trainer_detail' => 'controllers/trainers/trainer.controller.php',
    '/orders' => 'controllers/students/payments/order.controller.php',

    '/trainer' => 'controllers/trainers/signin/login.controller.php',
    '/trainer_access' => 'controllers/trainers/signin/access.controller.php',
    '/trainer_home' => 'controllers/trainers/hom.controller.php',
    '/trainer_manage' => 'controllers/trainers/trainer.controller.php',
    '/trainer_edits' => 'controllers/trainers/edit.controller.php',
    '/trainer_password' => 'controllers/trainers/passwords/passwrod.controller.php',
    '/trainer_passwrod_comfirm' => 'controllers/trainers/passwords/getnew.controller.php',

];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}
require $page;
