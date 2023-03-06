<?php


echo "Action";

echo "<pre>";
print_r($_POST);
echo "</pre>";



if (isset($_POST['id']) && isset($_POST['status'])) {


    $id = $_POST['id'];
    $status = $_POST['status'];

    // $qupdate = "UPDATE $table_name SET status=$status WHERE id= $id ";
    // $stspre = $conn->prepare($qupdate);

}
