<?php 

declare(strict_types=1);


// $AccountData = get_user_info($pdo, $username);

function get_user_info(object $pdo, string $username) {
    $query = "SELECT * FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);    // its fecthing it as an assiociative array
    return $result;
}