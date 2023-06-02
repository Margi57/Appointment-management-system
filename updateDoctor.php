<?php
include("db_connect.php");

if (isset($_GET['d_id'])) {
    $d_id = $_GET['d_id'];

    $sql = "select * from doctor_tb where d_id=$d_id";
    $r = mysqli_query($conn, $sql);

    $d = mysqli_fetch_assoc($r);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $d_id = $_POST['d_id'];
    $d_name = $_POST['d_name'];
    $department = $_POST['d_department'];
    $experiance = $_POST['d_experiance'];
    $sql = 'update doctor_tb set d_name="' . $d_name . '",department="' . $department . '",experiance=' . $experiance . ' where d_id=' . $d_id . '';
    $r = mysqli_query($conn, $sql);
    header("location:manage_doctor.php");
    exit;
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
                <input type="hidden" class="form-control" name="d_id" id="" aria-describedby="helpId" placeholder="" value="<?php echo $d["d_id"]; ?>">

                <label for="">Doctor Name</label>
                <input type="text" class="form-control" name="d_name" id="" aria-describedby="helpId" placeholder="" value="<?php echo $d["d_name"]; ?>">

                <label for="">Department</label>
                <input type="text" class="form-control" name="d_department" id="" aria-describedby="helpId"
                    placeholder="" value="<?php echo $d["department"]; ?>">

                <label for="">Experiance</label>
                <input type="text" class="form-control" name="d_experiance" id="" aria-describedby="helpId"
                    placeholder="" value="<?php echo $d["experiance"];?>">

                <input type="submit" class="btn btn-primary" value="update">
            </div>
    </form>
    </div>
</body>

</html>