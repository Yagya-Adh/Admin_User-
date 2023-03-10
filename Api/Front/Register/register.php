<?php
// echo "Register";
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">


        <div class="row d-flex vh-100 justify-content-center align-items-center">
            <div class="col-8">
                <div class=" bg-body-tertiary rounded">
                    <div class="card-header p-2">
                        <h1>Register</h1>
                    </div>
                    <form action="./RegisterCheck.php" method="post" enctype="multipart/form-data">
                        <div class="card-body mb-3">
                            <div class="row">
                                <div class="mb-3">
                                    <input class="btn btn-outline-light" type="file" name="image">
                                    <span>Upload photo</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="fname">First Name</label>
                                        <input type="text" name="fname" class="form-control" placeholder="first name">
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="mb-3">
                                        <label for="lname">Last Name</label>
                                        <input type="text" name="lname" class="form-control" placeholder="last name">
                                    </div>
                                </div>
                            </div>
                            <!--  -->
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="gender">Gender</label>
                                        <select class="form-select" name="gender" aria-label="Default select example">
                                            <option selected>Choose..</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="mb-3">
                                        <label for="role">Role</label>
                                        <select class="form-select" name="role" aria-label="Default select example">
                                            <option selected>Choose..</option>
                                            <option value="user">User</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="tom@mail.com">
                            </div>

                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="passwword">
                            </div>

                            <div class="mb-3">
                                <label for="cpassword">Confirm Password</label>
                                <input type="password" name="cpassword" class="form-control" placeholder="confirm password">
                            </div>

                            <div class="mb-3 w-50">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone">
                            </div>

                            <div class="mb-1">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Address">
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" name="city" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">State</label>
                                    <select id="inputState" name="state" class="form-select">
                                        <option value="bagamati">Bagamati</option>
                                        <option value="gandaki">Gandaki</option>
                                        <option value="five">Five</option>

                                    </select>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="inputZip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" name="zip" id="inputZip">
                                </div>
                            </div>

                            <div class="mb-2 row">
                                <div class="col">
                                    <button type="submit" name="submit" class="btn btn-outline-primary">Register</button>

                                    <a href="../login/login.php" class="btn btn-outline-danger">Cancel</a>
                                </div>
                                <div class="col">
                                    <div class="mb-1 d-flex justify-content-end">
                                        <a href="../Register/check_reg_created.php" class="btn btn-outline-warning btn-sm">Check</a>
                                    </div>
                                    <span class="text-secondary m-1">check your accout has if created successful</span>
                                </div>
                            </div>

                        </div>

                        <div class="col d-flex justify-content-center mb-3">
                            <span class="text-secondary">Please fill all details to register your information. </span>
                        </div>
                    </form>

                </div>


            </div>



        </div>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>


<?php
// require('../Register/check_reg_created.php')
?>