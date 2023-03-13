<?php

use app\core\Router;

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
session_start();

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// exit;

require('../user/config/Database.php');
$db = new Database();
$conn = $db->connect();
$uid = $_SESSION['id'];
$tab_nam = "Uphotos";
$limit = 5;


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">





</head>

<body>

    <div class="container-fluid">
        <div class="row card">
            <nav id="navbar-example2" class="navbar bg-light px-3 mb-3">
                <a class="navbar-brand" href="#">Navbar</a>
                <ul class="nav nav-pills">

                    <div class="me-3">
                        <span>back to home</span>
                        <a href="./UserPage.php" class="btn btn-warning">Home</a>
                    </div>



                    <div class="m-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                                <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                            </ul>
                        </li>
                    </div>
                </ul>
            </nav>
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-light p-3 rounded-2" tabindex="0">

                <div class="row">
                    <div class="col d-flex justify-content-around p-2">
                        <div class="card col-5 p-2">
                            <h4 class="text-info" id="scrollspyHeading1">First heading</h4>
                            <p class=" text text-danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos omnis eligendi ex vel nostrum. Libero rem iste nostrum vero ipsum inventore nihil atque ullam sint corrupti fuga, optio illum consequuntur? </p>

                        </div>

                        <div class="card col-5 p-2">

                            <h4 class="text-warning" id="scrollspyHeading2">Second heading</h4>
                            <p class=" text text-success">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam natus officia quae architecto, facilis odit cupiditate deserunt aliquid obcaecati voluptatibus mollitia nostrum quasi deleniti iure, dolore voluptatum magni aperiam ut? </p>

                        </div>

                    </div>
                </div>


                <div class="row  d-flex justify-content-center">
                    <div class="col-10">
                        <div class="card p-3">
                            <h4 class="text-danger" id="scrollspyHeading3">Third heading</h4>
                            <p class=" text text-danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam natus officia quae architecto, facilis odit cupiditate deserunt aliquid obcaecati voluptatibus mollitia nostrum quasi deleniti iure, dolore voluptatum magni aperiam ut? </p>

                        </div>
                    </div>
                </div>


            </div>


        </div>

        <!-- image upload -->
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <!-- d-flex -->
                    <form action="Admin_approve.php" method="post" class="form-control" enctype="multipart/form-data">


                        <input type="file" name="photo" class="w-50 mt-1 mb-1">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="title" name="title" id="">
                        </div>
                        <div class="mb-3">
                            <textarea name="status" id="" placeholder="Whats new" class="form-control" cols="30" rows="4"></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="upload" class="btn btn-primary m-3" value="post">
                        </div>


                    </form>
                </div>


                <div class="card-body ">
                    <!-- view image here -->

                    <?php

                    // require('../user/config/Database.php');
                    // $db = new Database();
                    // $conn = $db->connect();

                    $uid = $_SESSION['id'];
                    $tab_nam = "Uphotos";
                    $limit = 5;

                    $vu = "SELECT * FROM " . $tab_nam . " WHERE u_id = " . $uid . " LIMIT " . $limit;
                    $vieSts = $conn->prepare($vu);
                    $vieSts->execute();
                    $data = $vieSts->fetchAll(PDO::FETCH_ASSOC);

                    $count = $vieSts->rowCount();
                    $addedData = "added";
                    $PendData = "pending";
                    if ($count > 0) {

                    ?>


                        <!-- row -->
                        <div class="col ">

                            <div class="row vh-100">
                                <div class="col  bg-secondary">
                                    space
                                </div>

                                <div class="col-9  p-3  justify-content-center">
                                    <div class="card">
                                        <div class="card-header">

                                            <h1 class="text-secondary">News Feeds</h1>

                                        </div>
                                    </div>
                                    <?php
                                    foreach ($data as $row) {
                                        if ($row['statuses'] == $addedData) {
                                            // echo "added";
                                            // echo "<pre>";
                                            // print_r($row);
                                            // echo "</pre>";
                                    ?>

                                            <div class="card col-9 ">

                                                <form action="Uphotodel.php" method="POST">

                                                    <div class="position-absolute top-0 start-100 ">
                                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                                        <button type="submit" class=" btn btn-outline-white btn-lg  position-relative end-100 buttom-0">
                                                            <!-- delete -->
                                                            <!--add dropdown menu  here...-->
                                                            <span class="text text-dark">...</span>
                                                            <!-- <i class="bi bi-x-lg"></i> -->
                                                        </button>
                                                    </div>

                                                    <div class="col absolute-relative top-0 start-50 mt-3 btn-dark">
                                                        <!-- <span class="text"> <?= $row['created_at']; ?></span> -->

                                                        <textarea id="" class="form-control p-0 " cols="10" rows="3">
                                                                     <?php
                                                                        echo $row['u_status'];

                                                                        ?>
                                                             </textarea>
                                                        <div class="card p-3 m-0 col shadow d-flex">
                                                            <img class="col p-1" src="<?= $row['u_photo'] ?>" style="height:200px; width:500px;" alt="uner_photo" srcset="">
                                                        </div>
                                                        <h1 class="text-dark"><?php echo $row['u_title'] ?></h1>
                                                    </div>
                                                </form>

                                            </div>
                                </div>

                        <?php
                                        }
                                    }
                        ?>
                            </div>

                            <div class="col-auto p-3">
                                <div class="row">
                                    <!-- requests for posting user data pending lists-->
                                    <div class="mb-3">
                                        <span class="fs-3 text-secondary">Visit your request pending lists page </span>
                                        <form action="requestedpending.php" method="POST">
                                            <input type="hidden" name="uid" value="<?php echo $p; ?>">
                                            <button type="submit" class="btn btn-sm btn-warning">
                                                <span class="text-light">Requests</span>
                                            </button>
                                        </form>
                                    </div>

                                </div>
                            </div>


                        </div>

                </div>


            <?php


                    }

            ?>


            </div>
        </div>


    </div>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>

<?php



/*  (
            [id] => 1
            [u_photo] => user_img/9ItYuTQX/water.jpg
            [u_name] => angle
            [u_id] => 14
            [created_at] => 2023-03-09 02:17:46
            [updated_at] => 2023-03-09 02:17:46
            [u_title] => water
            [u_status] => always drink water , hydrate your body
            [statuses] => pending
        )
        
  
 */




?>