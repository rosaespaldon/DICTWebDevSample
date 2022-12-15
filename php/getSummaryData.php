<?php

include 'dbconnection.php';

if(!$conn){
   die("Connection failed: ".mysqli_connect_error);
}

$sql = "call sp_getEnrolledStudent";

$result=mysqli_query($conn, $sql);

$var_array = array();

while($row = mysqli_fetch_assoc($result)){
    $var_array[] = $row;
}

header('Content-type:application/json');
echo json_encode($var_array);

mysqli_close($conn);

?>