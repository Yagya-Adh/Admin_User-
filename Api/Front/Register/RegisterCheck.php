<?php



echo "<pre>";
print_r($_POST);
echo "</pre>";

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




if (isset($_POST['submit'])) {
}




if(isset($_POST['submit'])) {
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
  
if(isset($_POST['fname']) && isset($_POST['lname'])&&isset($_POST['password']) &&isset($_POST['cpassword'])    ){





    if( isset($_POST['password'])===$password && isset($_POST['cpassword'])==$cpassword){



    }




}elseif(){


}else{



}

}