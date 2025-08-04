<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $fullname = $_POST["fullname"];
    $cardNum = $_POST["cardNum"];
    $roomNum = $_POST["roomNum"];
    $plan = $_POST["stayPeriod"];

    try {
        require_once 'login_model.inc.php';
        require_once 'config_session.inc.php';

        foreach ($result as $row) {
            $buyername = $row ["username"];
        }

        echo $buyername;

        $pdo = null;
        $stmt = null;

        die();

    } catch(PDOException $e) {
        die("Query failed" . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}