<?php 
require_once 'database/database.php';
require_once 'models/student.password.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['id'];
    $email = $_POST['email'];
    $current = $_POST['currentPassword'];
    $newpassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    if(getTrainerspaaword($email)['password'] === $current ){
        if($newpassword === $confirmPassword){
            if(preg_match('/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[@$!%*?&])[a-zA-Z0-9@$!%*?&]{5,7}$/', $newpassword)){
                $statement = $connection->prepare('UPDATE users SET password = :password WHERE user_id = :id and roles_id=3');
                $statement->execute([
                    ':id' => $user_id,
                    ':password' => $newpassword,
                ]);
                require 'views/students/profile.view.php';
            }else{
                require 'views/students/password.view.php';
            }
        }else{
            require 'views/students/password.view.php';
        }
    }else{
        require 'views/students/password.view.php';

    }
    
}
?>