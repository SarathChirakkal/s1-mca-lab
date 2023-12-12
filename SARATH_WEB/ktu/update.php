<?php
$conn=mysqli_connect('localhost','root','','login');
/*if($conn)
{
    echo "connection successful";
}
else
{
    echo "connection failed";
}*/
$ktuid=$_POST['ktuid'];
// $name=$_POST['name'];
$subject=$_POST['subject'];
?>
<html>
<head><title>MARK UPDATION</title></head>
<body>
<form action='update_mark.php' method='post'>
<center>
<table border=1px padding=40px width=600px>
<tr rowspan=2>
<td colspan=2><center><h1>MARK UPDATION</h1></center></td></tr>

<tr>
<td width=250px>KTU-ID</td>
<td> <?php
 echo "<input type='text' name='ktuid' readonly value=".$ktuid.">";
 ?>
 </td>
</tr>

<?php
$query = "SELECT * FROM registration where ktuid='$ktuid'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) 
{
while ($row = mysqli_fetch_assoc($result)) 
{
echo" 
<tr>
<td width=250px> NAME</td>
<td>
<input type='text' name='name' readonly value=".$row['name'].">
</td>
</tr>

<tr>
<td width=250px>SEMESTER</td>
<td><input type='text' name='semester' readonly value=".$row['semester'].">
</td>
</tr>";
}
}
?>

<tr>
<td width=250px>SUBJECT</td>
<td> <?php
 echo "<input type='text' name='subject' readonly value=".$subject.">";
 ?>
 </td>
</tr>

<tr>
<td width=250px>SCORES</td>
<?php
$s="select * from marks where ktuid='$ktuid' AND subject='$subject'";
$q=mysqli_query($conn,$s);
if(mysqli_num_rows($q))
{
while($row = mysqli_fetch_assoc($q)) 
{
echo"<td>";
echo"FIRST SERIES:<input type='text' name='series1' value=".$row["series1"]."> <br>";
echo"SECOND SERIES:<input type='text' name='series2' value=".$row["series2"]."> <br>";
echo"ASSIGNMENT:<input type='text' name='assignment' value=".$row["assignment"]."> <br>";
echo"ATTENDANCE:<input type='text' name='attendence' value=".$row["attendence"]."> <br>";
echo"</td>";
}
}
?>
</tr>

<tr>
<td colspan=2><center><input type='submit' value='UPDATE'></center></td>
</tr>
</table>
</center>
</form>
</body>
</html>