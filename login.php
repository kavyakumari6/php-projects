<?php
include("regdb.php");
extract($_POST);
if(isset($submit))
{
$rs=mysqli_query($conn,"select * from regdb.reg where user_id='$user_id'");
if(mysqli_num_rows($rs)<1)
{
echo 'invalid';
}
else
{
echo "<h1 align=center>Hye you are sucessfully login!!!</h1>";
exit;
}}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:lightblue">
<center>
<div class="floating-box">
<form name="form1" method="post">
<label for="uname">mechanic Name</label>
<input type="text" id="user_id" name="user_id"><br><br>
<label for="pwd">Password</label>
<input type="password" id="password" name="password"><br><br>
<input name="submit" type="submit" id="submit" value="Login"><br>
<p>New User <a href="reg.php">Register Here</a></p>
<a href="#home.php">home</a>
<a href="#logreg.php">back</a>
</center>
</form>
</div>
<center>
</body>
</html>