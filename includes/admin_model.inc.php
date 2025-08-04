<?php 

declare(strict_types=1);

function get_admin(object $pdo, string $username) {
    $query = "SELECT * FROM users WHERE username = :username;";     // selects all
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);    // its fecthing it as an assiociative array
    return $result;
}

function get_real_admin(object $pdo, string $role, string $username) {
    $query = "SELECT * FROM users WHERE role = :role AND username = :username;";     // selects all
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":role", $role);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);    // its fecthing it as an assiociative array
    return $result;
}

function new_users(object $pdo, string $startOfDay, string $endOfDay) {
    $query = "SELECT * FROM users WHERE created_at >= :startOfDay AND created_at <= :endOfDay;";     // selects all

    $stmt = $pdo->prepare($query);
    $stmt->execute(['startOfDay' => $startOfDay, 'endOfDay' => $endOfDay]);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);    // its fecthing it as an assiociative array
    return $result;
}

function get_all_users($pdo) {
    $query = "SELECT * FROM users;";     // selects all
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);    // its fecthing it as an assiociative array
    return $result;
}

function get_all_receipt($pdo) {
    $query = "SELECT * FROM transaction;";     // selects all
    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);    // its fecthing it as an assiociative array
    return $result;
}

function new_receipt(object $pdo, string $startOfDay, string $endOfDay) {
    $query = "SELECT * FROM transaction WHERE created_at >= :startOfDay AND created_at <= :endOfDay;";     // selects all

    $stmt = $pdo->prepare($query);
    $stmt->execute(['startOfDay' => $startOfDay, 'endOfDay' => $endOfDay]);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);    // its fecthing it as an assiociative array
    return $result;
}

function get_messages(object $pdo) {
    $query = "SELECT username, email, phone, subject, content FROM message ORDER BY id DESC";
    $stmt = $pdo->query($query);

    // Fetch all messages
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}