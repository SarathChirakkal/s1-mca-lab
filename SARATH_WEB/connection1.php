<?php
$conn=mysqli_connect('localhost','root','','student');
if($conn)
{
    echo "connection successful";
}
else{
    echo "connection failed";
}
$sq="insert into stud values(10,'amith',64)";
$p=mysqli_query($conn,$sq);
if($p){
    echo "<script>
    alert('value is inserted');
    </script>";
    echo "Successfully Inserted";
}
?>