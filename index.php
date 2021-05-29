<!DOCTYPE html>
<html lang="en">

<head>
    <title>home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'css/style.css' ?>
    <?php include 'assets/links.php' ?>

</head>

<body>

    <div class="parent mx-auto">
        <div class="navbar">
            <div class="container-fluid child">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">G.I.C</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Admin Login</a></li>
                </ul>
            </div>
        </div>


        <div class="head text-center">
            <h3>Welcome To</h3>
            <h3></h3>
            <h3>Student Management System</h3>
            <h3></h3>

        </div>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row d-flex justify-content-center align-items-center main_div mt-4">
                <div class="col-12 col-md-8 col-xxl-5">
                    <div class="card py-3 px-2">
                        <marquee direction="right" scrollamount="10" class="running">Government Inter College, Almora
                        </marquee>
                        <h5>Student Information:-</h5>
                        <form action="index.php" method="POST">

                            <div class="form-group pt-2">
                                <label for="roll_no">Roll no:</label>
                                <input type="text" class="form-control" placeholder="Enter Roll No" id="roll_no" name="rollno">
                            </div>

                            <div class="form-group">
                                <label for="class" class="mt-3">Choose:</label>
                                <select class="form-control" name="std" id="class">
                                    <option>select standard</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="index_output">
        <?php
  include 'dbcon.php';
 
    
    if(isset($_POST['submit']))
    {
    $rollno = $_POST['rollno'];
    $class = $_POST['std']; 
        
        
    $selectquery = "SELECT * FROM student WHERE rollno='$rollno' AND standard='$class'";
    $query = mysqli_query($con,$selectquery);
    $count = mysqli_num_rows($query);
    if($count >0)
    {
        $data = mysqli_fetch_assoc($query);
        ?>

        <table class="table table_img">

            <tr>
                <th colspan="3" class="text-center text-white table_hd text-uppercase">Student Details</th>
            </tr>

            <tr>
                <td rowspan="5"><img src="dataimg/<?php echo $data['image'];  ?>" alt="error" class="img-fluid"></td>
                <th>Rollno</th>
                <td><?php echo $data['rollno'];  ?></td>
            </tr>

            <tr>
                <th>Name</th>
                <td class="text-capitalize"><?php echo $data['name'];  ?></td>
            </tr>
            <tr>
                <th>City</th>
                <td class="text-capitalize"><?php echo $data['city'];  ?></td>
            </tr>
            <tr>
                <th>Contact</th>
                <td><?php echo $data['pcontact'];  ?></td>
            </tr>
            <tr>
                <th>Standard</th>
                <td><?php echo $data['standard'];  ?></td>
            </tr>

        </table>

        <?php
    }
    else
    {
        echo "<script> alert('No details found.'); </script>";
    }
        }
    ?>

    </div>

</body>

</html>
