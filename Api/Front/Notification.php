<?php

// echo "Notification";
require('../user/config/Database.php');


$request_get = '';


if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $db = new Database;

    $conn = $db->connect();

    $table_na = "admin_request";
    $q = "SELECT * FROM " . $table_na;
    $sts = $conn->prepare($q);
    $out = $sts->execute();
    $count = $sts->rowCount();
    $ob = $sts->fetchAll();
    // echo "<pre>";
    // print_r($ob);
    // echo "</pre>";


    /* update */

    $up = "UPATE " . $table_na . " SET request_get='', response_back='', client_id=''";
}
