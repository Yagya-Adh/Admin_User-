<?php
ini_set('display_errors', 1);
session_start();

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

require('../user/config/Database.php');
$db = new Database();
$conn = $db->connect();


/* admin aprove set and throw mesg */
// if (!isset($_POST['userphoto'])) {
//     header('location:http://localhost:8100/Show/Api/Front/profile.php?msg="admin will verify you"');
//     exit;
// }


// if (isset($_POST['userphoto'])) {
//     header('location:http://localhost:8100/Show/Api/Front/Dash.php?msga="Your photo is verified"');
//     exit;
// }




if (isset($_POST['upload']) && !empty($_POST['upload'])) {
    function randomString($n)
    {

        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $str = '';
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $str .= $characters[$index];
        }

        return $str;
    }

    $status = $_POST['status'];
    $title = $_POST['title'];

    $photo = $_FILES['photo'] ?? null;
    $photoPath = '';

    if (!is_dir('user_img')) {
        mkdir('user_img');
    }

    if ($photo && $photo['tmp_name']) {
        $photoPath = 'user_img/' . randomString(8) . '/' . $photo['name'];
        mkdir(dirname($photoPath));
        move_uploaded_file($photo['tmp_name'], $photoPath);

        $id = $_SESSION['id'];
        $name = $_SESSION['username'];
        $tab_nam = "Uphotos";

        $qu = "INSERT INTO " . $tab_nam . " SET  u_photo = ?, u_name = ?, u_id = ?, u_status = ?, u_title = ? ";
        $sq = $conn->prepare($qu);
        $sq->bindParam(1, $photoPath);
        $sq->bindParam(2, $name);
        $sq->bindParam(3, $id);
        $sq->bindParam(4, $title);
        $sq->bindParam(5, $status);

        if ($sq->execute()) {
            header('location: http://localhost:8100/Show/Api/Front/profile.php');
            exit;
        }
    }
}
