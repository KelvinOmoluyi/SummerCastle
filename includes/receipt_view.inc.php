<?php 

declare(strict_types=1);


require_once "config_session.inc.php";


function output_receipt(){                // checks if you are logged in
    echo '<div class="receipt-details">
                <div class="info">
                    <p>Full Name    ---------- '. $_SESSION["receiptData"]["fullname"] .'</p>
                </div>
                <div class="info">
                    <p>Credit card number    ---------- '. $_SESSION["receiptData"]["cardNum"] .'</p>
                </div>
                <div class="info">
                    <p>Number of rooms   ---------- '. $_SESSION["receiptData"]["roomNum"] .'</p>
                </div>
                <div class="info">
                    <p>Period of stay    ---------- '. $_SESSION["receiptData"]["stayPeriod"] .'</p>
                </div>
            </div>';
}