<?php

include 'dbconnection.php';

$sql="SELECT * FROM student";

$result = mysqli_query($conn,$sql);

$var_array = array();

while($row = mysqli_fetch_assoc($result)){
    $var_array[] = $row;
}

header('Content-type:application/json');
echo json_encode($var_array);

mysqli_close($conn);
?>