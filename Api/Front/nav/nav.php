<?php

// echo "nav";

// require('.././User/home.php')

?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="../User/home.php">Company</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../User/home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../User/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../User/contact.php">Contact</a>
                </li>


                <!-- <li class="nav-item">
                    <a class="nav-link" href="../Register/register.php">Register</a>
                </li> -->


                <li class="nav-item">
                    <a class="nav-link" href="../logout/logout.php?time=0">Logout</a>
                </li>
            </ul>
            <form class="d-flex" method="GET" role="search">
                <input class="form-control me-2" name="search" value="<?php if (isset($_GET['search'])) {
                                                                            echo   $_GET['search'];
                                                                        }
                                                                        ?>" type="search" placeholder="Search" aria-label="Search">


                <button class="btn btn-outline-success" name="submit" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>