<?php
$conn = mysqli_connect('localhost', 'root', '', 'login');
// if($conn)
// {
//     echo "connection successful";
// }
// else
// {
//     echo "connection failed";
// }


if ($_POST) {
    $ktuid = $_POST['ktuid'];
    $semester = $_POST['semester'];
    $subject = $_POST['subject'];
    $series1 = $_POST['series1'];
    $series2 = $_POST['series2'];
    $assignment = $_POST['assignment'];
    $attendance = $_POST['attendance'];

    $r="update marks set series1='$series1',series2=' $series2',assignment='$assignment',attendence='$attendance' where ktuid='$ktuid' AND subject='$subject'";
    $rp=mysqli_query($conn,$r);
    if($rp)
    {
        echo "Marks update sucessfully";
    }



}



?>