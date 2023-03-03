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



if ($_SERVER['REQUEST_METHOD'] === "POST") {
    //submit data

    $user->name = $_POST['name'];
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];
    $user->role = $_POST['role'];
    $user->description = $_POST['description'];




    if ($user->create_data()) {
        $message = "Successfuly has been created";
        header("location: http://localhost:8100/Show/Api/Front/Dash.php?message=$message");
        exit;
    } else {
        $message = "Failed to insert data";
        header("location: http://localhost:8100/Show/Api/Front/Dash.php?message=$message");
        exit;
    }
} else {

    $message = "Access denied";
    header("location: http://localhost:8100/Show/Api/Front/Dash.php?message=$message");
    exit;
}
