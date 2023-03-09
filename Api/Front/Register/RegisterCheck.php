<?php

require('../../user/config/Database.php');

$db = new Database();
$conn = $db->connect();

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;

$image = '';
$errors = [];



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  /* random function */
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


  /* image data*/
  $image = $_FILES['image'] ?? null;


  if (!is_dir('images')) {
    mkdir('images');
  }

  if ($image && $image['tmp_name']) {

    $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
    mkdir(dirname($imagePath));

    move_uploaded_file($image['tmp_name'], $imagePath);
  }




  /* other data */

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


  $query = "INSERT INTO " . $table_nam . "(fname, lname, email, password, confirm_password, phone, address, city, state, zip, role, gender, image) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
  $inSts = $conn->prepare($query);

  //sanitize function

  // function test_input($data)
  // {
  //   // $data = trim($data);
  //   // $data = stripslashes($data);
  //   $data = htmlspecialchars($data);
  //   return $data;
  // }
  // $fname = test_input($fname);
  // $lname = test_input($lname);
  // $password = test_input($password);
  // $cpassword = test_input($cpassword);
  // $gender = test_input($gender);
  // $email = test_input($email);
  // $phone = test_input($phone);
  // $address = test_input($address);
  // $state = test_input($state);
  // $city = test_input($city);
  // $zip = test_input($zip);
  // $image = test_input($image);





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
  $inSts->bindparam(13, $imagePath);

  $done = $inSts->execute();

  if (isset($done)) {

    header("location: http://localhost:8100/Show/Api/Front/login/login.php?message=thank you for your registration keep wait for approval");
  }
}
