<!DOCTYPE HTML>
<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body><center>
<?php
extract($_POST);
include("regdb.php");
$rs=mysqli_query($conn,"select * from regdb.reg where user_id='$user_id'");
if (mysqli_num_rows($rs)>0)
{
echo 'Already Exists';
}
else
{

$query="insert into regdb.reg(user_id,password,email,contact_no,address) values('$user_id','$password','$email','$contact_no','$address')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Registered successful</div>";
echo "Thank you";echo "<br>";

echo "<br><div class=head1><a href=#home>Home</a></div>";
echo "<br>";
}
?></center>
</body>
</html>
