<?php

include 'dbconnection.php';

if(!$conn){
   die("Connection failed: ".mysqli_connect_error);
}

$sql = "DELETE FROM student where student_id=" . $_POST["student_id"];

$success=false;
if(mysqli_query($conn, $sql)){
    $success=true;
}

echo $success;
mysqli_close($conn);

?>