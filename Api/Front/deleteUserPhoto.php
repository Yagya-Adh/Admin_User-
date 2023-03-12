<?php

// echo "del";

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// exit;

// id = $row['id'] & uid = $row['u_id']


require('../user/config/Database.php');

$da = new Database();

$conn = $da->connect();

if (isset($_GET['submit'])) {

    $tab = "Uphotos";
    $id = $_GET['id'];

    $q = "DELETE FROM " . $tab . " WHERE id = " . $id;
    $sts = $conn->prepare($q);
    $sts->execute();

    if ($sts->execute()) {
        header('location : http://localhost:8100/Show/Api/Front/profile.php?success="Successful!"');
        exit;
    }


    // $id = $_POST['id'];
    // $del = "DELETE FROM users WHERE id = ?";
    // $stsDEL = $conn->prepare($del);
    // $stsDEL->bindParam(1, $id, PDO::PARAM_INT);
}
