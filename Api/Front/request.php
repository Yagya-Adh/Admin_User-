<?php

use app\core\Request;

require('../user/config/Database.php');
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



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "request server post user";
}

// if (isset($_POST['submit'])) {
//     echo "request server post user";
// }
