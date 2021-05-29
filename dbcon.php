<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "sms";

$con = mysqli_connect($server,$user,$password,$database);
if($con==false){
?>
<script>
    alert('connection error')

</script>
<?php
}
?>
