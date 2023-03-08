<?php
ini_set('display_errors', 1);

session_start();

//database include
require('../../user/config/Database.php');

$db = new Database();
$conn = $db->connect();


if (isset($_POST['user']) && isset($_POST['password']) && isset($_POST['role'])) {


    /* sanitize function  */
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    /* sanitize function call */
    $username = test_input($_POST['user']);
    $passwords = test_input($_POST['password']);
    $role = test_input($_POST['role']);



    if (empty($username)) {

        header('location: http://localhost:8100/Show/Api/Front/login/login.php?error=User Name is Required');
    } elseif (empty($passwords)) {

        header('location:http://localhost:8100/Show/Api/Front/login/login.php?error=User Password is Required');
    } else {
        // Hashing the password
        // $password = md5($password);
        $password = $passwords;
        $table_name = "Admin_user";
        $q = "SELECT * FROM $table_name WHERE name = '" . $username . "' AND password = '" . $password . "'";
        $sts = $conn->prepare($q);
        $sts->execute();
        $count = $sts->rowCount();
        if ($count > 0) {
            $result = $sts->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {



                /* for user loggin to user visit page */
                if ($row['role'] == "user") {

                    if (isset($_SESSION)) {
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['username'] = $row['name'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['password'] = $row['password'];
                        $_SESSION['role'] = $row['role'];
                        $_SESSION['description'] = $row['description'];
                    }


                    header("location: ../UserPage.php");
                    exit;
                }



                if ($row['password'] === $password && $row['role'] == $role) {

                    if (isset($_SESSION)) {
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['username'] = $row['name'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['password'] = $row['password'];
                        $_SESSION['role'] = $row['role'];
                        $_SESSION['description'] = $row['description'];
                    }

                    header('location: http://localhost:8100/Show/Api/Front/Dash.php');
                    exit;
                } else {

                    header('location: http://localhost:8100/Show/Api/Front/login/login.php');
                    exit;
                }
            }
        }
    }
} else {
    header('location: http://localhost:8100/Show/Api/Front/login/login.php');
    exit;
}
