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
      .form-control{
        width: 80%;
        border-radius: 0;
        margin-top: 10px;
        border-color: rgb(236, 243, 249);
        
      }
      form{
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
                      <a href="index.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Make Posts</span> </a> 
                      <a href="http://localhost/community_management/" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Manage Website</span> </a> 
            
                </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </nav>
        </div>
        <!--Container Main start-->
        <div class=" " style="margin-top:100px">
           <b><center><h4>Make the Post</h4></center></b> 
            <form>
              <div class="mb-3 " >
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3 " >
                <label for="exampleInputEmail1" class="form-label">Purpose</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleInputPassword1" rows="5"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        
            
            
    
        </div>
        <!--Container Main end-->
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="script.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
 
  </body>
</html>