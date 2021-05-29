<?php
session_start();

if(isset($_SESSION['uid'])){
    header('location:admin/admindash.php');
}
?>



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

    <div class="parents mx-auto">
        <div class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand text-white font-weight-bolder" href="#">DAV School</a>
                </div>
            </div>
        </div>


        <div class="head text-center">
            <h2>Admin Login</h2>
        </div>
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row d-flex justify-content-center align-items-center main_div mt-4">
                <div class="col-12 col-md-8 col-xxl-5">
                    <div class="card py-3 px-2">
                        <h5>Admin Info</h5>
                        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                            <div class="form-group mt-3">
                                <label for="text">Email address:</label>
                                <input type="text" class="form-control" placeholder="Username" id="text" name="username" required autocomplete="off">
                            </div>
                            <div class="form-group pt-2">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password" required autocomplete="off">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>


<?php
 include 'dbcon.php';
    
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $selectquery = "select * from admin where adminname='$username' AND password='$password'";
        $query = mysqli_query($con,$selectquery);   
        $count = mysqli_num_rows($query);
        
        if($count <1){
            ?>
<script>
    alert('username or password does not match');
    window.open('login.php', '_self');

</script>
<?php
        }
        else
        {
            $data = mysqli_fetch_assoc($query);
            $id = $data['id'];
            $username =$data['adminname'];
    
            $_SESSION['uid']=$id;
            $_SESSION['uname']=$username;
        
        
        }
    }
       ?>
