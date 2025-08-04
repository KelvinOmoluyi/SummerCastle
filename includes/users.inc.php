<?php
if (isset($_SESSION['admin_info'])){
    try {
        require_once "dbh.inc.php";
        require_once "config_session.inc.php";
        require_once "admin_model.inc.php";

        $username = $_SESSION["admin_info"]["username"];

        $users = get_all_users($pdo);

        require_once "users_view.inc.php";


    } catch(PDOException $e) {
        die("Query failed" . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}