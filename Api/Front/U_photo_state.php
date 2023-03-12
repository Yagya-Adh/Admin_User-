<?php
require('../user/config/Database.php');
$db = new Database;
$conn = $db->connect();

$Table = "Uphotos";
$id = $_POST['id'];
$pending = 'pending';
$remove = 'remove';


// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// echo $_POST['change'];

// exit;
$_POST['change'] ?? null;

if ($_POST['change'] == 'pending') {

    // Get the ID from the form
    $id = $_POST['id'];

    // Set the value to update
    $pending = $_POST['change'];

    // Prepare and execute the SQL query
    $q = "UPDATE `" . $Table . "` SET `u_status` = :pending WHERE `id` = :id";
    $stmt = $conn->prepare($q);
    $stmt->bindParam(':pending', $pending);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Redirect to a success page
    header("Location: http://localhost:8100/Show/Api/Front/userdata_update.php?success=pending");
    exit;
}



if ($_POST['change'] == 'added') {

    // Get the ID from the form
    $id = $_POST['id'];

    // Set the value to update
    $added = $_POST['change'];

    // Prepare and execute the SQL query
    $q = "UPDATE `" . $Table . "` SET `u_status` = :added WHERE `id` = :id";
    $stmt = $conn->prepare($q);
    $stmt->bindParam(':added', $added);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Redirect to a success page
    header("Location: http://localhost:8100/Show/Api/Front/userdata_update.php?success=added");
    exit;
}


if ($_POST['change'] == 'remove') {

    // Get the ID from the form
    $id = $_POST['id'];

    // Prepare and execute the SQL query
    $q = "DELETE FROM `" . $Table . "` WHERE `id` = :id";
    $stmt = $conn->prepare($q);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Redirect to a success page
    header("Location: http://localhost:8100/Show/Api/Front/userdata_update.php?success=remove");
    exit;
}
