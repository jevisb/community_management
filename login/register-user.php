<?php include('./conn/conn.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users - Registration</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="card-title text-center mb-4">Registration Form</h1>
                        <form action="./endpoint/add-user.php" method="POST">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="firstName">First Name:</label>
                                    <input type="text" class="form-control" id="firstName" name="first_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName">Last Name:</label>
                                    <input type="text" class="form-control" id="lastName" name="last_name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-5">
                                    <label for="contactNumber">Contact Number:</label>
                                    <input type="number" class="form-control" id="contactNumber" name="contact_number" maxlength="11" required>
                                </div>
                                <div class="col-md-7">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="registerUsername">Username:</label>
                                <input type="text" class="form-control" id="registerUsername" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="registerPassword">Password:</label>
                                <input type="password" class="form-control" id="registerPassword" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
