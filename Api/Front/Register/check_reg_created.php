<?php

require('../../user/config/Database.php');

$db = new Database;

$conn = $db->connect();


// require('')
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>



    <div class="container">

        <div class="col mt-5">

            <div class=" card ">
                <div class="card-header">
                    <h1>Registration Status</h1>
                    <div class="mb-3">
                        <div class="row">

                            <div class="col d-flex">
                                <div class="row">
                                    <a href="../login/login.php">login</a>
                                    <span class="text-secondary">Go back to login page</span>
                                </div>

                                <div class="row">
                                    <p class="text-center text-secondary"> Thank You For Your Registration </p>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <form action="">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Status</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $table_name = "Admin_user";
                                $limit = 10;
                                $q = "SELECT * FROM " . $table_name . " LIMIT $limit";
                                $sts = $conn->prepare($q);
                                $sts->execute();
                                $count = $sts->rowCount();
                                $data = $sts->fetchAll(PDO::FETCH_OBJ);

                                foreach ($data as $row) {
                                ?>
                                    <tr>
                                        <form href="action.php" method="post">
                                            <td><?php echo $row->id; ?> </td>
                                            <td><?php echo $row->name; ?></td>
                                            <td><?php echo $row->email; ?></td>
                                            <td><?php echo $row->password; ?></td>
                                            <td><?php echo $row->role; ?></td>
                                            <td><?php echo $row->status; ?></td>


                                        </form>
                                    </tr>


                                <?php
                                }



                                // if (isset($_GET['id']) && isset($_GET['status'])) {


                                //     $id = $_GET['id'];
                                //     $status = $_GET['status'];

                                //     $qupdate = "UPDATE $table_name SET status=$status WHERE id= $id ";
                                //     $stspre = $conn->prepare($qupdate);

                                //     echo "<pre>";

                                //     print_r($_GET);

                                //     echo "</pre>";

                                //     exit;
                                // }

                                ?>
                            </tbody>
                        </table>

                    </form>
                </div>



            </div>
        </div>



    </div>










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>