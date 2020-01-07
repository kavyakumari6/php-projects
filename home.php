
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:dodgerblue;
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:dodgerblue;
  color:black ;
}

.topnav a.active {
  background-color:grey;
  color: white;
}
.mySlides {display:none;}
</style>
</head>
<body style="background-color:yellow">
  <div="container">
<div class="row">
<div class="col-sm-12">
  <font color="red" style=oblique;>
  <marquee><h2><bold>ROADSIDE VEHICLE ASSISTANTACE SYSTEM</bold></h2></marquee></font></div></div></div="container">
<div="container">
<div class="row">
<div class="col-sm-12">
  <div class="topnav">
    
<a class="active" href="#home">Home</a>
  <a href="login.php">CUSTOMER LOGIN</a>
  <a href="login.php">MECHANIC LOGIN</a>
  
  
</div></div></div>
<div class="row">
 <div class="w3-content w3-section"style="max-width:100%">
  <img class="mySlides" src="5.jpg" width="100%" height="80%">
  <img class="mySlides" src="3.png" width="100%" height="80%">
  <img class="mySlides" src="4.jpg" width="100%" height="80%">
   <img class="mySlides" src="2.jpg" width="100%" height="80%">
    <img class="mySlides" src="6.jpg" width="100%" height="80%">
    <img class="mySlides" src="7
    .jpg" width="100%" height="80%">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}


</script>
</div>
</body>
</html>
