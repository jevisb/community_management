<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <style>
        body {
            padding-top: 10px;
            /* Adding space to top to adjust for the navigation bar */

            .row {
                display: flex;
                justify-content: center;
                margin-top: 60px;
                /* Adjust margin as needed */
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"> <!-- Include your custom styles -->
</head>

<body>
    <header class="header fixed-top" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar show" id="nav-bar">
        <nav class="nav nav-ba">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">ADMINISTRATOR</span> </a>
                <div class="nav_list"> <a href="#" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="http://localhost/community_management/login/register-user.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Register Users</span> </a>
                    <a href="view_messages.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">View Messages</span> </a>
                    <a href="view_members.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name active">View Members</span> </a>
                    <a href="index.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Posts</span> </a>
                    <a href="http://localhost/community_management/" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Manage Website</span> </a>

                </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <h5 class="card-title">Executive members</h5>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'config.php';

                                $sql = "SELECT * FROM tbl_user";
                                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                                if (mysqli_num_rows($result) > 0) {
                                    $count = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <tr>
                                            <th scope="row"><?php echo $count; ?></th>
                                            <td><?php echo $row['first_name']; ?></td>
                                            <td><?php echo $row['last_name']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td>
                                                <a href='delete-inline.php?id=<?php echo $row['id']; ?>' class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                <?php
                                        $count++;
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>No Record Found</td></tr>";
                                }
                                mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>