<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Records</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="anstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            padding-top: 80px;
            /* Adjust this value for space between navbar and content */
        }

        #main-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .main-content {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            /* Adjust margin as needed */
        }
    </style>
</head>

<body>
    <header class="header fixed-top" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar show" id="nav-bar">
            <nav class="nav nav-ba">
                <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">ADMINISTRATOR</span> </a>
                    <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                      <a href="http://localhost/community_management/login/register-user.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Register Users</span> </a> 
                      <a href="view_messages.php" class="nav_link active"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">View Messages</span> </a>
                      <a href="view_members.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">View Members</span> </a>  
                      <a href="index.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Posts</span> </a> 
                      <a href="http://localhost/community_management/" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Manage Website</span> </a> 
            
                </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </nav>
        </div>

    <!--Container Main start-->
    <div id="main-content">
        <div class="row">
            <h2>All Records</h2>
            <?php
            include 'config.php';

            $sql = "SELECT * FROM contactus";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

            if (mysqli_num_rows($result) > 0) {
            ?>
                <table>
                    <thead>
                        <th>Id</th>
                        <th>Message</th>
                        <th>From</th>
                        <th>Email</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['message']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td>
                                    <a href='delete-inline.php?id=<?php echo $row['id']; ?>'>Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } else {
                echo "<h2>No Record Found</h2>";
            }
            mysqli_close($conn);
            ?>
        </div>
    </div>
    <!--Container Main end-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>