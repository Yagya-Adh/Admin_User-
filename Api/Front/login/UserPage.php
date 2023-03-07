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
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">



    <!-- material ui -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



</head>

<body>
    <div class="container-fluid">


        <!-- header section -->
        <div class="row p-5">
            <div class="col ">
                <div class="card ">
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
                                        <a class="nav-link" href="#">Link</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link disabled">Disabled</a>
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
                                    <a href="../logout/logout.php?time=1" class="btn btn-danger">LOGOUT</a>
                                </div>


                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <!-- body -->
        <div class="row">
            <!-- left col -->
            <div class="col">
                <div class="card vh-100 d-flex justfiy-content-center">
                    <div class="row">
                        <!-- sidebar -->
                        <div class="col card bg-light vh-100">


                            <div class="col-12  justify-content-center p-3">

                                <div class="row b-0 mb-1 ">
                                    <button type="button" class="btn btn-outline-secondary">
                                        <img class="d-flex text-center fs-2 justify-content-start">
                                        P
                                        </img>
                                        <span>User name</span>
                                    </button>
                                </div>


                                <div class="row b-0 mb-1">
                                    <button type="button" class="btn btn-outline-secondary">Profile</button>
                                </div>

                                <div class="row b-0 mb-1">
                                    <button type="button" class="btn btn-outline-secondary">watch</button>
                                </div>


                                <div class="row b-0 mb-1">
                                    <button type="button" class="btn btn-outline-secondary">Saved</button>
                                </div>


                                <div class="row b-0 mb-1">
                                    <button type="button" class="btn btn-outline-secondary">Events</button>
                                </div>

                                <div class="row b-0 mb-1">
                                    <button type="button" class="btn btn-outline-secondary">Profile</button>
                                </div>
                            </div>

                        </div>

                        <!-- main  -->
                        <div class="col-9 bg-white vh-100">
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

                        <!-- <div class="col card bg-secondary vh-100">
                            sidebar
                        </div> -->

                    </div>

                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>