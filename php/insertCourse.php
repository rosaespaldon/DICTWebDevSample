<?php

include 'dbconnection.php';

$course_name[] = $_POST['course_name'];
$training_fee[]  = $_POST['training_fee'];
$student_id[] = $_POST['student_id'];

$sql="call getCourseName('".$course_name."')";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);
$courseID = $row['course_id'];

$sql="call insertStudentClass( ".$student_id." , ".$courseID.", CURDATE())";

$result = mysqli_query($conn,$sql);

$success = false;
if($result){
    $success=true;
}

echo $success;
mysqli_close($conn);

?>