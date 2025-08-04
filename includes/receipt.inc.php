<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $fullname = $_POST["fullname"];
    $cardNum = $_POST["cardNum"];
    $roomNum = $_POST["roomNum"];
    $stayPeriod = $_POST["stayPeriod"];


    try {

        require_once "dbh.inc.php";
        require_once "receipt_model.php";

        $receiptData = [
            "fullname" => $fullname,
            "cardNum" => $cardNum,
            "roomNum" => $roomNum,
            "stayPeriod" => $stayPeriod
        ];


        require_once "config_session.inc.php";

        $user_id = $_SESSION["user_id"];

        register_payment($pdo, $fullname, $roomNum, $stayPeriod, $user_id);
        
        $_SESSION["receiptData"] = $receiptData;

        header("Location: ../rooms/receipt.php?payment=success");

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