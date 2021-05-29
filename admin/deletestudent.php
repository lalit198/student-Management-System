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

                <div class="col-8 col-md-10 col-xxl-11 bg-warning">
                    <div class="form_main d-flex justify-content-center">
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                            <div class="form-group mt-4">
                                <input type="text" class="form-control" placeholder="Enter Student Name" id="name" name="uname" required>
                            </div>

                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Enter Class" id="class" name="standard" required>
                            </div>

                            <button type="submit" class="btn btn-primary" name="submit">Search</button>
                        </form>
                    </div>
                    <div class="table_main mt-3">
                        <table class="table table-dark table-striped table_child">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Rollno</th>
                                    <th>Name</th>
                                    <th>city</th>
                                    <th>Mobile no</th>
                                    <th>Class</th>
                                    <th>Image</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <?php
    
        include '../dbcon.php';
        if(isset($_POST['submit'])){
        $name = $_POST['uname'];
        $standard = $_POST['standard'];
    
    $selectquery = "select * from student where name like '%$name%' AND standard='$standard'";       
    $query = mysqli_query($con,$selectquery);
    $nums = mysqli_num_rows($query);
    if($nums<1){
         echo "<tr><td colspan='8'>No records found</tr></td>";
    }
            
            else{
                $count=0;
                while($data=mysqli_fetch_assoc($query)){
                 $count++;
                    ?>

                            <tr>
                                <td><?php echo $count; ?></td>
                                <td><?php echo $data['rollno']; ?></td>
                                <td><?php echo $data['name']; ?></td>
                                <td><?php echo $data['city']; ?></td>
                                <td><?php echo $data['pcontact']; ?></td>
                                <td><?php echo $data['standard']; ?></td>
                                <td><img src="../dataimg/<?php echo $data['image']; ?>" class="img-fluid"></td>
                                <td><a href="deletedata.php?sid=<?php echo $data['id']; ?>">Delete</a></td>
                            </tr>

                            <?php

                            }
                            }



                            }
                            ?>

                        </table>
                    </div>
                </div>

            </div>
        </div>





        <footer class="bg-secondary text-center text-white copy_right">
            <p class="text-uppercase font-weight-bold text-white">2020 @ copyrights G.I.C</p>
        </footer>


    </div>

</body>



</html>
