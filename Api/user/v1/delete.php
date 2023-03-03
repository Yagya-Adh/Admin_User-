<?php

require('../config/Db.php');

$db = new Database();
$conn = $db->connect();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id = $_GET['id'];

    $q = "DELETE FROM users WHERE id = ?";
    $sts = $conn->prepare($q);
    $sts->bindParam(1, $id, PDO::PARAM_INT);

    if ($sts->execute()) {
        header('location: http://localhost:8100/Show/Api/Front/Dash.php?message=Deleted successfully');
        exit;
    } else {
        header('location: http://localhost:8100/Show/Api/Front/Dash.php?message=Sorry this id can not be delete');
        exit;
    }
} else {
    header('location: http://localhost:8100/Show/Api/Front/Dash.php?message=Something error occur');
    exit;
}
