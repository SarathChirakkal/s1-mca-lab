<?php
$conn=mysqli_connect('localhost','root','','student');
if($conn)
{
    echo "connection successful";
}
else{
    echo "connection failed";
}
?>