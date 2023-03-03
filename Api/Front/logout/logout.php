<?php

$time = $_GET['time'];

if (empty($time)) {

    session_start();
    session_destroy();
    session_unset();
    header('Location: ../../Front/login/login.php');
    exit;
} else {

    header('Location: ../../Front/login/login.php');
}
