
<body>
<form   action="" method="post">
PHONE NO:<input type="text" name="phn" placeholder="phone number">
          <input type="submit" name="submit">

</form>
<?php
session_start();
include "db.php";
if($conn->connect_error){
    echo "not connected " . $conn->connect_error;
}
if(isset($_POST["submit"])){
    $phone=$_POST["phn"];
 if($phone=="")
    {
        echo "fields are empty";
    }
    else {

        $login = "select * from register where phone ='$phone'";

        $rslt = $conn->query($login);

        if ($rslt->num_rows == 1) {
            $uid = $rslt->fetch_assoc();
            $_SESSION['phone'] = $uid['phone'];
            header ("Location: vehicle.php");
        }else {
            header ("Location: usrsign.php");
        }

    }


}

?>



