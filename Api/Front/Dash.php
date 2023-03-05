<?php
ini_set('display_errors', 1);

session_start();

// $_SESSION['id'];
// $_SESSION['username'];
// $_SESSION['email'];
// $_SESSION['password'];
// $_SESSION['role'];
// $_SESSION['description'];


// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

require('../user/config/Database.php');

$db = new Database();
$conn = $db->connect();



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN DASHBOARD</title>





    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <!-- icon w3school -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <!-- class="bg-dark text-dark" -->
    <div class="container-fluid bg-dark text-dark">
        <form class="d-flex mt-3 p-3" method="GET" role="search">
            <input class="form-control me-2" name="search" value="<?php if (isset($_GET['search'])) {
                                                                        echo   $_GET['search'];
                                                                    }
                                                                    ?>" type="search" placeholder="Search" aria-label="Search">


            <button class="btn btn-outline-success" name="submit" type="submit">Search</button>
        </form>


        <div class="col d-flex justify-content-end">
            <div>
                <div class="p-0 m-0 me-3">
                    <span class="text-secondary m-1">LOGOUT</span>
                    <a href="../../Api/Front/logout/logout.php?time=1" class="btn btn-danger fs-5">H</a>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="mb-3">
                <div class="col-3">
                    <div class="mb-3 ">
                        <span class="fs-4 text-secondary "> our admin panel</span>

                    </div>
                    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                        Dashboard
                    </button>

                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <p>Try scrolling the rest of the page to see this option in action.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!--  <div class="col d-flex justify-content-end">
                <div class="mb-3">
                    <div class="card p-0 m-0">
                        <a href="" class="btn btn-danger fs-2">H</a>

                    </div>
                    <span class="text-secondary">LOGOUT</span>
                </div>
            </div> -->

        </div>

        <div class="row">
            <div class="col card container-fluid vh-100 text-dark">

                <div class="row">


                    <div class="col-md-3 col-lg-3 col-sm-12 bg-success vh-100 ">

                        <div class="row m-0">
                            <span>Current Active User</span>
                            <div class="card mb-3 p-3">
                                <h3><i class="fa fa-user"></i></h3>
                                <p> <?php echo $_SESSION['username'];  ?> [ <?php echo $_SESSION['role']; ?> ]</p>
                            </div>
                        </div>

                        <div class="row m-0">
                            <div class="card mb-3 p-0 b-0">
                                <a href="add_user.php" class="btn btn-outline-primary" name="add">ADD USER</a>
                            </div>
                        </div>


                        <div class="row">
                            <!-- otherr -->


                        </div>
                    </div>


                    <div class="col vh-100 bg-white">

                        <div class="row">

                            <div class="col-md-12 col-lg-12">
                                <div class="container">
                                    <div class="card mt-3">
                                        <div class="card-header">
                                            Users List
                                            <div class="mb-3 mt-2 col-3">

                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                    <option selected>--limit Records--</option>
                                                    <option value="1">10</option>
                                                    <option value="2">100</option>
                                                    <option value="3">150</option>
                                                    <option value="4">500</option>
                                                    <option value="5">1000</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="card-body">

                                            <form action="">
                                                <table class="table ">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Password</th>
                                                            <th>Role</th>
                                                            <th>Status</th>
                                                            <th class="text text-center"> Action </th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php
                                                        // $q = "SELECT * FROM ";
                                                        $table_name = "Admin_user";
                                                        $limit = 10;
                                                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                        $start = ($page - 1) * $limit;
                                                        $result = $conn->prepare("SELECT * FROM $table_name LIMIT $start,$limit");
                                                        $out = $result->fetchAll(PDO::FETCH_OBJ);
                                                        $q = "SELECT * FROM " . $table_name . " LIMIT $limit";
                                                        // $q = "SELECT * FROM " . $table_name . "";
                                                        //  WHERE name = '" . $username . "' AND password = '" . $password . "'";

                                                        $sts = $conn->prepare($q);
                                                        $sts->execute();
                                                        $count = $sts->rowCount();
                                                        $data = $sts->fetchAll(PDO::FETCH_OBJ);

                                                        foreach ($data as $row) {
                                                        ?>
                                                            <tr>
                                                                <form href="action.php" method="post">
                                                                    <div class="mb-0">
                                                                        <td><?php echo $row->id; ?> </td>
                                                                        <td><?php echo $row->name; ?></td>
                                                                        <td><?php echo $row->email; ?></td>
                                                                        <td><?php echo $row->password; ?></td>
                                                                        <td><?php echo $row->role; ?></td>
                                                                        <td><?php echo $row->status; ?></td>

                                                                        <td>
                                                                            <!-- <form action="action.php?id=$row['id']&status=$row['status']" method="GET"> -->
                                                                            <select class="form-select form-select-sm" name="status" aria-label=".form-select-sm example">
                                                                                <option value="pending">pending</option>
                                                                                <option value="added">added</option>
                                                                                <option value="remover">removed</option>
                                                                                <option value="completed">completed</option>
                                                                            </select>
                                                                    </div>
                                                                </form>
                                                                <!-- <button type="submit" class="btn btn-outline-success btn-sm">Action</button> -->

                                                                </td>
                                            </form>
                                            </tr>

                                        <?php
                                                        }

                                        ?>
                                        </tbody>
                                        </table>

                                        </form>
                                        </div>


                                        <div class="card-footer">

                                            <div class="mb-3">

                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                    </ul>
                                                </nav>

                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>


                        </div>

                        <!-- up[date table -->
                        <div class="row">
                            <div class="col">

                                <div class="container">
                                    <div class="card mt-5">
                                        <div class="card-header">
                                            User List filter
                                        </div>
                                        <div class="card-body">
                                            <form action="../user/v1/update.php" method="post">

                                                <div class="mb-3 row">
                                                    <div class="mb-3 col-2">
                                                        <label for="id">ID</label>
                                                        <input type="text" name="id" class="form-control">
                                                    </div>
                                                </div>





                                                <div class="mb-3 row">
                                                    <div class="mb-3 col">
                                                        <label for="name">Name</label>
                                                        <input type="text" name="name" class="form-control">
                                                    </div>
                                                    <div class="mb-3 col">
                                                        <label for="role">Role</label>
                                                        <input type="text" name="role" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password">Password</label>
                                                    <input type="text" name="password" class="form-control">
                                                </div>
                                                <button name="submit_edit" class="btn btn-warning">Update User</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="row">
                            <div class="col">

                                APPLE

                            </div>
                            <!-- other  -->
                        </div>

                        <div class="row">
                            <div class="col">A</div>
                            <div class="col">B</div>
                            <div class="col">C</div>
                        </div>



                    </div>



                </div>

            </div>
        </div>






    </div>






    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

<!-- <script type="text/javascript">
    function status_update(value, id) {
        // alert();

        let url = "http://localhost:8100/Show/Api/Front/Dash.php";
        window.location.href=url+"?id="+id+"&status="+value;
    }
</script> -->

</html>