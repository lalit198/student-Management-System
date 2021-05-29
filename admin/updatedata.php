<?php
       
         
        include '../dbcon.php';
    
        $roll_no = $_POST['rollno'];
        $name = $_POST['uname'];
        $city_na = $_POST['city'];
        $phone = $_POST['mobile'];
        $class = $_POST['standard'];
        $id = $_POST['sid'];
        $img = $_FILES['image']['name'];
        $temp_img = $_FILES['image']['tmp_name'];
            
            move_uploaded_file($temp_img,"../dataimg/$img");
            
        
        
    $update = "UPDATE student SET rollno = '$roll_no', name = '$name', city = '$city_na', pcontact = '$phone', standard = '$class', image = '$img' WHERE id = $id";     
    $query = mysqli_query($con,$update); 
        
        if($query==true){
?>

<script>
    alert('Successfully updated');
    window.open('updatestudform.php?sid=<?php echo $id; ?>', '_self');

</script>
<?php
}else{
   ?>
<script>
    alert('Not inserted');

</script>
<?php
    }
    
    ?>
