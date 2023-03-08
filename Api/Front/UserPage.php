<?php
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
                                    <a type="submit" href="http://localhost:8100/Show/Api/Front/profile.php" class="btn btn-outline-secondary">Profile</a>
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
                            <div class="card">
                                <div class="card-header">

                                    <div class="mb-3">

                                        <form class="d-flex" role="search">
                                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                            <button class="btn btn-outline-success" type="submit">Search</button>
                                        </form>

                                    </div>

                                    <h1>
                                        Newsfeed
                                    </h1>

                                    <span class="text-secondary">
                                        this is a user loggedin page
                                    </span>
                                </div>
                                <div class="card-body">

                                    <div class="card">

                                        <img alt="user" height="100" width="100" />

                                        <div class="mb-1">
                                            <button class="rounded btn btn-primary">like</button>
                                            <button class="rounded btn btn-primary">share</button>
                                            <button class="rounded btn btn-primary">...</button>
                                        </div>

                                        <div class="card">
                                            <textarea name="comment" placeholder="comment" class="form-control" id="" cols="30" rows="1"></textarea>

                                        </div>


                                    </div>

                                </div>
                            </div>

                        </div>

                        <!-- small screen hide -->
                        <div class="col-3 d-sm-block d-md-block card bg-secondary vh-100">
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