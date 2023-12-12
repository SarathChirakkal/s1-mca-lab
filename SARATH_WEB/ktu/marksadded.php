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
 
    if (isset($_POST['submit'])) {
        // $q = "select * from registration where ktuid='$ktuid'";
        // $qc = mysqli_query($conn, $q);

        // if (mysqli_num_rows($qc)) {
            $rq = "insert into marks values('$ktuid','$semester','$subject','$series1','$series2','$assignment','$attendance')";
            $rs = mysqli_query($conn, $rq);
            echo "Marks inserted sucessfully";
        // } else {
        //     echo " student haven't registered";
        // }
    }
}








// if($conn)
// {
//     echo "connection successful";
// }
// else
// {
//     echo "connection failed";
// }

