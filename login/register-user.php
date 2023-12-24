<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users - Registration</title>
    <link rel="stylesheet" href="/Admin/dashboard/style.css">
    <link rel="stylesheet" href="/Admin/dashboard/anstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Registration Form</h1>
                        <form action="./endpoint/add-user.php" method="POST">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label">First Name:</label>
                                    <input type="text" class="form-control" id="firstName" name="first_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label">Last Name:</label>
                                    <input type="text" class="form-control" id="lastName" name="last_name" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <label for="contactNumber" class="form-label">Contact Number:</label>
                                    <input type="number" class="form-control" id="contactNumber" name="contact_number" maxlength="11" required>
                                </div>
                                <div class="col-md-7">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="registerUsername" class="form-label">Username:</label>
                                <input type="text" class="form-control" id="registerUsername" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="registerPassword" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="registerPassword" name="password" required>
                            </div>
                            <button type="submit" class="mb-2 me-2 btn-hover-shine btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="/Admin/dashboard/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
