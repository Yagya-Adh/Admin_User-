<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
session_start();

// echo "Im user im logged in successfully";





// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User pannel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">



    <!-- material ui -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- bootstrap w3icon -->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- bootstrap icon -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">


</head>
<!-- class="bg-dark" -->

<body>
    <div class="container-fluid">


        <!-- header section -->
        <div class="row">
            <div class="card p-2">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./Invoice.php">Invoice</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link disabled">Settings</a>
                                </li>
                            </ul>
                            <div class="m-1">
                                <button type="button" class="btn btn-light position-relative">
                                    Notification
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                        99+
                                        <span class="visually-hidden">unread messages</span>
                                    </span>
                                </button>
                            </div>

                            <div class="m-1">
                                <a href="./logout/logout.php?time=1" class="btn btn-danger">LOGOUT</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- small screen views -->
        <div class="row">


            <div class="col d-flex flex-row d-lg-none d-md-none d-sm-block">

                <div class="m-3">
                    <a href="" class="btn btn-outline-warning">
                        <i class="fa fa-home text-center "></i>
                    </a>
                </div>

                <div class="m-3">
                    <a href="" class="btn btn-outline-danger">
                        <i class="fa fa-trash "></i>
                    </a>
                </div>

                <div class="m-3">
                    <a href="" class="btn btn-outline-info">
                        <i class="fa fa-cloud "></i>
                    </a>
                </div>

                <div class="m-3">
                    <a href="" class="btn btn-outline-info">
                        <i class="fa fa-search "></i>
                    </a>
                </div>

            </div>


        </div>

        <!-- body -->
        <div class="row ">
            <!-- left col -->
            <div class="col">
                <div class="card vh-100 d-flex justfiy-content-center">
                    <div class="row">
                        <!-- sidebar -->

                        <!-- small screen hide -->
                        <div class="col d-sm-none d-md-block card bg-light ">
                            <div class="col-12  justify-content-center p-3">
                                <div class="row b-0 mb-1 ">
                                    <button type="submit" class="btn btn-outline-secondary">
                                        <img class="d-flex text-center fs-2 justify-content-start">
                                        <i class="material-icons">person</i>
                                        </img>
                                        <span>User name</span>
                                    </button>
                                </div>
                                <div class="row b-0 mb-1">
                                    <a href="http://localhost:8100/Show/Api/Front/profile.php" class="btn btn-outline-secondary">Profile</a>
                                </div>
                                <div class="row b-0 mb-1">
                                    <button type="submit" class="btn btn-outline-secondary">watch</button>
                                </div>
                                <div class="row b-0 mb-1">
                                    <button type="submit" class="btn btn-outline-secondary">Saved</button>
                                </div>
                                <div class="row b-0 mb-1">
                                    <button type="submit" class="btn btn-outline-secondary">Events</button>
                                </div>
                                <div class="row b-0 mb-1">
                                    <button type="submit" class="btn btn-outline-secondary"> <i class="glyphicon glyphicon-print"></i>
                                        History
                                    </button>
                                </div>

                                <form action="./request.php" method="post">
                                    <div class="row b-0 mb-1">
                                        <button type="submit" class="btn btn-outline-secondary"> <i class="glyphicon glyphicon-print"></i>
                                            Notification
                                        </button>
                                    </div>
                                </form>

                                <div class="row b-0 mb-1">
                                    <button type="submit" class="btn btn-outline-secondary"> <i class="material-icons">delete</i>
                                        Delete</button>
                                </div>
                            </div>

                        </div>




                        <!-- main  -->
                        <div class="col-md-9 d-md-block bg-white vh-100">
                            <div class="row d-flex  justify-content-center">
                                <div class="mb-3 mt-3 col-11 p-1">
                                    <input type="text" name="search_product" placeholder="Search" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col m-1">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="./image/242-2423204_tom-jerry-cartoon-wallpaper-tom-and-jerry-cover.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./image/65876414_890051254681274_4004925122254209024_n-640x396.jpg" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="./image/d3b7ea073f9b0f3672d84277de06ea1df12aa69bd02ad2a88fbbad7eb624759b._RI_V_TTW_.jpg" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- other -->

                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">
                                            <img src="./image/65876414_890051254681274_4004925122254209024_n-640x396.jpg" alt="">
                                        </div>
                                        <div class="mb-3 d-flex justify-content-between">
                                            <div class="mb-3 d-flex justify-content-between">
                                                <button class=" border-0  btn-sm rounded">
                                                    <span class="text-outline-danger">
                                                        Like
                                                        <i class="bi bi-heart-fill"></i>
                                                    </span>
                                                </button>
                                                <button class=" border-0  btn-sm ms-3">
                                                    <span class="text-outline-danger"> Comment


                                                        <i class="bi bi-chat"></i>
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="mb-3">
                                                <button class="border-0  btn-sm ms-3">
                                                    <span class="text-outline-danger">
                                                        Share
                                                        <i class="bi bi-share"></i>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">

                                    <div class="card">

                                        <div class="mb-3">
                                            <textarea name="" placeholder="comment" class="form-control" id="" cols="30" rows="1"></textarea>
                                        </div>

                                    </div>
                                </div>
                            </div>




                        </div>











                        <!-- small screen hide -->
                        <div class="col d-sm-none d-md-block card bg-secondary vh-100">
                            sidebar

                            <div class="card p-3">

                                <div class="mb-3">
                                    <div class="row ">
                                        <h1>Create user</h1>

                                    </div>
                                    <span>
                                        To Upload information send request to Admin

                                    </span>
                                    <form action="" method="post">

                                        <button type="submit" class="btn btn-primary">Request</button>

                                    </form>
                                </div>
                            </div>
                            <!-- <div class="row">
                                //otherr

                                <i class="fa fa-home"></i>
                                <i class="fa fa-search"></i>
                                <i class="fa fa-cloud"></i>
                                <i class="fa fa-trash"></i>
                            </div> -->
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>