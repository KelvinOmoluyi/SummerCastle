<?php


function output_details(){              // checks if you are logged in
    foreach ($_SESSION["AccountData"] as $info){
        $username = $info["username"];
        $gmail = $info["email"];
        $plan = $info["plan"];
        $date = $info["created_at"];
    }

    echo '<div class="details">
                <div class="acc-pic">
                    <img src="../uploads/Profile'.$info["id"].".png".'">
                </div>
                <a href ="UploadImage.php">Edit Image</a>
                <div class="info">
                    <p>Name: '. $username .'
                    </p>
                </div>
                <div class="info">
                    <p>Gmail: '. $gmail .'</p>
                </div>
                <div class="info">
                    <p>Request: '. $plan .'</p>
                </div>
                <div class="info">
                    <p>Registration Date: '. $date .'</p>
                </div>
            </div>';

}

function user_pic(){              // checks if you are logged in
    foreach ($_SESSION["AccountData"] as $info){
        $username = $info["username"];
    }

    echo '<div class="details">
                <div class="acc-pic">
                    <img src="../uploads/Profile'.$info["id"].".png".'">
                </div>';

}
