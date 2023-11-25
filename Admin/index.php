
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Executive members</title>
  </head>
  <body>
  <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="../index.html" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            
              
                          
                    </li>
                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">user</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col py-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          
          </a>
          
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="card">
  <div class="card-header">
   <h4>View Messages
   <button type="button" class="btn btn-primary position-relative float-end" data-bs-toggle="collapse" data-bs-target="#collapsetable" aria-expanded="false" aria-controls="collapseExample">
  Inbox
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="noti_number">
    0
    <span class="visually-hidden">unread messages</span>
  </span>
</button>
   <a href="add.php" class="btn btn-primary float-centre">View Details</a>
</h4>
  </div>
  <div class="card-body" style="margin: 50px;">
    <div class="table-responsive collapse" id="collapsetable">
    <table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">From<th>
      <th scope="col">Title</th>
      <th scope="col">Purpose</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
   <?php

   $sql = "SELECT * FROM messages where ";
   $result = mysqli_query($conn,$sql);
                    if($result){
                    while($row= mysqli_fetch_assoc($result)){
                        $id=$row['from'];
                        $st_id=$row['message_title'];
                        $name=$row['message_description'];
                        $Age=$row['message purpose'];
                        
                    
                       
                        echo'
                        <td>'.$id.'</td>
                        <td>'.$st_id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$Age.'</td>
                        <td>'.$Mark.'</td>
                        <td>
                  
                        <a href="update.php?updateid='.$id.'"class="btn btn-success">Approve</a>
                        <a href="delete.php?deleteid='.$id.'"class="btn btn-danger">Delete</a>
                        </td>
                        </tr>
                        ';
                    }
                }

            ?>
    </tr>
  
  </tbody>
</table>
</div>
    
  </div>
</div>
            Content area...
        </div>
    </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
 function loadDoc() {
  

  setInterval(function(){

   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("noti_number").innerHTML = this.responseText;
    }
   };
   xhttp.open("GET", "data.php", true);
   xhttp.send();

  },1000);


 }
 loadDoc();
</script>
  </body>
</html>