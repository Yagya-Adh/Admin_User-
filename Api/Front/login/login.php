<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();


?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="bg-secondary">


    <div class="container-fluid">

        <div class="d-flex justify-content-center vh-100 align-items-center">

            <div class="card p-3 bg-body-tertiary rounded">

                <div class="card-header fs-3 mb-3"> Login </div>

                <div class="card-body">

                    <form action="./logincheck.php" method="POST">

                        <!-- error throw -->

                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?= $_GET['error'] ?>
                            </div>
                        <?php } ?>


                        <div class="mb-3">

                            <div class="mb-3">
                                <label for="user">User</label>
                                <input type="text" class="form-control" name="user" value="" placeholder="user name">
                            </div>

                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" value="" placeholder="password">
                            </div>

                            <div class="mb-1">
                                <label class="form-label"> Please select your login </label>
                            </div>
                            <div class="mb-3">
                                <select class="form-select" name="role" aria-label="Default select example">
                                    <!-- <option selected></option> -->
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>


                            <!-- <a type="submit" href="../User/home/home.php" name="submit" class="btn btn-primary btn-sm"> Login</a> -->

                            <button type="submit" name="submit" class="btn btn-primary btn-sm"> Login</button>

                        </div>

                    </form>
                </div>
                <a href="../../Front/Register/register.php" class="text text-center">register here ...</a>

                <span class="text-secondary text-center">please enter your login user and password</span>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>