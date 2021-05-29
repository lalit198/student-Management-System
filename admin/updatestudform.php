<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include '../css/style.css' ?>
    <?php include '../assets/links.php' ?>
</head>

<body>
    <div class="parent_head mx-auto">
        <?php include 'header.php' ?>
        <div class="container-fluid">
            <div class="row dash_main">
                <div class="col-4 col-md-2 col-xxl-1 bg-info text-capitalize">
                    <p><a href="admindash.php" class="text-uppercase font-weight-bold text-white mt-4" mx-auto><i class="fa fa-tachometer fa-2x" aria-hidden="true"></i> dashboard</a></p>
                    <p><a href="addstudent.php"><i class="fa fa-plus" aria-hidden="true"></i> addition</a></p>
                    <p><a href="updatestudent.php"><i class="fa fa-pencil" aria-hidden="true"></i> update</a></p>
                    <p><a href="deletestudent.php"><i class="fa fa-trash" aria-hidden="true"></i> delete</a></p>
                    <p><a href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> logout</a></p>
                </div>

                <div class="col-8 col-md-10 col-xxl-11 bg-warning d-flex justify-content-center align-items-center">
                    <form action="updatedata.php" method="POST" enctype="multipart/form-data">
                        <?php
    
        include '../dbcon.php';
        $sid = $_GET['sid'];
$select = "SELECT * FROM student WHERE id='$sid'";
$query = mysqli_query($con,$select);
$data = mysqli_fetch_assoc($query);

       
    ?>
                        <div class="form-group">
                            <input type="text" class="form-control" value="<?php echo $data['rollno']; ?>" id="roll_no" name="rollno">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" value="<?php echo $data['name']; ?>" id="name" name="uname">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="<?php echo $data['city']; ?>" id="city" name="city">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="<?php echo $data['pcontact']; ?>" id="mobile" name="mobile">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="<?php echo $data['standard']; ?>" id="class" name="standard">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control-file border" id="file" name="image">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" value="<?php echo $data['id']; ?>" name="sid">
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <footer class="bg-secondary text-center text-white copy_right">
            <p class="text-uppercase font-weight-bold text-white">2020 @ copyrights G.I.C</p>
        </footer>
    </div>



</body>


</html>
