<?php 
require_once 'database/database.php';
require_once 'models/addmin.password.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $current = $_POST['currentPassword'];
    $newpassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    if(getAdminspaaword()['password'] === $current ){
        if($newpassword === $confirmPassword){
            if(preg_match('/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9@$!%*?&]{5,}$/i', $newpassword)){
                $statement = $connection->prepare('UPDATE users SET password = :password WHERE roles_id=1');
                $statement->execute([
                    ':password' => $newpassword,
                ]);
                header('location:/admin_home');
            }else{
                require 'views/admin/password.view.php';
            }
        }else{
            require 'views/admin/password.view.php';
        }
    }else{
        require 'views/admin/password.view.php';

    }
    
}
?>