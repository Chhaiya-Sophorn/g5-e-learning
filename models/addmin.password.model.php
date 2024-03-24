<?php

function getAdminspaaword(): array
{
    global $connection;
    $statement =  $connection->prepare('SELECT * FROM users WHERE roles_id=1');
    $statement->execute();
    return $statement->fetch();
}


function requirePasswordChanges(string $currentPassword, string $new, string $confirmPassword){

    $information = [
    "currentPassword" => "",
    "newPassword" => "",
    "confirmPassword" => "",
    ];

    if(getAdminspaaword()['password'] === $currentPassword ){
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
