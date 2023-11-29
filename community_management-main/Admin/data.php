<?php
include("db_connect.php");
$sql = "SELECT * FROM student_info where status is NULL";
$result = $conn->query($sql);

echo $result->num_rows;
/*
if($result->num_rows >0){
    while($row = $result->fetch_assoc()){
        echo "id:".$row["id"]."Student_No:".$row["student_No"];

    }
}
else{
    echo"0 results";
}
*/
$conn->close();

?>