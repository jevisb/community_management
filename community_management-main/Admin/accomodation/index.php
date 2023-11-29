<?php
include("db_conn.php");
$romm ="";
if(isset($_POST['submit'])){
    $No = $_POST['student_no'];
    $room =$_POST['room_no'];
    $sql = "SELECT room_no FROM assigned_room where room_no = '$room' LIMIT 1";
    $sql = mysqli_query($conn, $sql);
    $sql_n = "SELECT room_no FROM rooms where room_no = '$room' LIMIT 1";
    $sql_n = mysqli_query($conn, $sql_n);
    if (mysqli_num_rows($sql) > 0) {
        $room_error = "Sorry... Room $room already taken select from the Available Rooms";       
    }
    else if(mysqli_num_rows($sql_n) == 0) {
      $room_error = "Sorry... Room $room Not Available";       
  }
    else{
    $sql ="INSERT INTO assigned_room (student_no,room_no) VALUES('$No','$room')";
    $conn->query($sql);
    header("Location:index.php");
        }
    }

?><!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="anstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Dashboard</title>
  </head>
  <body>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav nav-ba">
                <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">BBBootstrap</span> </a>
                    <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                      <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> 
                      <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a> 
                      <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a> 
                      <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> 
                      <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> </div>
                </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </nav>
        </div>
        <div class="container" style="margin-top: 100px;">
  <div class="row">
    <div class="col-sm">
    <form action="" method="post">
  <div class="mb-3">
    <label class="form-label">Student Number</label>
    <input type="text" class="form-control" name="student_no" >
  </div>
  <div class="mb-3">
    <label class="form-label">Room Number</label>
    <input type="text" class="form-control" name="room_no">
    <?php if (isset($room_error)): ?>
        <span><?php echo $room_error; ?></span>
      <?php endif ?>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
    <div class="col-sm">
    <button type="button" class="btn btn-primary float-end"  data-bs-toggle="collapse" data-bs-target="#collapsetable" aria-expanded="false" aria-controls="collapseExample">
  Rooms Available
  <span class="badge  bg-danger" id="noti_number">0</span>
</button>
    <div class="table-responsive collapse" id="collapsetable">
    <table class="table table-striped table-sm" cellspacing="0"style="margin-top:30px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Room Numbers</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
   $sql = "SELECT * FROM rooms WHERE room_no NOT IN (SELECT room_no FROM assigned_room)";
   $result = mysqli_query($conn,$sql);
                    if($result){
                    while($row= mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $room=$row['room_no'];              
                        echo'
                    
                        <td>'.$id.'</td>
                        <td>'.$room.'</td>
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
</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <script src="script.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <script type="text/javascript">
 function loadDoc() {
  

  setInterval(function(){

   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("noti_number").innerHTML = this.responseText;
    }
   };
   xhttp.open("GET", "count_rooms.php", true);
   xhttp.send();

  },1000);


 }
 loadDoc();
</script>
 
  </body>
</html>