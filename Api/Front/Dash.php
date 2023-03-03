<?php
session_start();

$_SESSION['id'];
$_SESSION['username'];
$_SESSION['email'];
$_SESSION['password'];
$_SESSION['role'];
$_SESSION['description'];


// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

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

<body class="bg-dark text-info">


    <div class="container-fluid">
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
                    <div class="mb-3">
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


                    <div class="col-3 bg-success vh-100">

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


                    <div class="col">


                        <div class="row">
                            <!--  form_table -->
                            <div class="card">

                                <div class="card-header">
                                    INFO
                                </div>


                                <div class="card container p-5 m-1 ">

                                    <table class="text-dark table  mb-3 mt-3 ms-3">
                                        <thead>
                                            <tr>
                                                <th> ID </th>
                                                <th> NAME </th>
                                                <th> EMAIL </th>
                                                <th> PASSWORD </th>
                                                <th> ROLE </th>
                                                <th class="text-center"> ACTION </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <form action="">

                                                <tr>
                                                    <td><input type="text" class="col-md-8" name="id" value=""></td>
                                                    <td><input type="text" class="col-md-12" name="name" value=""></td>
                                                    <td><input type="email" class="col-md-12" name="email" value=""></td>
                                                    <td><input type="text" class="col-md-12" name="password" value=""></td>
                                                    <td><input type="text" class="col-md-10" name="role" value=""></td>
                                                    <td class="col">
                                                        <button type="submit" name="submit" class="btn btn-sm btn-primary">ADD</button>
                                                        <a href="" class="btn btn-sm btn-primary">EDIT</a>
                                                        <a href="" class="btn btn-sm btn-danger">REMOVE</a>

                                                    </td>
                                                </tr>

                                            </form>



                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>



                        <div class="row">
                            h
                            <!-- other  -->
                        </div>




                        <div class="row">
                            h
                            <!-- other  -->
                        </div>


                        <div class="row">
                            h
                            <!-- other  -->
                        </div>



                    </div>



                </div>

            </div>
        </div>






    </div>






    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>