<?php
include("db_connect.php");
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql= "delete from student_info where id = $id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location:index.php");
    }
    else{
        die("Connection Error".$conn->mysqli_error);
    }
}