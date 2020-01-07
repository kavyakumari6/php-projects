<!DOCTYPE HTML>
<html>
<head>
<title>New user signup </title>
<script language="javascript">
function check()
{

if(document.form1.user_id.value=="")
{
alert("Plese Enter Your user_id");
document.form1.user_id.focus();
return false;
} 
if(document.form1.email.value=="")
{
alert("Plese Enter email");
document.form1.email.focus();
return false;
}

if(document.form1.contact_no.value=="")
{
alert("Plese Enter Your contact_no");
document.form1.contact_no.focus();
return false;
}

if(document.form1.adress.value=="")
{
alert("Plese Enter adress");
document.form1.address.focus();
return false;
}


e=document.form1.email.value;
f1=e.indexOf('@');
f2=e.indexOf('@',f1+1);
e1=e.indexOf('.');
e2=e.indexOf('.',e1+1);
n=e.length;
if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
{
alert("Please Enter valid Email");
document.form1.email.focus();
return false;
}
return true;
}
</script>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<center>
<h1>Customer details</h1>
<div class="floating-box">
<form name="form1" method="post" action="vec_detail.php">

<label for=""pwd">name</label>
<input type="name" id="name" name="name"><br><br>
<h2>vechicle details</h2>
<label for=""pwd"> vechicle_no</label>
<input type="vehicle_no" id="vehicle_no" name="vehicle_no"><br><br>

<label for=""pwd"> vechicle_name</label>
<input type="vehicle_name" id="vehicle_name" name="vehicle_name"><br><br>

<label for=""pwd"> vechicle_chasis_no</label>
<input type="vehicle_chasis_no" id="vehicle_chasis_no" name="vehicle_chasis_no"><br><br>
<label for=""pwd"> license_no</label>
<input type="license_no" id="license_no" name="license_no"><br><br>



<h2>Contact details</h2>
<label for=""pwd"> email  </label>
<input type="email" id="email" name="email"><br><br>

<label for=""pwd"> contact_no </label>
<input type="contact_no" id="contact_no" name="contact_no"><br><br>

<label for=""pwd"> address  </label>
<input type="address" id="address" name="address"><br><br>


<input type="submit" name="submit" value="add">
<p>Already Register <a href="#index.php"Login here></a></p>
<a href="#home.php">home</a>
<a href="#logreg.php">back</a>
</form>
</div>
</center>
</body>
</html>