<?php

include 'dbconnection.php';

if(!$conn){
   die("Connection failed: ".mysqli_connect_error);
}

$sql = "Select * from student WHERE student_name LIKE '%".$_GET["keyword"]."%'";

$result=mysqli_query($conn, $sql);

$var_array = array();

while($row = mysqli_fetch_assoc($result)){
    $var_array[] = $row;
}

header('Content-type:application/json');
echo json_encode($var_array);

mysqli_close($conn);

?>