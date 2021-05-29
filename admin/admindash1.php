<?php
          session_start();
            
    if(!isset($_SESSION['uid'])){
       /* echo $_SESSION['uid']; */
        
        echo "you are loggedout";
    header('location: ../login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include '../css/style.css' ?>
    <?php include '../assets/links.php' ?>
</head>

<body>
    <div class="parent_head mx-auto">
        <div class="navbar bg-light nav_main">
            <div class="container-fluid">
                <div>
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">G.I.C</a>
                    </div>
                </div>
                <ul class="nav nav_right ml-auto">
                    <li><a href="login.php">Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row dash_main">
                <div class="col-4 col-md-2 col-xxl-1 bg-info text-capitalize">
                    <p><a href="">add</a></p>
                    <p><a href="">update</a></p>
                    <p><a href="">delete</a></p>
                </div>
                <div class="col-8 col-md-10 col-xxl-11">

                </div>
            </div>
        </div>
        <footer class="bg-secondary text-center text-white copy_right">
            <p>2020 @ copyrights G.I.C</p>

        </footer>

    </div>


</body>

</html>
