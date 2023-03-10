<?php
// echo "Users managements ";
require('../user/config/Database.php');



$db = new Database;
$conn = $db->connect();
$UserpostsTable = 'Uphotos';

$q = "SELECT * FROM " . $UserpostsTable;
$readQu = $conn->prepare($q);
$readQu->execute();
$result = $readQu->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($result);
// echo "</pre>";


// $state='pending';





?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User requests management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container-fluid vh-100  d-flex justify-content-center align-items-center">
        <div class="card mt-4">
            <h2 class="text-secondary ms-3">Users management</h2>
            <div class="card-header d-flex justify-content-between">
                <a href="http://localhost:8100/Show/Api/Front/Dash.php" class="btn btn-primary btn-sm">Go to Dash</a>
                <a href="userdata_update.php" class="btn btn-primary btn-sm">DATA-UPDATES</a>

            </div>

            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>USER-IMAGES</th>
                            <th>USER-NAME</th>
                            <th>USER-ID</th>
                            <th>CREATED</th>
                            <th>UPDATED</th>
                            <th>POSTS-COMMENTS</th>
                            <th>POST-TITLE</th>
                            <th class="text-center">STATUS</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php
                        if ($result > 0) {
                            foreach ($result as $data) {

                                // echo "<pre>";
                                // print_r($data);
                                // echo "</pre>";
                        ?>
                                <tr>
                                    <td><?php echo $data['id']; ?></td>
                                    <td>
                                        <img src="<?php echo $data['u_photo']; ?>" alt="" style="height:50px; width:100px;">
                                    </td>
                                    <td><?php echo $data['u_name']; ?></td>
                                    <td><?php echo $data['u_id']; ?></td>
                                    <td><?php echo $data['created_at']; ?></td>
                                    <td><?php echo $data['updated_at']; ?></td>
                                    <td><?php echo $data['u_title']; ?></td>
                                    <td><?php echo $data['u_status']; ?></td>
                                    <td><?php echo $data['statuses']; ?></td>


                                </tr>

                            <?php }
                        } else {
                            ?>


                            <tr>
                                <span>No User Request Found</span>
                            </tr>
                        <?php

                        } ?>
                    </tbody>
                </table>




            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>