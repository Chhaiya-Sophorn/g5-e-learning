<?php

function getTrainerspaaword(string $email): array
{
    global $connection;
    $statement =  $connection->prepare('SELECT * FROM users WHERE email = :email and roles_id=2');
    $statement->execute([
        ':email' => $email
    ]);
    return $statement->fetch();
}


function requirePasswordChange(string $email,string $currentPassword, string $new, string $confirmPassword){

    $information = [
    "currentPassword" => "",
    "newPassword" => "",
    "confirmPassword" => "",
    ];

    if(getTrainerspaaword($email)['password'] === $currentPassword ){
        if($new === $confirmPassword){
            if(!preg_match('/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9@$!%*?&]{5,}$/i', $new)){
                $information['newPassword'] = 'Password must contain at least one letter, one digit, one special character, and be 5 to 7 characters long.';  
            }
        }else{
            $information['confirmPassword'] = 'Password is not feet!';        
        }
    }else{
       $information['currentPassword'] = 'Password incrrect!';
    }
    return $information;
    }
