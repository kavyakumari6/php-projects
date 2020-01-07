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
include("vehicledb.php");


//$rs=mysqli_query($conn,"select * from vehicle.vehicle");
//if (mysqli_num_rows($rs)>0)
//{
//echo 'Already Exists';
//}
//else
//{

$query="insert into customer.vehicle(name,vehicle_no,vehicle_name,vehicle_chasis_no,license_no,email,contact_no,address) values('$name','$vehicle_no','$vehicle_name','$vehicle_chasis_no','$license_no','$email',$contact_no
,'$address')";
$rs=mysqli_query($conn,$query)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>submitted successful</div>";
echo "Thank you";echo "<br>";


echo "<br><div class=head1><a href=#search>Search the mechanic</a></div>";
echo "<br>";
//}

?></center>
</body>
</html>
