<?php 

declare(strict_types=1);



function send_contact_sent() {
    if(isset($_GET["message"]) && $_GET["message"] === "sent"){
        echo "<br>";
        echo "<h3> - - - - Message sent - - - -</h3>";
    }
}