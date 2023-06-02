<?php
include('db_connect.php');
if($_SERVER['REQUEST_METHOD']=='POST'){
$name=$_POST['d_name'];
$department=$_POST['d_department'];
$experiance=$_POST['d_experiance'];
$sql='insert into doctor_tb(d_name,department,experiance) values("'.$name.'","'.$department.'",'.$experiance.')';
$r=mysqli_query($conn,$sql);

header("location:manage_doctor.php");
exit();
}

if(isset($_GET['d_id'])){
    $d_id=$_GET['d_id'];
    $sql='delete from doctor_tb where d_id='.$d_id.'';
    $r=mysqli_query($conn,$sql);
    header("location:manage_doctor.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Hospital Appointment Management</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #f2f2f2;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    tr:hover {
      background-color: #f5f5f5;
    }

    .add-button {
      display: inline-block;
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
  <a href="#" class="btn btn-outline-primary" name="" data-toggle="modal" data-target="#modelId">Add Appointment</a>
  
    <!-- Button trigger modal -->
   
  <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role= "document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">insert doctor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="" method="post">
                    <div class="form-group">
                      <label for="">Doctor Name</label>
                      <input type="text"
                        class="form-control" name="d_name" id="" aria-describedby="helpId" placeholder="">
                      
                      <label for="">Department</label>
                      <input type="text"
                        class="form-control" name="d_department" id="" aria-describedby="helpId" placeholder="">
                     
                      <label for="">Experiance</label>
                      <input type="text"
                        class="form-control" name="d_experiance" id="" aria-describedby="helpId" placeholder="">
                      
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
  </div>
  
  <script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM
        
    });
  </script>
    <h1>Doctor Management</h1>
    <table>
      <thead>
        <tr>
          <th>Doctor Id</th>
          <th>Doctor Name</th>
          <th>Department</th>
          <th>Expiriance</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql='select * from doctor_tb';
        $r=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($r)){
            echo'
            <tr>
            <td>
            '.$row["d_id"].'
            </td>
            <td>
            '.$row["d_name"].'
            </td>
            <td>
            '.$row["department"].'
            </td>
            <td>
            '.$row["experiance"].'
            </td>
            <td><a href="manage_doctor.php?d_id='.$row["d_id"].'" class="btn btn-danger"> Delete </a>
            <td><a href="updateDoctor.php?d_id='.$row["d_id"].'" class="btn btn-primary"> Update </a>
            </tr>
            ';
        }
        ?>
      </tbody>
    </table>
    
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html> 
