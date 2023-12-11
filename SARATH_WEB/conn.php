<?php
include 'connection.php';
if($_POST)
{
    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    $mark=$_POST['mark'];  
    $sq="insert into stud values('$rollno','$name','$mark')";
    $p=mysqli_query($conn,$sq);
    if($p){
        echo "<script>
        alert('value is inserted');
        </script>";
        echo "Successfully Inserted";
    }
    else{
        echo "Failed to insert";
    }
}
?>