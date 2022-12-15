<?php

include 'dbconnection.php';

if(!$conn){
    die("Connection failed: ".mysqli_connect_error);
}

$sql= "INSERT INTO student (student_name, student_address, student_sex)" . 
        "VALUES ( ' " . $_POST["student_name"]. " ' , " .
        " ' " . $_POST["student_address"]. " ' , ".
        " ' " . $_POST["student_sex"]. " '  )";

       
 mysqli_query($conn,$sql);
 echo mysqli_insert_id($conn);  

?>