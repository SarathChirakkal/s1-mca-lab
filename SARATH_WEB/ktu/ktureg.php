<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KTU</title>
</head>

<body>
    <center>
        <h2><b>Student Registration</b></h2>
        <form action="ktureg.php" method="POST">
            <table border="1">
                <tr>
                    <th>KTU ID</th>
                    <td><input type="text" name="ktuid" required></td>
                </tr>
                <tr>
                    <th>RollNO</th>
                    <td><input type="number" name="rollno" required></td>
                </tr>
                <tr>
                    <th>Semester</th>
                    <td>
                        <select name="semester">
                            <option>SELECT</option>
                            <?php
                            for ($i = 1; $i < 7; $i++) {
                                echo "<option>" . $i . "</option>";
                            }
                            ?>
                    </td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td><input type="radio" name="gender" value="male">Male</input>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="gender" value="female">Female</input>
                        </td>
                </tr>
                <tr>
                    <th>PhoneNo</th>
                    <td><input type="text" name="phno" required></td>
                </tr>
                <tr>
                        <td colspan="2" style="text-align: center;"><input type="submit" value="Submit">


            </table>
        </form>
    </center>
</body>
</html>

<?php
$conn=mysqli_connect('localhost','root','','login');
// if($conn)
// {
// 	echo"Connected";
// }
// else echo"Not connected";
if($_POST){
$ktuid=$_POST['ktuid'];
$rollno=$_POST['rollno'];
$semester=$_POST['semester'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$phone=$_POST['phno'];
if($conn){
$s="insert into registration values('$ktuid','$rollno','$semester','$name','$gender','$phone')";
$q=mysqli_query($conn,$s);
if($q) echo"<script>alert('Insert successfully')</script>";
else echo"<script>alert('Unsuccessfull')</script>";
}

}

