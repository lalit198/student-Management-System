<?php
       
         
        include '../dbcon.php';
      $id = $_REQUEST['sid'];
      $delete = "DELETE FROM `student` WHERE `id`='$id'";  
    $query = mysqli_query($con,$delete); 
        
        if($query==true){
?>

<script>
    alert('Data deleted successfully');
    window.open('deletestudent.php', '_self');

</script>
<?php
}else{
   ?>
<script>
    alert('Not deleted');

</script>
<?php
    }
    
    ?>
