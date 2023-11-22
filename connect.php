<?php include 'HSRM.php'; ?>


<?php
    

$citizen=$_POST['citizen_name'];
$phone=$_POST['citizen_phone'];
$address=$_POST['citizen_address'];
$town=$_POST['t_name'];
$towncode=$_POST['t_idd'];
$district=$_POST['d_name'];
$districtcode=$_POST['d_idd'];
$province=$_POST['p_name'];
$provincecode=$_POST['p_idd'];
$date=$_POST['datetimes'];
$comment=$_POST['comments'];





 
mysqli_query($connect,"INSERT INTO response(citizen_name,citizen_phone,citizen_address,t_name,t_idd,d_name,d_idd,p_name,p_idd,datetimes,comments)
 	            VALUES ('$citizen','$phone','$address','$town','$towncode','$district','$districtcode','$province','$provincecode','$date','$comment')");
mysqli_query($connect,"INSERT INTO province(p_name)
 		        VALUES ('$province')");
mysqli_query($connect,"INSERT INTO district(d_name)
 		        VALUES ('$district')");
mysqli_query($connect,"INSERT INTO town(t_name)
 		        VALUES ('$town')");
mysqli_query($connect,"INSERT INTO assign_province(p_idd,d_idd,t_idd)
 		        VALUES ('$provincecode','$districtcode','$towncode')");
				
				
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>response successfully sent</p></br>";

     
	
} else {
	echo "response not successful<br />";
	echo mysqli_error ($connect);
}

