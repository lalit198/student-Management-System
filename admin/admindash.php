<?php
          session_start();
            
    if(!isset($_SESSION['uid'])){
       /* echo $_SESSION['uid']; */ 
        
        echo "you are loggedout";
    header('location:../login.php');
}

?>

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
                    <h5 class="text-uppercase font-weight-bold text-white mt-4"><i class="fa fa-tachometer fa-2x" aria-hidden="true"></i> dashboard</h5>
                    <p><a href="addstudent.php"><i class="fa fa-plus" aria-hidden="true"></i> add</a></p>
                    <p><a href="updatestudent.php"><i class="fa fa-pencil" aria-hidden="true"></i> update</a></p>
                    <p><a href="deletestudent.php"><i class="fa fa-trash" aria-hidden="true"></i> delete</a></p>
                    <p><a href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> logout</a></p>
                </div>
                <div class="col-8 col-md-10 col-xxl-11 bg-warning">
                    <div class="container mx-auto my-5">

                        <h1><i class="fa fa-user" aria-hidden="true"></i> <i>welcome <span class="text-danger text-capitalize"><u><?php echo $_SESSION['uname'] ?></u></span></i></h1>
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
