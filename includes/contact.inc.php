<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $content = $_POST["message"];


    try {
        require_once 'dbh.inc.php';
        require_once 'contact_model.inc.php';
        require_once 'account_view.inc.php';
        
        // starts session
        require_once 'config_session.inc.php';
        

        set_contact($pdo, $name, $email, $phone, $subject, $content);


        header("Location: ../entry/contact.php?message=sent");

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