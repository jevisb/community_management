<?php
session_start();
error_reporting(1);
include('connect2.php');

if(isset($_POST['btnlogin']))
{
if($_POST['txtmatric_no'] != "" || $_POST['txtpassword'] != ""){

$matric_no =$_POST['txtmatric_no'];
$password = $_POST['txtpassword'];

$sql = "SELECT * FROM `students` WHERE `matric_no`=? AND `password`=? ";
			$query = $dbh->prepare($sql);
			$query->execute(array($matric_no,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
			
      
				//Get Get all session value
    foreach($fetch as $items => $v){
      if(!is_numeric($items))
      $_SESSION[$items] = $v;
  }

		header("Location: index.php");

} else{
$_SESSION['error']=' Invalid Student No or Password';
}
}else{
$_SESSION['error']=' Must Fill-in All Fields';

}
}