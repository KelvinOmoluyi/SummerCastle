<?php 

declare(strict_types=1);

function register_payment(object $pdo, string $fullname, string $roomNum, string $stayPeriod, string $user_id) {
    $query = "INSERT INTO transaction (name, rooms, stay, user_id) VALUES (:name, :rooms, :stay, :user_id);";    //Prepared statement

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":name", $fullname);
    $stmt->bindParam(":rooms", $roomNum);
    $stmt->bindParam(":stay", $stayPeriod);
    $stmt->bindParam(":user_id", $user_id);

    $stmt->execute();
}