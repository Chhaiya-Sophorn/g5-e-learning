<?php 
require_once 'database/database.php';
require_once 'models/trainer.passwrod.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $email = $_POST['email'];
    $current = $_POST['currentPassword'];
    $newpassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    if(getTrainerspaaword($email)['password'] === $current ){
        if($newpassword === $confirmPassword){
            if(preg_match('/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9@$!%*?&]{5,}$/i', $newpassword)){
                $statement = $connection->prepare('UPDATE users SET password = :password WHERE user_id = :id and roles_id=2');
                $statement->execute([
                    ':id' => $user_id,
                    ':password' => $newpassword,
                ]);
                require 'views/trainers/home.view.php';
            }else{
                require 'views/trainers/password.view.php';
            }
        }else{
            require 'views/trainers/password.view.php';
        }
    }else{
        require 'views/trainers/password.view.php';

    }
    
}
?>