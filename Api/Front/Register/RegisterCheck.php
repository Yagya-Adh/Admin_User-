<?php

require('../../user/config/Database.php');

$db = new Database();
$conn = $db->connect();

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;

// echo "Register";



$fname = $_POST['fname'];
$lname = $_POST['lname'];

$gender = $_POST['gender'];
$role = $_POST['role'];

$email = $_POST['email'];
$password = $_POST['fname'];
$cpassword = $_POST['cpassword'];

$phone = $_POST['phone'];

$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];

$zip = $_POST['zip'];
$submit = $_POST['submit'];

$table_nam = "user_registration";


if (isset($_POST['submit'])) {
}




if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $gender = $_POST['gender'];
  $role = $_POST['role'];
  $email = $_POST['email'];
  $password = $_POST['fname'];
  $cpassword = $_POST['cpassword'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];

  if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['password']) && isset($_POST['cpassword'])) {





    if (isset($_POST['password']) === $password && isset($_POST['cpassword']) == $cpassword) {
    }



    $query = "INSERT INTO " . $table_nam . " (fname, lname, email, password, confirm_password, phone, address, city, state, zip, role, gender) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $inSts = $conn->prepare($query);

    //sanitize function

    function test_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $fname = test_input($fname);
    $lname = test_input($lname);
    $password = test_input($password);
    $cpassword = test_input($cpassword);
    $gender = test_input($gender);
    $email = test_input($email);
    $phone = test_input($phone);
    $address = test_input($address);
    $state = test_input($state);
    $city = test_input($city);
    $zip = test_input($zip);




    //binding
    $inSts->bindparam(1, $fname);
    $inSts->bindparam(2, $lname);
    $inSts->bindparam(3, $email);
    $inSts->bindparam(4, $password);
    $inSts->bindparam(5, $cpassword);
    $inSts->bindparam(6, $phone);
    $inSts->bindparam(7, $address);
    $inSts->bindparam(8, $city);
    $inSts->bindparam(9, $state);
    $inSts->bindparam(10, $zip);
    $inSts->bindparam(11, $role);
    $inSts->bindparam(12, $gender);


    $inSts->execute();



    // }elseif(){


    // }else{



  }
}
