<?php
// Include logic.php to fetch data or define $query
include "logic.php";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="anstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard</title>
    <style type="text/css">
        .form-control {
            width: 80%;
            border-radius: 0;
            margin-top: 10px;
            border-color: rgb(236, 243, 249);

        }

        .container {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            /* Adjust margin as needed */
        }

        form {
            align: center;
        }
    </style>
</head>

<body>

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        </header>
        <div class="l-navbar show" id="nav-bar">
            <nav class="nav nav-ba">
                <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">ADMINISTRATOR</span> </a>
                    <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                      <a href="http://localhost/community_management/login/register-user.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Register Users</span> </a> 
                      <a href="view_messages.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">View Messages</span> </a>
                      <a href="view_members.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">View Members</span> </a>  
                      <a href="index.php" class="nav_link active"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Posts</span> </a> 
                      <a href="http://localhost/community_management/" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Manage Website</span> </a> 
            
                </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </nav>
        </div>
        <!--Container Main start-->
        <div class="container mt-5">
            <div class="card p-4">
                <?php if (isset($_REQUEST['info']) && $_REQUEST['info'] == "added") : ?>
                    <div class="alert alert-success" role="alert">
                        Post has been added successfully
                    </div>
                <?php endif; ?>

                <div class="text-center mb-3">
                    <a href="create.php" class="btn btn-outline-dark">+ Create a new post</a>
                </div>

                <div class="row">
                    <?php
                    // Check if $query is set and is iterable
                    if (isset($query) && (is_array($query) || is_object($query))) : ?>

                        <?php foreach ($query as $q) : ?>
                            <div class="col-12 col-lg-4 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $q['title']; ?></h5>
                                        <div class="card-image">
                                            <img src="<?php echo $q['images']; ?>" alt="<?php echo $q['title']; ?> Image">
                                        </div>
                                        <p class="card-text"><?php echo substr($q['content'], 0, 50); ?>...</p>
                                        <a href="view.php?id=<?php echo $q['id'] ?>" class="btn btn-primary">Read More <span class="text-danger">&rarr;</span></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    <?php else : ?>
                        <p>No data available</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
        <!--Container Main end-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



    </body>

</html>