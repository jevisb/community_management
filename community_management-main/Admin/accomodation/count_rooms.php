<?php
include("db_conn.php");
$sql = "SELECT * FROM applications WHERE student_id NOT IN (SELECT student_id FROM room_assigneds)";
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