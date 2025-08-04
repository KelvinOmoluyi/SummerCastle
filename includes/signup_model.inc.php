<?php 

declare(strict_types=1);

function get_username(object $pdo, string $username) {
    $query = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);    // its fecthing it as an assiociative array
    return $result;
}

function get_email(object $pdo, string $email) {
    $query = "SELECT email FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);    // its fecthing it as an assiociative array
    return $result;
}

function get_id(object $pdo, string $username) {
    $query = "SELECT id FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);    // its fecthing it as an assiociative array
    return $result;
}

// function get_picure(object $pdo, string $email) {
//     $query = "SELECT  FROM users WHERE email = :email;";
//     $stmt = $pdo->prepare($query);
//     $stmt->bindParam(":email", $email);
//     $stmt->execute();

//     $result = $stmt->fetch(PDO::FETCH_ASSOC);    // its fecthing it as an assiociative array
//     return $result;
// }

function set_user(object $pdo, string $username, string $pswd, string $email, string $plan) {
    $query = "INSERT INTO users (username, pswd, email, plan) VALUES (:username, :pswd, :email, :plan);";    //Prepared statement

    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
    $hashedpswd = password_hash($pswd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pswd", $hashedpswd);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":plan", $plan);

    $stmt->execute();
}

// function set_profile_pic(object $pdo, string $userid) {
//     $query = "INSERT INTO profileimg (userid) VALUES (:userid);";    //Prepared statement

//     $stmt = $pdo->prepare($query);

//     $stmt->bindParam(":userid", $userid);

//     $stmt->execute();
// }