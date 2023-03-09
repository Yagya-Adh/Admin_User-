<?php

$time = $_GET['time'];

if (empty($time)) {



    session_start();

    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header('location: http://localhost:8100/Show/Api/Front/login/login.php');
    exit;
} else {

    header('Location: ../../Front/login/login.php');
}
