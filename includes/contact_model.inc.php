<?php 

declare(strict_types=1);

function set_contact(object $pdo, string $name, string $email, string $phone, string $subject, string $content) {
    $query = "INSERT INTO message (username, phone, email, subject, content) VALUES (:name, :phone, :email, :subject, :content);";    //Prepared statement

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":subject", $subject);
    $stmt->bindParam(":content", $content);

    $stmt->execute();
}

function get_messages(object $pdo) {
    $query = "SELECT username, email, phone, subject, content FROM message ORDER BY id DESC";
    $stmt = $pdo->query($query);

    // Fetch all messages
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}