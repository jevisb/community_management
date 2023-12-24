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
            <a href="index.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Posts</span> </a>
            <a href="http://localhost/community_management/" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Manage Website</span> </a>

          </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
      </nav>
    </div>
    <!--Container Main start-->
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card shadow">
            <div class="card-body">
              <h1 class="card-title text-center mb-4">Welcome to Your Dashboard</h1>
              <p class="text-center mb-4">Explore the following features:</p>
              <ul class="list-group mb-4">
                <li class="list-group-item">View Messages</li>
                <li class="list-group-item">Register Users</li>
                <li class="list-group-item">Make Posts</li>
                <li class="list-group-item">Manage Website</li>
                <!-- Add more items as needed -->
              </ul>
              <p class="text-center">Need assistance or have feedback? <a href="#">Contact Super admin</a>.</p>
              <div class="text-center mt-4">
                <a href="#" class="btn btn-primary">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Container Main end-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



  </body>

</html>