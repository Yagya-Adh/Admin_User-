<?php
session_start();

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

    <div class="container-fluid">

        <div class="mb-3 mt-3">
            <a href="http://localhost:8100/Show/Api/Front/profile.php" class="btn btn-secondary">Go to profile</a>

        </div>
        <div class="col bg-warning p-3">
            <h1> Request Pending DATA</h1>
            <?php
            require('../user/config/Database.php');
            $db = new Database;
            $conn = $db->connect();

            $uid = $_SESSION['id'];
            $tab_nam = "Uphotos";
            $limit = 5;


            $vu = "SELECT * FROM " . $tab_nam . " WHERE u_id = " . $uid . " LIMIT " . $limit;
            $vieSts = $conn->prepare($vu);
            $vieSts->execute();
            $data = $vieSts->fetchAll(PDO::FETCH_ASSOC);
            $count = $vieSts->rowCount();
            $PendData = "pending";

            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";





            foreach ($data as $p) {
                if ($p['statuses'] !== $addedData) {
                    // echo "<pre>";
                    // print_r($p);
                    // echo "</pre>";

            ?>
                    <div class="card">

                        <div class="card-body bg-dark text-light ">
                            <img src="<?php echo $p['u_photo']; ?>" alt="" class="" style="height:100px;width:100px">
                            <h1>Title : <?php echo $p['u_title']; ?></h1>
                        </div>
                    </div>

            <?php
                }
            }
            ?>


        </div>
    </div>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>