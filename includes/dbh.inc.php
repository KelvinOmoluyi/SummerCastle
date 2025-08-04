<?php 

$host = "localhost";
$dbusername = "root";
$dbpassword = "kelvincoding";
$dbname = "summercastledb";
$dsn = "mysql:host=$host;dbname=$dbname";


try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Problem conecting to database" . $e->getMessage());
}