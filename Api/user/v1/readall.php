<?php



//database.php
include_once '../config/Database.php';
//include user.php
include_once '../classes/User.php';


//creating object for database 
$db = new Database();
$connection = $db->connect();

//creating object for student
$user = new  User($connection);



if ($_SERVER['REQUEST_METHOD'] === "GET") {

    //submit data

    if ($user->read_data()) {

        header("location: http://localhost:8100/Show/Api/Front/Dash.php");
        exit;
    } else {
        $message = "Failed to Read data";
        header("location: http://localhost:8100/Show/Api/Front/Dash.php?message=$message");
        exit;
    }
} else {

    $message = "Access denied";
    header("location: http://localhost:8100/Show/Api/Front/Dash.php?message=$message");
    exit;
}
