<?php
include 'connection.php';
$s= "select * from stud";
$q=mysqli_query($conn,$s);
echo "<br>";
if(mysqli_num_rows($q))
{
    echo "<table border='2'>
    <tr>
        <th>Roll NO</th>
        <th>Name</th>
        <th>Mark</th>
    </tr>";
   
    while($row=mysqli_fetch_assoc($q))
    {
        echo "<tr>";
        echo "<td>".$row['rollno']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['mark']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>