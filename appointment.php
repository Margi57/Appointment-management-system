<?php 

include('db_connect.php');
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
$d_id=$_POST['d_id'];
$user_id=$_SESSION['id'];
$date=$_POST['date'];
$time=$_POST['time'];

$sql = "select * from appointment_tb where date='$date' and doctor_id=$d_id and time='$time'";
$r = mysqli_query($conn,$sql);
$a = mysqli_fetch_assoc($r);

if($a != null)
{
    echo'<script>alert("Appointment Time Already Booked")</script>';
}
else{
    $sql='insert into appointment_tb(doctor_id,user_id,date,time) values('.$d_id.','.$user_id.',"'.$date.'","'.$time.'")';
    $r=mysqli_query($conn,$sql);
    header("location:index.php");
    exit;
}

}

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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

        th,
        td {
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
        <form action="" method="post">
            <div class="form-group">
               
                <label for="">Doctor Name</label>
                <select name="d_id" class="form-control">
                    <?php 

                    $sql = "select * from doctor_tb";
                    $r = mysqli_query($conn,$sql);

                    while($row = mysqli_fetch_assoc($r))
                    {
                        echo '
                           <option value="'.$row['d_id'].'"> '.$row['d_name'].' </option>
                        ';
                    }
                     
                    ?>
                </select>

                <label for="">Date</label>
                <input type="date" class="form-control" name="date" id="date" aria-describedby="helpId">

                <label for="">Time</label>
                <input type="time" class="form-control" name="time" id="" aria-describedby="helpId">

                <input type="submit" class="btn btn-primary" value="update">
            </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();

        if(month < 10)
        {
            month = '0' + month.toString();
        }
        if(day < 10)
        {
            day = '0'+day.toString();
        }

        var maxDate = year + '-' + month + '-' + day;

        $('#date').attr('min',maxDate);
    })
    </script>
    </div>
</body>

</html>