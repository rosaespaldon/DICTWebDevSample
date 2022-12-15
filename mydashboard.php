<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>    
    <link href="css/style.css" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    
  <?php
  include 'common/navbar.php'
  ?>
<br><br>

<div class="container">
    <div class="p-3 mb-2 bg-primary text-white">
        <h2>Dashboard</h2>
    </div>
</div>

<div class="container">
    <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fa fa-user-o"></i>
        <span class="count-numbers" id="total_students">0</span>
        <span class="count-name">Number of Students</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
      <i class="fa fa-id-card"></i>
        <span class="count-numbers" id="total_courses">0</span>
        <span class="count-name">Number of Courses</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-plus" ></i>
        <span class="count-numbers" id="total_fee">0</span>
        <span class="count-name">Total Fee</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-calculator"></i>
        <span class="count-numbers" id="average">0</span>
        <span class="count-name">Average</span>
      </div>
    </div>
  </div>
</div>

<div class='container'>
    <canvas id="NumberParticipantBySex" style="width:100%;max-width:700px">

    </canvas>
</div>
<div class="container pd-5"><h1>Summary<h1></div>
<div class='container'>
      <div class="table-wrapper">
            <div class="table-title">
                <table class="table table-striped table-hover" id="student_summary">
                    <thead>
                        <th>Student Number</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Sex</th>
                        <th>Course</th>
                        <th>Training Fee</th>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div> 
        </div>
</div>


<!-- JavaScript -->
<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>

<script  src="js/dashboard.js">  </script>
</body>
</html>