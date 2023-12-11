<html>
<head></head>
<body>
<form action="login.php" method="post">
<center>
<table>
<tr>
<th colspan="2">Login</th>
</tr>
<tr>
<td>UserName:</td>
<td><input type="text" name="name" required></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="textbox" name="pwd" required></td>
</tr>
<tr>
<td colspan="2"  align="center"><input type="submit" value="Login" name="submit">&nbsp;&nbsp;<input type="reset" value="reset"></td>
</tr>
<tr>
<td colspan="2"  align="center">Not a user?&nbsp;<a href="newlogin.php">Click Here</a></td>
</tr>
</table>
</center>
</form>
</body>
</html>
<?php
$conn=mysqli_connect('localhost','root','','login');
if(isSet($_POST["submit"]))
{

$uname=$_POST['name'];
$p=$_POST['pwd'];
$s="select * from data where name='$uname'";
$q=mysqli_query($conn,$s);
if(mysqli_num_rows($q))
{
while($row=mysqli_fetch_array($q))
{
	if($row['password']!=$p)
		echo "<script>alert('Password Invalid')</script>";
	else{
		echo"<center>
<table border='2'>
<tr>
<th>Name</th>
<th>Age</th>
<th>Mail</th>
</tr>
<tr>
<td>".$row['name']."</td><td>".$row['age']."</td><td>".$row['email']."</td></tr></table>

</center>";
		}		
}
}}

?>