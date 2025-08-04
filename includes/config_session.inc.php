<?php
ini_set('session.use_only_cookie', 1);
ini_set('session.use_strict_mode', 1);

// Manditory for all cookies
session_set_cookie_params([
    'lifetime' => 1800,         // this says the particular cookie will last only 30 mins
    'domain' => 'localhost',    // you can add other domains like example.com
    'path' => '/',              // only backwards slash tell it to work in all the pages in the web
    'secure' => true,           // makes sure the cookie works only on websites with https connection
    'httponly' => true
]);


session_start();

if (isset($_SESSION["user_id"])){
    // regenerating cookies
    if (!isset($_SESSION['last_regeneration'])) {

        regenerate_session_id_loggedin();
    } else {

        $interval = 60 * 30;

        if(time() - $_SESSION['last_regeneration'] >= $interval) {

            regenerate_session_id_loggedin();
        }
    }
} else {
    // regenerating cookies
    if (!isset($_SESSION['last_regeneration'])) {

        regenerate_session_id();
    } else {

        $interval = 60 * 30;

        if(time() - $_SESSION['last_regeneration'] >= $interval) {

            regenerate_session_id();
        }
    }
}


function regenerate_session_id_loggedin() {
    session_regenerate_id(true);

    $userid = $_SESSION["user_id"];
    $newSession_Id = session_create_id();
    $sessionId = $newSession_Id . "_" . $userid;  // appending a new seesion id with the user id
    session_id($sessionId);

    $_SESSION['last_regeneration'] = time();
}

function regenerate_session_id() {
    session_regenerate_id(true);
    $_SESSION['last_regeneration'] = time();
}
