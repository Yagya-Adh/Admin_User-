<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoic List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <header class="text-secondary fs-1">Invoice System</header>
        <div class="row mb-3">
            <div class="col-md-3 d-flex flex-row">
                <select class="form-select bg-primary w-50" aria-label="Default select example">
                    <option selected>Invoice</option>
                    <option value="1">Invoice List</option>
                    <option value="2">Created Invoice</option>
                </select>
                <select class="form-select bg-primary w-50" aria-label="Default select example">
                    <option selected>Logged in Admin</option>
                    <option value="1">Account</option>
                    <option value="2">Logout</option>
                </select>
            </div>


        </div>

        <a href="./Invoice.php" class="btn btn-danger">go back to invoice system</a>

        <div class="card ">
            <div class="card-body">
                <table class="table table-border text text-secondary">
                    <thead>
                        <tr>
                            <th>invoice No.</th>
                            <th>Create Data</th>
                            <th>Customer Name</th>
                            <th>invoice Total</th>
                            <th>Print</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td>31/jan/2022, 19:33:44</td>
                            <td>abcd</td>
                            <td>102/200.00</td>
                            <td>
                                <a class="text text-primary">
                                    <i class="fa fa-print"></i>
                                </a>
                            </td>
                            <td>
                                <a class="text text-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a class="text text-primary">
                                    <i class="fa fa-close"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>