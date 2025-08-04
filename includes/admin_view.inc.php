<?php 

declare(strict_types=1);

       
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

$_SESSION['admin_info'];
function output_admin_name(){
    if (isset($_SESSION['admin'])){                   // checks if you are logged in
        echo '<p> '. $_SESSION['admin_info']['username'] .'<p>';
    } else {
        echo '<p>Error occured</p>';
    }
}

// displays picture
function output_pic() {
    if (isset($_SESSION['admin'])){                   // checks if you are logged in
        echo '<img src="../uploads/Profile'.$_SESSION["admin_info"]["id"].".png".'">';
    } else {
        echo '<p>Error</p>';
    }
    
}

function output_admin_details(){
    echo '<div class="details">
                <div class="acc-pic">
                    <img src="../uploads/Profile'.$_SESSION["admin_info"]["id"].".png".'">
                </div>
                <a href ="editPic.php">Edit Image</a>
                <div class="info">
                    <p>Name: '. $_SESSION["admin_info"]["username"] .'
                    </p>
                </div>
                <div class="info">
                    <p>Gmail: '. $_SESSION["admin_info"]["email"] .'</p>
                </div>
                <div class="info">
                    <p>Role: '. $_SESSION["admin_info"]["role"] .'</p>
                </div>
                <div class="info">
                    <p>Registration Date: '. $_SESSION["admin_info"]["created_at"] .'</p>
                </div>
            </div>';

}

function display_new_daily_users(){
    echo '<h1>' . $_SESSION["new_users"] . '</h1>';
}

function all_users(){
    echo '<h1>' . $_SESSION["all_users"] . '</h1>';
}

function all_receipts(){
    echo '<h1>' .  $_SESSION["all_receipt"] . '</h1>';
}

function daily_receipts(){
    echo '<h1>' .  $_SESSION["new_sold"] . '</h1>';
}
