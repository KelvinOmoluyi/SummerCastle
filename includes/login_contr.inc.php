<?php 

declare(strict_types=1);

function is_input_empty(string $username, string $pswd) {
    if(empty($username) || empty($pswd)){
        return true;
    } else {
        return false;
    }
}

function is_username_wrong(bool|array $result) {
    if (!$result){
        return true;
    } else {
        return false;
    }
}

function is_password_wrong(string $pswd, string $hashedpswd) {
    if (!password_verify($pswd, $hashedpswd)){
        return true;
    } else {
        return false;
    }
}

function is_role_true(string $userRole, string $role) {
    if (!($userRole === $role)){
        return true;
    } else {
        return false;
    }
}