<?php

include 'dbconnection.php';

if(!$conn){
   die("Connection failed: ".mysqli_connect_error);
}

$sql = "UPDATE student set student_name='" . $_POST["student_name"]  . "', student_address='" . $_POST["student_address"]. "', student_sex= '" . $_POST["student_sex"]. "' where student_id=" . $_POST["student_id"];

$success=false;
if(mysqli_query($conn, $sql)){
    $success=true;
}

echo $success;

mysqli_close($conn);

?>