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
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Rollno" id="roll_no" name="rollno">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Name" id="name" name="uname">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter City" id="city" name="city">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Mobile no" id="mobile" name="mobile">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter class" id="class" name="standard">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control-file border" id="file" name="image">
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

<?php
    
        include '../dbcon.php';
        if(isset($_POST['submit'])){
        $roll_no = $_POST['rollno'];
        $name = $_POST['uname'];
        $city_na = $_POST['city'];
        $phone = $_POST['mobile'];
        $class = $_POST['standard'];
        $img = $_FILES['image']['name'];
        $temp_img = $_FILES['image']['tmp_name'];
            
            move_uploaded_file($temp_img,"../dataimg/$img");
            
        
        
  /*  $insertquery = "insert into student(rollno, name, email, pcontact, standard, image) values
    ('$roll_no','$name','$city_na','$phone','$class','$file')"; */
    $insertquery = "insert into student(rollno,name,city,pcontact,standard,image) values ('$roll_no', '$name', '$city_na', '$phone', '$class','$img')";       
    $query = mysqli_query($con,$insertquery); 
        
        if($query==true){
?>

<script>
    alert('Successfully inserted');

</script>
<?php
}else{
   ?>
<script>
    alert('Not inserted');

</script>
<?php
    }
    }
    ?>
