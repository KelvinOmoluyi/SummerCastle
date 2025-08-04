<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $username = $_POST["username"];
    $pswd = $_POST["pswd"];


    try {
        require_once 'dbh.inc.php';
        require_once 'admin_model.inc.php';
        require_once 'admin_contr.inc.php';
        require_once 'account_model.inc.php';
        require_once 'account_view.inc.php';

        // Error handlers for inputs
        $errors = [];

        if (is_input_empty($username, $pswd)) {
            $errors["empty_input"] = "Fill in all fields!";       
        }

        $result = get_admin($pdo, $username);

        if (is_admin_name_wrong($result)){
            $errors["login_incorrect"] = "Incorrect Admin login info!";
        }  

        if (!is_admin_name_wrong($result) && is_admin_password_wrong($pswd,  $result["pswd"])){
            $errors["login_incorrect"] = "Incorrect login info!";
        }
        
        // starts session
        require_once 'config_session.inc.php';

        $role = "admin";

        $real_admin = get_real_admin($pdo,$role, $username);
        
        if (is_user_real_admin($real_admin)){
            $errors["not_admin"] = "user not an admin!";
        }

        
        if ($errors){
            $_SESSION["errors_signup"] = $errors;                   // holds all the errors 

            header("Location: ../entry/adminSignin.php");
            die();
        }

        $_SESSION['admin_info'] = $result;


        // Admin session
        $_SESSION['admin'] = $result["role"];

        // admin account data
        $_SESSION['admin_info'] = $result;

        $startOfDay = date('Y-m-d 00:00:00');
        $endOfDay = date('Y-m-d 23:59:59');

        // gets daily new users
        $new_users = new_users($pdo, $startOfDay, $endOfDay);
        $_SESSION["new_users"] = count($new_users);

        // gets all users
        $all_users = get_all_users($pdo);
        $_SESSION["all_users"] = count($all_users);

        // gets all receipts
        $all_receipt = get_all_receipt($pdo);
        $_SESSION["all_receipt"] = count($all_receipt);

        // gets all messages
        $message = get_messages($pdo);
        $_SESSION["all_messages"] = $message;

        // gets daily rooms sold
        $new_sold = new_receipt($pdo, $startOfDay, $endOfDay);
        $_SESSION["new_sold"] = count($new_sold);

        $newSession_Id = session_create_id();
        $sessionId = $newSession_Id . "_" . $result["id"];  // appending a new seesion id with the user id
        session_id($sessionId);

        // assign the queried identity to a variable to avoid quering the database over and over
        
        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);
        
        // regenerates the session data every interval
        $_SESSION['last_regeneration'] = time();

        header("Location: ../admin/homepage.php?login=success");

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