<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="css/style.css" rel="stylesheet">
    <title>Bootstrap</title>
</head>
<body>
    
  <?php
  include 'common/navbar.php'
  ?>
<br><br>
<!-- Table -->

<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h1><b>Student</b> Information</h1>
                    </div>
                    <div class="col-sm-3">
              
                      <input type="text" class="form-control" id="txtSearch" onkeyup="searchData();" placeholder="Search Name">
                    </div>
                    <div class="col-sm-3">
                        <button type="button" class="btn btn-primary" onClick="showModal(true)">
                            Add New Record
                        </button>
                    </div>
                </div>

                <table class="table table-striped table-hover" id="student_data">
                    <thead>
                        <th>Student Number</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Sex</th>
                        <th>Add Course</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
                
            </div> 

          </div>
          
    </div>
    <div class="clearfix">
      <div class="hint-text">
        <a href="mydashboard.php" class="btn btn-success">View Dashboard</a>
      </div>
      <div>
      <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
      </nav> 
      </div>
      
    </div>
    
</div>


<!-- Modal for Add New Record -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Record</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>

            <div class="mb-3">
                <label for="student-name" class="col-form-label">Name</label>
                <input type="text" class="form-control" id="student-name">
                <input type="text" id="student-no">
                <input type="hidden" id="isAdd">
              </div>
              <div class="mb-3">
                <label for="student-address" class="col-form-label">Address</label>
                <input type="text" class="form-control" id="student-address">
              </div>
              <div class="mb-3">
                <label for="student-sex" class="col-form-label">Sex</label>
                <select class="form-control" id="student-sex">
                    <option value="Male" selected>MALE</option>
                    <option value="Female">FEMALE</option>
                </select>
              </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id="save" class="btn btn-primary" onclick="InsertUpdateRow();">Save Record</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal for Add Class -->
<div class="modal fade" id="addClassModal" tabindex="-1" aria-labelledby="exampleModalClass" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalClass">Add New Record</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>

            <div class="mb-3">
                <input type="text" id="student_id">
            </div>
            <div class="mb-3">
                <label for="course_name" class="col-form-label">Course</label>
                <select class="form-control" id="course_name">
                    <option value="HTML" selected>HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="JS">JS</option>
                    <option value="PHP">PHP</option>
                    <option value="SQL">SQL</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="training_fee" class="col-form-label">Training Fee</label>
                <input type="text" class="form-control" id="training_fee">
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" id="save" class="btn btn-primary" onclick="insertClass();">Save Record</button>
        </div>
      </div>
    </div>
  </div>
  


    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script src="js/crud.js">  </script>
</body>
</html>