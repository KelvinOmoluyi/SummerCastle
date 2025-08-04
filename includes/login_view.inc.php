<?php 

declare(strict_types=1);



function output_username(){
    if (isset($_SESSION["user_id"])){                   // checks if you are logged in
        echo '<div class="name">
                <p>Currently signed as:</p>
                <h3>' . htmlspecialchars($_SESSION["user_username"]) . '</h3>
                <hr class="intro-notice">
                <br>
                <p> Note: users will get logged out in 30 mins </P>
            </div>';
    } else {
        echo '<p>Welcome to your perfect getaway! Discover a world 
                    where comfort meets adventure, and every moment is 
                    crafted to create unforgettable memories. Whether 
                    you’re seeking relaxation, exploration, or a bit 
                    of both, we’re here to make your dream vacation a reality.
                </p>';
    }
}
       
function check_login_errors() {
    if(isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];

        foreach($errors as $error){
            echo '<p class="errors">' . $error . '</p>';
        }

        unset($_SESSION["errors_signup"]);
    } else if (isset($_GET['login']) && $_GET['login'] === "success") {
        
    }
}
