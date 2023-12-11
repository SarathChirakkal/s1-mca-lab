<?php
include 'connection.php';
if($_POST){
    if(isset($_POST['rollno']))
    {
        $rollno = $_POST['rollno'];
        $s = "SELECT * FROM stud WHERE rollno = '$rollno'";
        $q = mysqli_query($conn, $s);
        echo "<br>";
        while($row = mysqli_fetch_assoc($q))
        {
            echo"Roll no :".$row["rollno"]."<br>";
            echo"Name :".$row["name"]."<br>";
            echo"Mark :".$row["mark"]."<br>";
        }
    }
}
?> 