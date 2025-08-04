<?php
if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $username = $_POST["username"];
    $pswd = $_POST["pswd"];
    $email = $_POST["email"];
    $plan = $_POST["plan"];

    try {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        // Error handlers for inputs
        $errors = [];

        if (is_input_empty($username, $pswd, $email)) {
            $errors["empty_input"] = "Fill in all fields!";
        }
        if (is_email_invalid($email)){
            $errors["invalid_emails"] = "Email is invalid!";
        }
        if (is_username_taken($pdo, $username)){
            $errors["username_taken"] = "Username is taken!";
        }
        if (is_email_registered($pdo, $email)){
            $errors["email_used"] = "Email is already used";
        }
        // if (is_pic_chosen($fileSize)){
        //     $errors["no_pic"] = "No picture is selected";
        // }

        // starts session
        require_once 'config_session.inc.php';

        if ($errors){
            $_SESSION["errors_signup"] = $errors;                   // holds all the errors

            $signupData = [                                         // holds signup data, that is going to reshow
                "username" => $username,
                "email" => $email,
                "plan" => $plan,
                "created_at" => $date
            ];

            $_SESSION["signup_data"] = $signupData;        // holds the signup data info that is going to be reshown
            
            header("Location: ../entry/signup.php");
            die();
        }

        // $userid = get_id($pdo, $username);

        $_SESSION["signupName"] =  $username;

        // creates users
        create_user($pdo, $username, $pswd, $email, $plan);
        // $status = "1";
        // create_profile_pic($pdo, $userid);            
        header("Location: ../index.php?signup=success");
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