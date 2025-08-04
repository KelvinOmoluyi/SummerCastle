<?php 

declare(strict_types=1);

function signup_inputs(){
    // for username
    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])){
        echo '<div class="input-field">
            <input type="text" placeholder="Full Name" name="username" id="name" autocomplete="off" value = "' . $_SESSION["signup_data"]["username"] . '">
            </div>';

    } else {
        echo '<div class="input-field">
                <input type="text" placeholder="Full Name" name="username" id="username" autocomplete="off">
            </div>';
    }

    // for email
    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"])
    && !isset($_SESSION["errors_signup"]["invalid_emails"])){   // make sure to check for all the errors
        echo '<div class="input-field">
                <input type="email" placeholder="Email Address" name="email" id="email" autocomplete="off" value = "' . $_SESSION["signup_data"]["email"] . '">
            </div>';
    } else {
        echo '<div class="input-field">
                <input type="email" placeholder="Email Address" name="email" id="email" autocomplete="off">
            </div>';
    }

    // for password
    echo '<div class="input-field"> 
            <input type="password" placeholder="Password" name="pswd" id="pswd" autocomplete="off">
        </div>';


    // for plans
    if (isset($_SESSION["signup_data"]["plan"]) && 
    !isset($_SESSION["errors_signup"]["plan_invalid"])){   // make sure to check for all the errors
    echo '<div class="input-field">
            <p>Choose your plan</p>
            <input type="text" placeholder="Enter Request" name="plan" id="plan" autocomplete="off" value = "' . $_SESSION["signup_data"]["plan"] . '">
        </div>';
    } else {
        echo '<br>
                <p>Choose a plan</p>
                <select name="plan" id="plan">
                    <option value="Travels">Travels</option>
                    <option value="Hotel Booking">Hotel Bookings</option>
                </select>';
    }
}

 function check_signup_errors(){ 
    if (isset($_SESSION['errors_signup'])){
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p class="errors">'. $error .'</p>';
        }

        unset($_SESSION['errors_signup']);  // note delete session variable you dont need
    } else if(isset($_GET["signup"]) && $_GET["signup"] === "sucess"){
        echo "<br>";
        echo "<h3>Signup Success</h3>";
    }
 }

function output_new_username(){                  // checks if you are logged in
    if (!isset($_SESSION["user_id"])){ 
        echo '<div class="name">
                <p>Welcome to SummerCastle:</p>
                <h3>' . htmlspecialchars($_SESSION["signupName"]) . '</h3>
                <hr class="intro-notice">
                <br>
                <p> Now log into the website to access our service </P>
            </div>';
    }
}