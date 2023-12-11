<html>
<head></head>
<body>
<form action="newlogin.php" method="post">
<center>
<table border="2" height="50%" width="50%">
<tr>
<th colspan="2"><h2>Registration</h2></th>
</tr>
<tr>
<td>Name:</td>
<td><input type="text" name="name" required></td>
</tr>
<tr>
<td>Age:</td>
<td>
<select name="age">
<option>SELECT</option>
<?php
for($i=18;$i<36;$i++)
{
	echo"<option>".$i."</option>";
}
?>	
</td>
</tr>
<tr>
<td>mail:</td>
<td><input type="text" name="mail" required></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pwd" required></td>
</tr>
<tr>
<td>Re-Password:</td>
<td><input type="password" name="rpwd" required></td>
</tr>
<tr>
<td colspan="2"  align="center"><input type="submit" value="Submit"></td>
</tr>
</center>
</form>
</body>
</html>

<?php
$conn=mysqli_connect('localhost','root','','login');
/*if($conn)
{
	echo"Connected";
}
else echo"Not connected";*/
$name=$_POST['name'];
$age=$_POST['age'];
$mail=$_POST['mail'];
$pass=$_POST['pwd'];
$repass=$_POST['rpwd'];
if($pass!=$repass)
{
	echo"<script>alert('password mismatch')</script>";
}
else
{
$s="insert into data values('$name','$age','$mail','$pass')";
$q=mysqli_query($conn,$s);
if($q) echo"<script>alert('Insert successfully')</script>";
else echo"<script>alert('Unsuccessfull')</script>";
}


?>
