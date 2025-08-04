<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $username = $_POST["username"];
    $pswd = $_POST["pswd"];


    try {
        require_once 'dbh.inc.php';
        require_once 'login_model.inc.php';
        require_once 'login_contr.inc.php';
        require_once 'account_model.inc.php';
        require_once 'account_view.inc.php';

        // Error handlers for inputs
        $errors = [];

        if (is_input_empty($username, $pswd)) {
            $errors["empty_input"] = "Fill in all fields!";       
        }

        $result = get_user($pdo, $username);

        if (is_username_wrong($result)){
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        if (!is_username_wrong($result) && is_password_wrong($pswd,  $result["pswd"])){
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        // starts session
        require_once 'config_session.inc.php';
    
        // useranme session data
        $_SESSION["Accname"] = $username;

        if ($errors){
            $_SESSION["errors_signup"] = $errors;                   // holds all the errors
            
            header("Location: ../entry/signin.php");
            die();
        }

        $newSession_Id = session_create_id();
        $sessionId = $newSession_Id . "_" . $result["id"];  // appending a new seesion id with the user id
        session_id($sessionId);

        // assign the queried identity to a variable to avoid quering the database over and over
        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);
        
        // regenerates the session data every interval
        $_SESSION['last_regeneration'] = time();

        header("Location: ../index.php?login=success");

        $username = $_SESSION["Accname"];

        $AccountData = get_user_info($pdo, $username);

        $_SESSION["AccountData"] = $AccountData;

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